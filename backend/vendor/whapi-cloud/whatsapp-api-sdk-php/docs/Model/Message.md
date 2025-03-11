# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Message ID |
**type** | [**\OpenAPI\Client\Model\MessageType**](MessageType.md) |  |
**subtype** | **string** | Message subtype | [optional]
**chat_id** | **string** | Chat ID |
**chat_name** | **string** | Chat name | [optional]
**from** | **string** | WhatsApp ID of the sender | [optional]
**from_me** | **bool** | Is message from me |
**from_name** | **string** | Pushname of the sender | [optional]
**source** | [**\OpenAPI\Client\Model\MessageSource**](MessageSource.md) |  | [optional]
**timestamp** | **float** | Message timestamp |
**device_id** | **float** | Device ID, if the message was not sent through the app | [optional]
**status** | [**\OpenAPI\Client\Model\StatusEnum**](StatusEnum.md) |  | [optional]
**text** | [**\OpenAPI\Client\Model\MessageContentText**](MessageContentText.md) |  | [optional]
**image** | [**\OpenAPI\Client\Model\MessageContentImage**](MessageContentImage.md) |  | [optional]
**video** | [**\OpenAPI\Client\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**short** | [**\OpenAPI\Client\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**gif** | [**\OpenAPI\Client\Model\MessageContentVideo**](MessageContentVideo.md) |  | [optional]
**audio** | [**\OpenAPI\Client\Model\MessageContentAudio**](MessageContentAudio.md) |  | [optional]
**voice** | [**\OpenAPI\Client\Model\MessageContentAudio**](MessageContentAudio.md) |  | [optional]
**document** | [**\OpenAPI\Client\Model\MessageContentDocument**](MessageContentDocument.md) |  | [optional]
**link_preview** | [**\OpenAPI\Client\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**sticker** | [**\OpenAPI\Client\Model\MessageContentSticker**](MessageContentSticker.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\MessageContentLocation**](MessageContentLocation.md) |  | [optional]
**live_location** | [**\OpenAPI\Client\Model\MessageContentLiveLocation**](MessageContentLiveLocation.md) |  | [optional]
**contact** | [**\OpenAPI\Client\Model\MessageContentContact**](MessageContentContact.md) |  | [optional]
**contact_list** | [**\OpenAPI\Client\Model\MessageContentContacts**](MessageContentContacts.md) |  | [optional]
**interactive** | [**\OpenAPI\Client\Model\MessageContentInteractive**](MessageContentInteractive.md) |  | [optional]
**poll** | [**\OpenAPI\Client\Model\MessageContentPoll**](MessageContentPoll.md) |  | [optional]
**hsm** | [**\OpenAPI\Client\Model\MessageContentHSM**](MessageContentHSM.md) |  | [optional]
**system** | [**\OpenAPI\Client\Model\MessageContentSystem**](MessageContentSystem.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\MessageContentOrder**](MessageContentOrder.md) |  | [optional]
**group_invite** | [**\OpenAPI\Client\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**newsletter_invite** | [**\OpenAPI\Client\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**admin_invite** | [**\OpenAPI\Client\Model\MessageContentNewsletterAdminInvite**](MessageContentNewsletterAdminInvite.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\MessageContentProduct**](MessageContentProduct.md) |  | [optional]
**catalog** | [**\OpenAPI\Client\Model\MessageContentLinkPreview**](MessageContentLinkPreview.md) |  | [optional]
**product_items** | [**\OpenAPI\Client\Model\MessageContentProductItems**](MessageContentProductItems.md) |  | [optional]
**action** | [**\OpenAPI\Client\Model\MessageAction**](MessageAction.md) |  | [optional]
**context** | [**\OpenAPI\Client\Model\MessageContext**](MessageContext.md) |  | [optional]
**event** | [**\OpenAPI\Client\Model\MessageContentEvent**](MessageContentEvent.md) |  | [optional]
**list** | [**\OpenAPI\Client\Model\MessageContentList**](MessageContentList.md) |  | [optional]
**buttons** | [**\OpenAPI\Client\Model\MessageContentButtons**](MessageContentButtons.md) |  | [optional]
**reactions** | [**\OpenAPI\Client\Model\MessageReaction[]**](MessageReaction.md) | Reactions for message | [optional]
**labels** | [**\OpenAPI\Client\Model\Label[]**](Label.md) | Labels associated with message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
