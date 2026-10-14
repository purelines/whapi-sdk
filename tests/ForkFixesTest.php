<?php

namespace Purelines\WhapiSdk\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Purelines\WhapiSdk\Api\MediaApi;
use Purelines\WhapiSdk\Model\ApplicationRequest;
use Purelines\WhapiSdk\Model\MediaFile;
use Purelines\WhapiSdk\Model\MessageContentAudio;
use Purelines\WhapiSdk\Model\MessageContentDocument;
use Purelines\WhapiSdk\Model\MessageContentImage;
use Purelines\WhapiSdk\Model\MessageContentInteractive;
use Purelines\WhapiSdk\Model\MessageContentLinkPreview;
use Purelines\WhapiSdk\Model\MessageContentSticker;
use Purelines\WhapiSdk\Model\MessageContentVideo;
use Purelines\WhapiSdk\Model\SenderDocument;
use Purelines\WhapiSdk\Model\UploadMedia;
use Purelines\WhapiSdk\ObjectSerializer;

final class ForkFixesTest extends TestCase
{
    public function testAllGeneratedTypesLoadWithoutNameCollisions(): void
    {
        $directory = dirname(__DIR__).'/lib/';
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));
        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }
            $class = 'Purelines\\WhapiSdk\\'.str_replace('/', '\\', substr($file->getPathname(), strlen($directory), -4));
            self::assertTrue(class_exists($class) || interface_exists($class), "$class must autoload");
        }
    }

    public function testIncomingDocumentFilenameAndCaptionRemainDistinctFromSendFilename(): void
    {
        $document = ObjectSerializer::deserialize((object) [
            'id' => 'media_init', 'mime_type' => 'application/pdf', 'file_size' => 128,
            'timestamp' => 1700000000, 'file_name' => 'received.pdf', 'caption' => 'Invoice',
        ], MessageContentDocument::class);

        self::assertTrue($document->valid());
        self::assertSame('received.pdf', $document->getFileName());
        self::assertSame('Invoice', $document->getCaption());
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($document);
        self::assertSame('received.pdf', $serialized['file_name']);
        self::assertSame('Invoice', $serialized['caption']);
        self::assertArrayNotHasKey('filename', $serialized);

        $sender = (new SenderDocument())->setTo('1234567@lid')->setMedia('https://example.com/invoice.pdf')->setFilename('sent.pdf');
        $serialized = (array) ObjectSerializer::sanitizeForSerialization($sender);
        self::assertSame('sent.pdf', $serialized['filename']);
        self::assertArrayNotHasKey('file_name', $serialized);
    }

    /** @return iterable<string, array{class-string, string}> */
    public static function mediaIds(): iterable
    {
        foreach ([MediaFile::class, MessageContentAudio::class, MessageContentDocument::class, MessageContentImage::class,
            MessageContentInteractive::class, MessageContentLinkPreview::class, MessageContentSticker::class,
            MessageContentVideo::class, UploadMedia::class] as $class) {
            foreach (['media_init', 'pdf-12345678-abcd-1234-abcd-123456789abc'] as $id) {
                yield "$class $id" => [$class, $id];
            }
        }
    }

    #[DataProvider('mediaIds')]
    public function testMediaPlaceholderAndRegularIdsSurviveDeserialization(string $class, string $id): void
    {
        $model = ObjectSerializer::deserialize((object) ['id' => $id], $class);

        self::assertSame($id, $model->getId());
        self::assertSame($id, ObjectSerializer::sanitizeForSerialization($model)->id);
    }

    public function testMalformedMediaIdIsStillRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new MediaFile())->setId('not a media id');
    }

    public function testMediaRequiresTimestampRatherThanNonexistentTime(): void
    {
        $file = new MediaFile(['id' => 'media_init', 'mime_type' => 'application/pdf', 'file_size' => 128]);

        self::assertSame(["'timestamp' can't be null"], $file->listInvalidProperties());
        $file->setTimestamp(1700000000);
        self::assertTrue($file->valid());
    }

    public function testApplicationRequestRequiresApplication(): void
    {
        $request = new ApplicationRequest();

        self::assertContains("'application' can't be null", $request->listInvalidProperties());
        $request->setApplication('120363000000000000@g.us');
        self::assertTrue($request->valid());
    }

    public function testAacUploadsUseCorrectContentType(): void
    {
        self::assertContains('audio/aac', MediaApi::contentTypes['uploadMedia']);
        self::assertNotContains('audio/acc', MediaApi::contentTypes['uploadMedia']);
        $request = (new MediaApi())->uploadMediaRequest('aac-bytes', 'audio/aac');

        self::assertSame('audio/aac', $request->getHeaderLine('Content-Type'));
        self::assertSame('aac-bytes', (string) $request->getBody());
    }
}
