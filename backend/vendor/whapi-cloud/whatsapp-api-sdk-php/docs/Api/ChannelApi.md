# OpenAPI\Client\ChannelApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkHealth()**](ChannelApi.md#checkHealth) | **GET** /health | Check health &amp; launch channel |
| [**getAllowedEvents()**](ChannelApi.md#getAllowedEvents) | **GET** /settings/events | Get allowed events |
| [**getChannelSettings()**](ChannelApi.md#getChannelSettings) | **GET** /settings | Get channel settings |
| [**getLimits()**](ChannelApi.md#getLimits) | **GET** /limits | Get limits |
| [**resetChannelSettings()**](ChannelApi.md#resetChannelSettings) | **DELETE** /settings | Reset channel settings |
| [**updateChannelSettings()**](ChannelApi.md#updateChannelSettings) | **PATCH** /settings | Update channel settings |
| [**webhookTest()**](ChannelApi.md#webhookTest) | **POST** /settings/webhook_test | Test webhook |


## `checkHealth()`

```php
checkHealth($wakeup, $platform, $channel_type): \OpenAPI\Client\Model\Health
```

Check health & launch channel

Allows you to track and get feedback on the operational status of the whapi channel (instance). An instance is a connection with a phone number that has a WhatsApp account, which will be responsible for sending and receiving messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wakeup = true; // bool | If set to false, the channel will not launch
$platform = Chrome,Whapi,1.6.0; // string | Browser name, OS name, OS version separated by commas. Example: 'Safari,Windows,10.0.19044' or 'Desktop,Mac OS,11.6.3'
$channel_type = 'web'; // string | Channel type. Web - for linking existing WA account via WA Web, Mobile - for creating new WA account

try {
    $result = $apiInstance->checkHealth($wakeup, $platform, $channel_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->checkHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wakeup** | **bool**| If set to false, the channel will not launch | [optional] [default to true] |
| **platform** | **string**| Browser name, OS name, OS version separated by commas. Example: &#39;Safari,Windows,10.0.19044&#39; or &#39;Desktop,Mac OS,11.6.3&#39; | [optional] |
| **channel_type** | **string**| Channel type. Web - for linking existing WA account via WA Web, Mobile - for creating new WA account | [optional] [default to &#39;web&#39;] |

### Return type

[**\OpenAPI\Client\Model\Health**](../Model/Health.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllowedEvents()`

```php
getAllowedEvents(): \OpenAPI\Client\Model\Event[]
```

Get allowed events

Get a list of specific events that you can be notified about when Webhook is configured

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllowedEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getAllowedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelSettings()`

```php
getChannelSettings($body): \OpenAPI\Client\Model\Settings
```

Get channel settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | OK

try {
    $result = $apiInstance->getChannelSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getChannelSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| OK | [optional] |

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLimits()`

```php
getLimits(): \OpenAPI\Client\Model\Limits
```

Get limits

Sandbox as well as Trials have some limitations. This endpoint allows you to get information about the remaining and used limits on your channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLimits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Limits**](../Model/Limits.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetChannelSettings()`

```php
resetChannelSettings(): \OpenAPI\Client\Model\ResponseSuccess
```

Reset channel settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->resetChannelSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->resetChannelSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelSettings()`

```php
updateChannelSettings($settings): \OpenAPI\Client\Model\UpdateSettings
```

Update channel settings

If a field is not present in the request, no change is made to that setting. For example, if 'proxy' is not sent with the request, the existing configuration for 'proxy' is unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settings = {"callback_backoff_delay_ms":3000,"max_callback_backoff_delay_ms":900000,"callback_persist":true,"media":{"auto_download":["image","document","audio"],"init_avatars":true},"webhooks":[{"url":"<Webhook URL, http or https>","events":[{"type":"ack","method":"put"},{"type":"chat","method":"put"}],"mode":"method"}],"on_call_pager":"<WA_ID of valid WhatsApp contact>","pass_through":false,"sent_status":false}; // \OpenAPI\Client\Model\Settings | New settings

try {
    $result = $apiInstance->updateChannelSettings($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->updateChannelSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings** | [**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)| New settings | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateSettings**](../Model/UpdateSettings.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookTest()`

```php
webhookTest($webhook_test_request): \OpenAPI\Client\Model\ResponseSuccess
```

Test webhook

For testing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_test_request = new \OpenAPI\Client\Model\WebhookTestRequest(); // \OpenAPI\Client\Model\WebhookTestRequest | Options for webhook test

try {
    $result = $apiInstance->webhookTest($webhook_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->webhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_test_request** | [**\OpenAPI\Client\Model\WebhookTestRequest**](../Model/WebhookTestRequest.md)| Options for webhook test | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
