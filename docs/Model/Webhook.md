# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headers** | **array<string,string>** | Additional headers for webhook. Max 5 headers. &lt;br/&gt;Example: &lt;br/&gt;\&quot;Authorization - Bearer token\&quot; &lt;br/&gt;\&quot;Content-Type - application/json\&quot; &lt;br/&gt;\&quot;X-Header - value\&quot; | [optional]
**url** | **string** | Inbound and outbound notifications are routed to this URL. |
**mode** | **string** | Request method for sending hook. | [optional] [default to 'body']
**events** | [**\Purelines\WhapiSdk\Model\Event[]**](Event.md) | Tracked events. &lt;br/&gt;\&quot;messages\&quot; - got new message/got offline messages/edit message/delete message;&lt;br/&gt;\&quot;statuses\&quot; - got message status/got offline message status;&lt;br/&gt;\&quot;chats\&quot; - got chat/chat update/chat remove;&lt;br/&gt;\&quot;contacts\&quot; - contact update;&lt;br/&gt;\&quot;presences\&quot; - got presences&lt;br/&gt;\&quot;groups\&quot; - new group/participants update/group update;&lt;br/&gt;\&quot;calls\&quot; - got call events&lt;br/&gt;labels\&quot; - new label/remove label&lt;br/&gt;\&quot;users\&quot; - login user/logout user&lt;br/&gt;\&quot;channel\&quot; - instance status changed/QR-code update&lt;br/&gt;\&quot;service\&quot; - special notifications&lt;br/&gt;&lt;br/&gt;\&quot;message\&quot;, \&quot;ack\&quot;, \&quot;chat\&quot;, \&quot;status\&quot; - is deprecated, use \&quot;messages\&quot;, \&quot;statuses\&quot;, \&quot;chats\&quot;, \&quot;channel\&quot; instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
