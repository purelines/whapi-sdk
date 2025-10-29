# # SenderText

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**body** | **string** | Message text |
**mentions** | **string[]** | The numbers of the mentioned users | [optional]
**typing_time** | **float** | Time in seconds to simulate typing | [optional] [default to 0]
**no_link_preview** | **bool** | Set \&quot;true\&quot; if necessary to send the link without preview | [optional]
**wide_link_preview** | **bool** | Set \&quot;true\&quot; to try to send the fullwidth link preview | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
