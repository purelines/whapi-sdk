# Settings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pdo_sync** | **bool** | It is recommended to disable it for iOS. | [optional]
**callback_backoff_delay_ms** | **float** | Backoff delay for a failed callback in milliseconds This setting is used to configure the amount of time the backoff delays before retrying a failed callback. The backoff delay increases linearly by this value each time a callback fails to get a HTTPS 200 OK response. The backoff delay is capped by the max_callback_backoff_delay_ms setting. | [optional]
**max_callback_backoff_delay_ms** | **float** | Maximum delay for a failed callback in milliseconds | [optional]
**callback_persist** | **bool** | Stores callbacks on disk until they are successfully acknowledged by the Webhook or not. Restart required. | [optional]
**media** | [**\Purelines\WhapiSdk\Model\MediaSettings**](MediaSettings.md) |  | [optional]
**webhooks** | [**\Purelines\WhapiSdk\Model\Webhook[]**](Webhook.md) |  | [optional]
**proxy** | **string** | Use your Socks5 proxy if your account activity arouses suspicion from WhatsApp. This can help maintain anonymity and ensure smooth operation. | [optional]
**mobile_proxy** | **string** | Service proxy for mobile authorization. Beta-only parameter; ignored in the production version. | [optional]
**offline_mode** | **bool** | When true, API will not send online status to the server on connection. This will allow you to receive push notifications to devices connected to the number. Working after reconnect. | [optional]
**full_history** | **bool** | When true, all messages will be cached after the connection. If false, old messages will selectively not be cached, allowing large accounts to run faster. Working after reconnect. | [optional]
**auto_read_messages** | **bool** | When enabled, all incoming messages are automatically marked as read as soon as they are received by the API channel. You do not need to mark each message as read manually through the API. | [optional]
**outgoing_calls_enabled** | **bool** | Enables outgoing calls for the channel. The default is false. Changing this setting automatically restarts the channel. | [optional]
**locale** | **string** | Preferred language settings for the channel. Some endpoints may use this value. If left empty, the phone&#39;s primary language is used when WhatsApp settings are synced. | [optional]
**mock_pairing_code** | **string** | Fixed 8-character pairing code for link-code authorization. When omitted or empty, a random code is generated for every request. | [optional]
**ignored_presences** | **string[]** | List of presences to ignore. | [optional]
**data_mode** | **string** | Data presentation mode | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
