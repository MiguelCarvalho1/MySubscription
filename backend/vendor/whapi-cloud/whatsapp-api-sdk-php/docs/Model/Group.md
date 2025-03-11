# # Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Chat ID |
**name** | **string** | Group name |
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
**name_owner** | **string** | Group name owner | [optional]
**name_at** | **int** | Group name change timestamp | [optional]
**description** | **string** | Group description | [optional]
**description_owner** | **string** | Group description owner | [optional]
**description_id** | **string** | Group description ID | [optional]
**size** | **int** | Group size |
**participants** | [**\OpenAPI\Client\Model\Participant[]**](Participant.md) | Group participants |
**created_at** | **int** | Group creation timestamp | [optional]
**created_by** | **string** | Contact ID | [optional]
**suspended** | **bool** | Is group suspended | [optional]
**terminated** | **bool** | Is group terminated | [optional]
**is_parent** | **bool** | Is group parent | [optional]
**is_default_subgroup** | **bool** | Is group default subgroup | [optional]
**restricted** | **bool** | If only admins can change group settings | [optional]
**announcements** | **bool** | If only admins can send messages | [optional]
**ephemeral** | **float** | Group ephemeral timer | [optional]
**invite_code** | **string** | Group invite code | [optional]
**is_community_announce** | **bool** | If group is community announce | [optional]
**linked_parent** | **string** | Chat ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
