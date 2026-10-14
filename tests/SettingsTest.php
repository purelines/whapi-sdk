<?php

namespace Purelines\WhapiSdk\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Purelines\WhapiSdk\Api\ChannelApi;
use Purelines\WhapiSdk\Api\GroupsApi;
use Purelines\WhapiSdk\Configuration;
use Purelines\WhapiSdk\Model\Settings;
use Purelines\WhapiSdk\ObjectSerializer;

final class SettingsTest extends TestCase
{
    /** @return iterable<string, array{string}> */
    public static function dataModes(): iterable
    {
        foreach (['original', 'replace', 'extend'] as $mode) {
            yield $mode => [$mode];
        }
    }

    #[DataProvider('dataModes')]
    public function testIdentityModeCanBeReadAndExplicitlySent(string $mode): void
    {
        $body = json_encode(['data_mode' => $mode], JSON_THROW_ON_ERROR);
        $api = new ChannelApi(new Client(['handler' => HandlerStack::create(new MockHandler([
            new Response(200, [], $body),
        ]))]));

        self::assertSame($mode, $api->getChannelSettings()->getDataMode());
        $settings = (new Settings())->setDataMode($mode);
        self::assertTrue($settings->valid());
        $request = $api->updateChannelSettingsRequest($settings);
        self::assertSame('PATCH', $request->getMethod());
        self::assertSame('/settings', $request->getUri()->getPath());
        self::assertSame(['data_mode' => $mode], json_decode((string) $request->getBody(), true, 512, JSON_THROW_ON_ERROR));
    }

    public function testUnspecifiedIdentityModeIsNotSent(): void
    {
        $settings = new Settings();

        self::assertNull($settings->getDataMode());
        self::assertArrayNotHasKey('data_mode', (array) ObjectSerializer::sanitizeForSerialization($settings));
        $request = (new ChannelApi())->updateChannelSettingsRequest($settings);
        self::assertArrayNotHasKey('data_mode', json_decode((string) $request->getBody(), true, 512, JSON_THROW_ON_ERROR));
        self::assertSame('{}', (string) $request->getBody());
    }

    public function testExplicitFalseAndEmptySettingsAreSent(): void
    {
        $values = ['pdo_sync' => false, 'offline_mode' => false, 'full_history' => false, 'auto_read_messages' => false, 'locale' => ''];
        $request = (new ChannelApi())->updateChannelSettingsRequest(new Settings($values));

        self::assertSame($values, json_decode((string) $request->getBody(), true, 512, JSON_THROW_ON_ERROR));
    }

    public function testFetchedSettingsPreserveServerValues(): void
    {
        $values = ['pdo_sync' => false, 'offline_mode' => true, 'full_history' => true, 'auto_read_messages' => true, 'locale' => 'en', 'data_mode' => 'original'];
        $api = new ChannelApi(new Client(['handler' => HandlerStack::create(new MockHandler([
            new Response(200, [], json_encode($values, JSON_THROW_ON_ERROR)),
        ]))]));

        self::assertSame($values, (array) ObjectSerializer::sanitizeForSerialization($api->getChannelSettings()));
    }

    public function testUnknownIdentityModeIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new Settings())->setDataMode('unknown');
    }

    /** @return iterable<string, array{bool, string}> */
    public static function booleanQueries(): iterable
    {
        yield 'true' => [true, 'true'];
        yield 'false' => [false, 'false'];
    }

    #[DataProvider('booleanQueries')]
    public function testConfiguredBooleanQueriesUseStrings(bool $value, string $expected): void
    {
        $config = Configuration::getDefaultConfiguration();
        $originalFormat = $config->getBooleanFormatForQueryString();
        $config->setBooleanFormatForQueryString(Configuration::BOOLEAN_FORMAT_STRING);

        try {
            $request = (new GroupsApi(null, $config))->getGroupRequest('120363000000000000@g.us', $value);
            parse_str($request->getUri()->getQuery(), $query);
            self::assertSame($expected, $query['resync']);
        } finally {
            $config->setBooleanFormatForQueryString($originalFormat);
        }
    }
}
