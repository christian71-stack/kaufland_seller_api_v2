# Cbdesk\Kauflandv2\Api\InfoApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllLocales**](InfoApi.md#getalllocales) | **GET** /info/locale | Get values for parameter &#x27;locale&#x27;
[**getAllStorefronts**](InfoApi.md#getallstorefronts) | **GET** /info/storefront | Get values for parameter &#x27;storefront&#x27;

# **getAllLocales**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseInfoLocaleObject_ getAllLocales()

Get values for parameter 'locale'

Get all available values for the parameter 'locale'. This parameter specifies the language of e.g. product data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseInfoLocaleObject_**](../Model/ApiResponseInfoLocaleObject_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllStorefronts**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseStringArray_ getAllStorefronts()

Get values for parameter 'storefront'

Get current seller available values for the parameter 'storefront'. This parameter specifies the country of the store. Returns a list of storefronts the seller has created in the sellerportal regardless of storefront status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllStorefronts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->getAllStorefronts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseStringArray_**](../Model/ApiResponseStringArray_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

