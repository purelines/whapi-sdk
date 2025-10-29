# Purelines\WhapiSdk\StatusesApi

WhatsApp View Statuses (ACK) Functions.  Use for checking the view status of the group message or story

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMessageViewStatuses()**](StatusesApi.md#getMessageViewStatuses) | **GET** /statuses/{MessageID} | Get message or story view statuses |


## `getMessageViewStatuses()`

```php
getMessageViewStatuses($message_id): \Purelines\WhapiSdk\Model\StatusesList
```

Get message or story view statuses

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


$apiInstance = new Purelines\WhapiSdk\Api\StatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->getMessageViewStatuses($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusesApi->getMessageViewStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

### Return type

[**\Purelines\WhapiSdk\Model\StatusesList**](../Model/StatusesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
