# Purelines\WhapiSdk\BusinessApi

WhatsApp Business Functions

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCollection()**](BusinessApi.md#createCollection) | **POST** /business/collections | Create collection |
| [**createProduct()**](BusinessApi.md#createProduct) | **POST** /business/products | Create product |
| [**deleteCollection()**](BusinessApi.md#deleteCollection) | **DELETE** /business/collections/{CollectionID} | Delete collection |
| [**deleteProduct()**](BusinessApi.md#deleteProduct) | **DELETE** /business/products/{ProductID} | Delete product |
| [**editBusinessProfile()**](BusinessApi.md#editBusinessProfile) | **POST** /business | Edit your Business Profile |
| [**editCollection()**](BusinessApi.md#editCollection) | **PATCH** /business/collections/{CollectionID} | Edit collection |
| [**getBusinessProfile()**](BusinessApi.md#getBusinessProfile) | **GET** /business | Get business profile |
| [**getCollection()**](BusinessApi.md#getCollection) | **GET** /business/collections/{CollectionID} | Get collection |
| [**getCollectionProductList()**](BusinessApi.md#getCollectionProductList) | **GET** /business/collections/{CollectionID}/products | Get collection |
| [**getCollectionsList()**](BusinessApi.md#getCollectionsList) | **GET** /business/collections | Get collections |
| [**getCollectionsProductsList()**](BusinessApi.md#getCollectionsProductsList) | **GET** /business/collections/products | Get collections products |
| [**getContactProducts()**](BusinessApi.md#getContactProducts) | **GET** /business/{ContactID}/products | Get products by Contact ID |
| [**getOrderItems()**](BusinessApi.md#getOrderItems) | **GET** /business/orders/{OrderID} | Get order items |
| [**getProduct()**](BusinessApi.md#getProduct) | **GET** /business/products/{ProductID} | Get product |
| [**getProducts()**](BusinessApi.md#getProducts) | **GET** /business/products | Get products |
| [**sendCatalog()**](BusinessApi.md#sendCatalog) | **POST** /business/catalogs/{ContactID} | Send catalog by Contact ID (phone number) |
| [**sendProduct()**](BusinessApi.md#sendProduct) | **POST** /business/products/{ProductID} | Send product |
| [**updateProduct()**](BusinessApi.md#updateProduct) | **PATCH** /business/products/{ProductID} | Update product |


## `createCollection()`

```php
createCollection($business_collection_create): \Purelines\WhapiSdk\Model\BusinessCollectionEditResult
```

Create collection

Create business collection

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_collection_create = new \Purelines\WhapiSdk\Model\BusinessCollectionCreate(); // \Purelines\WhapiSdk\Model\BusinessCollectionCreate | Business collection parameters

try {
    $result = $apiInstance->createCollection($business_collection_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_collection_create** | [**\Purelines\WhapiSdk\Model\BusinessCollectionCreate**](../Model/BusinessCollectionCreate.md)| Business collection parameters | |

### Return type

[**\Purelines\WhapiSdk\Model\BusinessCollectionEditResult**](../Model/BusinessCollectionEditResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProduct()`

```php
createProduct($product_create): \Purelines\WhapiSdk\Model\Product
```

Create product

In this method you will be able to register a product in your catalog

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_create = new \Purelines\WhapiSdk\Model\ProductCreate(); // \Purelines\WhapiSdk\Model\ProductCreate | Request body

try {
    $result = $apiInstance->createProduct($product_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_create** | [**\Purelines\WhapiSdk\Model\ProductCreate**](../Model/ProductCreate.md)| Request body | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\Product**](../Model/Product.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCollection()`

```php
deleteCollection($collection_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Delete collection

Method to delete business collection

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Collection ID

try {
    $result = $apiInstance->deleteCollection($collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Collection ID | |

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

## `deleteProduct()`

```php
deleteProduct($product_id): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Delete product

In this method you will be able to delete a product by its ID

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Product ID

try {
    $result = $apiInstance->deleteProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product ID | |

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

## `editBusinessProfile()`

```php
editBusinessProfile($business_profile_custom): \Purelines\WhapiSdk\Model\ResponseSuccess
```

Edit your Business Profile

The method allows you to edit information of your WhatsApp Business profile

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_profile_custom = new \Purelines\WhapiSdk\Model\BusinessProfileCustom(); // \Purelines\WhapiSdk\Model\BusinessProfileCustom | Request body

try {
    $result = $apiInstance->editBusinessProfile($business_profile_custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->editBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_profile_custom** | [**\Purelines\WhapiSdk\Model\BusinessProfileCustom**](../Model/BusinessProfileCustom.md)| Request body | [optional] |

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

## `editCollection()`

```php
editCollection($collection_id, $business_collection_edit): \Purelines\WhapiSdk\Model\BusinessCollectionEditResult
```

Edit collection

With this method you will be able to edit business collection

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Collection ID
$business_collection_edit = new \Purelines\WhapiSdk\Model\BusinessCollectionEdit(); // \Purelines\WhapiSdk\Model\BusinessCollectionEdit | Business collection edit parameters

try {
    $result = $apiInstance->editCollection($collection_id, $business_collection_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->editCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Collection ID | |
| **business_collection_edit** | [**\Purelines\WhapiSdk\Model\BusinessCollectionEdit**](../Model/BusinessCollectionEdit.md)| Business collection edit parameters | |

### Return type

[**\Purelines\WhapiSdk\Model\BusinessCollectionEditResult**](../Model/BusinessCollectionEditResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessProfile()`

```php
getBusinessProfile(): \Purelines\WhapiSdk\Model\BusinessProfile
```

Get business profile

The method allows you to get information about your WhatsApp Business profile

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBusinessProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Purelines\WhapiSdk\Model\BusinessProfile**](../Model/BusinessProfile.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollection()`

```php
getCollection($collection_id): \Purelines\WhapiSdk\Model\BusinessCollection
```

Get collection

With this method you will be able to get business collection

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Collection ID

try {
    $result = $apiInstance->getCollection($collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Collection ID | |

### Return type

[**\Purelines\WhapiSdk\Model\BusinessCollection**](../Model/BusinessCollection.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionProductList()`

```php
getCollectionProductList($collection_id, $products_count): \Purelines\WhapiSdk\Model\ProductsList
```

Get collection

With this method you will be able to get business collection products

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | Collection ID
$products_count = 10; // float | Count of products in collection to return

try {
    $result = $apiInstance->getCollectionProductList($collection_id, $products_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getCollectionProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Collection ID | |
| **products_count** | **float**| Count of products in collection to return | [optional] [default to 10] |

### Return type

[**\Purelines\WhapiSdk\Model\ProductsList**](../Model/ProductsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionsList()`

```php
getCollectionsList($count, $offset): \Purelines\WhapiSdk\Model\BusinessCollectionList
```

Get collections

With this method you will be able to get the collections list from a Whatsapp Business catalog. Products count in collection is 10.

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getCollectionsList($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getCollectionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\BusinessCollectionList**](../Model/BusinessCollectionList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionsProductsList()`

```php
getCollectionsProductsList($count, $offset, $products_count): \Purelines\WhapiSdk\Model\BusinessCollectionList
```

Get collections products

With this method you will be able to get the products list from a Whatsapp Business catalog

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$products_count = 10; // float | Count of products in collection to return

try {
    $result = $apiInstance->getCollectionsProductsList($count, $offset, $products_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getCollectionsProductsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **products_count** | **float**| Count of products in collection to return | [optional] [default to 10] |

### Return type

[**\Purelines\WhapiSdk\Model\BusinessCollectionList**](../Model/BusinessCollectionList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactProducts()`

```php
getContactProducts($contact_id, $count, $offset): \Purelines\WhapiSdk\Model\ProductsList
```

Get products by Contact ID

This method allows you to get the catalog and products by [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it), even if it is not in your contact list

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getContactProducts($contact_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getContactProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact ID | |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\ProductsList**](../Model/ProductsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderItems()`

```php
getOrderItems($order_id, $order_token): \Purelines\WhapiSdk\Model\OrderItems
```

Get order items

The method allows you to get information about the items in the shopping cart sent to you in messages. Note! Use the token as a Query (as in a get request). [More details in the knowledge base](https://support.whapi.cloud/help-desk/receiving/http-api/get-order-items)

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID
$order_token = 'order_token_example'; // string | Base64 token from order for receiving information

try {
    $result = $apiInstance->getOrderItems($order_id, $order_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order ID | |
| **order_token** | **string**| Base64 token from order for receiving information | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\OrderItems**](../Model/OrderItems.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($product_id): \Purelines\WhapiSdk\Model\Product
```

Get product

In this method you will be able to get your product by its ID

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Product ID

try {
    $result = $apiInstance->getProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product ID | |

### Return type

[**\Purelines\WhapiSdk\Model\Product**](../Model/Product.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($count, $offset): \Purelines\WhapiSdk\Model\ProductsList
```

Get products

With this method you will be able to get the products from a Whatsapp Business catalog

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getProducts($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\Purelines\WhapiSdk\Model\ProductsList**](../Model/ProductsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCatalog()`

```php
sendCatalog($contact_id, $sender_catalog_by_id): \Purelines\WhapiSdk\Model\SentMessage
```

Send catalog by Contact ID (phone number)

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID
$sender_catalog_by_id = new \Purelines\WhapiSdk\Model\SenderCatalogByID(); // \Purelines\WhapiSdk\Model\SenderCatalogByID | Message catalog

try {
    $result = $apiInstance->sendCatalog($contact_id, $sender_catalog_by_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->sendCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact ID | |
| **sender_catalog_by_id** | [**\Purelines\WhapiSdk\Model\SenderCatalogByID**](../Model/SenderCatalogByID.md)| Message catalog | |

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

## `sendProduct()`

```php
sendProduct($product_id, $sender_product_from_catalog): \Purelines\WhapiSdk\Model\SentMessage
```

Send product

The method is for sending an item from your catalog

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Product ID
$sender_product_from_catalog = new \Purelines\WhapiSdk\Model\SenderProductFromCatalog(); // \Purelines\WhapiSdk\Model\SenderProductFromCatalog | Message product

try {
    $result = $apiInstance->sendProduct($product_id, $sender_product_from_catalog);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->sendProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product ID | |
| **sender_product_from_catalog** | [**\Purelines\WhapiSdk\Model\SenderProductFromCatalog**](../Model/SenderProductFromCatalog.md)| Message product | |

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

## `updateProduct()`

```php
updateProduct($product_id, $product_edit): \Purelines\WhapiSdk\Model\Product
```

Update product

The *images* field is required and must contain all images

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


$apiInstance = new Purelines\WhapiSdk\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Product ID
$product_edit = new \Purelines\WhapiSdk\Model\ProductEdit(); // \Purelines\WhapiSdk\Model\ProductEdit | Message product

try {
    $result = $apiInstance->updateProduct($product_id, $product_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product ID | |
| **product_edit** | [**\Purelines\WhapiSdk\Model\ProductEdit**](../Model/ProductEdit.md)| Message product | |

### Return type

[**\Purelines\WhapiSdk\Model\Product**](../Model/Product.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
