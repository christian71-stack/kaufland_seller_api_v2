# Cbdesk\Kauflandv2\Api\ProductDataApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductData**](ProductDataApi.md#createproductdata) | **PUT** /product-data | Add new product data for an EAN or replace your existing one
[**createProductDataFile**](ProductDataApi.md#createproductdatafile) | **POST** /product-data/import-files | Add an import file URL
[**deleteProductData**](ProductDataApi.md#deleteproductdata) | **DELETE** /product-data/{ean} | Delete your product data for an EAN
[**getProductData**](ProductDataApi.md#getproductdata) | **GET** /product-data/{ean} | Get your product data for an EAN
[**getProductDataFile**](ProductDataApi.md#getproductdatafile) | **GET** /product-data/import-files/{id_import_file} | Get import file by ID
[**getProductDataFileList**](ProductDataApi.md#getproductdatafilelist) | **GET** /product-data/import-files | Get import files
[**getProductDataStatus**](ProductDataApi.md#getproductdatastatus) | **GET** /product-data/status/{ean} | Get the process status for your product data
[**updateProductData**](ProductDataApi.md#updateproductdata) | **PATCH** /product-data | Update existing product data for an EAN

# **createProductData**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponse createProductData($body, $locale)

Add new product data for an EAN or replace your existing one

Add new product data for an EAN or replace your existing one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ProductDataObject(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values
$locale = new \Cbdesk\Kauflandv2\Api\Model\Locale(); // \Cbdesk\Kauflandv2\Api\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->createProductData($body, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductDataFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataImportFileResponse_ createProductDataFile($body)

Add an import file URL

Saves an URL where a new import file is located. The file located at the URL will be downloaded and processed asynchronously and the contents imported. For the upload of product feed data there is a limit of 30 feeds per day, so please combine data for multiple products in one CSV file if possible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ImportFileRequestBody(); // \Cbdesk\Kauflandv2\Api\Model\ImportFileRequestBody | Json object with import file data

try {
    $result = $apiInstance->createProductDataFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->createProductDataFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ImportFileRequestBody**](../Model/ImportFileRequestBody.md)| Json object with import file data |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataImportFileResponse_**](../Model/ApiResponseProductDataImportFileResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductData**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponse deleteProductData($ean, $locale)

Delete your product data for an EAN

Delete the product data that you provided for a specific product via its EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | European Article Number with 13, 14 or 15 digits
$locale = new \Cbdesk\Kauflandv2\Api\Model\Locale(); // \Cbdesk\Kauflandv2\Api\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->deleteProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->deleteProductData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductData**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataObject_ getProductData($ean, $locale)

Get your product data for an EAN

Get the product data that you provided for a specific product via its EAN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | European Article Number with 13, 14 or 15 digits
$locale = new \Cbdesk\Kauflandv2\Api\Model\Locale(); // \Cbdesk\Kauflandv2\Api\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductData($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataObject_**](../Model/ApiResponseProductDataObject_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductDataFile**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataImportFileResponse_ getProductDataFile($id_import_file)

Get import file by ID

Get an import file by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_import_file = 789; // int | 

try {
    $result = $apiInstance->getProductDataFile($id_import_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_import_file** | **int**|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataImportFileResponse_**](../Model/ApiResponseProductDataImportFileResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductDataFileList**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseProductDataImportFileResponse_ getProductDataFileList($status, $ts_created, $ts_updated, $sort, $limit, $offset)

Get import files

Get a list of all your import files. You can narrow down the search using various parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileStatus(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileStatus | The status of your import
$ts_created = new \DateTime("2013-10-20"); // \DateTime | Creation timestamp of the import file in ISO 8601
$ts_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Update timestamp of the import file in ISO 8601
$sort = new \Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileSorting(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileSorting | Select the field (time created or time updated) and the direction of sorting (ascending or descending)
$limit = 56; // int | Desired size of result set. Max: 100
$offset = 56; // int | Offset applied to result set

try {
    $result = $apiInstance->getProductDataFileList($status, $ts_created, $ts_updated, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataFileList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileStatus**](../Model/.md)| The status of your import | [optional]
 **ts_created** | **\DateTime**| Creation timestamp of the import file in ISO 8601 | [optional]
 **ts_updated** | **\DateTime**| Update timestamp of the import file in ISO 8601 | [optional]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataImportFileSorting**](../Model/.md)| Select the field (time created or time updated) and the direction of sorting (ascending or descending) | [optional]
 **limit** | **int**| Desired size of result set. Max: 100 | [optional]
 **offset** | **int**| Offset applied to result set | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseProductDataImportFileResponse_**](../Model/CollectionApiResponseProductDataImportFileResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductDataStatus**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataStatusResponse_ getProductDataStatus($ean, $locale)

Get the process status for your product data

Get the process status for your provided product data via EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | European Article Number with 13, 14 or 15 digits
$locale = new \Cbdesk\Kauflandv2\Api\Model\Locale(); // \Cbdesk\Kauflandv2\Api\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->getProductDataStatus($ean, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->getProductDataStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| European Article Number with 13, 14 or 15 digits |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseProductDataStatusResponse_**](../Model/ApiResponseProductDataStatusResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductData**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponse updateProductData($body, $locale)

Update existing product data for an EAN

Add product data for a specific product (this will overwrite already provided values).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ProductDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\ProductDataObject(); // \Cbdesk\Kauflandv2\Api\Model\ProductDataObject | JSON contains ean and attributes. Attributes contain all attributes with values
JSON can contain ean and attributes. Attributes contain all attributes with values
$locale = new \Cbdesk\Kauflandv2\Api\Model\Locale(); // \Cbdesk\Kauflandv2\Api\Model\Locale | The language code of the product data (ISO 3166-2)

try {
    $result = $apiInstance->updateProductData($body, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDataApi->updateProductData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataObject**](../Model/ProductDataObject.md)| JSON contains ean and attributes. Attributes contain all attributes with values
JSON can contain ean and attributes. Attributes contain all attributes with values |
 **locale** | [**\Cbdesk\Kauflandv2\Api\Model\Locale**](../Model/.md)| The language code of the product data (ISO 3166-2) |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

