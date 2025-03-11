# # SenderNewsletterInviteByCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**media** | [**\OpenAPI\Client\Model\SendMediaMedia**](SendMediaMedia.md) |  | [optional]
**mime_type** | **string** | Mime type of media | [optional]
**no_encode** | **bool** | Do not use our encoding | [optional]
**no_cache** | **bool** | Do not use the cache in a request | [optional]
**mentions** | **string[]** | The numbers of the mentioned users | [optional]
**view_once** | **bool** | Is view once | [optional]
**title** | **string** | Title of the newsletter. If not set, the newsletter title will be used | [optional]
**body** | **string** | Invite message with link. Example: \&quot;Follow this link to join my newsletter on WhatsApp\&quot;. Use %URL% to insert the invite link. | [optional]
**preview_type** | **string** | Type of the newsletter preview. Use &#39;newsletter_picture&#39; to set a newsletter picture as large preview, &#39;thumbnail&#39; to set a custom small jpeg image from &#39;preview&#39; param as preview,  &#39;media&#39; to set a custom large image from &#39;media&#39; param as large preview,  &#39;style1&#39; to set a isometric style for newsletter invite link preview stub, &#39;style2&#39; to set a flat style for newsletter invite link preview stub, &#39;style3&#39; to set a WA style for newsletter invite link preview stub, or &#39;none&#39; to not set a preview. If not set, the default is newsletter_picture. | [optional] [default to 'newsletter_picture']
**preview** | **string** | Base64 encoded image for small version newsletter invite link preview (preview_type&#x3D;thumbnail). In JPEG format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
