# # MessageContentVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Media ID (or media_init placeholder) |
**link** | **string** | Optional. Link to media | [optional]
**mime_type** | **string** | Mime type of media |
**file_size** | **int** | File size in bytes |
**file_name** | **string** | Optional. File name | [optional]
**sha256** | **string** | Checksum | [optional]
**timestamp** | **float** | Created at |
**caption** | **string** | Optional. Text caption under the media. | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**width** | **int** | Width of the media in pixels | [optional]
**height** | **int** | Height of the media in pixels | [optional]
**buttons** | [**\Purelines\WhapiSdk\Model\Button[]**](Button.md) |  | [optional]
**view_once** | **bool** | Is view once | [optional]
**seconds** | **int** | Optional. For video files, this field indicates the duration of the video file in seconds. | [optional]
**autoplay** | **bool** | Optional. If the media is a GIF, this field indicates whether the GIF should be played automatically when the message is received. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
