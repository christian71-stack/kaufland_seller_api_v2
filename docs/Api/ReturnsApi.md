# Cbdesk\Kauflandv2\Api\ReturnsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReturn**](ReturnsApi.md#getreturn) | **GET** /returns/{id_return} | Get a return by ID
[**getReturns**](ReturnsApi.md#getreturns) | **GET** /returns | Get a list of returns
[**initiateReturn**](ReturnsApi.md#initiatereturn) | **POST** /returns | Initialize a return
[**updateReturn**](ReturnsApi.md#updatereturn) | **PUT** /returns/{id_return} | Add one or more order units to an already existing return

# **getReturn**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseReturnDetails_ getReturn($id_return, $embedded)

Get a return by ID

Get a return by <code>id_return</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_return = 789; // int | Return ID, unique across all returns
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\ReturnEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\ReturnEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturn($id_return, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return** | **int**| Return ID, unique across all returns |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ReturnEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseReturnDetails_**](../Model/ApiResponseReturnDetails_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturns**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReturn_ getReturns($storefront, $ts_created_from_iso, $ts_updated_from_iso, $tracking_code, $status, $fulfillment_type, $sort, $limit, $offset)

Get a list of returns

Get a list of returns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$tracking_code = "tracking_code_example"; // string | The tracking code of a particular return
$status = array(new \Cbdesk\Kauflandv2\Api\Model\ReturnStatus()); // \Cbdesk\Kauflandv2\Api\Model\ReturnStatus[] | Get only returns which are in the given status
$fulfillment_type = array(new \Cbdesk\Kauflandv2\Api\Model\FulfillmentType()); // \Cbdesk\Kauflandv2\Api\Model\FulfillmentType[] | Get only returns which are fulfilled by the given type
$sort = "ts_created:desc"; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturns($storefront, $ts_created_from_iso, $ts_updated_from_iso, $tracking_code, $status, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only returns which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **ts_updated_from_iso** | **\DateTime**| Get only returns which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **tracking_code** | **string**| The tracking code of a particular return | [optional]
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnStatus[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ReturnStatus.md)| Get only returns which are in the given status | [optional]
 **fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\FulfillmentType.md)| Get only returns which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]
 **sort** | **string**| Specify sorting | [optional] [default to ts_created:desc]
 **limit** | **int**| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set&lt;br&gt;default: 0 | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReturn_**](../Model/CollectionApiResponseReturn_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateReturn**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseInitializeReturn_ initiateReturn($body)

Initialize a return

Initialize a return for one or more order units. All order units must belong to the same order.<br> Valid values for `reason` can be found in the <a href=\"https://sellerapi.kaufland.com/?page=returns\" target=\"_blank\">documentation</a>.<br> `note` must be at least 5 and maximal 100 characters long.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Cbdesk\Kauflandv2\Api\Model\InitializeReturnRequest()); // \Cbdesk\Kauflandv2\Api\Model\InitializeReturnRequest[] | Request body containing return data for one or more order units

try {
    $result = $apiInstance->initiateReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->initiateReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\InitializeReturnRequest[]**](../Model/InitializeReturnRequest.md)| Request body containing return data for one or more order units |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseInitializeReturn_**](../Model/ApiResponseInitializeReturn_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturn**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseUpdateReturn_ updateReturn($body, $id_return)

Add one or more order units to an already existing return

Add one or more order units to an already existing return. All order units must belong to the same order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Cbdesk\Kauflandv2\Api\Model\UpdateReturnRequest()); // \Cbdesk\Kauflandv2\Api\Model\UpdateReturnRequest[] | Request body containing return data for one or more order units
$id_return = "id_return_example"; // string | Return ID, unique across all returns

try {
    $result = $apiInstance->updateReturn($body, $id_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->updateReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\UpdateReturnRequest[]**](../Model/UpdateReturnRequest.md)| Request body containing return data for one or more order units |
 **id_return** | **string**| Return ID, unique across all returns |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseUpdateReturn_**](../Model/ApiResponseUpdateReturn_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

