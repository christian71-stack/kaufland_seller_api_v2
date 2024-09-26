# Ticket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_ticket** | [**\Kaufland\Seller\Model\TicketID**](TicketID.md) |  | 
**ids_order_units** | [**\Kaufland\Seller\Model\LongInteger[]**](LongInteger.md) | The list of order units IDs | 
**id_buyer** | [**AllOfTicketIdBuyer**](AllOfTicketIdBuyer.md) |  | 
**ts_created_iso** | [**\DateTime**](\DateTime.md) | Creation date of the ticket in iso 8601 | 
**ts_updated_iso** | [**\DateTime**](\DateTime.md) | Last update on the ticket in iso 8601 | 
**status** | [**\Kaufland\Seller\Model\TicketStatus**](TicketStatus.md) |  | 
**open_reason** | [**\Kaufland\Seller\Model\TicketReason**](TicketReason.md) |  | 
**topic** | [**AllOfTicketTopic**](AllOfTicketTopic.md) | The topic of the ticket | 
**is_seller_responsible** | **bool** | An indicator, whether the seller needs to take action | 
**fulfillment_type** | [**\Kaufland\Seller\Model\FulfillmentType**](FulfillmentType.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

