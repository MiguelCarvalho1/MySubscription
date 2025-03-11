# # Newsletter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Chat ID |
**name** | **string** | Newsletter name |
**type** | **string** | Chat type |
**timestamp** | **int** | Chat timestamp | [optional]
**chat_pic** | **string** | Chat picture URL | [optional]
**chat_pic_full** | **string** | Chat full picture URL | [optional]
**pin** | **bool** | Is chat pinned | [optional]
**mute** | **bool** | Is chat muted | [optional]
**mute_until** | **int** | Chat mute until | [optional]
**archive** | **bool** | Is chat archived | [optional]
**unread** | **int** | Unread messages count | [optional]
**unread_mention** | **bool** | Is chat unread mention | [optional]
**read_only** | **bool** | Is chat read only | [optional]
**not_spam** | **bool** | Is chat not spam | [optional]
**last_message** | [**\OpenAPI\Client\Model\Message**](Message.md) |  | [optional]
**labels** | [**\OpenAPI\Client\Model\Label[]**](Label.md) | Labels associated with chat | [optional]
**name_at** | **int** | Newsletter name change timestamp | [optional]
**description** | **string** | Newsletter description | [optional]
**description_at** | **string** | Newsletter description change timestamp | [optional]
**subscribers_count** | **int** | Newsletter subscribers count | [optional]
**created_at** | **int** | Newsletter creation timestamp | [optional]
**invite_code** | **string** | Newsletter invite code | [optional]
**handle** | **string** | Newsletter handle | [optional]
**verification** | **bool** | Is newsletter verified | [optional]
**preview** | **string** | Newsletter preview URL | [optional]
**role** | **string** | User&#39;s role regarding the newsletter | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
