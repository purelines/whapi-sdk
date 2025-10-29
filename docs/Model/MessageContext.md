# # MessageContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**forwarded** | **bool** | Is forwarding message | [optional]
**forwarding_score** | **int** | Count fo forwarding message | [optional]
**mentions** | **string[]** | The numbers of the mentioned users | [optional]
**ad** | [**\Purelines\WhapiSdk\Model\MessageContextAD**](MessageContextAD.md) |  | [optional]
**conversion** | [**\Purelines\WhapiSdk\Model\MessageContextConversion**](MessageContextConversion.md) |  | [optional]
**quoted_id** | **string** | ID of quoted message | [optional]
**quoted_type** | [**\Purelines\WhapiSdk\Model\MessageType**](MessageType.md) |  | [optional]
**quoted_content** | [**\Purelines\WhapiSdk\Model\MessageContent**](MessageContent.md) |  | [optional]
**quoted_author** | **string** | Whatsapp ID of quoted message author | [optional]
**ephemeral** | **int** | Ephemeral message duration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
