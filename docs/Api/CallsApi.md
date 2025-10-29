# Purelines\WhapiSdk\CallsApi



All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCallEvent()**](CallsApi.md#createCallEvent) | **POST** /calls | Create call event |
| [**createGroupCallLink()**](CallsApi.md#createGroupCallLink) | **POST** /calls/group_link | Create group video call link |
| [**rejectCall()**](CallsApi.md#rejectCall) | **DELETE** /calls/{CallID} | Reject call |
| [**rejectCallDeprecated()**](CallsApi.md#rejectCallDeprecated) | **POST** /calls/{CallID}/reject | Reject call |


## `createCallEvent()`

```php
createCallEvent($create_call_event_request): \Purelines\WhapiSdk\Model\CreateCallEventResponse
```

Create call event

This method is responsible for creating a call event.

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


$apiInstance = new Purelines\WhapiSdk\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_call_event_request = new \Purelines\WhapiSdk\Model\CreateCallEventRequest(); // \Purelines\WhapiSdk\Model\CreateCallEventRequest | Call data

try {
    $result = $apiInstance->createCallEvent($create_call_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->createCallEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_call_event_request** | [**\Purelines\WhapiSdk\Model\CreateCallEventRequest**](../Model/CreateCallEventRequest.md)| Call data | |

### Return type

[**\Purelines\WhapiSdk\Model\CreateCallEventResponse**](../Model/CreateCallEventResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroupCallLink()`

```php
createGroupCallLink($create_group_call_link_request): \Purelines\WhapiSdk\Model\CreateGroupCallLinkResponse
```

Create group video call link

This method creates a link for starting a group video call.

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


$apiInstance = new Purelines\WhapiSdk\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_group_call_link_request = new \Purelines\WhapiSdk\Model\CreateGroupCallLinkRequest(); // \Purelines\WhapiSdk\Model\CreateGroupCallLinkRequest | Call link options

try {
    $result = $apiInstance->createGroupCallLink($create_group_call_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->createGroupCallLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_group_call_link_request** | [**\Purelines\WhapiSdk\Model\CreateGroupCallLinkRequest**](../Model/CreateGroupCallLinkRequest.md)| Call link options | |

### Return type

[**\Purelines\WhapiSdk\Model\CreateGroupCallLinkResponse**](../Model/CreateGroupCallLinkResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectCall()`

```php
rejectCall($call_id, $reject_call_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Reject call

This method is responsible for rejecting a call.

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


$apiInstance = new Purelines\WhapiSdk\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = 'call_id_example'; // string | Call ID
$reject_call_request = new \Purelines\WhapiSdk\Model\RejectCallRequest(); // \Purelines\WhapiSdk\Model\RejectCallRequest | Reject call data

try {
    $result = $apiInstance->rejectCall($call_id, $reject_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->rejectCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**| Call ID | |
| **reject_call_request** | [**\Purelines\WhapiSdk\Model\RejectCallRequest**](../Model/RejectCallRequest.md)| Reject call data | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectCallDeprecated()`

```php
rejectCallDeprecated($call_id, $reject_call_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Reject call

This method is responsible for rejecting a call.

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


$apiInstance = new Purelines\WhapiSdk\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_id = 'call_id_example'; // string | Call ID
$reject_call_request = new \Purelines\WhapiSdk\Model\RejectCallRequest(); // \Purelines\WhapiSdk\Model\RejectCallRequest | Reject call data

try {
    $result = $apiInstance->rejectCallDeprecated($call_id, $reject_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->rejectCallDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**| Call ID | |
| **reject_call_request** | [**\Purelines\WhapiSdk\Model\RejectCallRequest**](../Model/RejectCallRequest.md)| Reject call data | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
