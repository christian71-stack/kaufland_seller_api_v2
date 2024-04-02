# Kaufland\Seller\UnitsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateUnits**](UnitsApi.md#bulkupdateunits) | **POST** /units/bulk | Update some fields of a given set of units
[**createUnit**](UnitsApi.md#createunit) | **POST** /units | Add a unit
[**deleteUnit**](UnitsApi.md#deleteunit) | **DELETE** /units/{id_unit} | Delete a unit
[**getUnit**](UnitsApi.md#getunit) | **GET** /units/{id_unit} | Get a unit by ID
[**getUnits**](UnitsApi.md#getunits) | **GET** /units | Get a list of your units
[**patchUnit**](UnitsApi.md#patchunit) | **PATCH** /units/{id_unit} | Update some of the fields of a unit

# **bulkUpdateUnits**
> \Kaufland\Seller\Model\UnitsBulkUpdateResponse bulkUpdateUnits($body, $storefront)

Update some fields of a given set of units

Update some fields of a given set of units. Please notice that you have to specify a listing price greater than zero.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Kaufland\Seller\Model\UnitsBulkUpdateRequest()); // \Kaufland\Seller\Model\UnitsBulkUpdateRequest[] | Update Object
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->bulkUpdateUnits($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->bulkUpdateUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\UnitsBulkUpdateRequest[]**](../Model/UnitsBulkUpdateRequest.md)| Update Object |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Kaufland\Seller\Model\UnitsBulkUpdateResponse**](../Model/UnitsBulkUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUnit**
> \Kaufland\Seller\Model\ApiResponseUnit_ createUnit($body, $storefront)

Add a unit

Add a new unit for an existing product. You must specify either an <code>id_product</code> or an <code>ean</code> (or both), to identify the product to which the unit belongs. Please notice that you have to specify a listing price greater than zero.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\UnitRequest(); // \Kaufland\Seller\Model\UnitRequest | Information about the unit that will be generated
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->createUnit($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->createUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\UnitRequest**](../Model/UnitRequest.md)| Information about the unit that will be generated |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Kaufland\Seller\Model\ApiResponseUnit_**](../Model/ApiResponseUnit_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUnit**
> deleteUnit($id_unit, $storefront)

Delete a unit

Delete a unit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_unit = 789; // int | Internal ID of Unit, unique across all Units
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront

try {
    $apiInstance->deleteUnit($id_unit, $storefront);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->deleteUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnit**
> \Kaufland\Seller\Model\ApiResponseUnit_ getUnit($id_unit, $storefront, $embedded)

Get a unit by ID

Get a unit by its <code>id_unit</code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_unit = 789; // int | Internal ID of Unit, unique across all Units
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront
$embedded = array(new \Kaufland\Seller\Model\UnitEmbeddedEnum()); // \Kaufland\Seller\Model\UnitEmbeddedEnum[] | 

try {
    $result = $apiInstance->getUnit($id_unit, $storefront, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **embedded** | [**\Kaufland\Seller\Model\UnitEmbeddedEnum[]**](../Model/\Kaufland\Seller\Model\UnitEmbeddedEnum.md)|  | [optional]

### Return type

[**\Kaufland\Seller\Model\ApiResponseUnit_**](../Model/ApiResponseUnit_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnits**
> \Kaufland\Seller\Model\CollectionApiResponseUnitEmbedded_ getUnits($storefront, $limit, $offset, $id_offer, $id_product, $ean, $embedded, $fulfillment_type)

Get a list of your units

Get a list of your units. Note that there may a delay of up to several minutes between adding a new unit and when it will be available through this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set, maximum is 100
$offset = 0; // int | Offset applied to result set
$id_offer = "id_offer_example"; // string | Provided ID of your stock
$id_product = 789; // int | Our internal id_product
$ean = "ean_example"; // string | EAN, 13 or 14 digits
$embedded = array(new \Kaufland\Seller\Model\UnitEmbeddedEnum()); // \Kaufland\Seller\Model\UnitEmbeddedEnum[] | 
$fulfillment_type = array(new \Kaufland\Seller\Model\FulfillmentType()); // \Kaufland\Seller\Model\FulfillmentType[] | Get only units which are fulfilled by the given type

try {
    $result = $apiInstance->getUnits($storefront, $limit, $offset, $id_offer, $id_product, $ean, $embedded, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->getUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **limit** | **int**| Desired size of result set, maximum is 100 | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]
 **id_offer** | **string**| Provided ID of your stock | [optional]
 **id_product** | **int**| Our internal id_product | [optional]
 **ean** | **string**| EAN, 13 or 14 digits | [optional]
 **embedded** | [**\Kaufland\Seller\Model\UnitEmbeddedEnum[]**](../Model/\Kaufland\Seller\Model\UnitEmbeddedEnum.md)|  | [optional]
 **fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType[]**](../Model/\Kaufland\Seller\Model\FulfillmentType.md)| Get only units which are fulfilled by the given type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]

### Return type

[**\Kaufland\Seller\Model\CollectionApiResponseUnitEmbedded_**](../Model/CollectionApiResponseUnitEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUnit**
> \Kaufland\Seller\Model\ApiResponseUnit_ patchUnit($body, $storefront, $id_unit)

Update some of the fields of a unit

Update some of the fields of a unit. Please notice that you have to specify a listing price greater than zero.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\UnitPatchRequest(); // \Kaufland\Seller\Model\UnitPatchRequest | Update Object
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront
$id_unit = 789; // int | Internal ID of Unit, unique across all Units

try {
    $result = $apiInstance->patchUnit($body, $storefront, $id_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->patchUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaufland\Seller\Model\UnitPatchRequest**](../Model/UnitPatchRequest.md)| Update Object |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **id_unit** | **int**| Internal ID of Unit, unique across all Units |

### Return type

[**\Kaufland\Seller\Model\ApiResponseUnit_**](../Model/ApiResponseUnit_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

