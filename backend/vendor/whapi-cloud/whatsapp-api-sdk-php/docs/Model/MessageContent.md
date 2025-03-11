# # MessageContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | [**\OpenAPI\Client\Model\MessagePropsInteractiveBody**](MessagePropsInteractiveBody.md) |  |
**buttons** | [**\OpenAPI\Client\Model\Button[]**](Button.md) |  | [optional]
**sections** | [**\OpenAPI\Client\Model\ActionListSectionsInner[]**](ActionListSectionsInner.md) | Section of the message | [optional]
**button** | **string** | Button text for list of message | [optional]
**view_once** | **bool** | Is view once | [optional]
**id** | **string** | Media ID |
**link** | **string** | Optional. Link to media | [optional]
**mime_type** | **string** | Mime type of media |
**file_size** | **int** | File size in bytes |
**file_name** | **string** | Optional. File name | [optional]
**sha256** | **string** | Checksum | [optional]
**timestamp** | **float** | Created at | [optional]
**caption** | **string** | Optional. Text caption under the live location | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**width** | **int** | Width of the media in pixels | [optional]
**height** | **int** | Height of the media in pixels | [optional]
**seconds** | **int** | Optional. For audio files, this field indicates the duration of the audio file in seconds. | [optional]
**autoplay** | **bool** | Optional. If the media is a GIF, this field indicates whether the GIF should be played automatically when the message is received. | [optional]
**recording_time** | **float** | Time in seconds to simulate recording voice | [optional] [default to 0]
**filename** | **string** | Optional. File name | [optional]
**page_count** | **int** | Optional. Number of pages | [optional]
**url** | **string** | URL for the website where the user downloaded the location information | [optional]
**catalog_id** | **string** | Catalog ID | [optional]
**newsletter_id** | **string** | Newsletter ID |
**invite_code** | **string** | Invite code | [optional]
**title** | **string** | Title of poll |
**description** | **string** | Description of the link | [optional]
**canonical** | **string** | Canonical URL of the link (for example, if the link is shortened) | [optional]
**newsletter_name** | **string** | Newsletter name |
**expiration** | **float** | Expiration timestamp of the invitation |
**product_id** | **string** | Product ID | [optional]
**animated** | **bool** | Optional. For stickers, this field indicates whether the sticker is animated. | [optional]
**latitude** | **float** | Latitude of live location being sent |
**longitude** | **float** | Longitude of live location being sent |
**address** | **string** | Address of the location | [optional]
**name** | **string** | Name of contact | [optional]
**accuracy** | **int** | Accuracy of the live location in meters | [optional]
**speed** | **int** | Speed of the live location in meters per second | [optional]
**degrees** | **int** | Degrees clockwise from true north | [optional]
**comment** | **string** | Optional. Comment for the location | [optional]
**sequence_number** | **int** | Optional. Sequence number of the live location for event tracking | [optional]
**time_offset** | **float** | Optional. Time offset of the live location | [optional]
**vcard** | **string** | Vcard of contact | [optional]
**list** | [**\OpenAPI\Client\Model\VCard[]**](VCard.md) |  | [optional]
**header** | [**\OpenAPI\Client\Model\MessagePropsInteractiveHeader**](MessagePropsInteractiveHeader.md) |  | [optional]
**footer** | [**\OpenAPI\Client\Model\MessagePropsInteractiveFooter**](MessagePropsInteractiveFooter.md) |  | [optional]
**action** | [**\OpenAPI\Client\Model\InteractiveAction**](InteractiveAction.md) |  |
**type** | [**\OpenAPI\Client\Model\InteractiveType**](InteractiveType.md) |  | [optional]
**options** | **string[]** | Options of poll |
**vote_limit** | **int** | Number of selectable options in poll (1 - can choose only one option, 0 - any number of options) | [optional]
**total** | **int** | Total count of selected options | [optional]
**results** | [**\OpenAPI\Client\Model\PollResults[]**](PollResults.md) |  | [optional]
**list_reply** | [**\OpenAPI\Client\Model\ListReply**](ListReply.md) |  | [optional]
**buttons_reply** | [**\OpenAPI\Client\Model\ButtonsReply**](ButtonsReply.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
