# CallInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the call. |
**chat_id** | **string** | The ID of the chat associated with the call. |
**from** | **string** | The ID of the contact that initiated the call. |
**status** | **string** | Current coarse call lifecycle status. |
**result** | [**\Purelines\WhapiSdk\Model\CallResult**](CallResult.md) |  | [optional]
**reason** | **string** | Raw WhatsApp signaling reason when supplied and adding information beyond the normalized result. | [optional]
**timestamp** | **int** | Timestamp of the latest call lifecycle event in Unix milliseconds. |
**started_at** | **int** | Call offer/start time as a Unix timestamp in milliseconds. | [optional]
**answered_at** | **int** | Call answer time as a Unix timestamp in milliseconds, when observed. | [optional]
**ended_at** | **int** | Actual call end time as a Unix timestamp in milliseconds. Omitted when the end was not observed or cannot be derived reliably. | [optional]
**duration_seconds** | **int** | Connected call duration in seconds, when known. This does not include ringing time. | [optional]
**duration_source** | [**\Purelines\WhapiSdk\Model\CallDurationSource**](CallDurationSource.md) |  | [optional]
**direction** | **string** | Call direction normalized from the call creator and the current WhatsApp account, when available. | [optional]
**group_call** | **bool** | Whether this is a group call. | [optional]
**video_call** | **bool** | Whether this is a video call. | [optional]
**offline_call** | **bool** | Whether the signaling event was received offline. | [optional]
**latency** | **int** | Signaling latency in milliseconds. | [optional]
**participants** | [**\Purelines\WhapiSdk\Model\CallParticipant[]**](CallParticipant.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
