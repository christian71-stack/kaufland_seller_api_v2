# Kaufland\Seller\ProductsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductByEan**](ProductsApi.md#getproductbyean) | **GET** /products/ean/{ean} | Get a product by EAN

# **getProductByEan**
> \Kaufland\Seller\Model\ApiResponseProductWithEmbedded_ getProductByEan($ean, $storefront, $embedded)

Get a product by EAN

Get a product by EAN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | European Article Number with 13, 14 or 15 digits
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Specifies the store by country
$embedded = array(new \Kaufland\Seller\Model\ProductEmbeddable()); // \Kaufland\Seller\Model\ProductEmbeddable[] | Include related entities in the result (if both parameters \"category\" and \"category_basics\" are provided, only the parameter \"category\" is used)

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
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Specifies the store by country |
 **embedded** | [**\Kaufland\Seller\Model\ProductEmbeddable[]**](../Model/\Kaufland\Seller\Model\ProductEmbeddable.md)| Include related entities in the result (if both parameters \&quot;category\&quot; and \&quot;category_basics\&quot; are provided, only the parameter \&quot;category\&quot; is used) | [optional]

### Return type

[**\Kaufland\Seller\Model\ApiResponseProductWithEmbedded_**](../Model/ApiResponseProductWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

