# Cbdesk\Kauflandv2\Api\SubscriptionsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSubscription**](SubscriptionsApi.md#addsubscription) | **POST** /subscriptions | Subscribe for event
[**deleteSubscription**](SubscriptionsApi.md#deletesubscription) | **DELETE** /subscriptions/{id_subscription} | Unsubscribe from event
[**getSubscription**](SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{id_subscription} | Get a push notification subscription by ID
[**getSubscriptions**](SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | Get a list of your push notification subscriptions
[**updateSubscription**](SubscriptionsApi.md#updatesubscription) | **PATCH** /subscriptions/{id_subscription} | Update subscription

# **addSubscription**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_ addSubscription($body, $storefront)

Subscribe for event

Create a new push notification subscription for an event. Using this endpoint will result in a callback verification request being sent to the given callback_url. See the Push Notifications documentation page for more information on push notifications and callback verification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_(); // \Cbdesk\Kauflandv2\Api\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_ | 
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront

try {
    $result = $apiInstance->addSubscription($body, $storefront);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->addSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_**](../Model/PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_.md)|  |
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_**](../Model/ApiResponseSubscription_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($id_subscription)

Unsubscribe from event

Deletes the specified push notification subscription from the database. To re-subscribe to the given event, you must use the add subscription endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_subscription = new \Cbdesk\Kauflandv2\Api\Model\LongInteger(); // \Cbdesk\Kauflandv2\Api\Model\LongInteger | 

try {
    $apiInstance->deleteSubscription($id_subscription);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_subscription** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_ getSubscription($id_subscription)

Get a push notification subscription by ID

Get a push notification subscription by <code>id_subscription</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_subscription = new \Cbdesk\Kauflandv2\Api\Model\LongInteger(); // \Cbdesk\Kauflandv2\Api\Model\LongInteger | 

try {
    $result = $apiInstance->getSubscription($id_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_subscription** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger**](../Model/.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_**](../Model/ApiResponseSubscription_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptions**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseSubscription_ getSubscriptions($storefront, $event_name, $limit, $offset)

Get a list of your push notification subscriptions

Get a list of your push notification subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Cbdesk\Kauflandv2\Api\Model\Storefront(); // \Cbdesk\Kauflandv2\Api\Model\Storefront | Parameter to select the affected storefront
$event_name = new \Cbdesk\Kauflandv2\Api\Model\SubscriptionEventName(); // \Cbdesk\Kauflandv2\Api\Model\SubscriptionEventName | Event name
$limit = 30; // int | Desired size of result set
$offset = 0; // int | Offset applied to result set

try {
    $result = $apiInstance->getSubscriptions($storefront, $event_name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](../Model/.md)| Parameter to select the affected storefront | [optional]
 **event_name** | [**\Cbdesk\Kauflandv2\Api\Model\SubscriptionEventName**](../Model/.md)| Event name | [optional]
 **limit** | **int**| Desired size of result set | [optional] [default to 30]
 **offset** | **int**| Offset applied to result set | [optional] [default to 0]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseSubscription_**](../Model/CollectionApiResponseSubscription_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_ updateSubscription($body, $id_subscription)

Update subscription

Update the fields of a push notification subscription. You can set the is_active flag to false to stop receiving notications for the subscription's event, or to true to re-enable a disabled subscription. If you change the value of the callback_url, the new callback_url will immediately receive a verification request. See the Callback URL Verification section of the Push Notifications documentation for details on validation requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_(); // \Cbdesk\Kauflandv2\Api\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_ | 
$id_subscription = new \Cbdesk\Kauflandv2\Api\Model\LongInteger(); // \Cbdesk\Kauflandv2\Api\Model\LongInteger | 

try {
    $result = $apiInstance->updateSubscription($body, $id_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_**](../Model/PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_.md)|  |
 **id_subscription** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger**](../Model/.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseSubscription_**](../Model/ApiResponseSubscription_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

