<?php

namespace Purelines\WhapiSdk\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Purelines\WhapiSdk\Api\BlacklistApi;
use Purelines\WhapiSdk\Api\ChatsApi;
use Purelines\WhapiSdk\Api\ContactsApi;
use Purelines\WhapiSdk\Api\MessagesApi;
use Purelines\WhapiSdk\Model\Chat;
use Purelines\WhapiSdk\Model\GroupCreate;
use Purelines\WhapiSdk\Model\Participant;
use Purelines\WhapiSdk\Model\RejectCallRequest;
use Purelines\WhapiSdk\Model\SenderText;
use Purelines\WhapiSdk\Model\WebhookPayload;
use Purelines\WhapiSdk\Model\WebhookUser;
use Purelines\WhapiSdk\ObjectSerializer;

final class IdentityTest extends TestCase
{
    /** @return iterable<string, array{string, string, ?string}> */
    public static function identities(): iterable
    {
        yield 'phone' => ['15551234567', '15551234567@s.whatsapp.net', null];
        yield 'mapped lid' => ['154662208577626@lid', '154662208577626@lid', '15551234567'];
        yield 'unresolved lid' => ['154662208577626@lid', '154662208577626@lid', null];
        yield 'short lid' => ['1234567@lid', '1234567@lid', null];
    }

    #[DataProvider('identities')]
    public function testWebhookIdentitiesRoundTripWithoutInventingPhoneNumbers(string $id, string $chatId, ?string $phone): void
    {
        $phoneFields = $phone === null ? [] : ['phone' => $phone];
        $payload = [
            'user' => ['id' => $id] + $phoneFields,
            'contacts' => [['id' => $id, 'name' => 'Customer'] + $phoneFields],
            'chats' => [['id' => $chatId, 'type' => 'contact'] + $phoneFields],
            'messages' => [[
                'id' => 'message-id', 'type' => 'text', 'chat_id' => $chatId,
                'from' => $id, 'from_me' => false, 'timestamp' => 1700000000,
                'text' => ['body' => 'Hello'],
                'context' => ['quoted_author' => $id, 'mentions' => [$id]],
                'reactions' => [['id' => $id, 'emoji' => '👍']],
            ] + $phoneFields],
            'calls' => [[
                'id' => 'call-id', 'chat_id' => $chatId, 'from' => $id,
                'status' => 'ended', 'timestamp' => 1700000000,
                'participants' => [['id' => $id]],
            ]],
            'groups_participants' => [[
                'group_id' => '120363000000000000@g.us', 'participants' => [$id], 'action' => 'add',
            ]],
        ];

        $webhook = ObjectSerializer::deserialize(json_encode($payload, JSON_THROW_ON_ERROR), WebhookPayload::class);

        self::assertInstanceOf(WebhookUser::class, $webhook->getUser());
        self::assertTrue($webhook->getUser()->valid());
        foreach ([$webhook->getUser(), $webhook->getContacts()[0], $webhook->getChats()[0], $webhook->getMessages()[0]] as $model) {
            self::assertSame($phone, $model->getPhone());
            $serialized = (array) ObjectSerializer::sanitizeForSerialization($model);
            if ($phone === null) {
                self::assertArrayNotHasKey('phone', $serialized);
            } else {
                self::assertSame($phone, $serialized['phone']);
            }
        }
        self::assertSame($id, $webhook->getUser()->getId());
        self::assertSame($id, $webhook->getContacts()[0]->getId());
        self::assertSame($chatId, $webhook->getChats()[0]->getId());
        self::assertSame($id, $webhook->getMessages()[0]->getFrom());
        self::assertSame($id, $webhook->getMessages()[0]->getContext()->getQuotedAuthor());
        self::assertSame([$id], $webhook->getMessages()[0]->getContext()->getMentions());
        self::assertSame($id, $webhook->getMessages()[0]->getReactions()[0]->getId());
        self::assertSame($id, $webhook->getCalls()[0]->getFrom());
        self::assertSame($id, $webhook->getCalls()[0]->getParticipants()[0]->getId());
        self::assertSame([$id], $webhook->getGroupsParticipants()[0]->getParticipants());
    }

    /** @return iterable<string, array{string}> */
    public static function contactIds(): iterable
    {
        foreach (['15551234567', '15551234567@s.whatsapp.net', '1234567@lid', '154662208577626@lid'] as $id) {
            yield $id => [$id];
        }
    }

    #[DataProvider('contactIds')]
    public function testContactRequestsAndParticipantsAcceptSupportedIdentifiers(string $id): void
    {
        $request = (new ContactsApi())->getContactRequest($id);
        self::assertSame('/contacts/'.rawurlencode($id), $request->getUri()->getPath());
        $participant = (new Participant())->setId($id)->setRank('member');
        self::assertTrue($participant->valid());
        self::assertSame($id, $participant->getId());
    }

    /** @return iterable<string, array{string}> */
    public static function chatIds(): iterable
    {
        foreach (['15551234567@s.whatsapp.net', '1234567@lid', '154662208577626@lid', '120363000000000000@g.us'] as $id) {
            yield $id => [$id];
        }
    }

    #[DataProvider('chatIds')]
    public function testChatAndMessageRequestsPreserveIdentifiers(string $id): void
    {
        self::assertSame($id, (new Chat())->setId($id)->getId());
        self::assertSame('/chats/'.rawurlencode($id), (new ChatsApi())->getChatRequest($id)->getUri()->getPath());
        $message = (new SenderText())->setTo($id)->setBody('Hello');
        $request = (new MessagesApi())->sendMessageTextRequest($message);
        self::assertSame($id, json_decode((string) $request->getBody(), true, 512, JSON_THROW_ON_ERROR)['to']);
    }

    public function testPhoneRecipientAndLidCallAndBlacklistRequests(): void
    {
        self::assertSame('15551234567', (new SenderText())->setTo('15551234567')->getTo());
        self::assertSame('1234567@lid', (new RejectCallRequest())->setCallFrom('1234567@lid')->getCallFrom());
        self::assertSame('/blacklist/1234567%40lid', (new BlacklistApi())->blacklistAddRequest('1234567@lid')->getUri()->getPath());
        self::assertSame('/blacklist/1234567%40lid', (new BlacklistApi())->blacklistRemoveRequest('1234567@lid')->getUri()->getPath());
    }

    public function testGroupCreationPreservesLidParticipantsAndUnprocessedIds(): void
    {
        $group = ObjectSerializer::deserialize((object) [
            'id' => '120363000000000000@g.us', 'type' => 'group', 'name' => 'Support',
            'participants' => [(object) ['id' => '1234567@lid', 'rank' => 'member']],
            'unprocessed_participants' => ['154662208577626@lid'],
        ], GroupCreate::class);

        self::assertSame('1234567@lid', $group->getParticipants()[0]->getId());
        self::assertSame(['154662208577626@lid'], $group->getUnprocessedParticipants());
    }

    /** @return iterable<string, array{class-string, string, string}> */
    public static function malformedIdentifiers(): iterable
    {
        foreach ([Chat::class => 'setId', SenderText::class => 'setTo', Participant::class => 'setId'] as $class => $setter) {
            foreach (['letters@lid', '123456@lid', '1234567@lid/extra'] as $id) {
                yield "$class $id" => [$class, $setter, $id];
            }
        }
    }

    #[DataProvider('malformedIdentifiers')]
    public function testMalformedIdentifiersAreRejected(string $class, string $setter, string $id): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new $class())->$setter($id);
    }
}
