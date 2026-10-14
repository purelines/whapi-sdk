<?php

namespace Purelines\WhapiSdk\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Purelines\WhapiSdk\Api\ContactsApi;
use Purelines\WhapiSdk\ApiException;
use Purelines\WhapiSdk\Configuration;
use Purelines\WhapiSdk\Model\ContactIDResponse;
use Purelines\WhapiSdk\Model\Lid;
use Purelines\WhapiSdk\Model\ResponseError;

final class ContactsApiTest extends TestCase
{
    public function testReverseLookupPreservesIdAndBuildsAuthenticatedRequest(): void
    {
        $history = [];
        $stack = HandlerStack::create(new MockHandler([
            new Response(200, ['X-Request-ID' => 'lookup'], '{"id":"15551234567@s.whatsapp.net"}'),
        ]));
        $stack->push(Middleware::history($history));
        $api = new ContactsApi(new Client(['handler' => $stack]), (new Configuration())->setAccessToken('test-token'));

        [$result, $status, $headers] = $api->getIdByLidWithHttpInfo('154662208577626@lid');

        self::assertInstanceOf(ContactIDResponse::class, $result);
        self::assertSame('15551234567@s.whatsapp.net', $result->getId());
        self::assertSame(200, $status);
        self::assertSame(['lookup'], $headers['X-Request-ID']);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
        self::assertSame('/contacts/ids/154662208577626%40lid', $history[0]['request']->getUri()->getPath());
        self::assertSame('Bearer test-token', $history[0]['request']->getHeaderLine('Authorization'));
    }

    public function testSynchronousAndAsynchronousLookupVariants(): void
    {
        $api = new ContactsApi(new Client(['handler' => HandlerStack::create(new MockHandler([
            new Response(200, [], '{"id":"15551234567"}'),
            new Response(200, [], '{"id":"15551234567"}'),
            new Response(200, ['X-Request-ID' => 'async'], '{"id":"15551234567"}'),
        ]))]));

        self::assertSame('15551234567', $api->getIdByLid('1234567@lid')->getId());
        self::assertSame('15551234567', $api->getIdByLidAsync('1234567@lid')->wait()->getId());
        [$result, $status, $headers] = $api->getIdByLidAsyncWithHttpInfo('1234567@lid')->wait();
        self::assertInstanceOf(ContactIDResponse::class, $result);
        self::assertSame('15551234567', $result->getId());
        self::assertSame(200, $status);
        self::assertSame(['async'], $headers['X-Request-ID']);
    }

    /** @return iterable<string, array{int, bool}> */
    public static function lookupFailures(): iterable
    {
        foreach ([401, 402, 404, 500, 502] as $status) {
            yield "sync $status" => [$status, false];
            yield "async $status" => [$status, true];
        }
    }

    #[DataProvider('lookupFailures')]
    public function testLookupErrorsPreserveStatusAndBodyWithoutRetry(int $status, bool $async): void
    {
        $body = json_encode(['error' => ['code' => $status, 'message' => 'Lookup failed']], JSON_THROW_ON_ERROR);
        $history = [];
        $stack = HandlerStack::create(new MockHandler([new Response($status, ['X-Request-ID' => 'failure'], $body)]));
        $stack->push(Middleware::history($history));
        $api = new ContactsApi(new Client(['handler' => $stack]));

        try {
            if ($async) {
                $api->getIdByLidAsync('154662208577626@lid')->wait();
            } else {
                $api->getIdByLid('154662208577626@lid');
            }
            self::fail('Expected an API exception.');
        } catch (ApiException $exception) {
            self::assertSame($status, $exception->getCode());
            self::assertSame($body, $exception->getResponseBody());
            self::assertSame(['failure'], $exception->getResponseHeaders()['X-Request-ID']);
            if (!$async) {
                self::assertInstanceOf(ResponseError::class, $exception->getResponseObject());
                self::assertSame('Lookup failed', $exception->getResponseObject()->getError()->getMessage());
            }
        }

        self::assertCount(1, $history);
    }

    public function testLookupSupportsClientWithHttpErrorsDisabled(): void
    {
        $api = new ContactsApi(new Client([
            'http_errors' => false,
            'handler' => HandlerStack::create(new MockHandler([
                new Response(404, [], '{"error":{"code":404,"message":"LID mapping not found"}}'),
            ])),
        ]));

        [$result, $status] = $api->getIdByLidWithHttpInfo('1234567@lid');

        self::assertSame(404, $status);
        self::assertInstanceOf(ResponseError::class, $result);
        self::assertSame('LID mapping not found', $result->getError()->getMessage());
    }

    public function testExistingPhoneToLidLookups(): void
    {
        $history = [];
        $stack = HandlerStack::create(new MockHandler([
            new Response(200, [], '{"lid":"154662208577626@lid"}'),
            new Response(200, [], '{"15551234567":{"lid":"154662208577626@lid"}}'),
        ]));
        $stack->push(Middleware::history($history));
        $api = new ContactsApi(new Client(['handler' => $stack]));

        self::assertSame('154662208577626@lid', $api->getLidById('15551234567')->getLid());
        $result = $api->getLidByIds(['15551234567']);
        self::assertInstanceOf(Lid::class, $result['15551234567']);
        self::assertSame('154662208577626@lid', $result['15551234567']->getLid());
        self::assertSame('/contacts/lids/15551234567', $history[0]['request']->getUri()->getPath());
        self::assertStringContainsString('15551234567', $history[1]['request']->getUri()->getQuery());
    }

    /** @return iterable<string, array{string}> */
    public static function invalidLids(): iterable
    {
        foreach (['', '15551234567', '15551234567@s.whatsapp.net', '123456@lid', 'letters@lid', '1234567@lid/extra', '1234567890123456@lid'] as $lid) {
            yield $lid => [$lid];
        }
    }

    #[DataProvider('invalidLids')]
    public function testReverseLookupRejectsMalformedLidsBeforeSending(string $lid): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new ContactsApi())->getIdByLidRequest($lid);
    }
}
