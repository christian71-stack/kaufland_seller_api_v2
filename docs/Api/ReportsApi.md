# Cbdesk\Kauflandv2\Api\ReportsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReport**](ReportsApi.md#getreport) | **GET** /reports/{id_report} | Get meta-data for a single report by ID
[**getReports**](ReportsApi.md#getreports) | **GET** /reports | Get a list of your reports
[**requestAccountListingReport**](ReportsApi.md#requestaccountlistingreport) | **POST** /reports/account-listing | Queue an inventory report
[**requestAccountListingWithShopPriceReport**](ReportsApi.md#requestaccountlistingwithshoppricereport) | **POST** /reports/account-listing-with-shop-price | Queue an inventory report
[**requestCancellationsReport**](ReportsApi.md#requestcancellationsreport) | **POST** /reports/cancellations | Queue a cancellations report.
[**requestCompetitorsComparerReport**](ReportsApi.md#requestcompetitorscomparerreport) | **POST** /reports/competitors-comparer | Queue a competitors comparison report
[**requestEansNotFoundReport**](ReportsApi.md#requesteansnotfoundreport) | **POST** /reports/eans-not-found | Queue an EANs not found report
[**requestNewBookingsReport**](ReportsApi.md#requestnewbookingsreport) | **POST** /reports/bookings-new | Queue a bookings report
[**requestNewSalesReport**](ReportsApi.md#requestnewsalesreport) | **POST** /reports/sales-new | Queue a sales report
[**requestProductDataChangesReport**](ReportsApi.md#requestproductdatachangesreport) | **POST** /reports/product-data-changes | Queue a product data changes report
[**requestProductDataImportFileErrorsReport**](ReportsApi.md#requestproductdataimportfileerrorsreport) | **POST** /reports/product-data-import-file-errors | Queue a product data import file errors report

# **getReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseReport_ getReport($id_report)

Get meta-data for a single report by ID

Returns the full meta-data for a single report, specified by ID. You can download the report itself by requesting the file in the \"url\" property of the response, as long as the report is in the <code>done</code> state. To get a list of the IDs of your reports, use the <code>/reports/seller/</code> endpoint.     * @summary Get meta-data for a single report by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_report = new \Cbdesk\Kauflandv2\Api\Model\LongInteger(); // \Cbdesk\Kauflandv2\Api\Model\LongInteger | 

try {
    $result = $apiInstance->getReport($id_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_report** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger**](../Model/.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseReport_**](../Model/ApiResponseReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReports**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReport_ getReports($storefront, $limit, $offset, $sort)

Get a list of your reports

Returns the full meta-data for all of your reports. You can download any of the actual reports by requesting the file in the \"url\" property of one of the objects in the response, as long as the report is in the <code>done</code> state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set
$sort = new \Cbdesk\Kauflandv2\Api\Model\ReportsSorting(); // \Cbdesk\Kauflandv2\Api\Model\ReportsSorting | Sorting of result set

try {
    $result = $apiInstance->getReports($storefront, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\ReportsSorting**](../Model/.md)| Sorting of result set | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseReport_**](../Model/CollectionApiResponseReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestAccountListingReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestAccountListingReport($storefront)

Queue an inventory report

Queues the generation of a CSV file that lists all of your items that are currently for sale on the kaufland.de site. You can use the generated file as the basis for a product data import file by downloading it and editing the fields, then reuploading it. The generated file includes the following fields for each item in your inventory: <ul>    <li><b>title_item:</b> The title (i.e. name) of the item</li>    <li><b>ean:</b> The EAN of the item</li>    <li><b>condition:</b> The condition of the item (e.g. <code>new</code> or <code>used - very good</code>)</li>    <li><b>price:</b> The price at which you have listed the item in Eurocents (e.g. 4999)</li>    <li><b>note:</b> If you added a note to the offer (i.e. unit), it is listed here</li>    <li><b>offer_id:</b> The ID of this offer (i.e. unit)</li>    <li><b>location:</b> (Deprecated) The location of the item (e.g. <code>DE</code> for Germany)</li>    <li><b>warehouse:</b> The name of the warehouse where the item is</li>    <li><b>shipping_group:</b> The name of the shipping group which the item is part of</li>    <li><b>count:</b> How many of the item you have in your inventory</li>    <li><b>delivery_time:</b> The delivery time class of the item (e.g. <code>a</code> if it ships within 24 hours)</li>    <li><b>minimum_price:</b> The minimum price you are willing to sell the item for in Eurocents</li>    <li><b>price_cs:</b> The price at which you have listed the item in Euros (e.g. 49,99)</li>    <li><b>shipping_cost_DE:</b> The shipping cost within Germany listed in Euros (e.g. 4,95)</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestAccountListingReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestAccountListingReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestAccountListingWithShopPriceReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestAccountListingWithShopPriceReport($storefront)

Queue an inventory report

Queues the generation of a CSV file that lists all of your items that are currently for sale on the kaufland.de site. The new report file includes the current item prices on the marketplace. You can use the generated file as the basis for an inventory import file by downloading it and editing the fields, then reuploading it. The generated file includes the following fields for each item in your inventory: <ul>    <li><b>title_item:</b> The title (i.e. name) of the item</li>    <li><b>ean:</b> The EAN of the item</li>    <li><b>condition:</b> The condition of the item (e.g. <code>new</code> or <code>used - very good</code>)</li>    <li><b>price:</b> The price at which you have listed the item in Eurocents (e.g. 4999)</li>    <li><b>shop_price:</b> The item price which is being shown on the marketplace in Eurocents (e.g. 4999)</li>    <li><b>note:</b> If you added a note to the offer (i.e. unit), it is listed here</li>    <li><b>offer_id:</b> The ID of this offer (i.e. unit)</li>    <li><b>location:</b> (Deprecated) The location of the item (e.g. <code>DE</code> for Germany)</li>    <li><b>warehouse:</b> The name of the warehouse where the item is</li>    <li><b>shipping_group:</b> The name of the shipping group which the item is part of</li>    <li><b>count:</b> How many of the item you have in your inventory</li>    <li><b>delivery_time:</b> The delivery time class of the item (e.g. <code>a</code> if it ships within 24 hours)</li>    <li><b>minimum_price:</b> The minimum price you are willing to sell the item for in Eurocents</li>    <li><b>price_cs:</b> The price at which you have listed the item in Euros (e.g. 49,99)</li>    <li><b>shipping_cost_DE:</b> The shipping cost within Germany listed in Euros (e.g. 4,95)</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestAccountListingWithShopPriceReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestAccountListingWithShopPriceReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestCancellationsReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestCancellationsReport($storefront)

Queue a cancellations report.

Queues the generation of a CSV file that lists all orders in the <code>cancelled</code> state. The generated file includes the following fields for each cancelled order: <ul>    <li><b>Datum der Stornierung:</b> The date of the cancellation</li>    <li><b>Datum der Order:</b> The date of the order</li>    <li><b>Grund der Stornierung:</b> The reason for cancelling</li>    <li><b>EAN des Artikels:</b> The EAN of the item</li>    <li><b>Hersteller des Artikels:</b> The manufacturer of the item</li>    <li><b>Titel des Artikels:</b> The title (i.e. name) of the item</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestCancellationsReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestCancellationsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestCompetitorsComparerReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestCompetitorsComparerReport($storefront)

Queue a competitors comparison report

Queues the generation of a CSV file that contains a list of all of your listed items along with the cheapest price of each item on the kaufland.de site. The generated file includes the following fields for each item: <ul>    <li><b>EAN:</b> The EAN of the item</li>    <li><b>Offer_id:</b> The ID of your offer (i.e. unit)</li>    <li><b>Titel:</b> The title (i.e. name) of the item</li>    <li><b>Günstigster Preis neu:</b> The price of the cheapest new product listing for the item on kaufland.de in Eurocents</li>    <li><b>Günstigster Preis gebraucht:</b> The price of the cheapest used product listing for the item on kaufland.de in Eurocents</li>    <li><b>Ihr Preis:</b> Your price</li>    <li><b>Differenz zu neu absolut:</b> The difference between your price and the cheapest new product price in Eurocents</li>    <li><b>Differenz zu neu %:</b> The difference between your price and the cheapest new product price as a percentage</li>    <li><b>Differenz zu gebraucht absolut:</b>The difference between your price and the cheapest used product price in Eurocents</li>    <li><b>Differenz zu gebraucht %:</b> The difference between your price and the cheapest used product price as a percentage</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestCompetitorsComparerReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestCompetitorsComparerReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestEansNotFoundReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestEansNotFoundReport($storefront)

Queue an EANs not found report

Queues the generation of a CSV file that lists all EANs of the seller, for that no or not enough product data was provided. The generated file includes the following fields for each EAN: <ul>    <li><b>ean:</b> EAN of the offer or product</li>    <li><b>reason:</b> Error reason</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestEansNotFoundReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestEansNotFoundReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewBookingsReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestNewBookingsReport($body, $storefront)

Queue a bookings report

Queues the generation of a CSV file that lists all of your bookings on or after the given <code>date_from</code> timestamp and on or before the given <code>date_to</code> timestamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\RequestBookingsReportRequest(); // \Cbdesk\Kauflandv2\Api\Model\RequestBookingsReportRequest | 
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestNewBookingsReport($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestNewBookingsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\RequestBookingsReportRequest**](../Model/RequestBookingsReportRequest.md)|  |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewSalesReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestNewSalesReport($body, $storefront)

Queue a sales report

Queues the generation of a CSV file that contains a list of all of your sales on or after the given <code>date_from</code> timestamp and on or before the given <code>date_to</code> timestamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\RequestNewSalesReportRequest(); // \Cbdesk\Kauflandv2\Api\Model\RequestNewSalesReportRequest | 
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestNewSalesReport($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestNewSalesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\RequestNewSalesReportRequest**](../Model/RequestNewSalesReportRequest.md)|  |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestProductDataChangesReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestProductDataChangesReport($storefront)

Queue a product data changes report

Queues the generation of a CSV file that lists the important changes on products, for that the seller has provided offers. The generated file includes the following fields for each product data change: <ul>    <li><b>ean:</b> EAN of the product</li>    <li><b>title:</b> The title of the product</li>    <li><b>changed_attributes:</b> Title and ID of an attribute, which value was changed</li>    <li><b>date_changed:</b> The date of a value change</li>    <li><b>id_item:</b> Kaufland's Product ID</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->requestProductDataChangesReport($storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestProductDataChangesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestProductDataImportFileErrorsReport**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_ requestProductDataImportFileErrorsReport($body)

Queue a product data import file errors report

Queues the generation of a CSV file that contains a list of errors, occured during import of product data file with id <code>id_import_file</code>. The generated file includes the following fields for each error: <ul>    <li><b>ean:</b> The EAN of the item</li>    <li><b>id_attribute:</b> The ID of the attribute</li>    <li><b>status:</b> Status of error</li>    <li><b>log_message:</b> Log message</li>    <li><b>type_hook:</b> Type of the hook</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\RequestProductDataImportFileErrorsReportRequest(); // \Cbdesk\Kauflandv2\Api\Model\RequestProductDataImportFileErrorsReportRequest | 

try {
    $result = $apiInstance->requestProductDataImportFileErrorsReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->requestProductDataImportFileErrorsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\RequestProductDataImportFileErrorsReportRequest**](../Model/RequestProductDataImportFileErrorsReportRequest.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseRequestedReport_**](../Model/ApiResponseRequestedReport_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

