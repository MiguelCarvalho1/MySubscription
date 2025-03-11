# # WebhookPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contacts** | [**\OpenAPI\Client\Model\Contact[]**](Contact.md) | The contacts array contains all contacts that were sent to the webhook URL. Sent on event \&quot;contacts.post\&quot; | [optional]
**messages** | [**\OpenAPI\Client\Model\Message[]**](Message.md) | The messages array contains all messages that were sent to the webhook URL. Sent on event \&quot;messages.post\&quot; or \&quot;messages.put\&quot; | [optional]
**messages_updates** | [**\OpenAPI\Client\Model\MessageUpdate[]**](MessageUpdate.md) | The messages updates array contains all messages updates that were sent to the webhook URL. Sent on event \&quot;messages.patch\&quot; | [optional]
**messages_removed** | **string[]** | The messages removed array contains all messages removed that were sent to the webhook URL. Sent on event \&quot;messages.delete\&quot; | [optional]
**messages_removed_all** | **string** | The messages removed all contains the chat ID of the chat that was cleared. Sent on event \&quot;messages.delete\&quot; | [optional]
**statuses** | [**\OpenAPI\Client\Model\Status[]**](Status.md) | The messages statuses array contains all statuses that were sent to the webhook URL. Sent on event \&quot;statuses.post\&quot; or \&quot;statuses.put\&quot; | [optional]
**chats** | [**\OpenAPI\Client\Model\Chat[]**](Chat.md) | The chats array contains all chats that were sent to the webhook URL. Sent on event \&quot;chats.post\&quot; or \&quot;chats.put\&quot; | [optional]
**chats_updates** | [**\OpenAPI\Client\Model\ChatUpdate[]**](ChatUpdate.md) | The chats updates array contains all chats updates that were sent to the webhook URL. Sent on event \&quot;chats.patch\&quot; | [optional]
**chats_removed** | **string[]** | The chats removed array contains all chats removed that were sent to the webhook URL. Sent on event \&quot;chats.delete\&quot; | [optional]
**contacts_updates** | [**\OpenAPI\Client\Model\ContactUpdate[]**](ContactUpdate.md) | The contacts updates array contains all contacts updates that were sent to the webhook URL. Sent on event \&quot;contacts.patch\&quot; | [optional]
**groups** | [**\OpenAPI\Client\Model\Group[]**](Group.md) | The groups array contains all groups that were sent to the webhook URL. Sent on event \&quot;groups.post\&quot; | [optional]
**groups_participants** | [**\OpenAPI\Client\Model\ParticipantEvent[]**](ParticipantEvent.md) | The groups participants event array contains all groups participants event that were sent to the webhook URL. Sent on event \&quot;groups.put\&quot; | [optional]
**groups_updates** | [**\OpenAPI\Client\Model\GroupUpdate[]**](GroupUpdate.md) | The groups updates array contains all groups updates that were sent to the webhook URL. Sent on event \&quot;groups.patch\&quot; | [optional]
**presences** | [**\OpenAPI\Client\Model\Presence[]**](Presence.md) | The presences array contains all presences that were sent to the webhook URL. Sent on event \&quot;presences.post\&quot; | [optional]
**labels** | [**\OpenAPI\Client\Model\Label[]**](Label.md) | The labels array contains all labels that were sent to the webhook URL. Sent on event \&quot;labels.post\&quot; | [optional]
**labels_removed** | **string[]** | The labels removed array contains all labels removed that were sent to the webhook URL. Sent on event \&quot;labels.delete\&quot; | [optional]
**calls** | [**\OpenAPI\Client\Model\CallEvent[]**](CallEvent.md) | The calls array contains all calls that were sent to the webhook URL. Sent on event \&quot;calls.post\&quot; | [optional]
**qr** | [**\OpenAPI\Client\Model\QR**](QR.md) |  | [optional]
**health** | [**\OpenAPI\Client\Model\Health**](Health.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\Contact**](Contact.md) |  | [optional]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) |  | [optional]
**event** | [**\OpenAPI\Client\Model\Event**](Event.md) |  | [optional]
**channel_id** | **string** | The channel ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
