# Kaufland\Seller\ShippingGroupsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShippingGroup**](ShippingGroupsApi.md#getshippinggroup) | **GET** /shipping-groups/{id_shipping_group} | Get a shipping group by ID
[**getShippingGroups**](ShippingGroupsApi.md#getshippinggroups) | **GET** /shipping-groups | Get the list of your predefined shipping groups

# **getShippingGroup**
> \Kaufland\Seller\Model\ApiResponseShippingGroup_ getShippingGroup($id_shipping_group, $storefront)

Get a shipping group by ID

Get a shipping group by <code>id_shipping_group</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_shipping_group = 789; // int | 
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->getShippingGroup($id_shipping_group, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_shipping_group** | **int**|  |
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Kaufland\Seller\Model\ApiResponseShippingGroup_**](../Model/ApiResponseShippingGroup_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingGroups**
> \Kaufland\Seller\Model\CollectionApiResponseShippingGroup_ getShippingGroups($storefront, $limit, $offset)

Get the list of your predefined shipping groups

Get the list of your predefined shipping groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\ShippingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getShippingGroups($storefront, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingGroupsApi->getShippingGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Kaufland\Seller\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Kaufland\Seller\Model\CollectionApiResponseShippingGroup_**](../Model/CollectionApiResponseShippingGroup_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

