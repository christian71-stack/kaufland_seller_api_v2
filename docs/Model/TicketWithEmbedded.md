# TicketWithEmbedded

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_ticket** | [**\Cbdesk\Kauflandv2\Api\Model\TicketID**](TicketID.md) |  | 
**ids_order_units** | [**\Cbdesk\Kauflandv2\Api\Model\LongInteger[]**](LongInteger.md) | The list of order units IDs | 
**id_buyer** | [**AllOfTicketWithEmbeddedIdBuyer**](AllOfTicketWithEmbeddedIdBuyer.md) |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) | Creation date of the ticket in iso 8601 | 
**ts_updated_iso** | [**\DateTime**](\DateTime.md) | Last update on the ticket in iso 8601 | 
**status** | [**\Cbdesk\Kauflandv2\Api\Model\TicketStatus**](TicketStatus.md) |  | 
**open_reason** | [**\Cbdesk\Kauflandv2\Api\Model\TicketReason**](TicketReason.md) |  | 
**topic** | [**AllOfTicketWithEmbeddedTopic**](AllOfTicketWithEmbeddedTopic.md) | The topic of the ticket | 
**is_seller_responsible** | **bool** | An indicator, whether the seller needs to take action | 
**fulfillment_type** | [**\Cbdesk\Kauflandv2\Api\Model\FulfillmentType**](FulfillmentType.md) |  | 
**messages** | [**\Cbdesk\Kauflandv2\Api\Model\TicketMessage[]**](TicketMessage.md) | A list of the tickets&#x27; messages | 
**order_units** | [**\Cbdesk\Kauflandv2\Api\Model\OrderUnit[]**](OrderUnit.md) | A list of the order units linked to the ticket | 
**buyer** | [**AllOfTicketWithEmbeddedBuyer**](AllOfTicketWithEmbeddedBuyer.md) | The buyer of the ticket | 
**product** | [**AllOfTicketWithEmbeddedProduct**](AllOfTicketWithEmbeddedProduct.md) | The product related to the ticket | 
**files** | [**\Cbdesk\Kauflandv2\Api\Model\TicketFile[]**](TicketFile.md) | Uploaded files inside the ticket | 
**storefront** | **string** | Current storefront (country) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

