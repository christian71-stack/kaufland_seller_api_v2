# Kaufland\Seller\ShipmentsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addShipment**](ShipmentsApi.md#addshipment) | **POST** /shipments | Add a shipment to an order unit which is already marked as sent.

# **addShipment**
> addShipment($body)

Add a shipment to an order unit which is already marked as sent.

Add a shipment to an order unit which is already marked as sent by providing a carrier code and a tracking number.<br> Valid values for `carrier_code` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=order-files#carrier-codes\" target=\"_blank\">documentation</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\AddShipmentRequest(); // \Kaufland\Seller\Model\AddShipmentRequest | Request body containing information about a shipment related to an order unit

try {
    $apiInstance->addShipment($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->addShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\AddShipmentRequest**](../Model/AddShipmentRequest.md)| Request body containing information about a shipment related to an order unit |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

