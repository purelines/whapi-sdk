# Purelines\WhapiSdk\BotsApi

WhatsApp Bots Functions

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBotList()**](BotsApi.md#getBotList) | **GET** /bots | Get bots |
| [**sendBotMessage()**](BotsApi.md#sendBotMessage) | **POST** /bots/{BotID}/messages | Send text message to AI bot |


## `getBotList()`

```php
getBotList(): \Purelines\WhapiSdk\Model\BotList
```

Get bots

Returns the list of bots available for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Purelines\WhapiSdk\Api\BotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBotList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotsApi->getBotList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Purelines\WhapiSdk\Model\BotList**](../Model/BotList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendBotMessage()`

```php
sendBotMessage($bot_id, $message_props_text): \Purelines\WhapiSdk\Model\SentMessage
```

Send text message to AI bot

Sends a text prompt to an AI bot in a private chat. The bot response is delivered asynchronously as an incoming message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = Purelines\WhapiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Purelines\WhapiSdk\Api\BotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bot_id = 'bot_id_example'; // string | WhatsApp ID of the AI bot returned by GET /bots
$message_props_text = {"body":"Hello! What can you help me with?"}; // \Purelines\WhapiSdk\Model\MessagePropsText | Text message to an AI bot

try {
    $result = $apiInstance->sendBotMessage($bot_id, $message_props_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotsApi->sendBotMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bot_id** | **string**| WhatsApp ID of the AI bot returned by GET /bots | |
| **message_props_text** | [**\Purelines\WhapiSdk\Model\MessagePropsText**](../Model/MessagePropsText.md)| Text message to an AI bot | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
