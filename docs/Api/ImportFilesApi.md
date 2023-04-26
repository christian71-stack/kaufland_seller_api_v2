# Cbdesk\Kauflandv2\Api\ImportFilesApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryCommandImportFile**](ImportFilesApi.md#createinventorycommandimportfile) | **POST** /import-files/inventory-command | Add an INVENTORY_COMMAND file URL
[**createInventoryFeedImportFile**](ImportFilesApi.md#createinventoryfeedimportfile) | **POST** /import-files/inventory-feed | Add an INVENTORY_FEED file URL
[**createOrderCommandImportFile**](ImportFilesApi.md#createordercommandimportfile) | **POST** /import-files/order-command | Add an ORDER_COMMAND file URL
[**getInventoryCommandImportFile**](ImportFilesApi.md#getinventorycommandimportfile) | **GET** /import-files/inventory-command/{id_import_file} | Get an inventory command import file by ID
[**getInventoryCommandImportFiles**](ImportFilesApi.md#getinventorycommandimportfiles) | **GET** /import-files/inventory-command | Get a list of your inventory command import files
[**getInventoryFeedImportFile**](ImportFilesApi.md#getinventoryfeedimportfile) | **GET** /import-files/inventory-feed/{id_import_file} | Get an inventory feed import file by ID
[**getInventoryFeedImportFiles**](ImportFilesApi.md#getinventoryfeedimportfiles) | **GET** /import-files/inventory-feed | Get a list of your inventory feed import files
[**getOrderCommandImportFile**](ImportFilesApi.md#getordercommandimportfile) | **GET** /import-files/order-command/{id_import_file} | Get an order command import file by ID
[**getOrderCommandImportFiles**](ImportFilesApi.md#getordercommandimportfiles) | **GET** /import-files/order-command | Get a list of your order command import files

# **createInventoryCommandImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryCommand_ createInventoryCommandImportFile($body, $storefront)

Add an INVENTORY_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryCommandPostRequest(); // \Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryCommandPostRequest | 
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->createInventoryCommandImportFile($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryCommandPostRequest**](../Model/ImportFileInventoryCommandPostRequest.md)|  |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryCommand_**](../Model/ApiResponseImportFileInventoryCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInventoryFeedImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryFeed_ createInventoryFeedImportFile($body, $storefront)

Add an INVENTORY_FEED file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryFeedPostRequest(); // \Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryFeedPostRequest | 
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->createInventoryFeedImportFile($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFileInventoryFeedPostRequest**](../Model/ImportFileInventoryFeedPostRequest.md)|  |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryFeed_**](../Model/ApiResponseImportFileInventoryFeed_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderCommandImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileOrderCommand_ createOrderCommandImportFile($body)

Add an ORDER_COMMAND file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ImportFileOrderCommandPostRequest(); // \Cbdesk\Kauflandv2\Api\Model\ImportFileOrderCommandPostRequest | 

try {
    $result = $apiInstance->createOrderCommandImportFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->createOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFileOrderCommandPostRequest**](../Model/ImportFileOrderCommandPostRequest.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileOrderCommand_**](../Model/ApiResponseImportFileOrderCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryCommandImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryCommand_ getInventoryCommandImportFile($storefront, $id_import_file)

Get an inventory command import file by ID

Get an inventory command import file by its <code>id_import_file</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$id_import_file = 789; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryCommandImportFile($storefront, $id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryCommand_**](../Model/ApiResponseImportFileInventoryCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryCommandImportFiles**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileInventoryCommand_ getInventoryCommandImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset)

Get a list of your inventory command import files

Get a list of your inventory command import files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$status = new \Cbdesk\Kauflandv2\Api\Model\ImportStatus(); // \Cbdesk\Kauflandv2\Api\Model\ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sort = new \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy(); // \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy | 
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryCommandImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileInventoryCommand_**](../Model/CollectionApiResponseImportFileInventoryCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryFeedImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryFeed_ getInventoryFeedImportFile($storefront, $id_import_file)

Get an inventory feed import file by ID

Get an inventory feed import file by its <code>id_import_file</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$id_import_file = 789; // int | Internal ID of Import File

try {
    $result = $apiInstance->getInventoryFeedImportFile($storefront, $id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileInventoryFeed_**](../Model/ApiResponseImportFileInventoryFeed_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryFeedImportFiles**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileInventoryFeed_ getInventoryFeedImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset)

Get a list of your inventory feed import files

Get a list of your inventory feed import files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$status = new \Cbdesk\Kauflandv2\Api\Model\ImportStatus(); // \Cbdesk\Kauflandv2\Api\Model\ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sort = new \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy(); // \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy | 
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getInventoryFeedImportFiles($storefront, $status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getInventoryFeedImportFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileInventoryFeed_**](../Model/CollectionApiResponseImportFileInventoryFeed_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderCommandImportFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileOrderCommand_ getOrderCommandImportFile($id_import_file)

Get an order command import file by ID

Get an order command import file by its <code>id_import_file</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_import_file = 789; // int | Internal ID of Import File

try {
    $result = $apiInstance->getOrderCommandImportFile($id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_import_file** | **int**| Internal ID of Import File |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseImportFileOrderCommand_**](../Model/ApiResponseImportFileOrderCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderCommandImportFiles**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileOrderCommand_ getOrderCommandImportFiles($status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset)

Get a list of your order command import files

Get a list of your order command import files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ImportFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Cbdesk\Kauflandv2\Api\Model\ImportStatus(); // \Cbdesk\Kauflandv2\Api\Model\ImportStatus | File status filter
$ts_created_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$ts_updated_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sort = new \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy(); // \Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy | 
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getOrderCommandImportFiles($status, $ts_created_iso, $ts_updated_iso, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportFilesApi->getOrderCommandImportFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ImportStatus**](../Model/.md)| File status filter | [optional]
 **ts_created_iso** | **\DateTime**|  | [optional]
 **ts_updated_iso** | **\DateTime**|  | [optional]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFilesSortBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseImportFileOrderCommand_**](../Model/CollectionApiResponseImportFileOrderCommand_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

