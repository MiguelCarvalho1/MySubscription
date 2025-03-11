# OpenAPI\Client\PresencesApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPresence()**](PresencesApi.md#getPresence) | **GET** /presences/{EntryID} | Get presence |
| [**sendMePresence()**](PresencesApi.md#sendMePresence) | **PUT** /presences/me | Send online or offline presence |
| [**sendPresence()**](PresencesApi.md#sendPresence) | **PUT** /presences/{EntryID} | Send typing or recording presence |
| [**subscribePresence()**](PresencesApi.md#subscribePresence) | **POST** /presences/{EntryID} | Subscribe to presence |


## `getPresence()`

```php
getPresence($entry_id): \OpenAPI\Client\Model\Presence
```

Get presence

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


$apiInstance = new OpenAPI\Client\Api\PresencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GetPresenceEntryIDParameter(); // \OpenAPI\Client\Model\GetPresenceEntryIDParameter | Contact or group id

try {
    $result = $apiInstance->getPresence($entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresencesApi->getPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | [**\OpenAPI\Client\Model\GetPresenceEntryIDParameter**](../Model/.md)| Contact or group id | |

### Return type

[**\OpenAPI\Client\Model\Presence**](../Model/Presence.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMePresence()`

```php
sendMePresence($send_me_presence_request): \OpenAPI\Client\Model\CheckContactResponse
```

Send online or offline presence

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


$apiInstance = new OpenAPI\Client\Api\PresencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_me_presence_request = new \OpenAPI\Client\Model\SendMePresenceRequest(); // \OpenAPI\Client\Model\SendMePresenceRequest

try {
    $result = $apiInstance->sendMePresence($send_me_presence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresencesApi->sendMePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_me_presence_request** | [**\OpenAPI\Client\Model\SendMePresenceRequest**](../Model/SendMePresenceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckContactResponse**](../Model/CheckContactResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPresence()`

```php
sendPresence($entry_id, $send_presence_request): \OpenAPI\Client\Model\CheckContactResponse
```

Send typing or recording presence

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


$apiInstance = new OpenAPI\Client\Api\PresencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GetPresenceEntryIDParameter(); // \OpenAPI\Client\Model\GetPresenceEntryIDParameter | Contact or group id
$send_presence_request = new \OpenAPI\Client\Model\SendPresenceRequest(); // \OpenAPI\Client\Model\SendPresenceRequest

try {
    $result = $apiInstance->sendPresence($entry_id, $send_presence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresencesApi->sendPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | [**\OpenAPI\Client\Model\GetPresenceEntryIDParameter**](../Model/.md)| Contact or group id | |
| **send_presence_request** | [**\OpenAPI\Client\Model\SendPresenceRequest**](../Model/SendPresenceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckContactResponse**](../Model/CheckContactResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribePresence()`

```php
subscribePresence($entry_id): \OpenAPI\Client\Model\CheckContactResponse
```

Subscribe to presence

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


$apiInstance = new OpenAPI\Client\Api\PresencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GetPresenceEntryIDParameter(); // \OpenAPI\Client\Model\GetPresenceEntryIDParameter | Contact or group id

try {
    $result = $apiInstance->subscribePresence($entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresencesApi->subscribePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | [**\OpenAPI\Client\Model\GetPresenceEntryIDParameter**](../Model/.md)| Contact or group id | |

### Return type

[**\OpenAPI\Client\Model\CheckContactResponse**](../Model/CheckContactResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
