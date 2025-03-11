# # SenderStories

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**media** | [**\OpenAPI\Client\Model\SendMediaMedia**](SendMediaMedia.md) |  | [optional]
**mime_type** | **string** | Mime type of media | [optional]
**no_encode** | **bool** | Do not use our encoding | [optional]
**no_cache** | **bool** | Do not use the cache in a request | [optional]
**caption** | **string** | Optional. Text caption under the media. | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**width** | **int** | Width of the media in pixels | [optional]
**height** | **int** | Height of the media in pixels | [optional]
**seconds** | **int** | Optional. For audio files, this field indicates the duration of the audio file in seconds. | [optional]
**contacts** | **string[]** | List of contacts to send the story to | [optional]
**background_color** | **string** | Background color of the story (ARGB) | [optional] [default to '#00000000']
**caption_color** | **string** | Caption color of the story (ARGB) | [optional] [default to '#FFFFFFFF']
**font_type** | **string** | Font style of the story | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
