# Purelines\WhapiSdk\CommunitiesApi

WhatsApp Communities Functions

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCommunityParticipant()**](CommunitiesApi.md#addCommunityParticipant) | **POST** /communities/{CommunityID}/participants | Add participants to community |
| [**changeCommunitySettings()**](CommunitiesApi.md#changeCommunitySettings) | **PATCH** /communities/{CommunityID}/settings | Change community settings |
| [**createCommunity()**](CommunitiesApi.md#createCommunity) | **POST** /communities | Create community |
| [**createEvent()**](CommunitiesApi.md#createEvent) | **POST** /communities/event | Create event |
| [**createGroupInCommunity()**](CommunitiesApi.md#createGroupInCommunity) | **POST** /communities/{CommunityID} | Create group in community |
| [**createGroupInCommunityDeprecated()**](CommunitiesApi.md#createGroupInCommunityDeprecated) | **POST** /communities/{CommunityID}/createGroup | Create group in community |
| [**deactivateCommunity()**](CommunitiesApi.md#deactivateCommunity) | **DELETE** /communities/{CommunityID} | Deactivate community |
| [**demoteCommunityParticipant()**](CommunitiesApi.md#demoteCommunityParticipant) | **DELETE** /communities/{CommunityID}/admins | Demote participants to admin in community |
| [**getCommunities()**](CommunitiesApi.md#getCommunities) | **GET** /communities | Get communities |
| [**getCommunity()**](CommunitiesApi.md#getCommunity) | **GET** /communities/{CommunityID} | Get community |
| [**getCommunitySubGroups()**](CommunitiesApi.md#getCommunitySubGroups) | **GET** /communities/{CommunityID}/subgroups | Get community subgroups |
| [**joinInCommunityGroup()**](CommunitiesApi.md#joinInCommunityGroup) | **POST** /communities/{CommunityID}/{GroupID}/join | Join in community group |
| [**linkGroupToCommunity()**](CommunitiesApi.md#linkGroupToCommunity) | **PUT** /communities/{CommunityID}/{GroupID} | Link group to community |
| [**promoteCommunityParticipant()**](CommunitiesApi.md#promoteCommunityParticipant) | **PATCH** /communities/{CommunityID}/admins | Promote participants to admin in community |
| [**removeCommunityParticipant()**](CommunitiesApi.md#removeCommunityParticipant) | **DELETE** /communities/{CommunityID}/participants | Remove participants from community |
| [**revokeCommunityInvite()**](CommunitiesApi.md#revokeCommunityInvite) | **DELETE** /communities/{CommunityID}/link | Revoke community invite code |
| [**unlinkGroupFromCommunity()**](CommunitiesApi.md#unlinkGroupFromCommunity) | **DELETE** /communities/{CommunityID}/{GroupID} | Unlink group from community |


## `addCommunityParticipant()`

```php
addCommunityParticipant($community_id, $list_participants_request): \Purelines\WhapiSdk\Model\ResponseListParticipants
```

Add participants to community

This method is responsible for add participants community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \Purelines\WhapiSdk\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->addCommunityParticipant($community_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->addCommunityParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **list_participants_request** | [**\Purelines\WhapiSdk\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseListParticipants**](../Model/ResponseListParticipants.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCommunitySettings()`

```php
changeCommunitySettings($community_id, $change_community_settings_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Change community settings

This method is responsible for change a community settings.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$change_community_settings_request = new \Purelines\WhapiSdk\Model\ChangeCommunitySettingsRequest(); // \Purelines\WhapiSdk\Model\ChangeCommunitySettingsRequest | Community change settings data

try {
    $result = $apiInstance->changeCommunitySettings($community_id, $change_community_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->changeCommunitySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **change_community_settings_request** | [**\Purelines\WhapiSdk\Model\ChangeCommunitySettingsRequest**](../Model/ChangeCommunitySettingsRequest.md)| Community change settings data | |

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

## `createCommunity()`

```php
createCommunity($create_community_request): \Purelines\WhapiSdk\Model\Group
```

Create community

This method is responsible for creating a community. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_community_request = new \Purelines\WhapiSdk\Model\CreateCommunityRequest(); // \Purelines\WhapiSdk\Model\CreateCommunityRequest | Community data

try {
    $result = $apiInstance->createCommunity($create_community_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->createCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_community_request** | [**\Purelines\WhapiSdk\Model\CreateCommunityRequest**](../Model/CreateCommunityRequest.md)| Community data | |

### Return type

[**\Purelines\WhapiSdk\Model\Group**](../Model/Group.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEvent()`

```php
createEvent($create_event_request): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Create event

This method is responsible for creating a event.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_event_request = new \Purelines\WhapiSdk\Model\CreateEventRequest(); // \Purelines\WhapiSdk\Model\CreateEventRequest | Event body

try {
    $result = $apiInstance->createEvent($create_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_event_request** | [**\Purelines\WhapiSdk\Model\CreateEventRequest**](../Model/CreateEventRequest.md)| Event body | |

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

## `createGroupInCommunity()`

```php
createGroupInCommunity($community_id, $create_group_in_community_request): \Purelines\WhapiSdk\Model\Group
```

Create group in community

This method is responsible for creating a group in community. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$create_group_in_community_request = new \Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest(); // \Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest | Group data

try {
    $result = $apiInstance->createGroupInCommunity($community_id, $create_group_in_community_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->createGroupInCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **create_group_in_community_request** | [**\Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest**](../Model/CreateGroupInCommunityRequest.md)| Group data | |

### Return type

[**\Purelines\WhapiSdk\Model\Group**](../Model/Group.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroupInCommunityDeprecated()`

```php
createGroupInCommunityDeprecated($community_id, $create_group_in_community_request): \Purelines\WhapiSdk\Model\Group
```

Create group in community

This method is responsible for creating a group in community. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$create_group_in_community_request = new \Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest(); // \Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest | Group data

try {
    $result = $apiInstance->createGroupInCommunityDeprecated($community_id, $create_group_in_community_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->createGroupInCommunityDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **create_group_in_community_request** | [**\Purelines\WhapiSdk\Model\CreateGroupInCommunityRequest**](../Model/CreateGroupInCommunityRequest.md)| Group data | |

### Return type

[**\Purelines\WhapiSdk\Model\Group**](../Model/Group.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateCommunity()`

```php
deactivateCommunity($community_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Deactivate community

This method is responsible for deactivate community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID

try {
    $result = $apiInstance->deactivateCommunity($community_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->deactivateCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |

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

## `demoteCommunityParticipant()`

```php
demoteCommunityParticipant($community_id, $list_participants_request): \Purelines\WhapiSdk\Model\ResponseListParticipants
```

Demote participants to admin in community

This method is responsible for demote participants to admin in community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \Purelines\WhapiSdk\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->demoteCommunityParticipant($community_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->demoteCommunityParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **list_participants_request** | [**\Purelines\WhapiSdk\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseListParticipants**](../Model/ResponseListParticipants.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunities()`

```php
getCommunities($count, $offset): \Purelines\WhapiSdk\Model\GroupsList
```

Get communities

This method is responsible for get a communities. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getCommunities($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->getCommunities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\GroupsList**](../Model/GroupsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunity()`

```php
getCommunity($community_id): \Purelines\WhapiSdk\Model\Group
```

Get community

This method is responsible for get a community. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID

try {
    $result = $apiInstance->getCommunity($community_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->getCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |

### Return type

[**\Purelines\WhapiSdk\Model\Group**](../Model/Group.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunitySubGroups()`

```php
getCommunitySubGroups($community_id): \Purelines\WhapiSdk\Model\CommunitySubGroups
```

Get community subgroups

This method is responsible for get a community subgroups. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID

try {
    $result = $apiInstance->getCommunitySubGroups($community_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->getCommunitySubGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |

### Return type

[**\Purelines\WhapiSdk\Model\CommunitySubGroups**](../Model/CommunitySubGroups.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `joinInCommunityGroup()`

```php
joinInCommunityGroup($community_id, $group_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Join in community group

This method is responsible for join in community group. [Learn more about the nuances of community:](https://support.whapi.cloud/help-desk/communities/introduction)

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->joinInCommunityGroup($community_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->joinInCommunityGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **group_id** | **string**| Group ID | |

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

## `linkGroupToCommunity()`

```php
linkGroupToCommunity($community_id, $group_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Link group to community

This method is responsible for link group to community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->linkGroupToCommunity($community_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->linkGroupToCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **group_id** | **string**| Group ID | |

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

## `promoteCommunityParticipant()`

```php
promoteCommunityParticipant($community_id, $list_participants_request): \Purelines\WhapiSdk\Model\ResponseListParticipants
```

Promote participants to admin in community

This method is responsible for promote participants to admin in community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \Purelines\WhapiSdk\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->promoteCommunityParticipant($community_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->promoteCommunityParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **list_participants_request** | [**\Purelines\WhapiSdk\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseListParticipants**](../Model/ResponseListParticipants.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCommunityParticipant()`

```php
removeCommunityParticipant($community_id, $list_participants_request): \Purelines\WhapiSdk\Model\ResponseListParticipants
```

Remove participants from community

This method is responsible for remove paricipants from community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \Purelines\WhapiSdk\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->removeCommunityParticipant($community_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->removeCommunityParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **list_participants_request** | [**\Purelines\WhapiSdk\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

### Return type

[**\Purelines\WhapiSdk\Model\ResponseListParticipants**](../Model/ResponseListParticipants.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeCommunityInvite()`

```php
revokeCommunityInvite($community_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Revoke community invite code

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID

try {
    $result = $apiInstance->revokeCommunityInvite($community_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->revokeCommunityInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |

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

## `unlinkGroupFromCommunity()`

```php
unlinkGroupFromCommunity($community_id, $group_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Unlink group from community

This method is responsible for unlink group from community.

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


$apiInstance = new Purelines\WhapiSdk\Api\CommunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$community_id = 'community_id_example'; // string | Community ID
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->unlinkGroupFromCommunity($community_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunitiesApi->unlinkGroupFromCommunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **community_id** | **string**| Community ID | |
| **group_id** | **string**| Group ID | |

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
