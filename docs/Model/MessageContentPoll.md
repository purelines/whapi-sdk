# MessageContentPoll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of poll |
**options** | **string[]** | Options of poll |
**vote_limit** | **int** | Number of selectable options in poll (1 - can choose only one option, 0 - any number of options) | [optional]
**end_time** | **int** | Poll end timestamp | [optional]
**hide_participant_name** | **bool** | Hide participant names in poll results | [optional]
**allow_add_option** | **bool** | Allow participants to add options | [optional]
**total** | **int** | Total count of selected options | [optional]
**view_once** | **bool** | Is view once | [optional]
**results** | [**\Purelines\WhapiSdk\Model\PollResults[]**](PollResults.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
