# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Message ID |
**type** | [**\Purelines\WhapiSdk\Model\MessageType**](MessageType.md) |  |
**subtype** | **string** | Message subtype | [optional]
**chat_id** | **string** | Chat ID |
**chat_name** | **string** | Chat name | [optional]
**from** | **string** | WhatsApp ID of the sender | [optional]
**from_me** | **bool** | Is message from me |
**from_name** | **string** | Pushname of the sender | [optional]
**source** | [**\Purelines\WhapiSdk\Model\MessageSource**](MessageSource.md) |  | [optional]
**timestamp** | **float** | Message timestamp |
**device_id** | **float** | Device ID, if the message was not sent through the app | [optional]
**status** | [**\Purelines\WhapiSdk\Model\StatusEnum**](StatusEnum.md) |  | [optional]
**text** | [**\Purelines\WhapiSdk\Model\MessageContentText**](MessageContentText.md) |  | [optional]
**image** | [**\Purelines\WhapiSdk\Model\MessageContentImage**](MessageContentImage.md) |  | [optional]
**video** | [**\Purelines\WhapiSdk\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**short** | [**\Purelines\WhapiSdk\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**gif** | [**\Purelines\WhapiSdk\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**audio** | [**\Purelines\WhapiSdk\Model\MessageContentAudio**](MessageContentAudio.md) |  | [optional]
**voice** | [**\Purelines\WhapiSdk\Model\MessageContentAudio**](MessageContentAudio.md) |  | [optional]
**document** | [**\Purelines\WhapiSdk\Model\MessageContentDocument**](MessageContentDocument.md) |  | [optional]
**link_preview** | [**\Purelines\WhapiSdk\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**sticker** | [**\Purelines\WhapiSdk\Model\MessageContentSticker**](MessageContentSticker.md) |  | [optional]
**location** | [**\Purelines\WhapiSdk\Model\MessageContentLocation**](MessageContentLocation.md) |  | [optional]
**live_location** | [**\Purelines\WhapiSdk\Model\MessageContentLiveLocation**](MessageContentLiveLocation.md) |  | [optional]
**contact** | [**\Purelines\WhapiSdk\Model\MessageContentContact**](MessageContentContact.md) |  | [optional]
**contact_list** | [**\Purelines\WhapiSdk\Model\MessageContentContacts**](MessageContentContacts.md) |  | [optional]
**interactive** | [**\Purelines\WhapiSdk\Model\MessageContentInteractive**](MessageContentInteractive.md) |  | [optional]
**poll** | [**\Purelines\WhapiSdk\Model\MessageContentPoll**](MessageContentPoll.md) |  | [optional]
**hsm** | [**\Purelines\WhapiSdk\Model\MessageContentHSM**](MessageContentHSM.md) |  | [optional]
**system** | [**\Purelines\WhapiSdk\Model\MessageContentSystem**](MessageContentSystem.md) |  | [optional]
**order** | [**\Purelines\WhapiSdk\Model\MessageContentOrder**](MessageContentOrder.md) |  | [optional]
**group_invite** | [**\Purelines\WhapiSdk\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**newsletter_invite** | [**\Purelines\WhapiSdk\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**admin_invite** | [**\Purelines\WhapiSdk\Model\MessageContentNewsletterAdminInvite**](MessageContentNewsletterAdminInvite.md) |  | [optional]
**product** | [**\Purelines\WhapiSdk\Model\MessageContentProduct**](MessageContentProduct.md) |  | [optional]
**catalog** | [**\Purelines\WhapiSdk\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**product_items** | [**\Purelines\WhapiSdk\Model\MessageContentProductItems**](MessageContentProductItems.md) |  | [optional]
**action** | [**\Purelines\WhapiSdk\Model\MessageAction**](MessageAction.md) |  | [optional]
**context** | [**\Purelines\WhapiSdk\Model\MessageContext**](MessageContext.md) |  | [optional]
**event** | [**\Purelines\WhapiSdk\Model\MessageContentEvent**](MessageContentEvent.md) |  | [optional]
**list** | [**\Purelines\WhapiSdk\Model\MessageContentList**](MessageContentList.md) |  | [optional]
**buttons** | [**\Purelines\WhapiSdk\Model\MessageContentButtons**](MessageContentButtons.md) |  | [optional]
**reactions** | [**\Purelines\WhapiSdk\Model\MessageReaction[]**](MessageReaction.md) | Reactions for message | [optional]
**labels** | [**\Purelines\WhapiSdk\Model\Label[]**](Label.md) | Labels associated with message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
