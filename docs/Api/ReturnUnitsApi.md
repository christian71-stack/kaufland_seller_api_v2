# Cbdesk\Kauflandv2\Api\ReturnUnitsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptReturnUnit**](ReturnUnitsApi.md#acceptreturnunit) | **PATCH** /return-units/{id_return_unit}/accept | Accept a return unit
[**clarifyReturnUnit**](ReturnUnitsApi.md#clarifyreturnunit) | **PATCH** /return-units/{id_return_unit}/clarify | Clarify a return unit
[**getReturnUnit**](ReturnUnitsApi.md#getreturnunit) | **GET** /return-units/{id_return_unit} | Get a return unit by ID
[**getReturnUnits**](ReturnUnitsApi.md#getreturnunits) | **GET** /return-units | Get a list of return units
[**rejectReturnUnit**](ReturnUnitsApi.md#rejectreturnunit) | **PATCH** /return-units/{id_return_unit}/reject | Reject a return unit
[**repairReturnUnit**](ReturnUnitsApi.md#repairreturnunit) | **PATCH** /return-units/{id_return_unit}/repair | Repair a return unit

# **acceptReturnUnit**
> acceptReturnUnit($id_return_unit)

Accept a return unit

Mark a return unit as `return_accepted`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_return_unit = 789; // int | Return unit ID, unique across all return units

try {
    $apiInstance->acceptReturnUnit($id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->acceptReturnUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clarifyReturnUnit**
> clarifyReturnUnit($body, $id_return_unit)

Clarify a return unit

Mark a return unit as `return_in_clarification` to indicate a problem with a return unit after it has been received. Will open a ticket addressing the customer with the given message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ReturnUnitClarifyRequest(); // \Cbdesk\Kauflandv2\Api\Model\ReturnUnitClarifyRequest | Request body containing message for clarifying return unit
$id_return_unit = 789; // int | Return unit ID, unique across all return units

try {
    $apiInstance->clarifyReturnUnit($body, $id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->clarifyReturnUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnUnitClarifyRequest**](../Model/ReturnUnitClarifyRequest.md)| Request body containing message for clarifying return unit |
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnUnit**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseReturnUnitDetails_ getReturnUnit($id_return_unit, $embedded)

Get a return unit by ID

Get a return unit by <code>id_return_unit</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_return_unit = 789; // int | Return unit ID, unique across all return units
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\ReturnUnitEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\ReturnUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getReturnUnit($id_return_unit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnUnitEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ReturnUnitEmbeddable.md)| Additional data to be returned | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseReturnUnitDetails_**](../Model/ApiResponseReturnUnitDetails_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnUnits**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReturnUnit_ getReturnUnits($storefront, $ts_created_from_iso, $status, $fulfillment_type, $sort, $limit, $offset)

Get a list of return units

Get a list of return units.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Locale of storefront
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$status = array(new \Cbdesk\Kauflandv2\Api\Model\ReturnUnitStatus()); // \Cbdesk\Kauflandv2\Api\Model\ReturnUnitStatus[] | Get only return units which are in the given status
$fulfillment_type = array(new \Cbdesk\Kauflandv2\Api\Model\FulfillmentType()); // \Cbdesk\Kauflandv2\Api\Model\FulfillmentType[] | Get only return units which are fulfilled by the given type
$sort = "ts_created:desc"; // string | Specify sorting
$limit = new \Cbdesk\Kauflandv2\Api\Model\Integer(); // \Cbdesk\Kauflandv2\Api\Model\Integer | Desired size of result set<br>max: 100, default: 30
$offset = new \Cbdesk\Kauflandv2\Api\Model\Integer(); // \Cbdesk\Kauflandv2\Api\Model\Integer | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getReturnUnits($storefront, $ts_created_from_iso, $status, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->getReturnUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Locale of storefront | [optional]
 **ts_created_from_iso** | **\DateTime**| Get only return units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format | [optional]
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnUnitStatus[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\ReturnUnitStatus.md)| Get only return units which are in the given status | [optional]
 **fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\FulfillmentType.md)| Get only return units which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]
 **sort** | **string**| Specify sorting | [optional] [default to ts_created:desc]
 **limit** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](../Model/.md)| Desired size of result set&lt;br&gt;max: 100, default: 30 | [optional]
 **offset** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](../Model/.md)| Offset applied to result set&lt;br&gt;default: 0 | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReturnUnit_**](../Model/CollectionApiResponseReturnUnit_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectReturnUnit**
> rejectReturnUnit($body, $id_return_unit)

Reject a return unit

Mark a return unit as `return_rejected`. Will open a ticket addressing the customer with the given message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ReturnUnitRejectRequest(); // \Cbdesk\Kauflandv2\Api\Model\ReturnUnitRejectRequest | Request body containing message for rejecting return unit
$id_return_unit = 789; // int | Return unit ID, unique across all return units

try {
    $apiInstance->rejectReturnUnit($body, $id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->rejectReturnUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ReturnUnitRejectRequest**](../Model/ReturnUnitRejectRequest.md)| Request body containing message for rejecting return unit |
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repairReturnUnit**
> repairReturnUnit($id_return_unit)

Repair a return unit

Mark a return unit as `return_in_repair`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReturnUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_return_unit = 789; // int | Return unit ID, unique across all return units

try {
    $apiInstance->repairReturnUnit($id_return_unit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnUnitsApi->repairReturnUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_return_unit** | **int**| Return unit ID, unique across all return units |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

