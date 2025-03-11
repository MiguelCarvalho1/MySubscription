# OpenAPI\Client\NewslettersApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptNewsletterAdminRequest()**](NewslettersApi.md#acceptNewsletterAdminRequest) | **PUT** /newsletters/{NewsletterID}/admins/{ContactID} | Accept Newsletter admin-request |
| [**createNewsletter()**](NewslettersApi.md#createNewsletter) | **POST** /newsletters | Create newsletter |
| [**createNewsletterAdminInvite()**](NewslettersApi.md#createNewsletterAdminInvite) | **POST** /newsletters/{NewsletterID}/invite/{ContactID} | Create Newsletter admin-invite |
| [**deleteNewsletter()**](NewslettersApi.md#deleteNewsletter) | **DELETE** /newsletters/{NewsletterID} | Delete newsletter |
| [**demoteNewsletterAdmin()**](NewslettersApi.md#demoteNewsletterAdmin) | **DELETE** /newsletters/{NewsletterID}/admins/{ContactID} | Demote Newsletter admin |
| [**editNewsletter()**](NewslettersApi.md#editNewsletter) | **PATCH** /newsletters/{NewsletterID} | Edit newsletter |
| [**findNewsletter()**](NewslettersApi.md#findNewsletter) | **GET** /newsletters/find | Find newsletters by filters |
| [**getMessagesNewsletter()**](NewslettersApi.md#getMessagesNewsletter) | **GET** /newsletters/{NewsletterID}/messages | Get newsletter messages |
| [**getNewsletter()**](NewslettersApi.md#getNewsletter) | **GET** /newsletters/{NewsletterID} | Get newsletter information |
| [**getNewsletterByInviteCode()**](NewslettersApi.md#getNewsletterByInviteCode) | **GET** /newsletters/link/{NewsletterInviteCode} | Get newsletter info by invite code |
| [**getNewsletters()**](NewslettersApi.md#getNewsletters) | **GET** /newsletters | Get newsletters |
| [**recommendedNewsletter()**](NewslettersApi.md#recommendedNewsletter) | **GET** /newsletters/recommended | Get recommended newsletters by country |
| [**revokeNewsletterAdminInvite()**](NewslettersApi.md#revokeNewsletterAdminInvite) | **DELETE** /newsletters/{NewsletterID}/invite/{ContactID} | Revoke Newsletter admin-invite |
| [**sendNewsletterInvite()**](NewslettersApi.md#sendNewsletterInvite) | **POST** /newsletters/link/{NewsletterInviteCode} | Send newsletter invite link |
| [**subscribeNewsletter()**](NewslettersApi.md#subscribeNewsletter) | **POST** /newsletters/{NewsletterID}/subscription | Subscribe to newsletter |
| [**subscribeNewsletterInvite()**](NewslettersApi.md#subscribeNewsletterInvite) | **POST** /newsletters/invite/{NewsletterInviteCode}/subscription | Subscribe to newsletter by invite code |
| [**trackingNewsletter()**](NewslettersApi.md#trackingNewsletter) | **POST** /newsletters/{NewsletterID}/tracking | Subscribe to newsletter updates |
| [**unsubscribeNewsletter()**](NewslettersApi.md#unsubscribeNewsletter) | **DELETE** /newsletters/{NewsletterID}/subscription | Unsubscribe from newsletter |
| [**unsubscribeNewsletterInvite()**](NewslettersApi.md#unsubscribeNewsletterInvite) | **DELETE** /newsletters/invite/{NewsletterInviteCode}/subscription | Unsubscribe from newsletter by invite code |


## `acceptNewsletterAdminRequest()`

```php
acceptNewsletterAdminRequest($newsletter_id, $contact_id): \OpenAPI\Client\Model\ResponseSuccess
```

Accept Newsletter admin-request

This method is responsible for accepting an request to become an administrator of a WhatsApp Channel. This request is a message that you can both send like invitation and receive through the received message webhook

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->acceptNewsletterAdminRequest($newsletter_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->acceptNewsletterAdminRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **contact_id** | **string**| Contact ID | |

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

## `createNewsletter()`

```php
createNewsletter($create_newsletter_request): \OpenAPI\Client\Model\Newsletter
```

Create newsletter

This method is responsible for creating a WhatsApp Channel. [How to send a post to WhatsApp Channel](https://support.whapi.cloud/help-desk/channels/send-post-to-whatsapp-channel)

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_newsletter_request = {"name":"<Newsletter Title>"}; // \OpenAPI\Client\Model\CreateNewsletterRequest | Newsletter data

try {
    $result = $apiInstance->createNewsletter($create_newsletter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->createNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_newsletter_request** | [**\OpenAPI\Client\Model\CreateNewsletterRequest**](../Model/CreateNewsletterRequest.md)| Newsletter data | |

### Return type

[**\OpenAPI\Client\Model\Newsletter**](../Model/Newsletter.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewsletterAdminInvite()`

```php
createNewsletterAdminInvite($newsletter_id, $contact_id, $create_newsletter_admin_invite_request): \OpenAPI\Client\Model\SentMessage
```

Create Newsletter admin-invite

This method is responsible for sending an invitation for WhatsApp Channel administrator. Once the invitation is created, an invitation message will be sent to the contact

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$contact_id = 'contact_id_example'; // string | Contact ID
$create_newsletter_admin_invite_request = {"message":"<Invite message>"}; // \OpenAPI\Client\Model\CreateNewsletterAdminInviteRequest | Invite data

try {
    $result = $apiInstance->createNewsletterAdminInvite($newsletter_id, $contact_id, $create_newsletter_admin_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->createNewsletterAdminInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **contact_id** | **string**| Contact ID | |
| **create_newsletter_admin_invite_request** | [**\OpenAPI\Client\Model\CreateNewsletterAdminInviteRequest**](../Model/CreateNewsletterAdminInviteRequest.md)| Invite data | [optional] |

### Return type

[**\OpenAPI\Client\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNewsletter()`

```php
deleteNewsletter($newsletter_id): \OpenAPI\Client\Model\ResponseSuccess
```

Delete newsletter

This method is responsible for deleting a WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID

try {
    $result = $apiInstance->deleteNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->deleteNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |

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

## `demoteNewsletterAdmin()`

```php
demoteNewsletterAdmin($newsletter_id, $contact_id): \OpenAPI\Client\Model\ResponseSuccess
```

Demote Newsletter admin

This method is responsible for removing a user from the administration of the WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->demoteNewsletterAdmin($newsletter_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->demoteNewsletterAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **contact_id** | **string**| Contact ID | |

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

## `editNewsletter()`

```php
editNewsletter($newsletter_id, $edit_newsletter_request): \OpenAPI\Client\Model\Newsletter
```

Edit newsletter

This method is responsible for editing a WhatsApp Newsletter Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$edit_newsletter_request = {"name":"<Newsletter Title>"}; // \OpenAPI\Client\Model\EditNewsletterRequest | Newsletter data

try {
    $result = $apiInstance->editNewsletter($newsletter_id, $edit_newsletter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->editNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **edit_newsletter_request** | [**\OpenAPI\Client\Model\EditNewsletterRequest**](../Model/EditNewsletterRequest.md)| Newsletter data | |

### Return type

[**\OpenAPI\Client\Model\Newsletter**](../Model/Newsletter.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findNewsletter()`

```php
findNewsletter($country_code, $search, $newsletter_field, $cursor, $count, $sort): \OpenAPI\Client\Model\NewslettersListPaged
```

Find newsletters by filters

This method returns a list of WhatsApp Channels data based on the search performed using filters provided in the request body

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | Country for search
$search = 'search_example'; // string | Search word
$newsletter_field = 'newsletter_field_example'; // string | Cursor to continue pagination
$cursor = 'cursor_example'; // string | Cursor to continue pagination
$count = 100; // float | Count of objects to return
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->findNewsletter($country_code, $search, $newsletter_field, $cursor, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->findNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country for search | [optional] |
| **search** | **string**| Search word | [optional] |
| **newsletter_field** | **string**| Cursor to continue pagination | [optional] |
| **cursor** | **string**| Cursor to continue pagination | [optional] |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **sort** | **string**| Order for items in request | [optional] |

### Return type

[**\OpenAPI\Client\Model\NewslettersListPaged**](../Model/NewslettersListPaged.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagesNewsletter()`

```php
getMessagesNewsletter($newsletter_id, $count, $before, $after): \OpenAPI\Client\Model\MessagesList
```

Get newsletter messages

The method returns the history of WhatsApp Channel messages

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$count = 100; // float | Count of objects to return
$before = 3.4; // float | Request messages before the specified one (see first and last)
$after = 3.4; // float | Request messages after the specified one (see first and last)

try {
    $result = $apiInstance->getMessagesNewsletter($newsletter_id, $count, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getMessagesNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **before** | **float**| Request messages before the specified one (see first and last) | [optional] |
| **after** | **float**| Request messages after the specified one (see first and last) | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletter()`

```php
getNewsletter($newsletter_id, $user_role): \OpenAPI\Client\Model\MessagesList
```

Get newsletter information

This method returns the metadata of a WhatsApp Channel, including all newsletter information and its views

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$user_role = 'user_role_example'; // string | User's role regarding the newsletter

try {
    $result = $apiInstance->getNewsletter($newsletter_id, $user_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **user_role** | **string**| User&#39;s role regarding the newsletter | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterByInviteCode()`

```php
getNewsletterByInviteCode($newsletter_invite_code): \OpenAPI\Client\Model\Newsletter
```

Get newsletter info by invite code

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_invite_code = 'newsletter_invite_code_example'; // string | Newsletter Invite Code

try {
    $result = $apiInstance->getNewsletterByInviteCode($newsletter_invite_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletterByInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_invite_code** | **string**| Newsletter Invite Code | |

### Return type

[**\OpenAPI\Client\Model\Newsletter**](../Model/Newsletter.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletters()`

```php
getNewsletters($count, $offset): \OpenAPI\Client\Model\NewslettersList
```

Get newsletters

This method returns a list with metadata of your own WhatsApp Channel and followed Channels, including all Channel information and their views.

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getNewsletters($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\OpenAPI\Client\Model\NewslettersList**](../Model/NewslettersList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recommendedNewsletter()`

```php
recommendedNewsletter($country_code, $cursor, $count): \OpenAPI\Client\Model\NewslettersListPaged
```

Get recommended newsletters by country

This method returns a list of WhatsApp Channels data based on the search performed using filters provided in the request body

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | Country for search
$cursor = 'cursor_example'; // string | Cursor to continue pagination
$count = 100; // float | Count of objects to return

try {
    $result = $apiInstance->recommendedNewsletter($country_code, $cursor, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->recommendedNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country for search | [optional] |
| **cursor** | **string**| Cursor to continue pagination | [optional] |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\NewslettersListPaged**](../Model/NewslettersListPaged.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeNewsletterAdminInvite()`

```php
revokeNewsletterAdminInvite($newsletter_id, $contact_id): \OpenAPI\Client\Model\ResponseSuccess
```

Revoke Newsletter admin-invite

This method is responsible for revoking an invitation for WhatsApp Channel administrator.

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->revokeNewsletterAdminInvite($newsletter_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->revokeNewsletterAdminInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |
| **contact_id** | **string**| Contact ID | |

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

## `sendNewsletterInvite()`

```php
sendNewsletterInvite($newsletter_invite_code, $sender_newsletter_invite_by_code): \OpenAPI\Client\Model\SentMessage
```

Send newsletter invite link

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_invite_code = 'newsletter_invite_code_example'; // string | Newsletter Invite Code
$sender_newsletter_invite_by_code = new \OpenAPI\Client\Model\SenderNewsletterInviteByCode(); // \OpenAPI\Client\Model\SenderNewsletterInviteByCode | Newsletter invite link

try {
    $result = $apiInstance->sendNewsletterInvite($newsletter_invite_code, $sender_newsletter_invite_by_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->sendNewsletterInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_invite_code** | **string**| Newsletter Invite Code | |
| **sender_newsletter_invite_by_code** | [**\OpenAPI\Client\Model\SenderNewsletterInviteByCode**](../Model/SenderNewsletterInviteByCode.md)| Newsletter invite link | |

### Return type

[**\OpenAPI\Client\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeNewsletter()`

```php
subscribeNewsletter($newsletter_id): \OpenAPI\Client\Model\ResponseSuccess
```

Subscribe to newsletter

This method is responsible for following a WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID

try {
    $result = $apiInstance->subscribeNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->subscribeNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |

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

## `subscribeNewsletterInvite()`

```php
subscribeNewsletterInvite($newsletter_invite_code): \OpenAPI\Client\Model\ResponseSuccess
```

Subscribe to newsletter by invite code

This method is responsible for following a WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_invite_code = 'newsletter_invite_code_example'; // string | Newsletter Invite Code

try {
    $result = $apiInstance->subscribeNewsletterInvite($newsletter_invite_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->subscribeNewsletterInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_invite_code** | **string**| Newsletter Invite Code | |

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

## `trackingNewsletter()`

```php
trackingNewsletter($newsletter_id): \OpenAPI\Client\Model\ResponseSuccess
```

Subscribe to newsletter updates

It is necessary to receive notifications about new votes in the polls

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID

try {
    $result = $apiInstance->trackingNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->trackingNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |

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

## `unsubscribeNewsletter()`

```php
unsubscribeNewsletter($newsletter_id): \OpenAPI\Client\Model\ResponseSuccess
```

Unsubscribe from newsletter

This method is responsible for unfollowing a WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | Newsletter ID

try {
    $result = $apiInstance->unsubscribeNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->unsubscribeNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| Newsletter ID | |

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

## `unsubscribeNewsletterInvite()`

```php
unsubscribeNewsletterInvite($newsletter_invite_code): \OpenAPI\Client\Model\ResponseSuccess
```

Unsubscribe from newsletter by invite code

This method is responsible for unfollowing a WhatsApp Channel

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


$apiInstance = new OpenAPI\Client\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_invite_code = 'newsletter_invite_code_example'; // string | Newsletter Invite Code

try {
    $result = $apiInstance->unsubscribeNewsletterInvite($newsletter_invite_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->unsubscribeNewsletterInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_invite_code** | **string**| Newsletter Invite Code | |

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
