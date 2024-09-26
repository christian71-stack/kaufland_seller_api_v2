# OrderDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order** | **string** |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) |  | 
**is_marketplace_deemed_supplier** | **bool** |  | 
**storefront** | [**\Kaufland\Seller\Model\Storefront**](Storefront.md) |  | 
**fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType**](FulfillmentType.md) |  | 
**order_units** | [**\Kaufland\Seller\Model\OrderDetailsOrderUnits[]**](OrderDetailsOrderUnits.md) |  | 
**billing_address** | [**AllOfOrderDetailsBillingAddress**](AllOfOrderDetailsBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderDetailsShippingAddress**](AllOfOrderDetailsShippingAddress.md) |  | 
**buyer** | [**AllOfOrderDetailsBuyer**](AllOfOrderDetailsBuyer.md) |  | 
**order_invoices** | [**\Kaufland\Seller\Model\OrderInvoice[]**](OrderInvoice.md) |  | [optional] 
**delivery** | [**\Kaufland\Seller\Model\Delivery**](Delivery.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

