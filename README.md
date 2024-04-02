# kaufland_seller_api_v2
This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.13.1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/christian71-stack/kaufland-de_seller_api_v2.git"
    }
  ],
  "require": {
    "christian71-stack/kaufland-de_seller_api_v2": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/kaufland_seller_api_v2/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitCancelRequest(); // \Kaufland\Seller\Model\OrderUnitCancelRequest | Reason of the cancellation
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->cancelOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->fulfilOrderUnit($id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->fulfilOrderUnit: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_order_unit = 789; // int | Order unit ID, unique across all order units
$embedded = array(new \Kaufland\Seller\Model\OrderUnitEmbeddable()); // \Kaufland\Seller\Model\OrderUnitEmbeddable[] | Additional data to be returned

try {
    $result = $apiInstance->getOrderUnit($id_order_unit, $embedded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnit: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$storefront = new \Kaufland\Seller\Model\Storefront(); // \Kaufland\Seller\Model\Storefront | Locale of storefront
$id_offer = "id_offer_example"; // string | Unique ID for offer(s)
$status = array(new \Kaufland\Seller\Model\OrderUnitStatus()); // \Kaufland\Seller\Model\OrderUnitStatus[] | Get only order units which are in the given status
$ts_created_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were placed after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$ts_updated_from_iso = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get only order units which were updated after this timestamp. Should be in YYYY-MM-ddTHH:mm:ssZ format
$fulfillment_type = array(new \Kaufland\Seller\Model\FulfillmentType()); // \Kaufland\Seller\Model\FulfillmentType[] | Get only order units which are fulfilled by the given type
$sort = "ts_created:desc"; // string | Specify sorting
$limit = 30; // int | Desired size of result set<br>max: 100, default: 30
$offset = 0; // int | Offset applied to result set<br>default: 0

try {
    $result = $apiInstance->getOrderUnits($storefront, $id_offer, $status, $ts_created_from_iso, $ts_updated_from_iso, $fulfillment_type, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->getOrderUnits: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitRefundRequest(); // \Kaufland\Seller\Model\OrderUnitRefundRequest | Request body containing amount and reason of the refund.
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->refundOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->refundOrderUnit: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Kaufland\Seller\Api\OrderUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Kaufland\Seller\Model\OrderUnitSendRequest(); // \Kaufland\Seller\Model\OrderUnitSendRequest | Request body containing tracking number(s) and carrier code of the shipment(s)
$id_order_unit = 789; // int | Order unit ID, unique across all order units

try {
    $apiInstance->sendOrderUnit($body, $id_order_unit);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitsApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderUnitsApi* | [**cancelOrderUnit**](docs/Api/OrderUnitsApi.md#cancelorderunit) | **PATCH** /order-units/{id_order_unit}/cancel | Cancel an order unit
*OrderUnitsApi* | [**fulfilOrderUnit**](docs/Api/OrderUnitsApi.md#fulfilorderunit) | **PATCH** /order-units/{id_order_unit}/fulfil | Mark an order unit to be in fulfillment
*OrderUnitsApi* | [**getOrderUnit**](docs/Api/OrderUnitsApi.md#getorderunit) | **GET** /order-units/{id_order_unit} | Get an order unit by ID
*OrderUnitsApi* | [**getOrderUnits**](docs/Api/OrderUnitsApi.md#getorderunits) | **GET** /order-units | Get a list of order units
*OrderUnitsApi* | [**refundOrderUnit**](docs/Api/OrderUnitsApi.md#refundorderunit) | **PATCH** /order-units/{id_order_unit}/refund | Send a refund to a customer
*OrderUnitsApi* | [**sendOrderUnit**](docs/Api/OrderUnitsApi.md#sendorderunit) | **PATCH** /order-units/{id_order_unit}/send | Mark an order unit as sent
*OrdersApi* | [**createPlaygroundOrder**](docs/Api/OrdersApi.md#createplaygroundorder) | **POST** /playground/orders | Creates a dummy order on the kaufland playground API environment.
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{id_order} | Get an order by ID
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | Get a list of orders
*PlaygroundApi* | [**createPlaygroundOrder**](docs/Api/PlaygroundApi.md#createplaygroundorder) | **POST** /playground/orders | Creates a dummy order on the kaufland playground API environment.
*ProductsApi* | [**getProductByEan**](docs/Api/ProductsApi.md#getproductbyean) | **GET** /products/ean/{ean} | Get a product by EAN
*ShipmentsApi* | [**addShipment**](docs/Api/ShipmentsApi.md#addshipment) | **POST** /shipments | Add a shipment to an order unit which is already marked as sent.
*ShippingGroupsApi* | [**getShippingGroup**](docs/Api/ShippingGroupsApi.md#getshippinggroup) | **GET** /shipping-groups/{id_shipping_group} | Get a shipping group by ID
*ShippingGroupsApi* | [**getShippingGroups**](docs/Api/ShippingGroupsApi.md#getshippinggroups) | **GET** /shipping-groups | Get the list of your predefined shipping groups
*StatusApi* | [**ping**](docs/Api/StatusApi.md#ping) | **GET** /status/ping | Ping the Marketplace Seller API by Kaufland
*SubscriptionsApi* | [**addSubscription**](docs/Api/SubscriptionsApi.md#addsubscription) | **POST** /subscriptions | Subscribe for event
*SubscriptionsApi* | [**deleteSubscription**](docs/Api/SubscriptionsApi.md#deletesubscription) | **DELETE** /subscriptions/{id_subscription} | Unsubscribe from event
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{id_subscription} | Get a push notification subscription by ID
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | Get a list of your push notification subscriptions
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PATCH** /subscriptions/{id_subscription} | Update subscription
*UnitsApi* | [**bulkUpdateUnits**](docs/Api/UnitsApi.md#bulkupdateunits) | **POST** /units/bulk | Update some fields of a given set of units
*UnitsApi* | [**createUnit**](docs/Api/UnitsApi.md#createunit) | **POST** /units | Add a unit
*UnitsApi* | [**deleteUnit**](docs/Api/UnitsApi.md#deleteunit) | **DELETE** /units/{id_unit} | Delete a unit
*UnitsApi* | [**getUnit**](docs/Api/UnitsApi.md#getunit) | **GET** /units/{id_unit} | Get a unit by ID
*UnitsApi* | [**getUnits**](docs/Api/UnitsApi.md#getunits) | **GET** /units | Get a list of your units
*UnitsApi* | [**patchUnit**](docs/Api/UnitsApi.md#patchunit) | **PATCH** /units/{id_unit} | Update some of the fields of a unit
*WarehousesApi* | [**createWarehouse**](docs/Api/WarehousesApi.md#createwarehouse) | **POST** /warehouses | Create a new Warehouse
*WarehousesApi* | [**deleteWarehouse**](docs/Api/WarehousesApi.md#deletewarehouse) | **DELETE** /warehouses/{id_warehouse} | Delete a warehouse
*WarehousesApi* | [**getWarehouse**](docs/Api/WarehousesApi.md#getwarehouse) | **GET** /warehouses/{id_warehouse} | Get a warehouse by its ID
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /warehouses | Get a list of your Warehouses
*WarehousesApi* | [**updateWarehouse**](docs/Api/WarehousesApi.md#updatewarehouse) | **PUT** /warehouses/{id_warehouse} | Update a Warehouse

## Documentation For Models

 - [AddShipmentRequest](docs/Model/AddShipmentRequest.md)
 - [AddShipmentRequestShipmentInformation](docs/Model/AddShipmentRequestShipmentInformation.md)
 - [Address](docs/Model/Address.md)
 - [AllOfDeliveryPickupLocation](docs/Model/AllOfDeliveryPickupLocation.md)
 - [AllOfOrderDetailsBillingAddress](docs/Model/AllOfOrderDetailsBillingAddress.md)
 - [AllOfOrderDetailsBuyer](docs/Model/AllOfOrderDetailsBuyer.md)
 - [AllOfOrderDetailsOrderUnitsDeliveryTimeMin](docs/Model/AllOfOrderDetailsOrderUnitsDeliveryTimeMin.md)
 - [AllOfOrderDetailsOrderUnitsProduct](docs/Model/AllOfOrderDetailsOrderUnitsProduct.md)
 - [AllOfOrderDetailsShippingAddress](docs/Model/AllOfOrderDetailsShippingAddress.md)
 - [AllOfOrderUnitBillingAddress](docs/Model/AllOfOrderUnitBillingAddress.md)
 - [AllOfOrderUnitBuyer](docs/Model/AllOfOrderUnitBuyer.md)
 - [AllOfOrderUnitDeliveryTimeMax](docs/Model/AllOfOrderUnitDeliveryTimeMax.md)
 - [AllOfOrderUnitDeliveryTimeMin](docs/Model/AllOfOrderUnitDeliveryTimeMin.md)
 - [AllOfOrderUnitDetailsBillingAddress](docs/Model/AllOfOrderUnitDetailsBillingAddress.md)
 - [AllOfOrderUnitDetailsBuyer](docs/Model/AllOfOrderUnitDetailsBuyer.md)
 - [AllOfOrderUnitDetailsDeliveryTimeMax](docs/Model/AllOfOrderUnitDetailsDeliveryTimeMax.md)
 - [AllOfOrderUnitDetailsDeliveryTimeMin](docs/Model/AllOfOrderUnitDetailsDeliveryTimeMin.md)
 - [AllOfOrderUnitDetailsProduct](docs/Model/AllOfOrderUnitDetailsProduct.md)
 - [AllOfOrderUnitDetailsReturnUnit](docs/Model/AllOfOrderUnitDetailsReturnUnit.md)
 - [AllOfOrderUnitDetailsShippingAddress](docs/Model/AllOfOrderUnitDetailsShippingAddress.md)
 - [AllOfOrderUnitProduct](docs/Model/AllOfOrderUnitProduct.md)
 - [AllOfOrderUnitShippingAddress](docs/Model/AllOfOrderUnitShippingAddress.md)
 - [AllOfProductUnitEmbeddedSeller](docs/Model/AllOfProductUnitEmbeddedSeller.md)
 - [AllOfTicketIdBuyer](docs/Model/AllOfTicketIdBuyer.md)
 - [AllOfTicketTopic](docs/Model/AllOfTicketTopic.md)
 - [AnyOfUnitRequestCondition](docs/Model/AnyOfUnitRequestCondition.md)
 - [AnyOfUnitsBulkUpdateResponseDataItems](docs/Model/AnyOfUnitsBulkUpdateResponseDataItems.md)
 - [ApiResponseOrderDetails_](docs/Model/ApiResponseOrderDetails_.md)
 - [ApiResponseOrderUnitDetails_](docs/Model/ApiResponseOrderUnitDetails_.md)
 - [ApiResponsePingMessage_](docs/Model/ApiResponsePingMessage_.md)
 - [ApiResponseProductWithEmbedded_](docs/Model/ApiResponseProductWithEmbedded_.md)
 - [ApiResponseShippingGroup_](docs/Model/ApiResponseShippingGroup_.md)
 - [ApiResponseSubscription_](docs/Model/ApiResponseSubscription_.md)
 - [ApiResponseUnit_](docs/Model/ApiResponseUnit_.md)
 - [ApiResponseWarehouse_](docs/Model/ApiResponseWarehouse_.md)
 - [BaseCollectionApiResponseCreatedOrder_](docs/Model/BaseCollectionApiResponseCreatedOrder_.md)
 - [Buyer](docs/Model/Buyer.md)
 - [Category](docs/Model/Category.md)
 - [CategoryBasic](docs/Model/CategoryBasic.md)
 - [CollectionApiResponseOrderUnit_](docs/Model/CollectionApiResponseOrderUnit_.md)
 - [CollectionApiResponseOrder_](docs/Model/CollectionApiResponseOrder_.md)
 - [CollectionApiResponseShippingGroup_](docs/Model/CollectionApiResponseShippingGroup_.md)
 - [CollectionApiResponseSubscription_](docs/Model/CollectionApiResponseSubscription_.md)
 - [CollectionApiResponseUnitEmbedded_](docs/Model/CollectionApiResponseUnitEmbedded_.md)
 - [CollectionApiResponseWarehouse_](docs/Model/CollectionApiResponseWarehouse_.md)
 - [CreateCollectionInputUnitsDetails_](docs/Model/CreateCollectionInputUnitsDetails_.md)
 - [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
 - [CreatedOrder](docs/Model/CreatedOrder.md)
 - [Currency](docs/Model/Currency.md)
 - [Delivery](docs/Model/Delivery.md)
 - [ErrorDetails](docs/Model/ErrorDetails.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FulfillmentType](docs/Model/FulfillmentType.md)
 - [Integer](docs/Model/Integer.md)
 - [LongInteger](docs/Model/LongInteger.md)
 - [NotFoundResponse](docs/Model/NotFoundResponse.md)
 - [Order](docs/Model/Order.md)
 - [OrderDetails](docs/Model/OrderDetails.md)
 - [OrderDetailsOrderUnits](docs/Model/OrderDetailsOrderUnits.md)
 - [OrderEmbeddable](docs/Model/OrderEmbeddable.md)
 - [OrderInvoice](docs/Model/OrderInvoice.md)
 - [OrderUnit](docs/Model/OrderUnit.md)
 - [OrderUnitCancelReason](docs/Model/OrderUnitCancelReason.md)
 - [OrderUnitCancelRequest](docs/Model/OrderUnitCancelRequest.md)
 - [OrderUnitDetails](docs/Model/OrderUnitDetails.md)
 - [OrderUnitEmbeddable](docs/Model/OrderUnitEmbeddable.md)
 - [OrderUnitRefundReason](docs/Model/OrderUnitRefundReason.md)
 - [OrderUnitRefundRequest](docs/Model/OrderUnitRefundRequest.md)
 - [OrderUnitSendRequest](docs/Model/OrderUnitSendRequest.md)
 - [OrderUnitStatus](docs/Model/OrderUnitStatus.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_](docs/Model/PartialPickSubscriptionCallbackUrlOrFallbackEmailOrEventNameOrIsActiveOrStorefront_.md)
 - [PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_](docs/Model/PickSubscriptionCallbackUrlOrFallbackEmailOrEventName_.md)
 - [PickupLocation](docs/Model/PickupLocation.md)
 - [PingMessage](docs/Model/PingMessage.md)
 - [Product](docs/Model/Product.md)
 - [ProductEmbeddable](docs/Model/ProductEmbeddable.md)
 - [ProductUnitEmbedded](docs/Model/ProductUnitEmbedded.md)
 - [ProductUnitEmbeddedSeller](docs/Model/ProductUnitEmbeddedSeller.md)
 - [ProductWithEmbedded](docs/Model/ProductWithEmbedded.md)
 - [ReturnReason](docs/Model/ReturnReason.md)
 - [ReturnUnit](docs/Model/ReturnUnit.md)
 - [ReturnUnitStatus](docs/Model/ReturnUnitStatus.md)
 - [SellerApiShippingGroupRegionOptionNameEnum](docs/Model/SellerApiShippingGroupRegionOptionNameEnum.md)
 - [SellerApiShippingGroupType](docs/Model/SellerApiShippingGroupType.md)
 - [SellerApiWarehouseType](docs/Model/SellerApiWarehouseType.md)
 - [ShippingGroup](docs/Model/ShippingGroup.md)
 - [ShippingGroupOption](docs/Model/ShippingGroupOption.md)
 - [ShippingGroupRegion](docs/Model/ShippingGroupRegion.md)
 - [Storefront](docs/Model/Storefront.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionEventName](docs/Model/SubscriptionEventName.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TicketID](docs/Model/TicketID.md)
 - [TicketReason](docs/Model/TicketReason.md)
 - [TicketStatus](docs/Model/TicketStatus.md)
 - [TicketTopic](docs/Model/TicketTopic.md)
 - [Unit](docs/Model/Unit.md)
 - [UnitCondition](docs/Model/UnitCondition.md)
 - [UnitEmbedded](docs/Model/UnitEmbedded.md)
 - [UnitEmbeddedEnum](docs/Model/UnitEmbeddedEnum.md)
 - [UnitPatchRequest](docs/Model/UnitPatchRequest.md)
 - [UnitRequest](docs/Model/UnitRequest.md)
 - [UnitStatuses](docs/Model/UnitStatuses.md)
 - [UnitsBulkUpdateErrorDetail](docs/Model/UnitsBulkUpdateErrorDetail.md)
 - [UnitsBulkUpdateErrorDetails](docs/Model/UnitsBulkUpdateErrorDetails.md)
 - [UnitsBulkUpdateInternalError](docs/Model/UnitsBulkUpdateInternalError.md)
 - [UnitsBulkUpdateRequest](docs/Model/UnitsBulkUpdateRequest.md)
 - [UnitsBulkUpdateResponse](docs/Model/UnitsBulkUpdateResponse.md)
 - [UnitsBulkUpdatedUnit](docs/Model/UnitsBulkUpdatedUnit.md)
 - [UnitsDetails](docs/Model/UnitsDetails.md)
 - [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
 - [Warehouse](docs/Model/Warehouse.md)
 - [WarehouseAddress](docs/Model/WarehouseAddress.md)
 - [WarehouseAddressRequest](docs/Model/WarehouseAddressRequest.md)
 - [WarehouseBodyRequest](docs/Model/WarehouseBodyRequest.md)
 - [WriteableUnitStatuses](docs/Model/WriteableUnitStatuses.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author

seller-api-support@kaufland-online.de

