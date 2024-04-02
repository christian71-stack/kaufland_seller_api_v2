# OrderUnit

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
**delivery_time_min** | [**AllOfOrderUnitDeliveryTimeMin**](AllOfOrderUnitDeliveryTimeMin.md) |  | 
**delivery_time_max** | [**AllOfOrderUnitDeliveryTimeMax**](AllOfOrderUnitDeliveryTimeMax.md) |  | 
**delivery_time_expires_iso** | [**\DateTime**](\DateTime.md) |  | 
**order_received_timestamp_iso** | [**\DateTime**](\DateTime.md) |  | 
**shipping_rate** | [**\Kaufland\Seller\Model\Integer**](Integer.md) |  | 
**cancel_reason** | **string** |  | 
**fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType**](FulfillmentType.md) |  | 
**buyer** | [**AllOfOrderUnitBuyer**](AllOfOrderUnitBuyer.md) |  | 
**billing_address** | [**AllOfOrderUnitBillingAddress**](AllOfOrderUnitBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderUnitShippingAddress**](AllOfOrderUnitShippingAddress.md) |  | 
**product** | [**AllOfOrderUnitProduct**](AllOfOrderUnitProduct.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

