# Kaufland\Seller\PlaygroundApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlaygroundOrder**](PlaygroundApi.md#createplaygroundorder) | **POST** /playground/orders | Creates a dummy order on the kaufland playground API environment.

# **createPlaygroundOrder**
> \Kaufland\Seller\Model\BaseCollectionApiResponseCreatedOrder_ createPlaygroundOrder($body, $storefront)

Creates a dummy order on the kaufland playground API environment.

Create a playground order.  THIS ENDPOINT IS ONLY EXPOSED ON THE PLAYGROUND ENVIRONMENT.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\CreateCollectionInputUnitsDetails_(); // \Kaufland\Seller\Model\CreateCollectionInputUnitsDetails_ | 
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Locale of storefront

try {
    $result = $apiInstance->createPlaygroundOrder($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->createPlaygroundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\CreateCollectionInputUnitsDetails_**](../Model/CreateCollectionInputUnitsDetails_.md)|  |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Locale of storefront |

### Return type

[**\Kaufland\Seller\Model\BaseCollectionApiResponseCreatedOrder_**](../Model/BaseCollectionApiResponseCreatedOrder_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

