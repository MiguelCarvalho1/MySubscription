# OpenAPI\Client\GroupsApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptGroupInvite()**](GroupsApi.md#acceptGroupInvite) | **PUT** /groups | Accept group invite |
| [**addGroupParticipant()**](GroupsApi.md#addGroupParticipant) | **POST** /groups/{GroupID}/participants | Add group participant |
| [**approveGroupApplicationsList()**](GroupsApi.md#approveGroupApplicationsList) | **POST** /groups/{GroupID}/applications | Accept group applications for listed users |
| [**createGroup()**](GroupsApi.md#createGroup) | **POST** /groups | Create group |
| [**deleteGroupIcon()**](GroupsApi.md#deleteGroupIcon) | **DELETE** /groups/{GroupID}/icon | Delete group icon |
| [**demoteGroupAdmin()**](GroupsApi.md#demoteGroupAdmin) | **DELETE** /groups/{GroupID}/admins | Demote group admin |
| [**getGroup()**](GroupsApi.md#getGroup) | **GET** /groups/{GroupID} | Get group |
| [**getGroupApplicationsList()**](GroupsApi.md#getGroupApplicationsList) | **GET** /groups/{GroupID}/applications | Get list of join requests to the group |
| [**getGroupIcon()**](GroupsApi.md#getGroupIcon) | **GET** /groups/{GroupID}/icon | Get group icon |
| [**getGroupInvite()**](GroupsApi.md#getGroupInvite) | **GET** /groups/{GroupID}/invite | Get group invite |
| [**getGroupMetadataByInviteCode()**](GroupsApi.md#getGroupMetadataByInviteCode) | **GET** /groups/link/{InviteCode} | Get group info by invite code |
| [**getGroups()**](GroupsApi.md#getGroups) | **GET** /groups | Get groups |
| [**leaveGroup()**](GroupsApi.md#leaveGroup) | **DELETE** /groups/{GroupID} | Leave group |
| [**promoteToGroupAdmin()**](GroupsApi.md#promoteToGroupAdmin) | **PATCH** /groups/{GroupID}/admins | Promote to group admin |
| [**rejectGroupApplicationsList()**](GroupsApi.md#rejectGroupApplicationsList) | **DELETE** /groups/{GroupID}/applications | Reject group applications for listed users |
| [**removeGroupParticipant()**](GroupsApi.md#removeGroupParticipant) | **DELETE** /groups/{GroupID}/participants | Remove group participant |
| [**revokeGroupInvite()**](GroupsApi.md#revokeGroupInvite) | **DELETE** /groups/{GroupID}/invite | Revoke group invite |
| [**sendGroupInvite()**](GroupsApi.md#sendGroupInvite) | **POST** /groups/link/{InviteCode} | Send group invite link |
| [**setGroupIcon()**](GroupsApi.md#setGroupIcon) | **PUT** /groups/{GroupID}/icon | Set group icon |
| [**updateGroupInfo()**](GroupsApi.md#updateGroupInfo) | **PUT** /groups/{GroupID} | Update group info |
| [**updateGroupSetting()**](GroupsApi.md#updateGroupSetting) | **PATCH** /groups/{GroupID} | Update group setting |


## `acceptGroupInvite()`

```php
acceptGroupInvite($group_invite): \OpenAPI\Client\Model\NewGroup
```

Accept group invite

Allows you to join a group by knowing its invitation code

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_invite = {"invite_code":"<invite code>"}; // \OpenAPI\Client\Model\GroupInvite | Group data

try {
    $result = $apiInstance->acceptGroupInvite($group_invite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->acceptGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_invite** | [**\OpenAPI\Client\Model\GroupInvite**](../Model/GroupInvite.md)| Group data | |

### Return type

[**\OpenAPI\Client\Model\NewGroup**](../Model/NewGroup.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addGroupParticipant()`

```php
addGroupParticipant($group_id, $list_participants_request): \OpenAPI\Client\Model\ResponseListParticipants
```

Add group participant

This method is responsible for adding new members to the group. Due to WhatsApp's anti-spam policy, some contacts are not automatically added to the group. [Read more here](https://support.whapi.cloud/help-desk/groups/add-new-member-to-group)

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \OpenAPI\Client\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->addGroupParticipant($group_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **list_participants_request** | [**\OpenAPI\Client\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseListParticipants**](../Model/ResponseListParticipants.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveGroupApplicationsList()`

```php
approveGroupApplicationsList($group_id, $application_request): \OpenAPI\Client\Model\GroupApplicationChange[]
```

Accept group applications for listed users

This method returns the list with result of operation for each user

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$application_request = new \OpenAPI\Client\Model\ApplicationRequest(); // \OpenAPI\Client\Model\ApplicationRequest | Chat ID list

try {
    $result = $apiInstance->approveGroupApplicationsList($group_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->approveGroupApplicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **application_request** | [**\OpenAPI\Client\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Chat ID list | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupApplicationChange[]**](../Model/GroupApplicationChange.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($create_group_request): \OpenAPI\Client\Model\GroupCreate
```

Create group

This method is responsible for creating a group with its respective participants. Just like WhatsApp you will need to add at least one contact to be able to create a group. Due to WhatsApp's anti-spam policy, some contacts are not automatically added to the group. [Read more here](https://support.whapi.cloud/help-desk/groups/add-new-member-to-group)

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_group_request = {"subject":"<Group Subject>"}; // \OpenAPI\Client\Model\CreateGroupRequest | Group data

try {
    $result = $apiInstance->createGroup($create_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_group_request** | [**\OpenAPI\Client\Model\CreateGroupRequest**](../Model/CreateGroupRequest.md)| Group data | |

### Return type

[**\OpenAPI\Client\Model\GroupCreate**](../Model/GroupCreate.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroupIcon()`

```php
deleteGroupIcon($group_id): \OpenAPI\Client\Model\ResponseSuccess
```

Delete group icon

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->deleteGroupIcon($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

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

## `demoteGroupAdmin()`

```php
demoteGroupAdmin($group_id, $list_participants_request): \OpenAPI\Client\Model\ResponseSuccess
```

Demote group admin

This method is responsible for removing one or more admins from a group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \OpenAPI\Client\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->demoteGroupAdmin($group_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->demoteGroupAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **list_participants_request** | [**\OpenAPI\Client\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

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

## `getGroup()`

```php
getGroup($group_id): \OpenAPI\Client\Model\Group
```

Get group

This method returns the group metadata with all information about the group and its participants

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupApplicationsList()`

```php
getGroupApplicationsList($group_id, $count, $offset): \OpenAPI\Client\Model\GroupApplicationList
```

Get list of join requests to the group

This method returns the list of join requests to the group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getGroupApplicationsList($group_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupApplicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupApplicationList**](../Model/GroupApplicationList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupIcon()`

```php
getGroupIcon($group_id): \SplFileObject
```

Get group icon

This method returns the profile image of group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupIcon($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupInvite()`

```php
getGroupInvite($group_id): \OpenAPI\Client\Model\GroupInvite
```

Get group invite

This method retrieves the ID of the group invitation. [What it is and how to work with it](https://support.whapi.cloud/help-desk/groups/add-new-member-to-group#sending-an-invitation-to-a-group)

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupInvite($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

### Return type

[**\OpenAPI\Client\Model\GroupInvite**](../Model/GroupInvite.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMetadataByInviteCode()`

```php
getGroupMetadataByInviteCode($invite_code): \OpenAPI\Client\Model\GroupInfoByInviteCode
```

Get group info by invite code

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_code = 'invite_code_example'; // string | Invite Code

try {
    $result = $apiInstance->getGroupMetadataByInviteCode($invite_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMetadataByInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite Code | |

### Return type

[**\OpenAPI\Client\Model\GroupInfoByInviteCode**](../Model/GroupInfoByInviteCode.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($count, $offset): \OpenAPI\Client\Model\GroupsList
```

Get groups

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return

try {
    $result = $apiInstance->getGroups($count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupsList**](../Model/GroupsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveGroup()`

```php
leaveGroup($group_id): \OpenAPI\Client\Model\ResponseSuccess
```

Leave group

This method allows you to leave a group that you are a member of

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->leaveGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->leaveGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

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

## `promoteToGroupAdmin()`

```php
promoteToGroupAdmin($group_id, $list_participants_request): \OpenAPI\Client\Model\ResponseSuccess
```

Promote to group admin

This method is responsible for promoting group members to admins, you can promote one or more members to admins

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \OpenAPI\Client\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->promoteToGroupAdmin($group_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->promoteToGroupAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **list_participants_request** | [**\OpenAPI\Client\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

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

## `rejectGroupApplicationsList()`

```php
rejectGroupApplicationsList($group_id, $application_request): \OpenAPI\Client\Model\GroupApplicationChange[]
```

Reject group applications for listed users

This method returns the list with result of operation for each user

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$application_request = new \OpenAPI\Client\Model\ApplicationRequest(); // \OpenAPI\Client\Model\ApplicationRequest | Chat ID list

try {
    $result = $apiInstance->rejectGroupApplicationsList($group_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->rejectGroupApplicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **application_request** | [**\OpenAPI\Client\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Chat ID list | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupApplicationChange[]**](../Model/GroupApplicationChange.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGroupParticipant()`

```php
removeGroupParticipant($group_id, $list_participants_request): \OpenAPI\Client\Model\ResponseSuccess
```

Remove group participant

This method is responsible for removing members of the group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$list_participants_request = {"participants":["<Recipient WA-ID, from Contacts API>"]}; // \OpenAPI\Client\Model\ListParticipantsRequest | 

try {
    $result = $apiInstance->removeGroupParticipant($group_id, $list_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->removeGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **list_participants_request** | [**\OpenAPI\Client\Model\ListParticipantsRequest**](../Model/ListParticipantsRequest.md)|  | |

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

## `revokeGroupInvite()`

```php
revokeGroupInvite($group_id): \OpenAPI\Client\Model\ResponseSuccess
```

Revoke group invite

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->revokeGroupInvite($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->revokeGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |

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

## `sendGroupInvite()`

```php
sendGroupInvite($invite_code, $sender_group_invite_by_code): \OpenAPI\Client\Model\SentMessage
```

Send group invite link

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_code = 'invite_code_example'; // string | Invite Code
$sender_group_invite_by_code = new \OpenAPI\Client\Model\SenderGroupInviteByCode(); // \OpenAPI\Client\Model\SenderGroupInviteByCode | Message group invite

try {
    $result = $apiInstance->sendGroupInvite($invite_code, $sender_group_invite_by_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->sendGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite Code | |
| **sender_group_invite_by_code** | [**\OpenAPI\Client\Model\SenderGroupInviteByCode**](../Model/SenderGroupInviteByCode.md)| Message group invite | |

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

## `setGroupIcon()`

```php
setGroupIcon($group_id, $body): \OpenAPI\Client\Model\ResponseSuccess
```

Set group icon

This method is reponsibible for changing a group image that already exists

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->setGroupIcon($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->setGroupIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `image/jpeg`, `image/png`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupInfo()`

```php
updateGroupInfo($group_id, $update_group_info_request): \OpenAPI\Client\Model\ResponseSuccess
```

Update group info

This method is responsible for changing the name and description of a group that already exists

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$update_group_info_request = {"subject":"<New Group Subject>"}; // \OpenAPI\Client\Model\UpdateGroupInfoRequest | 

try {
    $result = $apiInstance->updateGroupInfo($group_id, $update_group_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **update_group_info_request** | [**\OpenAPI\Client\Model\UpdateGroupInfoRequest**](../Model/UpdateGroupInfoRequest.md)|  | |

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

## `updateGroupSetting()`

```php
updateGroupSetting($group_id, $update_group_setting_request): \OpenAPI\Client\Model\ResponseSuccess
```

Update group setting

This method is responsible for changing the privacy settings for group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$update_group_setting_request = {"subject":"<New Group Subject>"}; // \OpenAPI\Client\Model\UpdateGroupSettingRequest | 

try {
    $result = $apiInstance->updateGroupSetting($group_id, $update_group_setting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **update_group_setting_request** | [**\OpenAPI\Client\Model\UpdateGroupSettingRequest**](../Model/UpdateGroupSettingRequest.md)|  | |

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
