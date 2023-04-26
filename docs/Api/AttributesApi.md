# Cbdesk\Kauflandv2\Api\AttributesApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAttribute**](AttributesApi.md#getattribute) | **GET** /attributes/{id_attribute} | Get attribute by ID
[**getAttributeByName**](AttributesApi.md#getattributebyname) | **GET** /attributes/by-name/{name} | Get attribute by name
[**getAttributeList**](AttributesApi.md#getattributelist) | **GET** /attributes | Get an attribute list
[**getAttributeListBySearch**](AttributesApi.md#getattributelistbysearch) | **GET** /attributes/search | Get attributes by search term

# **getAttribute**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseAttribute_ getAttribute($id_attribute, $storefront, $locale)

Get attribute by ID

Get an attribute by <code>id_attribute</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_attribute = 789; // int | The ID of the attribute
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttribute($id_attribute, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_attribute** | **int**| The ID of the attribute |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseAttribute_**](../Model/ApiResponseAttribute_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributeByName**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseAttribute_ getAttributeByName($name, $storefront, $locale)

Get attribute by name

Get an attribute by its name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the attribute
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeByName($name, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the attribute |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseAttribute_**](../Model/ApiResponseAttribute_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributeList**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseAttribute_ getAttributeList($storefront, $limit, $offset, $locale)

Get an attribute list

Get a list of all available attributes for a specific language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeList($storefront, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseAttribute_**](../Model/CollectionApiResponseAttribute_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributeListBySearch**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseAttribute_ getAttributeListBySearch($storefront, $q, $limit, $offset, $locale)

Get attributes by search term

Get a list of attributes by a search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$q = "q_example"; // string | Search term for finding a specific attribute
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getAttributeListBySearch($storefront, $q, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeListBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **q** | **string**| Search term for finding a specific attribute |
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseAttribute_**](../Model/CollectionApiResponseAttribute_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

