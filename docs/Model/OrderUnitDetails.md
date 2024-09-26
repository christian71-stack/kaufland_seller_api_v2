# OrderUnitDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order_unit** | [**\Kaufland\Seller\Model\LongInteger**](LongInteger.md) |  | 
**id_order** | **string** |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) |  | 
**is_marketplace_deemed_supplier** | **bool** |  | 
**ts_updated_iso** | [**\DateTime**](\DateTime.md) |  | 
**status** | [**\Kaufland\Seller\Model\OrderUnitStatus**](OrderUnitStatus.md) |  | 
**price** | [**\Kaufland\Seller\Model\Integer**](Integer.md) |  | 
**id_offer** | **string** |  | 
**revenue_gross** | [**\Kaufland\Seller\Model\Integer**](Integer.md) |  | 
**revenue_net** | [**\Kaufland\Seller\Model\Integer**](Integer.md) |  | 
**note** | **string** |  | 
**unit_condition** | **string** |  | 
**storefront** | [**\Kaufland\Seller\Model\Storefront**](Storefront.md) |  | 
**currency** | [**\Kaufland\Seller\Model\Currency**](Currency.md) |  | 
**delivery_time_min** | [**AllOfOrderUnitDetailsDeliveryTimeMin**](AllOfOrderUnitDetailsDeliveryTimeMin.md) |  | 
**delivery_time_max** | [**AllOfOrderUnitDetailsDeliveryTimeMax**](AllOfOrderUnitDetailsDeliveryTimeMax.md) |  | 
**delivery_time_expires_iso** | [**\DateTime**](\DateTime.md) |  | 
**order_received_timestamp_iso** | [**\DateTime**](\DateTime.md) |  | 
**shipping_rate** | [**\Kaufland\Seller\Model\Integer**](Integer.md) |  | 
**cancel_reason** | **string** |  | 
**fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType**](FulfillmentType.md) |  | 
**buyer** | [**AllOfOrderUnitDetailsBuyer**](AllOfOrderUnitDetailsBuyer.md) |  | 
**billing_address** | [**AllOfOrderUnitDetailsBillingAddress**](AllOfOrderUnitDetailsBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderUnitDetailsShippingAddress**](AllOfOrderUnitDetailsShippingAddress.md) |  | 
**product** | [**AllOfOrderUnitDetailsProduct**](AllOfOrderUnitDetailsProduct.md) |  | 
**delivery_attempt_timestamp_iso** | [**\DateTime**](\DateTime.md) | The attribute is only responded when explicitly requested as an embedded field | [optional] 
**tickets** | [**\Kaufland\Seller\Model\Ticket[]**](Ticket.md) | The attribute is only responded when explicitly requested as an embedded field | [optional] 
**return_unit** | [**AllOfOrderUnitDetailsReturnUnit**](AllOfOrderUnitDetailsReturnUnit.md) | The attribute is only responded when explicitly requested as an embedded field | [optional] 
**delivery** | [**\Kaufland\Seller\Model\Delivery**](Delivery.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

