# Cbdesk\Kauflandv2\Api\WarehousesApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWarehouse**](WarehousesApi.md#createwarehouse) | **POST** /warehouses | Create a new Warehouse
[**deleteWarehouse**](WarehousesApi.md#deletewarehouse) | **DELETE** /warehouses/{id_warehouse} | Delete a warehouse
[**getWarehouse**](WarehousesApi.md#getwarehouse) | **GET** /warehouses/{id_warehouse} | Get a warehouse by its ID
[**getWarehouses**](WarehousesApi.md#getwarehouses) | **GET** /warehouses | Get a list of your Warehouses
[**updateWarehouse**](WarehousesApi.md#updatewarehouse) | **PUT** /warehouses/{id_warehouse} | Update a Warehouse

# **createWarehouse**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_ createWarehouse($body)

Create a new Warehouse

Create a new warehouse.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest(); // \Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest | Information about the warehouse that will be generated

try {
    $result = $apiInstance->createWarehouse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->createWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Information about the warehouse that will be generated |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_**](../Model/ApiResponseWarehouse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouse**
> deleteWarehouse($id_warehouse)

Delete a warehouse

Delete a warehouse.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_warehouse = 789; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $apiInstance->deleteWarehouse($id_warehouse);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->deleteWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouse**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_ getWarehouse($id_warehouse)

Get a warehouse by its ID

Gets a warehouse by <code>id_warehouse</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_warehouse = 789; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $result = $apiInstance->getWarehouse($id_warehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_**](../Model/ApiResponseWarehouse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouses**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseWarehouse_ getWarehouses($limit, $offset)

Get a list of your Warehouses

Get a list of your warehouses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getWarehouses($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseWarehouse_**](../Model/CollectionApiResponseWarehouse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWarehouse**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_ updateWarehouse($body, $id_warehouse)

Update a Warehouse

Update a warehouse.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest(); // \Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest | Update Object
$id_warehouse = 789; // int | Internal ID of Warehouse, unique across all Warehouses

try {
    $result = $apiInstance->updateWarehouse($body, $id_warehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\WarehouseBodyRequest**](../Model/WarehouseBodyRequest.md)| Update Object |
 **id_warehouse** | **int**| Internal ID of Warehouse, unique across all Warehouses |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseWarehouse_**](../Model/ApiResponseWarehouse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

