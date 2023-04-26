# Cbdesk\Kauflandv2\Api\ProductsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProduct**](ProductsApi.md#getproduct) | **GET** /products/{id_product} | Get product by ID
[**getProductByEan**](ProductsApi.md#getproductbyean) | **GET** /products/ean/{ean} | Get a product by EAN
[**getProductList**](ProductsApi.md#getproductlist) | **GET** /products/search | Get a list of products by search term

# **getProduct**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductWithEmbedded_ getProduct($id_product, $storefront, $embedded)

Get product by ID

Get a product by its <code>id_product</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_product = 789; // int | Kaufland internal id of the product
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[] | Include related entities in the result (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProduct($id_product, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_product** | **int**| Kaufland internal id of the product |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable.md)| Include related entities in the result (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductWithEmbedded_**](../Model/ApiResponseProductWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductByEan**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductWithEmbedded_ getProductByEan($ean, $storefront, $embedded)

Get a product by EAN

Get a product by EAN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | European Article Number with 13, 14 or 15 digits
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[] | Include related entities in the result (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProductByEan($ean, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductByEan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable.md)| Include related entities in the result (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductWithEmbedded_**](../Model/ApiResponseProductWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductList**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseProductWithEmbedded_ getProductList($storefront, $q, $limit, $offset, $embedded)

Get a list of products by search term

Get a list of products by search term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Specifies the store by country
$q = "q_example"; // string | Search term for finding a specific product
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[] | Include other entities in the results of the result list (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

try {
    $result = $apiInstance->getProductList($storefront, $q, $limit, $offset, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **q** | **string**| Search term for finding a specific product |
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ProductEmbeddable.md)| Include other entities in the results of the result list (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseProductWithEmbedded_**](../Model/CollectionApiResponseProductWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

