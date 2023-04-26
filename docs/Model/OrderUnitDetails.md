# OrderUnitDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order_unit** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger**](LongInteger.md) |  | 
**id_order** | **string** |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) |  | 
**is_marketplace_deemed_supplier** | **bool** |  | 
**ts_updated_iso** | [**\DateTime**](\DateTime.md) |  | 
**status** | [**\Cbdesk\Kauflandv2\Api\Model\OrderUnitStatus**](OrderUnitStatus.md) |  | 
**price** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](Integer.md) |  | 
**id_offer** | **string** |  | 
**revenue_gross** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](Integer.md) |  | 
**revenue_net** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](Integer.md) |  | 
**note** | **string** |  | 
**unit_condition** | **string** |  | 
**storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](Storefront.md) |  | 
**currency** | [**\Cbdesk\Kauflandv2\Api\Model\Currency**](Currency.md) |  | 
**delivery_time_min** | [**AllOfOrderUnitDetailsDeliveryTimeMin**](AllOfOrderUnitDetailsDeliveryTimeMin.md) |  | 
**delivery_time_max** | [**AllOfOrderUnitDetailsDeliveryTimeMax**](AllOfOrderUnitDetailsDeliveryTimeMax.md) |  | 
**delivery_time_expires_iso** | [**\DateTime**](\DateTime.md) |  | 
**order_received_timestamp_iso** | [**\DateTime**](\DateTime.md) |  | 
**shipping_rate** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](Integer.md) |  | 
**cancel_reason** | **string** |  | 
**fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType**](FulfillmentType.md) |  | 
**buyer** | [**AllOfOrderUnitDetailsBuyer**](AllOfOrderUnitDetailsBuyer.md) |  | 
**billing_address** | [**AllOfOrderUnitDetailsBillingAddress**](AllOfOrderUnitDetailsBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderUnitDetailsShippingAddress**](AllOfOrderUnitDetailsShippingAddress.md) |  | 
**product** | [**AllOfOrderUnitDetailsProduct**](AllOfOrderUnitDetailsProduct.md) |  | 
**delivery_attempt_timestamp_iso** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tickets** | [**\Cbdesk\Kauflandv2\Api\Model\Ticket[]**](Ticket.md) |  | [optional] 
**return_unit** | [**AllOfOrderUnitDetailsReturnUnit**](AllOfOrderUnitDetailsReturnUnit.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

