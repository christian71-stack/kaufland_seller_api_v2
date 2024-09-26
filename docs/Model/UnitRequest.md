# UnitRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount of available Units | [optional] 
**handling_time** | **int** | handling time | 
**listing_price** | **int** | Listing price, in integral cents of the storefront&#x27;s currency (CZK for cz, EUR for de, sk). Minimum 1 cent, maximum differs by storefront (1 million EUR or 25 million CZK). | 
**minimum_price** | **int** | Minimum price, in integral cents of the storefront&#x27;s currency. Only relevant for sellers subscribed to Tiefstpreisautomatik | [optional] 
**note** | **string** | A note for this unit | [optional] 
**id_shipping_group** | **int** | ID of the shipping group | [optional] 
**id_warehouse** | **int** | ID of warehouse | [optional] 
**ean** | **string** | EAN, 13 or 14 digits | [optional] 
**id_product** | **int** | Internal ID of Product, unique across all Products | [optional] 
**id_offer** | **string** | Seller&#x27;s unique ID for offer(s) | 
**condition** | [**AnyOfUnitRequestCondition**](AnyOfUnitRequestCondition.md) | Unit&#x27;s condition | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

