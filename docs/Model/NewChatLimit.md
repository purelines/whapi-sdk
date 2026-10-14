# NewChatLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cap_type** | **string** | WhatsApp cap type queried by this endpoint. |
**is_capped** | **bool** | Whether WhatsApp currently blocks starting new individual chats by this cap. |
**cap_status** | **string** | Current WhatsApp cap status for starting new individual chats. Expired cap cycles are reported as none. |
**quota_limit** | **float** | Number of new individual chats allowed in the current cycle. Null means the quota is not applicable or WhatsApp did not report it. |
**quota_used** | **float** | Number of new individual chats already used in the current cycle. Null means the quota is not applicable or WhatsApp did not report it. |
**quota_remaining** | **float** | Number of new individual chats remaining in the current cycle. Null means unavailable or not applicable. |
**cycle_start_at** | **float** | Unix timestamp in seconds when the quota cycle reported by WhatsApp starts. It may be present when cap_status is none. Null means WhatsApp did not report a usable timestamp. |
**cycle_end_at** | **float** | Unix timestamp in seconds when the quota cycle reported by WhatsApp ends. It may be present when cap_status is none and does not by itself mean the cap is active. Null means WhatsApp did not report a usable timestamp. |
**updated_at** | **float** | Unix timestamp in seconds when WhatsApp reported this state. Null means WhatsApp did not report a usable timestamp. |
**ote_status** | **string** | WhatsApp one-time extension status for the new chat limit. |
**mv_status** | **string** | WhatsApp multi-verification status for the new chat limit. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
