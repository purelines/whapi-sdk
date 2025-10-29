# Purelines\WhapiSdk\MediaApi

Manage the media of the channel

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMedia()**](MediaApi.md#deleteMedia) | **DELETE** /media/{MediaID} | Delete media |
| [**getMedia()**](MediaApi.md#getMedia) | **GET** /media/{MediaID} | Get media |
| [**getMediaFiles()**](MediaApi.md#getMediaFiles) | **GET** /media | Get media files |
| [**uploadMedia()**](MediaApi.md#uploadMedia) | **POST** /media | Upload media |


## `deleteMedia()`

```php
deleteMedia($media_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Delete media

Delete a file from the cloud by ID

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


$apiInstance = new Purelines\WhapiSdk\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | Media ID

try {
    $result = $apiInstance->deleteMedia($media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->deleteMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_id** | **string**| Media ID | |

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

## `getMedia()`

```php
getMedia($media_id): \SplFileObject
```

Get media

Receive a file from the cloud by ID. [Read more about file storage period.](https://support.whapi.cloud/help-desk/receiving/file-expiration-period)

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


$apiInstance = new Purelines\WhapiSdk\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | Media ID

try {
    $result = $apiInstance->getMedia($media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_id** | **string**| Media ID | |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/msword`, `application/vnd.ms-powerpoint`, `application/vnd.ms-excel`, `text/plain`, `image/jpeg`, `image/png`, `audio/aac`, `audio/mp4`, `audio/amr`, `audio/mpeg`, `audio/ogg`, `codecs=opus`, `video/mp4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaFiles()`

```php
getMediaFiles($count, $offset, $time_from, $time_to, $sort): \Purelines\WhapiSdk\Model\MediaFilesList
```

Get media files

This method is responsible for returning all of your media files

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


$apiInstance = new Purelines\WhapiSdk\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$time_from = 3.4; // float | Timestamp from which to get objects
$time_to = 3.4; // float | Timestamp up to which to get objects
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->getMediaFiles($count, $offset, $time_from, $time_to, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **time_from** | **float**| Timestamp from which to get objects | [optional] |
| **time_to** | **float**| Timestamp up to which to get objects | [optional] |
| **sort** | **string**| Order for items in request | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\MediaFilesList**](../Model/MediaFilesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMedia()`

```php
uploadMedia($body): \Purelines\WhapiSdk\Model\UploadMediaResponse
```

Upload media

This method is used to upload a file to cloud storage. In the response, you will receive the MediaID for the uploaded file, which can be used later, for example, to send media messages. The file type are determined by the file extension. [Read more about file storage period.](https://support.whapi.cloud/help-desk/receiving/file-expiration-period)

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


$apiInstance = new Purelines\WhapiSdk\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadMedia($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->uploadMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Purelines\WhapiSdk\Model\UploadMediaResponse**](../Model/UploadMediaResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/pdf`, `application/msword`, `application/vnd.ms-powerpoint`, `application/vnd.ms-excel`, `text/plain`, `image/jpeg`, `image/png`, `audio/aac`, `audio/mp4`, `audio/amr`, `audio/mpeg`, `audio/ogg`, `codecs=opus`, `video/mp4`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
