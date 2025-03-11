# # Settings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_backoff_delay_ms** | **float** | Backoff delay for a failed callback in milliseconds This setting is used to configure the amount of time the backoff delays before retrying a failed callback. The backoff delay increases linearly by this value each time a callback fails to get a HTTPS 200 OK response. The backoff delay is capped by the max_callback_backoff_delay_ms setting. | [optional]
**max_callback_backoff_delay_ms** | **float** | Maximum delay for a failed callback in milliseconds | [optional]
**callback_persist** | **bool** | Stores callbacks on disk until they are successfully acknowledged by the Webhook or not. Restart required. | [optional]
**media** | [**\OpenAPI\Client\Model\MediaSettings**](MediaSettings.md) |  | [optional]
**webhooks** | [**\OpenAPI\Client\Model\Webhook[]**](Webhook.md) |  | [optional]
**proxy** | **string** | Use your Socks5 proxy if your account activity arouses suspicion from WhatsApp. This can help maintain anonymity and ensure smooth operation. | [optional]
**mobile_proxy** | **string** | Service proxy for mobile authorization. | [optional]
**offline_mode** | **bool** | When true, API will not send online status to the server on connection. This will allow you to receive push notifications to devices connected to the number. Working after reconnect. | [optional] [default to false]
**full_history** | **bool** | When true, all messages will be cached after the connection. If false, old messages will selectively not be cached, allowing large accounts to run faster. Working after reconnect. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
