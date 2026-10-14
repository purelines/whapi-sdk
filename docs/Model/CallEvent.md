# CallEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the call. |
**chat_id** | **string** | The ID of the chat that the call is associated with. |
**status** | **string** | Normalized call lifecycle status. Intermediate statuses such as ringing may be skipped when WhatsApp does not emit a distinct transition. |
**from** | **string** | The ID of the contact that initiated the call. |
**timestamp** | **int** | The timestamp of the call. |
**group_call** | **bool** | Whether the call is a group call. | [optional]
**video_call** | **bool** | Whether the call is a video call. | [optional]
**offline_call** | **bool** | Whether the call is an offline call. | [optional]
**latency** | **int** | The latency of the call in milliseconds. | [optional]
**result** | [**\Purelines\WhapiSdk\Model\CallResult**](CallResult.md) |  | [optional]
**reason** | **string** | Raw WhatsApp signaling reason when supplied and adding information beyond the normalized result. | [optional]
**started_at** | **int** | Call offer/start time as a Unix timestamp in milliseconds. | [optional]
**answered_at** | **int** | Call answer time as a Unix timestamp in milliseconds, when observed. | [optional]
**ended_at** | **int** | Actual call end time as a Unix timestamp in milliseconds. Omitted when the end was not observed or cannot be derived reliably. | [optional]
**duration_seconds** | **int** | Connected call duration in seconds, when known. This does not include ringing time. | [optional]
**duration_source** | [**\Purelines\WhapiSdk\Model\CallDurationSource**](CallDurationSource.md) |  | [optional]
**direction** | **string** | Call direction normalized from the call creator and the current WhatsApp account, when available. | [optional]
**participants** | [**\Purelines\WhapiSdk\Model\CallParticipant[]**](CallParticipant.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
