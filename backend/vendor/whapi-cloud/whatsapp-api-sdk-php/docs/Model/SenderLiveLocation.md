# # SenderLiveLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**latitude** | **float** | Latitude of location being sent |
**longitude** | **float** | Longitude of location being sent |
**address** | **string** | Address of the location | [optional]
**name** | **string** | Name of the location | [optional]
**url** | **string** | URL for the website where the user downloaded the location information | [optional]
**preview** | **string** | Optional. Base64 encoded preview of the media. In JPEG format. | [optional]
**accuracy** | **int** | Accuracy of the location in meters | [optional]
**speed** | **int** | Speed of the location in meters per second | [optional]
**degrees** | **int** | Degrees clockwise from true north | [optional]
**comment** | **string** | Optional. Comment for the location | [optional]
**view_once** | **bool** | Is view once | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
