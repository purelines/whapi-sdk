# Purelines\WhapiSdk\MessagesApi

Manage the messages sent and received by the channel

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMessage()**](MessagesApi.md#deleteMessage) | **DELETE** /messages/{MessageID} | ❌ Delete message |
| [**forwardMessage()**](MessagesApi.md#forwardMessage) | **POST** /messages/{MessageID} | ↪ Forward message |
| [**getMessage()**](MessagesApi.md#getMessage) | **GET** /messages/{MessageID} | Get message |
| [**getMessages()**](MessagesApi.md#getMessages) | **GET** /messages/list | Get messages |
| [**getMessagesByChatID()**](MessagesApi.md#getMessagesByChatID) | **GET** /messages/list/{ChatID} | Get messages by chat ID |
| [**markMessageAsRead()**](MessagesApi.md#markMessageAsRead) | **PUT** /messages/{MessageID} | ✔✔ Mark message as read |
| [**pinMessage()**](MessagesApi.md#pinMessage) | **POST** /messages/{MessageID}/pin | 📌 Pin message |
| [**reactToMessage()**](MessagesApi.md#reactToMessage) | **PUT** /messages/{MessageID}/reaction | 😍 React to message |
| [**removeReactFromMessage()**](MessagesApi.md#removeReactFromMessage) | **DELETE** /messages/{MessageID}/reaction | Remove react from message |
| [**sendMediaMessage()**](MessagesApi.md#sendMediaMessage) | **POST** /messages/media/{MediaMessageType} | 📎 Send media message |
| [**sendMessageAudio()**](MessagesApi.md#sendMessageAudio) | **POST** /messages/audio | 🎵 Send media-audio message |
| [**sendMessageCarousel()**](MessagesApi.md#sendMessageCarousel) | **POST** /messages/carousel | 🖼️ Send carousel message |
| [**sendMessageContact()**](MessagesApi.md#sendMessageContact) | **POST** /messages/contact | 👤 Send contact message |
| [**sendMessageContactList()**](MessagesApi.md#sendMessageContactList) | **POST** /messages/contact_list | 👥 Send contact list message |
| [**sendMessageDocument()**](MessagesApi.md#sendMessageDocument) | **POST** /messages/document | 📑 Send media-document message |
| [**sendMessageGif()**](MessagesApi.md#sendMessageGif) | **POST** /messages/gif | 🎬 Send media-gif message |
| [**sendMessageImage()**](MessagesApi.md#sendMessageImage) | **POST** /messages/image | 🖼 Send media-image message |
| [**sendMessageInteractive()**](MessagesApi.md#sendMessageInteractive) | **POST** /messages/interactive | 🎮 Send interactive message |
| [**sendMessageLinkPreview()**](MessagesApi.md#sendMessageLinkPreview) | **POST** /messages/link_preview | 📎 Send link preview message |
| [**sendMessageLiveLocation()**](MessagesApi.md#sendMessageLiveLocation) | **POST** /messages/live_location | 🧭 Send live location message |
| [**sendMessageLocation()**](MessagesApi.md#sendMessageLocation) | **POST** /messages/location | 📍 Send location message |
| [**sendMessagePoll()**](MessagesApi.md#sendMessagePoll) | **POST** /messages/poll | 📊 Send poll message |
| [**sendMessageShort()**](MessagesApi.md#sendMessageShort) | **POST** /messages/short | 📹 Send media-short video message (PTV) |
| [**sendMessageSticker()**](MessagesApi.md#sendMessageSticker) | **POST** /messages/sticker | 🎭 Send media-sticker message |
| [**sendMessageStory()**](MessagesApi.md#sendMessageStory) | **POST** /messages/story | 👁️‍🗨️ Send story message |
| [**sendMessageStoryAudio()**](MessagesApi.md#sendMessageStoryAudio) | **POST** /messages/story/audio | 🎵️ Send story audio message |
| [**sendMessageStoryMedia()**](MessagesApi.md#sendMessageStoryMedia) | **POST** /messages/story/media | 🖼 Send story media message |
| [**sendMessageStoryText()**](MessagesApi.md#sendMessageStoryText) | **POST** /messages/story/text | 💬 Send story text message |
| [**sendMessageText()**](MessagesApi.md#sendMessageText) | **POST** /messages/text | 💬 Send text message |
| [**sendMessageVideo()**](MessagesApi.md#sendMessageVideo) | **POST** /messages/video | 🎥 Send media-video message |
| [**sendMessageVoice()**](MessagesApi.md#sendMessageVoice) | **POST** /messages/voice | 🎤 Send media-voice message |
| [**starMessage()**](MessagesApi.md#starMessage) | **PUT** /messages/{MessageID}/star | ⭐ Star message |
| [**unpinMessage()**](MessagesApi.md#unpinMessage) | **DELETE** /messages/{MessageID}/pin | Unpin message |


## `deleteMessage()`

```php
deleteMessage($message_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

❌ Delete message

Method used to delete a text sent in a chat. You will be able to delete a message that you sent as well as a message that was sent by a contact. To use this resource you will only need the messageId of the message that you want to delete.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->deleteMessage($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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

## `forwardMessage()`

```php
forwardMessage($message_id, $forward_message): \Purelines\WhapiSdk\Model\SentMessage
```

↪ Forward message

Simple and straightforward, in this method, you can forward messages through the API by providing the messageId of the message you want to forward and the phone number of the chat where this messageId is located.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$forward_message = new \Purelines\WhapiSdk\Model\ForwardMessage(); // \Purelines\WhapiSdk\Model\ForwardMessage | Forward message

try {
    $result = $apiInstance->forwardMessage($message_id, $forward_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->forwardMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **forward_message** | [**\Purelines\WhapiSdk\Model\ForwardMessage**](../Model/ForwardMessage.md)| Forward message | |

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

## `getMessage()`

```php
getMessage($message_id, $resync): \Purelines\WhapiSdk\Model\Message
```

Get message

The method returns a message from any chat by message id.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$resync = false; // bool | If set to true, the channel will resync its data.

try {
    $result = $apiInstance->getMessage($message_id, $resync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **resync** | **bool**| If set to true, the channel will resync its data. | [optional] [default to false] |

### Return type

[**\Purelines\WhapiSdk\Model\Message**](../Model/Message.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessages()`

```php
getMessages($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort): \Purelines\WhapiSdk\Model\MessagesList
```

Get messages

The method contains a list of all received and sent messages in a particular chat. Sorting by descending date of message sending.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$time_from = 3.4; // float | Timestamp from which to get objects
$time_to = 3.4; // float | Timestamp up to which to get objects
$normal_types = True; // bool | If false, include system messages
$author = 'author_example'; // string | To filter by author (Contact ID)
$from_me = True; // bool | If true, only return messages sent by the authenticated user. If false, only return messages sent by other users.
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->getMessages($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **time_from** | **float**| Timestamp from which to get objects | [optional] |
| **time_to** | **float**| Timestamp up to which to get objects | [optional] |
| **normal_types** | **bool**| If false, include system messages | [optional] |
| **author** | **string**| To filter by author (Contact ID) | [optional] |
| **from_me** | **bool**| If true, only return messages sent by the authenticated user. If false, only return messages sent by other users. | [optional] |
| **sort** | **string**| Order for items in request | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagesByChatID()`

```php
getMessagesByChatID($chat_id, $count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort): \Purelines\WhapiSdk\Model\MessagesList
```

Get messages by chat ID

The method contains a list of all received and sent messages in a particular chat. Sorting by descending date of message sending. You will need to specify [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$time_from = 3.4; // float | Timestamp from which to get objects
$time_to = 3.4; // float | Timestamp up to which to get objects
$normal_types = True; // bool | If false, include system messages
$author = 'author_example'; // string | To filter by author (Contact ID)
$from_me = True; // bool | If true, only return messages sent by the authenticated user. If false, only return messages sent by other users.
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->getMessagesByChatID($chat_id, $count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessagesByChatID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **time_from** | **float**| Timestamp from which to get objects | [optional] |
| **time_to** | **float**| Timestamp up to which to get objects | [optional] |
| **normal_types** | **bool**| If false, include system messages | [optional] |
| **author** | **string**| To filter by author (Contact ID) | [optional] |
| **from_me** | **bool**| If true, only return messages sent by the authenticated user. If false, only return messages sent by other users. | [optional] |
| **sort** | **string**| Order for items in request | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markMessageAsRead()`

```php
markMessageAsRead($message_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

✔✔ Mark message as read

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->markMessageAsRead($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->markMessageAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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

## `pinMessage()`

```php
pinMessage($message_id, $pin): \Purelines\WhapiSdk\Model\ResponseSuccess
```

📌 Pin message

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$pin = new \Purelines\WhapiSdk\Model\Pin(); // \Purelines\WhapiSdk\Model\Pin | Star message

try {
    $result = $apiInstance->pinMessage($message_id, $pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->pinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **pin** | [**\Purelines\WhapiSdk\Model\Pin**](../Model/Pin.md)| Star message | |

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

## `reactToMessage()`

```php
reactToMessage($message_id, $react_to_message): \Purelines\WhapiSdk\Model\ResponseSuccess
```

😍 React to message

In this method you will be able to react to messages that were sent or received by you. You will need to specify the ID of the message you will respond to, as well as [the emoji](https://support.whapi.cloud/help-desk/sending/send-emoji)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$react_to_message = new \Purelines\WhapiSdk\Model\ReactToMessage(); // \Purelines\WhapiSdk\Model\ReactToMessage | React to message

try {
    $result = $apiInstance->reactToMessage($message_id, $react_to_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->reactToMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **react_to_message** | [**\Purelines\WhapiSdk\Model\ReactToMessage**](../Model/ReactToMessage.md)| React to message | |

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

## `removeReactFromMessage()`

```php
removeReactFromMessage($message_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Remove react from message

In this method you will be able to remove react from message.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->removeReactFromMessage($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->removeReactFromMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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

## `sendMediaMessage()`

```php
sendMediaMessage($media_message_type, $send_params, $body): \Purelines\WhapiSdk\Model\SentMessage
```

📎 Send media message

Additional endpoint for easy send media-file as message. Use request body as file and inpath parameters for send parameters. Media message can be one of the following types: - 📷 image - 🎥 video - 🎬 gif - 🎵 audio - 🎤 voice - 📄 document - 🎭 sticker

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_message_type = new \Purelines\WhapiSdk\Model\\Purelines\WhapiSdk\Model\MediaMessageType(); // \Purelines\WhapiSdk\Model\MediaMessageType | Media message type
$send_params = array('key' => new \Purelines\WhapiSdk\Model\\Purelines\WhapiSdk\Model\SenderMedia()); // \Purelines\WhapiSdk\Model\SenderMedia | Send sender parameters via query
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->sendMediaMessage($media_message_type, $send_params, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMediaMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_message_type** | [**\Purelines\WhapiSdk\Model\MediaMessageType**](../Model/.md)| Media message type | |
| **send_params** | [**\Purelines\WhapiSdk\Model\SenderMedia**](../Model/.md)| Send sender parameters via query | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/pdf`, `application/msword`, `application/vnd.ms-powerpoint`, `application/vnd.ms-excel`, `text/plain`, `image/jpeg`, `image/png`, `audio/aac`, `audio/mp4`, `audio/amr`, `audio/mpeg`, `audio/ogg`, `codecs=opus`, `video/mp4`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageAudio()`

```php
sendMessageAudio($sender_audio): \Purelines\WhapiSdk\Model\SentMessage
```

🎵 Send media-audio message

This method is responsible for sending audio messages for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_audio = {"to":"61371989950","media":"https://filesamples.com/samples/audio/mp3/sample1.mp3"}; // \Purelines\WhapiSdk\Model\SenderAudio | Message audio

try {
    $result = $apiInstance->sendMessageAudio($sender_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_audio** | [**\Purelines\WhapiSdk\Model\SenderAudio**](../Model/SenderAudio.md)| Message audio | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageCarousel()`

```php
sendMessageCarousel($sender_carousel): \Purelines\WhapiSdk\Model\SentMessage
```

🖼️ Send carousel message

Sends interactive carousel messages with media, captions, and buttons (link, call, reply). The carousel messaging feature depends on WhatsApp updates. For more information, please visit the [Buttons Status topic](https://support.whapi.cloud/help-desk/faq/current-status-of-buttons-on-whatsapp).

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_carousel = new \Purelines\WhapiSdk\Model\SenderCarousel(); // \Purelines\WhapiSdk\Model\SenderCarousel | Message carousel

try {
    $result = $apiInstance->sendMessageCarousel($sender_carousel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageCarousel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_carousel** | [**\Purelines\WhapiSdk\Model\SenderCarousel**](../Model/SenderCarousel.md)| Message carousel | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageContact()`

```php
sendMessageContact($sender_contact): \Purelines\WhapiSdk\Model\SentMessage
```

👤 Send contact message

Simple and straightforward, this method allows you to send a contact. You don't need to have it added to your contacts list; simply fill in the method attributes with the contact information and send. [A few ready examples](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-contact-vcard)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_contact = {"to":"61371989950","name":"Name of contact","vcard":"BEGIN:VCARD\nVERSION:3.0\nN:Last Name;Example First Name;;;\nFN:Example First Name Last Name\nORG:Company Name Department\nTITLE:Job Title\nNOTE:null\nTEL;type=Mobile:+90 850242323\nitem1.URL:www.youdomain.com\nitem1.X-ABLabel:OTHER\nEMAIL;TYPE=Home:test@yourdomain.com\nitem2.ADR;type=Home:;;Street Example;Istanbul;;;Turkey\nitem2.X-ABADR:\nEND:VCARD"}; // \Purelines\WhapiSdk\Model\SenderContact | Message contact

try {
    $result = $apiInstance->sendMessageContact($sender_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_contact** | [**\Purelines\WhapiSdk\Model\SenderContact**](../Model/SenderContact.md)| Message contact | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageContactList()`

```php
sendMessageContactList($sender_contact_list): \Purelines\WhapiSdk\Model\SentMessage
```

👥 Send contact list message

Simple and straightforward, this method allows you to send multiple contacts. You don't need to have them in your contacts; just fill the method's attributes with the contact information and send. [A few ready examples](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-contact-vcard)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_contact_list = new \Purelines\WhapiSdk\Model\SenderContactList(); // \Purelines\WhapiSdk\Model\SenderContactList | Message contact list

try {
    $result = $apiInstance->sendMessageContactList($sender_contact_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_contact_list** | [**\Purelines\WhapiSdk\Model\SenderContactList**](../Model/SenderContactList.md)| Message contact list | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageDocument()`

```php
sendMessageDocument($sender_document): \Purelines\WhapiSdk\Model\SentMessage
```

📑 Send media-document message

This method is responsible for sending documents for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_document = {"to":"61371989950","media":"https://filesamples.com/samples/document/pdf/sample2.pdf","filename":"Example","caption":"Text caption under the document"}; // \Purelines\WhapiSdk\Model\SenderDocument | Message document

try {
    $result = $apiInstance->sendMessageDocument($sender_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_document** | [**\Purelines\WhapiSdk\Model\SenderDocument**](../Model/SenderDocument.md)| Message document | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageGif()`

```php
sendMessageGif($sender_gif): \Purelines\WhapiSdk\Model\SentMessage
```

🎬 Send media-gif message

Method responsible for sending GIFs to your chats through the API (The file to be sent must be an MP4)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_gif = {"to":"61371989950","media":"https://theminimalistfisherman.com/wp-content/uploads/2024/01/confused-cat-gif.gif"}; // \Purelines\WhapiSdk\Model\SenderGif | Message gif

try {
    $result = $apiInstance->sendMessageGif($sender_gif);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageGif: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_gif** | [**\Purelines\WhapiSdk\Model\SenderGif**](../Model/SenderGif.md)| Message gif | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageImage()`

```php
sendMessageImage($sender_image): \Purelines\WhapiSdk\Model\SentMessage
```

🖼 Send media-image message

This method is responsible for sending images for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_image = {"to":"61371989950","caption":"Hello, this message was sent via API!","media":"https://upload.wikimedia.org/wikipedia/commons/3/3f/JPEG_example_flower.jpg"}; // \Purelines\WhapiSdk\Model\SenderImage | Message image

try {
    $result = $apiInstance->sendMessageImage($sender_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_image** | [**\Purelines\WhapiSdk\Model\SenderImage**](../Model/SenderImage.md)| Message image | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageInteractive()`

```php
sendMessageInteractive($sender_interactive): \Purelines\WhapiSdk\Model\SentMessage
```

🎮 Send interactive message

This endpoint is responsible for sending messages with buttons. The section is constantly updated as the functionality of buttons depends on WhatsApp updates. Attention! The functionality of sending messages with buttons is not stable! For more information, please visit the [Button Status topic](https://support.whapi.cloud/help-desk/faq/current-status-of-buttons-on-whatsapp).

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_interactive = new \Purelines\WhapiSdk\Model\SenderInteractive(); // \Purelines\WhapiSdk\Model\SenderInteractive | Message interactive

try {
    $result = $apiInstance->sendMessageInteractive($sender_interactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageInteractive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_interactive** | [**\Purelines\WhapiSdk\Model\SenderInteractive**](../Model/SenderInteractive.md)| Message interactive | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageLinkPreview()`

```php
sendMessageLinkPreview($sender_link_preview): \Purelines\WhapiSdk\Model\SentMessage
```

📎 Send link preview message

Method responsible for sending links with customize preview to your contacts, it is used to share links so that the user can be redirected to a website. Your link must necessarily be in the Body parameter. It is important for you to know that [the link is only clickable](https://support.whapi.cloud/help-desk/faq/inactive-links-in-whatsapp-messages) if the recipient already has your phone number in their contacts, or if they start a conversation with you

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_link_preview = {"to":"61371989950","body":"Here you can write text about a page on this site. It is important that this text must contain a link to be sent in the message! https://whapi.cloud/features","title":"The title of your link","media":"https://whapi.cloud/assets/img/content/whatsapp-cloud-api.png"}; // \Purelines\WhapiSdk\Model\SenderLinkPreview | Message link preview send parameters

try {
    $result = $apiInstance->sendMessageLinkPreview($sender_link_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLinkPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_link_preview** | [**\Purelines\WhapiSdk\Model\SenderLinkPreview**](../Model/SenderLinkPreview.md)| Message link preview send parameters | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageLiveLocation()`

```php
sendMessageLiveLocation($sender_live_location): \Purelines\WhapiSdk\Model\SentMessage
```

🧭 Send live location message

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_live_location = new \Purelines\WhapiSdk\Model\SenderLiveLocation(); // \Purelines\WhapiSdk\Model\SenderLiveLocation | Message live location

try {
    $result = $apiInstance->sendMessageLiveLocation($sender_live_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLiveLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_live_location** | [**\Purelines\WhapiSdk\Model\SenderLiveLocation**](../Model/SenderLiveLocation.md)| Message live location | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageLocation()`

```php
sendMessageLocation($sender_location): \Purelines\WhapiSdk\Model\SentMessage
```

📍 Send location message

Method responsible for sending a fixed location to your contacts, it is mostly used to send an address’s location

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_location = new \Purelines\WhapiSdk\Model\SenderLocation(); // \Purelines\WhapiSdk\Model\SenderLocation | Message location

try {
    $result = $apiInstance->sendMessageLocation($sender_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_location** | [**\Purelines\WhapiSdk\Model\SenderLocation**](../Model/SenderLocation.md)| Message location | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessagePoll()`

```php
sendMessagePoll($sender_poll): \Purelines\WhapiSdk\Model\SentMessage
```

📊 Send poll message

In this method, you can send poll-type messages. Often, it's the polls that replace [the buttons for interactive communication](https://support.whapi.cloud/help-desk/hints/how-to-use-polls-as-buttons)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_poll = new \Purelines\WhapiSdk\Model\SenderPoll(); // \Purelines\WhapiSdk\Model\SenderPoll | Message poll

try {
    $result = $apiInstance->sendMessagePoll($sender_poll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessagePoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_poll** | [**\Purelines\WhapiSdk\Model\SenderPoll**](../Model/SenderPoll.md)| Message poll | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageShort()`

```php
sendMessageShort($sender_short): \Purelines\WhapiSdk\Model\SentMessage
```

📹 Send media-short video message (PTV)

This method is responsible for sending a short video in the circle for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_short = {"to":"61371989950","media":"https://whapi.cloud/assets/img/example/example.mp4"}; // \Purelines\WhapiSdk\Model\SenderShort | Message short

try {
    $result = $apiInstance->sendMessageShort($sender_short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageShort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_short** | [**\Purelines\WhapiSdk\Model\SenderShort**](../Model/SenderShort.md)| Message short | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageSticker()`

```php
sendMessageSticker($sender_sticker): \Purelines\WhapiSdk\Model\SentMessage
```

🎭 Send media-sticker message

This method is responsible for sending a sticker message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_sticker = new \Purelines\WhapiSdk\Model\SenderSticker(); // \Purelines\WhapiSdk\Model\SenderSticker | Message sticker

try {
    $result = $apiInstance->sendMessageSticker($sender_sticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_sticker** | [**\Purelines\WhapiSdk\Model\SenderSticker**](../Model/SenderSticker.md)| Message sticker | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageStory()`

```php
sendMessageStory($sender_stories): \Purelines\WhapiSdk\Model\SentMessage
```

👁️‍🗨️ Send story message

The method responsible for sending images or texts to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories = new \Purelines\WhapiSdk\Model\SenderStories(); // \Purelines\WhapiSdk\Model\SenderStories | Stories post parameters

try {
    $result = $apiInstance->sendMessageStory($sender_stories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories** | [**\Purelines\WhapiSdk\Model\SenderStories**](../Model/SenderStories.md)| Stories post parameters | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageStoryAudio()`

```php
sendMessageStoryAudio($sender_stories_audio): \Purelines\WhapiSdk\Model\SentMessage
```

🎵️ Send story audio message

The method responsible for sending audio to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_audio = new \Purelines\WhapiSdk\Model\SenderStoriesAudio(); // \Purelines\WhapiSdk\Model\SenderStoriesAudio | Stories post parameters for audio

try {
    $result = $apiInstance->sendMessageStoryAudio($sender_stories_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories_audio** | [**\Purelines\WhapiSdk\Model\SenderStoriesAudio**](../Model/SenderStoriesAudio.md)| Stories post parameters for audio | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageStoryMedia()`

```php
sendMessageStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts, $exclude_contacts): \Purelines\WhapiSdk\Model\SentMessage
```

🖼 Send story media message

The method responsible for sending images or video to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media = new \Purelines\WhapiSdk\Model\SendMediaMedia(); // \Purelines\WhapiSdk\Model\SendMediaMedia
$mime_type = 'mime_type_example'; // string | Mime type of media
$no_encode = True; // bool | Do not use our encoding
$no_cache = True; // bool | Do not use the cache in a request
$caption = 'caption_example'; // string | Optional. Text caption under the media.
$preview = 'preview_example'; // string | Optional. Base64 encoded preview of the media. In JPEG format.
$width = 56; // int | Width of the media in pixels
$height = 56; // int | Height of the media in pixels
$contacts = array('contacts_example'); // string[] | List of contacts to send the story to
$exclude_contacts = array('exclude_contacts_example'); // string[] | List of contacts to exclude

try {
    $result = $apiInstance->sendMessageStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts, $exclude_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media** | [**\Purelines\WhapiSdk\Model\SendMediaMedia**](../Model/SendMediaMedia.md)|  | |
| **mime_type** | **string**| Mime type of media | [optional] |
| **no_encode** | **bool**| Do not use our encoding | [optional] |
| **no_cache** | **bool**| Do not use the cache in a request | [optional] |
| **caption** | **string**| Optional. Text caption under the media. | [optional] |
| **preview** | **string**| Optional. Base64 encoded preview of the media. In JPEG format. | [optional] |
| **width** | **int**| Width of the media in pixels | [optional] |
| **height** | **int**| Height of the media in pixels | [optional] |
| **contacts** | [**string[]**](../Model/string.md)| List of contacts to send the story to | [optional] |
| **exclude_contacts** | [**string[]**](../Model/string.md)| List of contacts to exclude | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageStoryText()`

```php
sendMessageStoryText($sender_stories_text): \Purelines\WhapiSdk\Model\SentMessage
```

💬 Send story text message

The method responsible for sending texts to your status. Remember that statuses disappear after 24 hours.

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_text = new \Purelines\WhapiSdk\Model\SenderStoriesText(); // \Purelines\WhapiSdk\Model\SenderStoriesText | Text stories post parameters

try {
    $result = $apiInstance->sendMessageStoryText($sender_stories_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories_text** | [**\Purelines\WhapiSdk\Model\SenderStoriesText**](../Model/SenderStoriesText.md)| Text stories post parameters | |

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

## `sendMessageText()`

```php
sendMessageText($sender_text): \Purelines\WhapiSdk\Model\SentMessage
```

💬 Send text message

This endpoint will let you send messages to any WhatsApp-enabled phone number or to any WhatsApp Group/Channel using your own number connected to Whapi.Cloud. Follow the instructions if you want to [format text](https://support.whapi.cloud/help-desk/faq/whatsapp-text-formatting), [send a emoji](https://support.whapi.cloud/help-desk/sending/send-emoji) or [use line breaks](https://support.whapi.cloud/help-desk/faq/how-to-send-a-paragraph-line-break).

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_text = {"to":"61371989950","body":"Hello, this message was sent via API!"}; // \Purelines\WhapiSdk\Model\SenderText | Message text

try {
    $result = $apiInstance->sendMessageText($sender_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_text** | [**\Purelines\WhapiSdk\Model\SenderText**](../Model/SenderText.md)| Message text | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageVideo()`

```php
sendMessageVideo($sender_video): \Purelines\WhapiSdk\Model\SentMessage
```

🎥 Send media-video message

This method is responsible for sending a video message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_video = {"to":"61371989950","caption":"Hello, this message was sent via API!","media":"https://whapi.cloud/assets/img/example/example.mp4"}; // \Purelines\WhapiSdk\Model\SenderVideo | Message video

try {
    $result = $apiInstance->sendMessageVideo($sender_video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_video** | [**\Purelines\WhapiSdk\Model\SenderVideo**](../Model/SenderVideo.md)| Message video | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageVoice()`

```php
sendMessageVoice($sender_voice): \Purelines\WhapiSdk\Model\SentMessage
```

🎤 Send media-voice message

This method is responsible for sending a voice message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document). However, there are [some nuances](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-voice-message) when sending voice messages

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_voice = {"to":"61371989950","media":"https://upload.wikimedia.org/wikipedia/commons/c/c8/Example.ogg"}; // \Purelines\WhapiSdk\Model\SenderVoice | Message voice

try {
    $result = $apiInstance->sendMessageVoice($sender_voice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageVoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_voice** | [**\Purelines\WhapiSdk\Model\SenderVoice**](../Model/SenderVoice.md)| Message voice | |

### Return type

[**\Purelines\WhapiSdk\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `starMessage()`

```php
starMessage($message_id, $star): \Purelines\WhapiSdk\Model\ResponseSuccess
```

⭐ Star message

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$star = new \Purelines\WhapiSdk\Model\Star(); // \Purelines\WhapiSdk\Model\Star | Star message

try {
    $result = $apiInstance->starMessage($message_id, $star);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->starMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **star** | [**\Purelines\WhapiSdk\Model\Star**](../Model/Star.md)| Star message | |

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

## `unpinMessage()`

```php
unpinMessage($message_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Unpin message

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


$apiInstance = new Purelines\WhapiSdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->unpinMessage($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->unpinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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
