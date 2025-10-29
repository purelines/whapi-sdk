# Purelines\WhapiSdk\UsersApi

Manage the WhatsApp users related to the channel

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeStatus()**](UsersApi.md#changeStatus) | **PUT** /status | Change status text |
| [**getUserProfile()**](UsersApi.md#getUserProfile) | **GET** /users/profile | User info |
| [**loginUser()**](UsersApi.md#loginUser) | **GET** /users/login | Login user with QR-base64 |
| [**loginUserImage()**](UsersApi.md#loginUserImage) | **GET** /users/login/image | Login user with QR-image |
| [**loginUserRowData()**](UsersApi.md#loginUserRowData) | **GET** /users/login/rowdata | Login user with QR-rowdata |
| [**loginUserViaAuthCode()**](UsersApi.md#loginUserViaAuthCode) | **GET** /users/login/{PhoneNumber} | Get auth code by phone number |
| [**logoutUser()**](UsersApi.md#logoutUser) | **POST** /users/logout | Logout user |
| [**updateUserProfile()**](UsersApi.md#updateUserProfile) | **PATCH** /users/profile | Update user info |


## `changeStatus()`

```php
changeStatus($change_status_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Change status text

Updates the \"About\" text of the account

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_status_request = new \Purelines\WhapiSdk\Model\ChangeStatusRequest(); // \Purelines\WhapiSdk\Model\ChangeStatusRequest | New about text

try {
    $result = $apiInstance->changeStatus($change_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_status_request** | [**\Purelines\WhapiSdk\Model\ChangeStatusRequest**](../Model/ChangeStatusRequest.md)| New about text | |

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

## `getUserProfile()`

```php
getUserProfile(): \Purelines\WhapiSdk\Model\UserProfile
```

User info

The method allows you to get information about your WhatsApp profile

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Purelines\WhapiSdk\Model\UserProfile**](../Model/UserProfile.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginUser()`

```php
loginUser($wakeup, $size, $width, $height, $color_light, $color_dark): \Purelines\WhapiSdk\Model\QR
```

Login user with QR-base64

This method returns an image of the type base64. You can render this in a component of the type image that is compatible with the language that you use to program. Just like on WhatsApp Web you will need to read a QR code to connect to Whapi.Cloud. There are two ways that you can do the reading of the QR code. Connect through our dashboard panel or Make this experience available within your own application.

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wakeup = true; // bool | If set to false, the channel will not launch
$size = 3.4; // float | Size of QR-code
$width = 3.4; // float | Width of result image
$height = 3.4; // float | Height of result image
$color_light = 'color_light_example'; // string | Background color
$color_dark = 'color_dark_example'; // string | Color of code

try {
    $result = $apiInstance->loginUser($wakeup, $size, $width, $height, $color_light, $color_dark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wakeup** | **bool**| If set to false, the channel will not launch | [optional] [default to true] |
| **size** | **float**| Size of QR-code | [optional] |
| **width** | **float**| Width of result image | [optional] |
| **height** | **float**| Height of result image | [optional] |
| **color_light** | **string**| Background color | [optional] |
| **color_dark** | **string**| Color of code | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\QR**](../Model/QR.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginUserImage()`

```php
loginUserImage($wakeup, $size, $width, $height, $color_light, $color_dark): \SplFileObject
```

Login user with QR-image

This method returns an image. Just like on WhatsApp Web you will need to read a QR code to connect to Whapi.Cloud. There are two ways that you can do the reading of the QR code. Connect through our dashboard panel or Make this experience available within your own application.

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wakeup = true; // bool | If set to false, the channel will not launch
$size = 3.4; // float | Size of QR-code
$width = 3.4; // float | Width of result image
$height = 3.4; // float | Height of result image
$color_light = 'color_light_example'; // string | Background color
$color_dark = 'color_dark_example'; // string | Color of code

try {
    $result = $apiInstance->loginUserImage($wakeup, $size, $width, $height, $color_light, $color_dark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wakeup** | **bool**| If set to false, the channel will not launch | [optional] [default to true] |
| **size** | **float**| Size of QR-code | [optional] |
| **width** | **float**| Width of result image | [optional] |
| **height** | **float**| Height of result image | [optional] |
| **color_light** | **string**| Background color | [optional] |
| **color_dark** | **string**| Color of code | [optional] |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginUserRowData()`

```php
loginUserRowData($wakeup): \Purelines\WhapiSdk\Model\QR
```

Login user with QR-rowdata

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wakeup = true; // bool | If set to false, the channel will not launch

try {
    $result = $apiInstance->loginUserRowData($wakeup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUserRowData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wakeup** | **bool**| If set to false, the channel will not launch | [optional] [default to true] |

### Return type

[**\Purelines\WhapiSdk\Model\QR**](../Model/QR.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginUserViaAuthCode()`

```php
loginUserViaAuthCode($phone_number): \Purelines\WhapiSdk\Model\AuthCode
```

Get auth code by phone number

This method returns a code that allows you to connect the phone number to the API without the need to scan a QR code, simply by entering the generated code.

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number = 'phone_number_example'; // string | Phone number without + and spaces, only digits

try {
    $result = $apiInstance->loginUserViaAuthCode($phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUserViaAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **string**| Phone number without + and spaces, only digits | |

### Return type

[**\Purelines\WhapiSdk\Model\AuthCode**](../Model/AuthCode.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutUser()`

```php
logoutUser(): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Logout user

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->logoutUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->logoutUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateUserProfile()`

```php
updateUserProfile($user_profile_update): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Update user info

This method is responsible for changing the details of your WhatsApp profile

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


$apiInstance = new Purelines\WhapiSdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_profile_update = {"name":"Some Cool Name","about":"Some Cool About","icon":"https://pps.whatsapp.net/v/..."}; // \Purelines\WhapiSdk\Model\UserProfileUpdate | Change user profile

try {
    $result = $apiInstance->updateUserProfile($user_profile_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_profile_update** | [**\Purelines\WhapiSdk\Model\UserProfileUpdate**](../Model/UserProfileUpdate.md)| Change user profile | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
