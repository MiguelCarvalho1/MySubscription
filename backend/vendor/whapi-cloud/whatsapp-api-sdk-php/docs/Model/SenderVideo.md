# # SenderVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**media** | [**\OpenAPI\Client\Model\SendMediaMedia**](SendMediaMedia.md) |  |
**mime_type** | **string** | Mime type of media | [optional]
**no_encode** | **bool** | Do not use our encoding | [optional]
**no_cache** | **bool** | Do not use the cache in a request | [optional]
**caption** | **string** | Optional. Text caption under the media. | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**width** | **int** | Width of the media in pixels | [optional]
**height** | **int** | Height of the media in pixels | [optional]
**mentions** | **string[]** | The numbers of the mentioned users | [optional]
**view_once** | **bool** | Is view once | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
