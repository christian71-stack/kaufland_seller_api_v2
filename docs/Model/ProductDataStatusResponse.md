# ProductDataStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_ready** | **bool** |  | 
**update_status** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataStatus**](ProductDataStatus.md) |  | 
**id_product** | **int** |  | 
**product_not_ready_reason** | [**AllOfProductDataStatusResponseProductNotReadyReason**](AllOfProductDataStatusResponseProductNotReadyReason.md) |  | 
**update_fail_reason** | [**AllOfProductDataStatusResponseUpdateFailReason**](AllOfProductDataStatusResponseUpdateFailReason.md) |  | 
**attribute_values** | [**\Cbdesk\Kauflandv2\Api\Model\ProductDataStatusAttribute[]**](ProductDataStatusAttribute.md) |  | 
**missing_attributes** | **string[]** |  | 
**min_one_missing_attributes** | **string[]** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

