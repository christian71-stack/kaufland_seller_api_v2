# Kaufland\Seller\OrdersApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlaygroundOrder**](OrdersApi.md#createplaygroundorder) | **POST** /playground/orders | Creates a dummy order on the kaufland playground API environment.
[**getOrder**](OrdersApi.md#getorder) | **GET** /orders/{id_order} | Get an order by ID
[**getOrders**](OrdersApi.md#getorders) | **GET** /orders | Get a list of orders

# **createPlaygroundOrder**
> \Kaufland\Seller\Model\BaseCollectionApiResponseCreatedOrder_ createPlaygroundOrder($body, $storefront)

Creates a dummy order on the kaufland playground API environment.

Create a playground order.  THIS ENDPOINT IS ONLY EXPOSED ON THE PLAYGROUND ENVIRONMENT.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrdersApi(
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
    echo 'Exception when calling OrdersApi->createPlaygroundOrder: ', $e->getMessage(), PHP_EOL;
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

# **getOrder**
> \Kaufland\Seller\Model\ApiResponseOrderDetails_ getOrder($id_order, $embedded)

Get an order by ID

Get an order by <code>id_order</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order = "id_order_example"; // string | Order ID, unique across all orders
$embedded = array(new \Kaufland\Seller\Model\OrderEmbeddable()); // \Kaufland\Seller\Model\OrderEmbeddable[] | Add 'order_invoices' to get order related invoices in the response.

try {
    $result = $apiInstance->getOrder($id_order, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order** | **string**| Order ID, unique across all orders |
 **embedded** | [**\Kaufland\Seller\Model\OrderEmbeddable[]**](../Model/\Kaufland\Seller\Model\OrderEmbeddable.md)| Add &#x27;order_invoices&#x27; to get order related invoices in the response. | [optional]

### Return type

[**\Kaufland\Seller\Model\ApiResponseOrderDetails_**](../Model/ApiResponseOrderDetails_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Kaufland\Seller\Model\CollectionApiResponseOrder_ getOrders($storefront, $ts_created_from_iso, $ts_units_updated_from_iso, $fulfillment_type, $limit, $offset)

Get a list of orders

Get a list of orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_units_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = array(new \Kaufland\Seller\Model\FulfillmentType()); // \Kaufland\Seller\Model\FulfillmentType[] | Get only orders which are fulfilled by the given type
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrders($storefront, $ts_created_from_iso, $ts_units_updated_from_iso, $fulfillment_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_units_updated_from_iso** | **\DateTime**| Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType[]**](../Model/\Kaufland\Seller\Model\FulfillmentType.md)| Get only orders which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\Kaufland\Seller\Model\CollectionApiResponseOrder_**](../Model/CollectionApiResponseOrder_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

