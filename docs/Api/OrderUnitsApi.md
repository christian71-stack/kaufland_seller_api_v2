# Kaufland\Seller\OrderUnitsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderUnit**](OrderUnitsApi.md#cancelorderunit) | **PATCH** /order-units/{id_order_unit}/cancel | Cancel an order unit
[**fulfilOrderUnit**](OrderUnitsApi.md#fulfilorderunit) | **PATCH** /order-units/{id_order_unit}/fulfil | Mark an order unit to be in fulfillment
[**getOrderUnit**](OrderUnitsApi.md#getorderunit) | **GET** /order-units/{id_order_unit} | Get an order unit by ID
[**getOrderUnits**](OrderUnitsApi.md#getorderunits) | **GET** /order-units | Get a list of order units
[**refundOrderUnit**](OrderUnitsApi.md#refundorderunit) | **PATCH** /order-units/{id_order_unit}/refund | Send a refund to a customer
[**sendOrderUnit**](OrderUnitsApi.md#sendorderunit) | **PATCH** /order-units/{id_order_unit}/send | Mark an order unit as sent

# **cancelOrderUnit**
> cancelOrderUnit($body, $id_order_unit)

Cancel an order unit

Cancel an order unit. Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#cancellation-reasons\" target=\"_blank\">documentation</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitCancelRequest(); // \Kaufland\Seller\Model\OrderUnitCancelRequest | Reason of the cancellation
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->cancelOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\OrderUnitCancelRequest**](../Model/OrderUnitCancelRequest.md)| Reason of the cancellation |
 **id_order_unit** | **int**| Order unit ID, unique across all order units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfilOrderUnit**
> fulfilOrderUnit($id_order_unit)

Mark an order unit to be in fulfillment

Mark an order unit to be in fulfillment (It will update the order unit status to `need_to_be_sent`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->fulfilOrderUnit($id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->fulfilOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderUnit**
> \Kaufland\Seller\Model\ApiResponseOrderUnitDetails_ getOrderUnit($id_order_unit, $embedded)

Get an order unit by ID

Get an order unit by <code>id_order_unit</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order_unit = 789; // int | Order unit ID, unique across all order units
$embedded = array(new \Kaufland\Seller\Model\OrderUnitEmbeddable()); // \Kaufland\Seller\Model\OrderUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getOrderUnit($id_order_unit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_order_unit** | **int**| Order unit ID, unique across all order units |
 **embedded** | [**\Kaufland\Seller\Model\OrderUnitEmbeddable[]**](../Model/\Kaufland\Seller\Model\OrderUnitEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\Kaufland\Seller\Model\ApiResponseOrderUnitDetails_**](../Model/ApiResponseOrderUnitDetails_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderUnits**
> \Kaufland\Seller\Model\CollectionApiResponseOrderUnit_ getOrderUnits($storefront, $id_offer, $status, $ts_created_from_iso, $ts_updated_from_iso, $fulfillment_type, $sort, $limit, $offset)

Get a list of order units

Get a list of order units.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Locale of storefront
$id_offer = "id_offer_example"; // string | Unique ID for offer(s)
$status = array(new \Kaufland\Seller\Model\OrderUnitStatus()); // \Kaufland\Seller\Model\OrderUnitStatus[] | Get only order units which are in the given status
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = array(new \Kaufland\Seller\Model\FulfillmentType()); // \Kaufland\Seller\Model\FulfillmentType[] | Get only order units which are fulfilled by the given type
$sort = "ts_created:desc"; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderUnits($storefront, $id_offer, $status, $ts_created_from_iso, $ts_updated_from_iso, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Locale of storefront | [optional]
 **id_offer** | **string**| Unique ID for offer(s) | [optional]
 **status** | [**\Kaufland\Seller\Model\OrderUnitStatus[]**](../Model/\Kaufland\Seller\Model\OrderUnitStatus.md)| Get only order units which are in the given status | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_updated_from_iso** | **\DateTime**| Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType[]**](../Model/\Kaufland\Seller\Model\FulfillmentType.md)| Get only order units which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]
 **sort** | **string**| Specify sorting | [optional] [default to ts_created:desc]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\Kaufland\Seller\Model\CollectionApiResponseOrderUnit_**](../Model/CollectionApiResponseOrderUnit_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundOrderUnit**
> refundOrderUnit($body, $id_order_unit)

Send a refund to a customer

Send a refund to a customer for a particular order unit.<br>`amount` must be in Eurocents.<br> Allowed values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=orders#refunding-order-unit\" target=\"_blank\">documentation</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitRefundRequest(); // \Kaufland\Seller\Model\OrderUnitRefundRequest | Request body containing amount and reason of the refund.
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->refundOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->refundOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\OrderUnitRefundRequest**](../Model/OrderUnitRefundRequest.md)| Request body containing amount and reason of the refund. |
 **id_order_unit** | **int**| Order unit ID, unique across all order units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOrderUnit**
> sendOrderUnit($body, $id_order_unit)

Mark an order unit as sent

Mark an order unit as sent. Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitSendRequest(); // \Kaufland\Seller\Model\OrderUnitSendRequest | Request body containing tracking number(s) and carrier code of the shipment(s)
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->sendOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\OrderUnitSendRequest**](../Model/OrderUnitSendRequest.md)| Request body containing tracking number(s) and carrier code of the shipment(s) |
 **id_order_unit** | **int**| Order unit ID, unique across all order units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

