# OpenAPI\Client\MessagesApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMessage()**](MessagesApi.md#deleteMessage) | **DELETE** /messages/{MessageID} | ❌ Delete message |
| [**forwardMessage()**](MessagesApi.md#forwardMessage) | **POST** /messages/{MessageID} | ↪ Forward message |
| [**getMessage()**](MessagesApi.md#getMessage) | **GET** /messages/{MessageID} | Get message |
| [**getMessages()**](MessagesApi.md#getMessages) | **GET** /messages/list | Get messages |
| [**getMessagesByChatID()**](MessagesApi.md#getMessagesByChatID) | **GET** /messages/list/{ChatID} | Get messages by chat ID |
| [**markMessageAsRead()**](MessagesApi.md#markMessageAsRead) | **PUT** /messages/{MessageID} | ✔✔ Mark message as read |
| [**reactToMessage()**](MessagesApi.md#reactToMessage) | **PUT** /messages/{MessageID}/reaction | 😍 React to message |
| [**sendMediaMessage()**](MessagesApi.md#sendMediaMessage) | **POST** /messages/media/{MediaMessageType} | 📎 Send media message |
| [**sendMessageAudio()**](MessagesApi.md#sendMessageAudio) | **POST** /messages/audio | 🎵 Send media-audio message |
| [**sendMessageContact()**](MessagesApi.md#sendMessageContact) | **POST** /messages/contact | 👤 Send contact message |
| [**sendMessageContactList()**](MessagesApi.md#sendMessageContactList) | **POST** /messages/contact_list | 👥 Send contact list message |
| [**sendMessageDocument()**](MessagesApi.md#sendMessageDocument) | **POST** /messages/document | 📑 Send media-document message |
| [**sendMessageGif()**](MessagesApi.md#sendMessageGif) | **POST** /messages/gif | 🎬 Send media-gif message |
| [**sendMessageImage()**](MessagesApi.md#sendMessageImage) | **POST** /messages/image | 🖼 Send media-image message |
| [**sendMessageInteractive()**](MessagesApi.md#sendMessageInteractive) | **POST** /messages/interactive | 🎮 Send interactive message |
| [**sendMessageLinkPreview()**](MessagesApi.md#sendMessageLinkPreview) | **POST** /messages/link_preview | 📎 Send link preview message |
| [**sendMessageLiveLocation()**](MessagesApi.md#sendMessageLiveLocation) | **POST** /messages/live_location | 🧭 Send live location message |
| [**sendMessageLocation()**](MessagesApi.md#sendMessageLocation) | **POST** /messages/location | 📍 Send location message |
| [**sendMessagePoll()**](MessagesApi.md#sendMessagePoll) | **POST** /messages/poll | 📊 Send poll message |
| [**sendMessageShort()**](MessagesApi.md#sendMessageShort) | **POST** /messages/short | 📹 Send media-short video message (PTV) |
| [**sendMessageSticker()**](MessagesApi.md#sendMessageSticker) | **POST** /messages/sticker | 🎭 Send media-sticker message |
| [**sendMessageStory()**](MessagesApi.md#sendMessageStory) | **POST** /messages/story | 👁️‍🗨️ Send story message |
| [**sendMessageStoryAudio()**](MessagesApi.md#sendMessageStoryAudio) | **POST** /messages/story/audio | 🎵️ Send story audio message |
| [**sendMessageStoryMedia()**](MessagesApi.md#sendMessageStoryMedia) | **POST** /messages/story/media | 🖼 Send story media message |
| [**sendMessageStoryText()**](MessagesApi.md#sendMessageStoryText) | **POST** /messages/story/text | 💬 Send story text message |
| [**sendMessageText()**](MessagesApi.md#sendMessageText) | **POST** /messages/text | 💬 Send text message |
| [**sendMessageVideo()**](MessagesApi.md#sendMessageVideo) | **POST** /messages/video | 🎥 Send media-video message |
| [**sendMessageVoice()**](MessagesApi.md#sendMessageVoice) | **POST** /messages/voice | 🎤 Send media-voice message |
| [**starMessage()**](MessagesApi.md#starMessage) | **PUT** /messages/{MessageID}/star | ⭐ Star message |


## `deleteMessage()`

```php
deleteMessage($message_id): \OpenAPI\Client\Model\ResponseSuccess
```

❌ Delete message

Method used to delete a text sent in a chat. You will be able to delete a message that you sent as well as a message that was sent by a contact. To use this resource you will only need the messageId of the message that you want to delete.

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->deleteMessage($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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

## `forwardMessage()`

```php
forwardMessage($message_id, $forward_message): \OpenAPI\Client\Model\SentMessage
```

↪ Forward message

Simple and straightforward, in this method, you can forward messages through the API by providing the messageId of the message you want to forward and the phone number of the chat where this messageId is located.

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$forward_message = new \OpenAPI\Client\Model\ForwardMessage(); // \OpenAPI\Client\Model\ForwardMessage | Forward message

try {
    $result = $apiInstance->forwardMessage($message_id, $forward_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->forwardMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **forward_message** | [**\OpenAPI\Client\Model\ForwardMessage**](../Model/ForwardMessage.md)| Forward message | |

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

## `getMessage()`

```php
getMessage($message_id): \OpenAPI\Client\Model\Message
```

Get message

The method returns a message from any chat by message id.

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->getMessage($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

### Return type

[**\OpenAPI\Client\Model\Message**](../Model/Message.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessages()`

```php
getMessages($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort): \OpenAPI\Client\Model\MessagesList
```

Get messages

The method contains a list of all received and sent messages in a particular chat. Sorting by descending date of message sending.

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$time_from = 3.4; // float | Timestamp from which to get objects
$time_to = 3.4; // float | Timestamp up to which to get objects
$normal_types = True; // bool | If false, include system messages
$author = 'author_example'; // string | To filter by author (Contact ID)
$from_me = True; // bool | If true, only return messages sent by the authenticated user. If false, only return messages sent by other users.
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->getMessages($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **time_from** | **float**| Timestamp from which to get objects | [optional] |
| **time_to** | **float**| Timestamp up to which to get objects | [optional] |
| **normal_types** | **bool**| If false, include system messages | [optional] |
| **author** | **string**| To filter by author (Contact ID) | [optional] |
| **from_me** | **bool**| If true, only return messages sent by the authenticated user. If false, only return messages sent by other users. | [optional] |
| **sort** | **string**| Order for items in request | [optional] |

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

## `getMessagesByChatID()`

```php
getMessagesByChatID($chat_id, $count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort): \OpenAPI\Client\Model\MessagesList
```

Get messages by chat ID

The method contains a list of all received and sent messages in a particular chat. Sorting by descending date of message sending. You will need to specify [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 'chat_id_example'; // string | Chat ID
$count = 100; // float | Count of objects to return
$offset = 3.4; // float | Offset of objects to return
$time_from = 3.4; // float | Timestamp from which to get objects
$time_to = 3.4; // float | Timestamp up to which to get objects
$normal_types = True; // bool | If false, include system messages
$author = 'author_example'; // string | To filter by author (Contact ID)
$from_me = True; // bool | If true, only return messages sent by the authenticated user. If false, only return messages sent by other users.
$sort = 'sort_example'; // string | Order for items in request

try {
    $result = $apiInstance->getMessagesByChatID($chat_id, $count, $offset, $time_from, $time_to, $normal_types, $author, $from_me, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessagesByChatID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chat_id** | **string**| Chat ID | |
| **count** | **float**| Count of objects to return | [optional] [default to 100] |
| **offset** | **float**| Offset of objects to return | [optional] |
| **time_from** | **float**| Timestamp from which to get objects | [optional] |
| **time_to** | **float**| Timestamp up to which to get objects | [optional] |
| **normal_types** | **bool**| If false, include system messages | [optional] |
| **author** | **string**| To filter by author (Contact ID) | [optional] |
| **from_me** | **bool**| If true, only return messages sent by the authenticated user. If false, only return messages sent by other users. | [optional] |
| **sort** | **string**| Order for items in request | [optional] |

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

## `markMessageAsRead()`

```php
markMessageAsRead($message_id): \OpenAPI\Client\Model\ResponseSuccess
```

✔✔ Mark message as read

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID

try {
    $result = $apiInstance->markMessageAsRead($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->markMessageAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |

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

## `reactToMessage()`

```php
reactToMessage($message_id, $react_to_message): \OpenAPI\Client\Model\ResponseSuccess
```

😍 React to message

In this method you will be able to react to messages that were sent or recieved by you. You will need to specify the ID of the message you will respond to, as well as [the emoji](https://support.whapi.cloud/help-desk/sending/send-emoji)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$react_to_message = new \OpenAPI\Client\Model\ReactToMessage(); // \OpenAPI\Client\Model\ReactToMessage | React to message

try {
    $result = $apiInstance->reactToMessage($message_id, $react_to_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->reactToMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **react_to_message** | [**\OpenAPI\Client\Model\ReactToMessage**](../Model/ReactToMessage.md)| React to message | |

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

## `sendMediaMessage()`

```php
sendMediaMessage($media_message_type, $send_params, $body): \OpenAPI\Client\Model\SentMessage
```

📎 Send media message

Additional endpoint for easy send media-file as message. Use request body as file and inpath parameters for send parameters. Media message can be one of the following types: - 📷 image - 🎥 video - 🎬 gif - 🎵 audio - 🎤 voice - 📄 document - 🎭 sticker

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_message_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MediaMessageType(); // \OpenAPI\Client\Model\MediaMessageType | Media message type
$send_params = array('key' => new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SenderMedia()); // \OpenAPI\Client\Model\SenderMedia | Send sender parameters via query
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->sendMediaMessage($media_message_type, $send_params, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMediaMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_message_type** | [**\OpenAPI\Client\Model\MediaMessageType**](../Model/.md)| Media message type | |
| **send_params** | [**\OpenAPI\Client\Model\SenderMedia**](../Model/.md)| Send sender parameters via query | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/pdf`, `application/msword`, `application/vnd.ms-powerpoint`, `application/vnd.ms-excel`, `text/plain`, `image/jpeg`, `image/png`, `audio/acc`, `audio/mp4`, `audio/amr`, `audio/mpeg`, `audio/ogg`, `codecs=opus`, `video/mp4`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageAudio()`

```php
sendMessageAudio($sender_audio): \OpenAPI\Client\Model\SentMessage
```

🎵 Send media-audio message

This method is responsible for sending audio messages for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_audio = new \OpenAPI\Client\Model\SenderAudio(); // \OpenAPI\Client\Model\SenderAudio | Message audio

try {
    $result = $apiInstance->sendMessageAudio($sender_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_audio** | [**\OpenAPI\Client\Model\SenderAudio**](../Model/SenderAudio.md)| Message audio | |

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

## `sendMessageContact()`

```php
sendMessageContact($sender_contact): \OpenAPI\Client\Model\SentMessage
```

👤 Send contact message

Simple and object, this method allows you to send a contact. You don't need to have it added to your contacts list, all you have to do is fill in the method attributes with the contact information and send. [A few ready examples](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-contact-vcard)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_contact = new \OpenAPI\Client\Model\SenderContact(); // \OpenAPI\Client\Model\SenderContact | Message contact

try {
    $result = $apiInstance->sendMessageContact($sender_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_contact** | [**\OpenAPI\Client\Model\SenderContact**](../Model/SenderContact.md)| Message contact | |

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

## `sendMessageContactList()`

```php
sendMessageContactList($sender_contact_list): \OpenAPI\Client\Model\SentMessage
```

👥 Send contact list message

Simple and straightforward, this method allows you to send multiple contacts. You don't need to have them in your contacts; just fill the method's attributes with the contact information and send. [A few ready examples](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-contact-vcard)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_contact_list = new \OpenAPI\Client\Model\SenderContactList(); // \OpenAPI\Client\Model\SenderContactList | Message contact list

try {
    $result = $apiInstance->sendMessageContactList($sender_contact_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_contact_list** | [**\OpenAPI\Client\Model\SenderContactList**](../Model/SenderContactList.md)| Message contact list | |

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

## `sendMessageDocument()`

```php
sendMessageDocument($sender_document): \OpenAPI\Client\Model\SentMessage
```

📑 Send media-document message

This method is responsible for sending documents for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_document = new \OpenAPI\Client\Model\SenderDocument(); // \OpenAPI\Client\Model\SenderDocument | Message document

try {
    $result = $apiInstance->sendMessageDocument($sender_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_document** | [**\OpenAPI\Client\Model\SenderDocument**](../Model/SenderDocument.md)| Message document | |

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

## `sendMessageGif()`

```php
sendMessageGif($sender_gif): \OpenAPI\Client\Model\SentMessage
```

🎬 Send media-gif message

Method responsible for sending GIFs to your chats through the API (The file to be sent must be an MP4)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_gif = new \OpenAPI\Client\Model\SenderGif(); // \OpenAPI\Client\Model\SenderGif | Message gif

try {
    $result = $apiInstance->sendMessageGif($sender_gif);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageGif: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_gif** | [**\OpenAPI\Client\Model\SenderGif**](../Model/SenderGif.md)| Message gif | |

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

## `sendMessageImage()`

```php
sendMessageImage($sender_image): \OpenAPI\Client\Model\SentMessage
```

🖼 Send media-image message

This method is responsible for sending images for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_image = new \OpenAPI\Client\Model\SenderImage(); // \OpenAPI\Client\Model\SenderImage | Message image

try {
    $result = $apiInstance->sendMessageImage($sender_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_image** | [**\OpenAPI\Client\Model\SenderImage**](../Model/SenderImage.md)| Message image | |

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

## `sendMessageInteractive()`

```php
sendMessageInteractive($sender_interactive): \OpenAPI\Client\Model\SentMessage
```

🎮 Send interactive message

This endpoint is responsible for sending messages with buttons. The section is constantly updated as the functionality of buttons depends on WhatsApp updates. Button sending is currently available. For more information, please visit the [Button Status topic](https://support.whapi.cloud/help-desk/faq/current-status-of-buttons-on-whatsapp).

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_interactive = new \OpenAPI\Client\Model\SenderInteractive(); // \OpenAPI\Client\Model\SenderInteractive | Message interactive

try {
    $result = $apiInstance->sendMessageInteractive($sender_interactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageInteractive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_interactive** | [**\OpenAPI\Client\Model\SenderInteractive**](../Model/SenderInteractive.md)| Message interactive | |

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

## `sendMessageLinkPreview()`

```php
sendMessageLinkPreview($sender_link_preview): \OpenAPI\Client\Model\SentMessage
```

📎 Send link preview message

Method responsible for sending links with customize preview to your contacts, it is used to share links so that the user can be redirected to a website. Your link must necessarily be in the Body parameter. It is important for you to know that [the link is only clickable](https://support.whapi.cloud/help-desk/faq/inactive-links-in-whatsapp-messages) if the recipient already has your phone number in their contacts, or if they start a conversation with you

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_link_preview = new \OpenAPI\Client\Model\SenderLinkPreview(); // \OpenAPI\Client\Model\SenderLinkPreview | Message link preview send parameters

try {
    $result = $apiInstance->sendMessageLinkPreview($sender_link_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLinkPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_link_preview** | [**\OpenAPI\Client\Model\SenderLinkPreview**](../Model/SenderLinkPreview.md)| Message link preview send parameters | |

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

## `sendMessageLiveLocation()`

```php
sendMessageLiveLocation($sender_live_location): \OpenAPI\Client\Model\SentMessage
```

🧭 Send live location message

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_live_location = new \OpenAPI\Client\Model\SenderLiveLocation(); // \OpenAPI\Client\Model\SenderLiveLocation | Message live location

try {
    $result = $apiInstance->sendMessageLiveLocation($sender_live_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLiveLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_live_location** | [**\OpenAPI\Client\Model\SenderLiveLocation**](../Model/SenderLiveLocation.md)| Message live location | |

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

## `sendMessageLocation()`

```php
sendMessageLocation($sender_location): \OpenAPI\Client\Model\SentMessage
```

📍 Send location message

Method responsible for sending a fixed location to your contacts, it is mostly used to send an address’s location

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_location = new \OpenAPI\Client\Model\SenderLocation(); // \OpenAPI\Client\Model\SenderLocation | Message location

try {
    $result = $apiInstance->sendMessageLocation($sender_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_location** | [**\OpenAPI\Client\Model\SenderLocation**](../Model/SenderLocation.md)| Message location | |

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

## `sendMessagePoll()`

```php
sendMessagePoll($sender_poll): \OpenAPI\Client\Model\SentMessage
```

📊 Send poll message

In this method, you can send poll-type messages. Often, it's the polls that replace [the buttons for interactive communication](https://support.whapi.cloud/help-desk/hints/how-to-use-polls-as-buttons)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_poll = new \OpenAPI\Client\Model\SenderPoll(); // \OpenAPI\Client\Model\SenderPoll | Message poll

try {
    $result = $apiInstance->sendMessagePoll($sender_poll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessagePoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_poll** | [**\OpenAPI\Client\Model\SenderPoll**](../Model/SenderPoll.md)| Message poll | |

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

## `sendMessageShort()`

```php
sendMessageShort($sender_short): \OpenAPI\Client\Model\SentMessage
```

📹 Send media-short video message (PTV)

This method is responsible for sending a short video in the circle for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_short = new \OpenAPI\Client\Model\SenderShort(); // \OpenAPI\Client\Model\SenderShort | Message short

try {
    $result = $apiInstance->sendMessageShort($sender_short);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageShort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_short** | [**\OpenAPI\Client\Model\SenderShort**](../Model/SenderShort.md)| Message short | |

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

## `sendMessageSticker()`

```php
sendMessageSticker($sender_sticker): \OpenAPI\Client\Model\SentMessage
```

🎭 Send media-sticker message

This method is responsible for sending a sticker message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_sticker = new \OpenAPI\Client\Model\SenderSticker(); // \OpenAPI\Client\Model\SenderSticker | Message sticker

try {
    $result = $apiInstance->sendMessageSticker($sender_sticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_sticker** | [**\OpenAPI\Client\Model\SenderSticker**](../Model/SenderSticker.md)| Message sticker | |

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

## `sendMessageStory()`

```php
sendMessageStory($sender_stories): \OpenAPI\Client\Model\SentMessage
```

👁️‍🗨️ Send story message

The method responsible for sending images or texts to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories = new \OpenAPI\Client\Model\SenderStories(); // \OpenAPI\Client\Model\SenderStories | Stories post parameters

try {
    $result = $apiInstance->sendMessageStory($sender_stories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories** | [**\OpenAPI\Client\Model\SenderStories**](../Model/SenderStories.md)| Stories post parameters | |

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

## `sendMessageStoryAudio()`

```php
sendMessageStoryAudio($sender_stories_audio): \OpenAPI\Client\Model\SentMessage
```

🎵️ Send story audio message

The method responsible for sending audio to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_audio = new \OpenAPI\Client\Model\SenderStoriesAudio(); // \OpenAPI\Client\Model\SenderStoriesAudio | Stories post parameters for audio

try {
    $result = $apiInstance->sendMessageStoryAudio($sender_stories_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories_audio** | [**\OpenAPI\Client\Model\SenderStoriesAudio**](../Model/SenderStoriesAudio.md)| Stories post parameters for audio | |

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

## `sendMessageStoryMedia()`

```php
sendMessageStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts): \OpenAPI\Client\Model\SentMessage
```

🖼 Send story media message

The method responsible for sending images or video to your status. Remember that statuses disappear after 24 hours. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media = new \OpenAPI\Client\Model\SendMediaMedia(); // \OpenAPI\Client\Model\SendMediaMedia
$mime_type = 'mime_type_example'; // string | Mime type of media
$no_encode = True; // bool | Do not use our encoding
$no_cache = True; // bool | Do not use the cache in a request
$caption = 'caption_example'; // string | Optional. Text caption under the media.
$preview = 'preview_example'; // string | Optional. Base64 encoded preview of the media. In JPEG format.
$width = 56; // int | Width of the media in pixels
$height = 56; // int | Height of the media in pixels
$contacts = array('contacts_example'); // string[] | List of contacts to send the story to

try {
    $result = $apiInstance->sendMessageStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media** | [**\OpenAPI\Client\Model\SendMediaMedia**](../Model/SendMediaMedia.md)|  | |
| **mime_type** | **string**| Mime type of media | [optional] |
| **no_encode** | **bool**| Do not use our encoding | [optional] |
| **no_cache** | **bool**| Do not use the cache in a request | [optional] |
| **caption** | **string**| Optional. Text caption under the media. | [optional] |
| **preview** | **string**| Optional. Base64 encoded preview of the media. In JPEG format. | [optional] |
| **width** | **int**| Width of the media in pixels | [optional] |
| **height** | **int**| Height of the media in pixels | [optional] |
| **contacts** | [**string[]**](../Model/string.md)| List of contacts to send the story to | [optional] |

### Return type

[**\OpenAPI\Client\Model\SentMessage**](../Model/SentMessage.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageStoryText()`

```php
sendMessageStoryText($sender_stories_text): \OpenAPI\Client\Model\SentMessage
```

💬 Send story text message

The method responsible for sending texts to your status. Remember that statuses disappear after 24 hours.

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_text = new \OpenAPI\Client\Model\SenderStoriesText(); // \OpenAPI\Client\Model\SenderStoriesText | Text stories post parameters

try {
    $result = $apiInstance->sendMessageStoryText($sender_stories_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageStoryText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_stories_text** | [**\OpenAPI\Client\Model\SenderStoriesText**](../Model/SenderStoriesText.md)| Text stories post parameters | |

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

## `sendMessageText()`

```php
sendMessageText($sender_text): \OpenAPI\Client\Model\SentMessage
```

💬 Send text message

This endpoint will let you send messages to any WhatsApp-enabled phone number or to any WhatsApp Group/Channel using your own number connected to Whapi.Cloud. Follow the instructions if you want to [format text](https://support.whapi.cloud/help-desk/faq/whatsapp-text-formatting), [send a emoji](https://support.whapi.cloud/help-desk/sending/send-emoji) or [use line breaks](https://support.whapi.cloud/help-desk/faq/how-to-send-a-paragraph-line-break).

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_text = new \OpenAPI\Client\Model\SenderText(); // \OpenAPI\Client\Model\SenderText | Message text

try {
    $result = $apiInstance->sendMessageText($sender_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_text** | [**\OpenAPI\Client\Model\SenderText**](../Model/SenderText.md)| Message text | |

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

## `sendMessageVideo()`

```php
sendMessageVideo($sender_video): \OpenAPI\Client\Model\SentMessage
```

🎥 Send media-video message

This method is responsible for sending a video message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document)

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_video = new \OpenAPI\Client\Model\SenderVideo(); // \OpenAPI\Client\Model\SenderVideo | Message video

try {
    $result = $apiInstance->sendMessageVideo($sender_video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_video** | [**\OpenAPI\Client\Model\SenderVideo**](../Model/SenderVideo.md)| Message video | |

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

## `sendMessageVoice()`

```php
sendMessageVoice($sender_voice): \OpenAPI\Client\Model\SentMessage
```

🎤 Send media-voice message

This method is responsible for sending a voice message for chats. The requirements for [sending all media types are identical](https://support.whapi.cloud/help-desk/sending/send-video-audio-image-document). However, there are [some nuances](https://support.whapi.cloud/help-desk/sending/overview-of-other-methods-for-sending/send-voice-message) when sending voice messages

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_voice = new \OpenAPI\Client\Model\SenderVoice(); // \OpenAPI\Client\Model\SenderVoice | Message voice

try {
    $result = $apiInstance->sendMessageVoice($sender_voice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageVoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_voice** | [**\OpenAPI\Client\Model\SenderVoice**](../Model/SenderVoice.md)| Message voice | |

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

## `starMessage()`

```php
starMessage($message_id, $star): \OpenAPI\Client\Model\ResponseSuccess
```

⭐ Star message

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


$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Message ID
$star = new \OpenAPI\Client\Model\Star(); // \OpenAPI\Client\Model\Star | Star message

try {
    $result = $apiInstance->starMessage($message_id, $star);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->starMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**| Message ID | |
| **star** | [**\OpenAPI\Client\Model\Star**](../Model/Star.md)| Star message | |

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
