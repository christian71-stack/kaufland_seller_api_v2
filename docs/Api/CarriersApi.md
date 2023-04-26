# Cbdesk\Kauflandv2\Api\CarriersApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCarriers**](CarriersApi.md#getcarriers) | **GET** /carriers | Get a list of available carriers

# **getCarriers**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseCarriers_ getCarriers()

Get a list of available carriers

Get a list of available carriers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCarriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseCarriers_**](../Model/ApiResponseCarriers_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

