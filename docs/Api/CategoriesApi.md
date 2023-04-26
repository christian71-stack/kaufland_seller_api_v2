# Cbdesk\Kauflandv2\Api\CategoriesApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decideCategory**](CategoriesApi.md#decidecategory) | **POST** /categories/decide | Guess categories
[**getCategoriesList**](CategoriesApi.md#getcategorieslist) | **GET** /categories | Get category list by search term
[**getCategory**](CategoriesApi.md#getcategory) | **GET** /categories/{id_category} | Get category by ID
[**getCategoryTree**](CategoriesApi.md#getcategorytree) | **GET** /categories/tree | Get complete category tree

# **decideCategory**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseCategory_ decideCategory($body, $storefront, $locale)

Guess categories

Guess potential categories for a product based on its product data. The first result is the category the product is most likely in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\CategoryDecideRequestBody(); // \Cbdesk\Kauflandv2\Api\Model\CategoryDecideRequestBody | Json object with product data
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->decideCategory($body, $storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->decideCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\CategoryDecideRequestBody**](../Model/CategoryDecideRequestBody.md)| Json object with product data |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseCategory_**](../Model/CollectionApiResponseCategory_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoriesList**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseCategory_ getCategoriesList($storefront, $q, $id_parent, $limit, $offset, $locale)

Get category list by search term

Get a list of categories that contain a specific search term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$q = "q_example"; // string | Search term for finding a specific category
$id_parent = 789; // int | ID of parent category
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategoriesList($storefront, $q, $id_parent, $limit, $offset, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **q** | **string**| Search term for finding a specific category | [optional]
 **id_parent** | **int**| ID of parent category | [optional]
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseCategory_**](../Model/CollectionApiResponseCategory_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategory**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseCategoryWithEmbedded_ getCategory($id_category, $storefront, $embedded, $locale)

Get category by ID

Get a category by <code>id_category</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_category = 789; // int | The ID of the desired category
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\CategoryEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\CategoryEmbeddable[] | Include other entities in the results of the result list
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategory($id_category, $storefront, $embedded, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_category** | **int**| The ID of the desired category |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\CategoryEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\CategoryEmbeddable.md)| Include other entities in the results of the result list | [optional]
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseCategoryWithEmbedded_**](../Model/ApiResponseCategoryWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryTree**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseCategoryTree_ getCategoryTree($storefront, $locale)

Get complete category tree

Get a complete category tree with all categories and their relationships, fields and values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$locale = new \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataLocale | Allows clients to consume the data in languages that are different from the storefront-default locale

try {
    $result = $apiInstance->getCategoryTree($storefront, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataLocale**](../Model/.md)| Allows clients to consume the data in languages that are different from the storefront-default locale | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseCategoryTree_**](../Model/ApiResponseCategoryTree_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

