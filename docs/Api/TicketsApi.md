# Cbdesk\Kauflandv2\Api\TicketsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeTicket**](TicketsApi.md#closeticket) | **PATCH** /tickets/{id_ticket}/close | Close a ticket by ID
[**createTicketMessage**](TicketsApi.md#createticketmessage) | **POST** /tickets/{id_ticket}/messages | Create a new message for the ticket
[**getTicket**](TicketsApi.md#getticket) | **GET** /tickets/{id_ticket} | Get a ticket by ID
[**getTicketMessages**](TicketsApi.md#getticketmessages) | **GET** /tickets/messages | Get a list of ticket messages
[**getTickets**](TicketsApi.md#gettickets) | **GET** /tickets | Get a list of tickets
[**openTicket**](TicketsApi.md#openticket) | **POST** /tickets | Open a ticket

# **closeTicket**
> closeTicket($id_ticket)

Close a ticket by ID

Close a ticket given its `id_ticket`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ticket = new \Cbdesk\Kauflandv2\Api\Model\TicketID(); // \Cbdesk\Kauflandv2\Api\Model\TicketID | The unique ID of a ticket

try {
    $apiInstance->closeTicket($id_ticket);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->closeTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ticket** | [**\Cbdesk\Kauflandv2\Api\Model\TicketID**](../Model/.md)| The unique ID of a ticket |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTicketMessage**
> createTicketMessage($body, $id_ticket)

Create a new message for the ticket

Create a new message for the ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\CreateTicketMessageRequest(); // \Cbdesk\Kauflandv2\Api\Model\CreateTicketMessageRequest | Body params for the new message.
$id_ticket = new \Cbdesk\Kauflandv2\Api\Model\TicketID(); // \Cbdesk\Kauflandv2\Api\Model\TicketID | The unique ID of a ticket

try {
    $apiInstance->createTicketMessage($body, $id_ticket);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createTicketMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\CreateTicketMessageRequest**](../Model/CreateTicketMessageRequest.md)| Body params for the new message. |
 **id_ticket** | [**\Cbdesk\Kauflandv2\Api\Model\TicketID**](../Model/.md)| The unique ID of a ticket |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicket**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseTicketWithEmbedded_ getTicket($id_ticket, $embedded)

Get a ticket by ID

Get a ticket given its `id_ticket`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ticket = new \Cbdesk\Kauflandv2\Api\Model\TicketID(); // \Cbdesk\Kauflandv2\Api\Model\TicketID | The unique ID of a ticket
$embedded = array(new \Cbdesk\Kauflandv2\Api\Model\TicketEmbeddable()); // \Cbdesk\Kauflandv2\Api\Model\TicketEmbeddable[] | A string of comma-separated values. Possible values: buyer, product, messages, order_units, files

try {
    $result = $apiInstance->getTicket($id_ticket, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ticket** | [**\Cbdesk\Kauflandv2\Api\Model\TicketID**](../Model/.md)| The unique ID of a ticket |
 **embedded** | [**\Cbdesk\Kauflandv2\Api\Model\TicketEmbeddable[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\TicketEmbeddable.md)| A string of comma-separated values. Possible values: buyer, product, messages, order_units, files | [optional]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseTicketWithEmbedded_**](../Model/ApiResponseTicketWithEmbedded_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketMessages**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseTicketMessage_ getTicketMessages($limit, $sort, $offset, $ts_created_from_iso, $fulfillment_type)

Get a list of ticket messages

Get a list of your ticket messages. If you want to get only ticket messages for a specific ticket, you should use the `/tickets/{id_ticket}/` endpoint and call it with `embedded=messages`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = new \Cbdesk\Kauflandv2\Api\Model\TicketMessageListLimit(); // \Cbdesk\Kauflandv2\Api\Model\TicketMessageListLimit | Desired size of result set (default: 30)
$sort = new \Cbdesk\Kauflandv2\Api\Model\TicketMessagesSort(); // \Cbdesk\Kauflandv2\Api\Model\TicketMessagesSort | The sort direction
$offset = new \Cbdesk\Kauflandv2\Api\Model\TicketMessageListOffset(); // \Cbdesk\Kauflandv2\Api\Model\TicketMessageListOffset | Offset applied to result set (default: 0)
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter ticket messages by their creation timestamp in iso 8601
$fulfillment_type = array(new \Cbdesk\Kauflandv2\Api\Model\FulfillmentType()); // \Cbdesk\Kauflandv2\Api\Model\FulfillmentType[] | Filter tickets by their fulfillment type

try {
    $result = $apiInstance->getTicketMessages($limit, $sort, $offset, $ts_created_from_iso, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicketMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | [**\Cbdesk\Kauflandv2\Api\Model\TicketMessageListLimit**](../Model/.md)| Desired size of result set (default: 30) | [optional]
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\TicketMessagesSort**](../Model/.md)| The sort direction | [optional]
 **offset** | [**\Cbdesk\Kauflandv2\Api\Model\TicketMessageListOffset**](../Model/.md)| Offset applied to result set (default: 0) | [optional]
 **ts_created_from_iso** | **\DateTime**| Filter ticket messages by their creation timestamp in iso 8601 | [optional]
 **fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\FulfillmentType.md)| Filter tickets by their fulfillment type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseTicketMessage_**](../Model/CollectionApiResponseTicketMessage_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTickets**
> \Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseTicket_ getTickets($sort, $limit, $status, $open_reason, $topic, $id_buyer, $ts_created_from_iso, $ts_updated_from_iso, $offset, $storefront, $fulfillment_type)

Get a list of tickets

Get a list of tickets for given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = new \Cbdesk\Kauflandv2\Api\Model\TicketsSort(); // \Cbdesk\Kauflandv2\Api\Model\TicketsSort | The sort direction
$limit = new \Cbdesk\Kauflandv2\Api\Model\TicketListLimit(); // \Cbdesk\Kauflandv2\Api\Model\TicketListLimit | Desired size of result set (default: 30)
$status = array(new \Cbdesk\Kauflandv2\Api\Model\TicketStatus()); // \Cbdesk\Kauflandv2\Api\Model\TicketStatus[] | The status of the ticket
$open_reason = array(new \Cbdesk\Kauflandv2\Api\Model\TicketReason()); // \Cbdesk\Kauflandv2\Api\Model\TicketReason[] | The reason for this ticket.
$topic = array(new \Cbdesk\Kauflandv2\Api\Model\TicketTopic()); // \Cbdesk\Kauflandv2\Api\Model\TicketTopic[] | The topic of this ticket.
$id_buyer = new \Cbdesk\Kauflandv2\Api\Model\Integer(); // \Cbdesk\Kauflandv2\Api\Model\Integer | The buyer's internal id
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter tickets by their creation timestamp in ISO 8601
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter tickets by their update timestamp in ISO 8601
$offset = new \Cbdesk\Kauflandv2\Api\Model\TicketListOffset(); // \Cbdesk\Kauflandv2\Api\Model\TicketListOffset | Offset applied to the result set (default: 0)
$storefront = array(new \Cbdesk\Kauflandv2\Api\Model\Storefront()); // \Cbdesk\Kauflandv2\Api\Model\Storefront[] | Identifier for the storefront the tickets should belong to
$fulfillment_type = array(new \Cbdesk\Kauflandv2\Api\Model\FulfillmentType()); // \Cbdesk\Kauflandv2\Api\Model\FulfillmentType[] | Filter tickets by their fulfillment type

try {
    $result = $apiInstance->getTickets($sort, $limit, $status, $open_reason, $topic, $id_buyer, $ts_created_from_iso, $ts_updated_from_iso, $offset, $storefront, $fulfillment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**\Cbdesk\Kauflandv2\Api\Model\TicketsSort**](../Model/.md)| The sort direction | [optional]
 **limit** | [**\Cbdesk\Kauflandv2\Api\Model\TicketListLimit**](../Model/.md)| Desired size of result set (default: 30) | [optional]
 **status** | [**\Cbdesk\Kauflandv2\Api\Model\TicketStatus[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\TicketStatus.md)| The status of the ticket | [optional]
 **open_reason** | [**\Cbdesk\Kauflandv2\Api\Model\TicketReason[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\TicketReason.md)| The reason for this ticket. | [optional]
 **topic** | [**\Cbdesk\Kauflandv2\Api\Model\TicketTopic[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\TicketTopic.md)| The topic of this ticket. | [optional]
 **id_buyer** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](../Model/.md)| The buyer&#x27;s internal id | [optional]
 **ts_created_from_iso** | **\DateTime**| Filter tickets by their creation timestamp in ISO 8601 | [optional]
 **ts_updated_from_iso** | **\DateTime**| Filter tickets by their update timestamp in ISO 8601 | [optional]
 **offset** | [**\Cbdesk\Kauflandv2\Api\Model\TicketListOffset**](../Model/.md)| Offset applied to the result set (default: 0) | [optional]
 **storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\Storefront.md)| Identifier for the storefront the tickets should belong to | [optional]
 **fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType[]**](../Model/\Cbdesk\Kauflandv2\Api\Model\FulfillmentType.md)| Filter tickets by their fulfillment type | [optional] [default to [&quot;fulfilled_by_merchant&quot;]]

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\CollectionApiResponseTicket_**](../Model/CollectionApiResponseTicket_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **openTicket**
> \Cbdesk\Kauflandv2\Api\Model\ApiResponseOpenTicketResponse_ openTicket($body)

Open a ticket

Open a ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cbdesk\Kauflandv2\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cbdesk\Kauflandv2\Api\Model\OpenTicketRequest(); // \Cbdesk\Kauflandv2\Api\Model\OpenTicketRequest | 

try {
    $result = $apiInstance->openTicket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cbdesk\Kauflandv2\Api\Model\OpenTicketRequest**](../Model/OpenTicketRequest.md)|  |

### Return type

[**\Cbdesk\Kauflandv2\Api\Model\ApiResponseOpenTicketResponse_**](../Model/ApiResponseOpenTicketResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

