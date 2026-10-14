<?php

namespace Purelines\WhapiSdk\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Purelines\WhapiSdk\Api\CallsApi;
use Purelines\WhapiSdk\ApiException;
use Purelines\WhapiSdk\Model\MakeCall401Response;
use Purelines\WhapiSdk\Model\MakeCallRequest;
use Purelines\WhapiSdk\ObjectSerializer;

final class CallsApiTest extends TestCase
{
    /** @return iterable<string, array{array{error: string|array<string, string|int>}, bool}> */
    public static function unauthorizedResponses(): iterable
    {
        foreach ([true, false] as $httpErrors) {
            yield "string, http_errors=$httpErrors" => [['error' => 'Channel is not authorized'], $httpErrors];
            yield "object, http_errors=$httpErrors" => [[
                'error' => ['code' => 401, 'message' => 'Channel is not authorized', 'details' => 'Connect the channel'],
            ], $httpErrors];
        }
    }

    /** @param array{error: string|array<string, string|int>} $payload */
    #[DataProvider('unauthorizedResponses')]
    public function testBothUnauthorizedResponseFormatsArePreserved(array $payload, bool $httpErrors): void
    {
        $body = json_encode($payload, JSON_THROW_ON_ERROR);
        $api = new CallsApi(new Client([
            'http_errors' => $httpErrors,
            'handler' => HandlerStack::create(new MockHandler([new Response(401, [], $body)])),
        ]));

        try {
            $response = $api->makeCall(new MakeCallRequest(['to' => '1234567@lid']));
            self::assertFalse($httpErrors, 'Default Guzzle error handling must throw.');
        } catch (ApiException $exception) {
            self::assertTrue($httpErrors);
            self::assertSame(401, $exception->getCode());
            self::assertSame($body, $exception->getResponseBody());
            $response = $exception->getResponseObject();
        }

        self::assertInstanceOf(MakeCall401Response::class, $response);
        self::assertSame($payload, json_decode(json_encode(ObjectSerializer::sanitizeForSerialization($response), JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR));
        if (is_string($payload['error'])) {
            self::assertSame($payload['error'], $response->getError());
        }
    }
}
