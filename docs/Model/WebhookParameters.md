# WebhookParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**send_undecrypted_ad** | **bool** | Send a webhook for an ad that could not be decrypted. | [optional] [default to false]
**webhook_max_age_seconds** | **float** | Time in seconds. If the message is delayed more than this time, the hook will not be sent. | [optional]
**headers** | **array<string,string>** | Additional headers for webhook. Max 5 headers. &lt;br/&gt;Example: &lt;br/&gt;\&quot;Authorization - Bearer token\&quot; &lt;br/&gt;\&quot;Content-Type - application/json\&quot; &lt;br/&gt;\&quot;X-Header - value\&quot; | [optional]
**url** | **string** | Inbound and outbound notifications are routed to this URL. | [optional]
**mode** | **string** | Request method for sending hook. | [optional] [default to 'body']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
