# # WebhookTestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**headers** | **array<string,string>** | Additional headers for webhook. Max 5 headers. &lt;br/&gt;Example: &lt;br/&gt;\&quot;Authorization - Bearer token\&quot; &lt;br/&gt;\&quot;Content-Type - application/json\&quot; &lt;br/&gt;\&quot;X-Header - value\&quot; | [optional]
**url** | **string** | Inbound and outbound notifications are routed to this URL. |
**mode** | **string** | Request method for sending hook. | [default to 'body']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
