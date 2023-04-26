# OrderDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_order** | **string** |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) |  | 
**is_marketplace_deemed_supplier** | **bool** |  | 
**storefront** | [**\Cbdesk\Kauflandv2\Api\Model\Storefront**](Storefront.md) |  | 
**fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType**](FulfillmentType.md) |  | 
**order_units** | [**\Cbdesk\Kauflandv2\Api\Model\OrderDetailsOrderUnits[]**](OrderDetailsOrderUnits.md) |  | 
**billing_address** | [**AllOfOrderDetailsBillingAddress**](AllOfOrderDetailsBillingAddress.md) |  | 
**shipping_address** | [**AllOfOrderDetailsShippingAddress**](AllOfOrderDetailsShippingAddress.md) |  | 
**buyer** | [**AllOfOrderDetailsBuyer**](AllOfOrderDetailsBuyer.md) |  | 
**order_invoices** | [**\Cbdesk\Kauflandv2\Api\Model\OrderInvoice[]**](OrderInvoice.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

