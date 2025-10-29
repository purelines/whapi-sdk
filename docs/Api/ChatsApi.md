# Purelines\WhapiSdk\ChatsApi

Manage the chats of the channel

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveChat()**](ChatsApi.md#archiveChat) | **POST** /chats/{ChatID} | 🗄 Archive/Unarchive chat |
| [**deleteChat()**](ChatsApi.md#deleteChat) | **DELETE** /chats/{ChatID} | ❌ Delete chat |
| [**getChat()**](ChatsApi.md#getChat) | **GET** /chats/{ChatID} | Get chat |
| [**getChats()**](ChatsApi.md#getChats) | **GET** /chats | Get chats |
| [**patchChat()**](ChatsApi.md#patchChat) | **PATCH** /chats/{ChatID} | ⚙️Chat Settings Management: Pin, Mute, Read, Disappearing. |


## `archiveChat()`

```php
archiveChat($chat_id, $archive_chat_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

🗄 Archive/Unarchive chat

This method is responsible for archiving or unarchiving chats

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


$apiInstance = new Purelines\WhapiSdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID
$archive_chat_request = new \Purelines\WhapiSdk\Model\ArchiveChatRequest(); // \Purelines\WhapiSdk\Model\ArchiveChatRequest | Request body

try {
    $result = $apiInstance->archiveChat($chat_id, $archive_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->archiveChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |
| **archive_chat_request** | [**\Purelines\WhapiSdk\Model\ArchiveChatRequest**](../Model/ArchiveChatRequest.md)| Request body | [optional] |

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

## `deleteChat()`

```php
deleteChat($chat_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

❌ Delete chat

This method is responsible for deleting chats

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


$apiInstance = new Purelines\WhapiSdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID

try {
    $result = $apiInstance->deleteChat($chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->deleteChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChat()`

```php
getChat($chat_id): \Purelines\WhapiSdk\Model\Chat
```

Get chat

This method is responsible for returning the metadata of a chat. Read more about [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it)

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


$apiInstance = new Purelines\WhapiSdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID

try {
    $result = $apiInstance->getChat($chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->getChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |

### Return type

[**\Purelines\WhapiSdk\Model\Chat**](../Model/Chat.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChats()`

```php
getChats($count, $offset): \Purelines\WhapiSdk\Model\ChatsList
```

Get chats

This method is responsible for returning all of your chats. If you need to get a profile pic of your contacts or chats, [refer to these instructions](https://support.whapi.cloud/help-desk/receiving/http-api/get-a-profile-picture-of-a-chat-or-user).

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


$apiInstance = new Purelines\WhapiSdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getChats($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->getChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\ChatsList**](../Model/ChatsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchChat()`

```php
patchChat($chat_id, $patch_chat_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

⚙️Chat Settings Management: Pin, Mute, Read, Disappearing.

This method is responsible for pinning and unpinning, for muting and unmuting your chats. Also this method is responsible for performing the action of reading an entire chat or marking a chat as unread

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


$apiInstance = new Purelines\WhapiSdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID
$patch_chat_request = new \Purelines\WhapiSdk\Model\PatchChatRequest(); // \Purelines\WhapiSdk\Model\PatchChatRequest | Request body

try {
    $result = $apiInstance->patchChat($chat_id, $patch_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->patchChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |
| **patch_chat_request** | [**\Purelines\WhapiSdk\Model\PatchChatRequest**](../Model/PatchChatRequest.md)| Request body | [optional] |

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
