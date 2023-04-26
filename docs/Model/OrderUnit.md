# OrderUnit

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
**delivery_time_min** | [**AllOfOrderUnitDeliveryTimeMin**](AllOfOrderUnitDeliveryTimeMin.md) |  | 
**delivery_time_max** | [**AllOfOrderUnitDeliveryTimeMax**](AllOfOrderUnitDeliveryTimeMax.md) |  | 
**delivery_time_expires_iso** | [**\DateTime**](\DateTime.md) |  | 
**order_received_timestamp_iso** | [**\DateTime**](\DateTime.md) |  | 
**shipping_rate** | [**\Cbdesk\Kauflandv2\Api\Model\Integer**](Integer.md) |  | 
**cancel_reason** | **string** |  | 
**fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType**](FulfillmentType.md) |  | 
**buyer** | [**AllOfOrderUnitBuyer**](AllOfOrderUnitBuyer.md) |  | 
**billing_address** | [**AllOfOrderUnitBillingAddress**](AllOfOrderUnitBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderUnitShippingAddress**](AllOfOrderUnitShippingAddress.md) |  | 
**product** | [**AllOfOrderUnitProduct**](AllOfOrderUnitProduct.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

