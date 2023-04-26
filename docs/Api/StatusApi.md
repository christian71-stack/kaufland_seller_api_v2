# Cbdesk\Kauflandv2\Api\StatusApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping**](StatusApi.md#ping) | **GET** /status/ping | Ping the Kaufland.de API

# **ping**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponsePingMessage_ ping()

Ping the Kaufland.de API

A simple method you can call that will return a constant value as long as everything is good.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponsePingMessage_**](../Model/ApiResponsePingMessage_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

