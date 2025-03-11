# OpenAPI\Client\StoriesApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStory()**](StoriesApi.md#createStory) | **POST** /stories | Create &amp; publish story |
| [**createStoryAudio()**](StoriesApi.md#createStoryAudio) | **POST** /stories/send/audio | 🎵️ Post audio story |
| [**createStoryMedia()**](StoriesApi.md#createStoryMedia) | **POST** /stories/send/media | 🖼 Post media story |
| [**createStoryText()**](StoriesApi.md#createStoryText) | **POST** /stories/send/text | 💬 Post text story |
| [**getStories()**](StoriesApi.md#getStories) | **GET** /stories | Get list of stories |
| [**sendMessageStoryText_0()**](StoriesApi.md#sendMessageStoryText_0) | **POST** /messages/story/text | 💬 Send story text message |


## `createStory()`

```php
createStory($sender_stories): \OpenAPI\Client\Model\SentMessage
```

Create & publish story

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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories = new \OpenAPI\Client\Model\SenderStories(); // \OpenAPI\Client\Model\SenderStories | Stories post parameters

try {
    $result = $apiInstance->createStory($sender_stories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->createStory: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoryAudio()`

```php
createStoryAudio($sender_stories_audio): \OpenAPI\Client\Model\SentMessage
```

🎵️ Post audio story

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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_audio = new \OpenAPI\Client\Model\SenderStoriesAudio(); // \OpenAPI\Client\Model\SenderStoriesAudio | Stories post parameters for audio

try {
    $result = $apiInstance->createStoryAudio($sender_stories_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->createStoryAudio: ', $e->getMessage(), PHP_EOL;
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

## `createStoryMedia()`

```php
createStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts): \OpenAPI\Client\Model\SentMessage
```

🖼 Post media story

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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
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
    $result = $apiInstance->createStoryMedia($media, $mime_type, $no_encode, $no_cache, $caption, $preview, $width, $height, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->createStoryMedia: ', $e->getMessage(), PHP_EOL;
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

## `createStoryText()`

```php
createStoryText($sender_stories_text): \OpenAPI\Client\Model\SentMessage
```

💬 Post text story

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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_text = new \OpenAPI\Client\Model\SenderStoriesText(); // \OpenAPI\Client\Model\SenderStoriesText | Text stories post parameters

try {
    $result = $apiInstance->createStoryText($sender_stories_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->createStoryText: ', $e->getMessage(), PHP_EOL;
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

## `getStories()`

```php
getStories($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me): \OpenAPI\Client\Model\MessagesList
```

Get list of stories

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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
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

try {
    $result = $apiInstance->getStories($count, $offset, $time_from, $time_to, $normal_types, $author, $from_me);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->getStories: ', $e->getMessage(), PHP_EOL;
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

## `sendMessageStoryText_0()`

```php
sendMessageStoryText_0($sender_stories_text): \OpenAPI\Client\Model\SentMessage
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


$apiInstance = new OpenAPI\Client\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_stories_text = new \OpenAPI\Client\Model\SenderStoriesText(); // \OpenAPI\Client\Model\SenderStoriesText | Text stories post parameters

try {
    $result = $apiInstance->sendMessageStoryText_0($sender_stories_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->sendMessageStoryText_0: ', $e->getMessage(), PHP_EOL;
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
