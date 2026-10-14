# SenderQuiz

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**title** | **string** | Title of quiz |
**options** | **string[]** | Options of quiz |
**correct_option_index** | **int** | Zero-based index of the correct quiz option |
**end_time** | **int** | Quiz end timestamp | [optional]
**hide_participant_name** | **bool** | Hide participant names in quiz results | [optional]
**allow_add_option** | **bool** | Allow participants to add options | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
