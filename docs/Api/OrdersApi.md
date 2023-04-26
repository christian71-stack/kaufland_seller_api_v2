# Cbdesk\Kauflandv2\Api\OrdersApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder**](OrdersApi.md#getorder) | **GET** /orders/{id_order} | Get an order by ID
[**getOrders**](OrdersApi.md#getorders) | **GET** /orders | Get a list of orders

# **getOrder**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseOrderDetails_ getOrder($id_order, $embedded)

Get an order by ID

Get an order by <code>id_order</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order = "id_order_example"; // string | Order ID, unique across all orders
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\OrderEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\OrderEmbeddable[] | Add 'order_invoices' to get order related invoices in the response.

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
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\OrderEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\OrderEmbeddable.md)| Add &#x27;order_invoices&#x27; to get order related invoices in the response. | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseOrderDetails_**](../Model/ApiResponseOrderDetails_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseOrder_ getOrders($storefront, $ts_created_from_iso, $ts_units_updated_from_iso, $fulfillment_type, $limit, $offset)

Get a list of orders

Get a list of orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_units_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = array(new \Cbdesk\Kauflandv2\Api\Model\FulfillmentType()); // \Cbdesk\Kauflandv2\Api\Model\FulfillmentType[] | Get only orders which are fulfilled by the given type
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
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only orders which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_units_updated_from_iso** | **\DateTime**| Get only orders which units were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\FulfillmentType.md)| Get only orders which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseOrder_**](../Model/CollectionApiResponseOrder_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

