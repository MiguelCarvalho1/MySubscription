# # SenderMedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**width** | **int** | Width of the media in pixels | [optional]
**height** | **int** | Height of the media in pixels | [optional]
**mentions** | **string[]** | The numbers of the mentioned users | [optional]
**view_once** | **bool** | Is view once | [optional]
**caption** | **string** | Optional. Text caption under the document. | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**autoplay** | **bool** | Optional. This field indicates whether the GIF should be played automatically when the message is received. | [optional]
**animated** | **bool** | Optional. For stickers, this field indicates whether the sticker is animated. | [optional]
**filename** | **string** | Optional. File name | [optional]
**seconds** | **int** | Optional. For audio files, this field indicates the duration of the audio file in seconds. | [optional]
**recording_time** | **float** | Time in seconds to simulate recording voice | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
