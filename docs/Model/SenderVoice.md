# # SenderVoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**media** | [**\Purelines\WhapiSdk\Model\SendMediaMedia**](SendMediaMedia.md) |  |
**mime_type** | **string** | Mime type of media | [optional]
**no_encode** | **bool** | Do not use our encoding | [optional]
**no_cache** | **bool** | Do not use the cache in a request | [optional]
**seconds** | **int** | Optional. For audio files, this field indicates the duration of the audio file in seconds. | [optional]
**recording_time** | **float** | Time in seconds to simulate recording voice | [optional] [default to 0]
**waveform** | **string** | Voice message waveform | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
