# WhatsApp API PHP SDK Documentation

Sending and receiving messages using HTTP requests. Fixed price with no hidden fees, without limits and restrictions. You will be able to send and receive text/media/files/locations/goods/orders/polls messages via WhatsApp in private or Group chats.

For more information, please visit [https://whapi.cloud/support](https://whapi.cloud/support).

## Installation

Install the WhAPI PHP SDK using Composer:

```bash
composer require whapi-cloud/whatsapp-api-sdk-php
```

## Initial Setup

To work with the API and develop the integration, you will need to know your API key, which you can get on the page of the channel you authorized (connected to the number). Go to the authorized channel in the [dashboard](https://panel.whapi.cloud/dashboard). Click to copy it and the API key will remain in your clipboard.

First, include the required libraries and initialize the client:

```php
use OpenAPI\Client\Api\MessagesApi;
use OpenAPI\Client\Configuration;

// Initialize the client
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
    ->setApiKey('token', "your_token")
    ->setAccessToken("your_token");

$apiInstance = new OpenAPI\Client\Api\MessagesApi(
    new GuzzleHttp\Client(),
    $config
);
```

## Messages API

### Sending Text Messages

```php
// Create text message object
$sender_text = new \OpenAPI\Client\Model\SenderText();
$sender_text->setTo('13016789891');        // Include country code
$sender_text->setBody('Your message here'); // Message content

// Optional parameters
$sender_text->setEphemeral(3600);     // Message visibility time in seconds
$sender_text->setViewOnce(true);      // View once setting
$sender_text->setTypingTime(5.0);     // Typing simulation duration
$sender_text->setNoLinkPreview(false); // Enable/disable link previews

// Send the message
$result = $apiInstance->sendMessageText($sender_text);
print_r($result);
```

### Sending Images with Captions

```php
// Create image message object
$sender_image = new \OpenAPI\Client\Model\SenderImage();
$sender_image->setTo('13016789891');   // Recipient's number
$sender_image->setCaption('Image caption');
$sender_image->setMedia('https://example.com/image.jpg');

// Send the image
$result = $apiInstance->sendMessageImage($sender_image);
print_r($result);
```

### Retrieving Messages

We strongly encourage you to get up-to-date information by using a webhook. A webhook is a tool that allows one app to send real-time data to another app. 

[This guide](https://support.whapi.cloud/help-desk/receiving/webhooks/where-to-find-the-webhook-url) describes where to find this link, recommended server options, and popular solutions. 

#### Get Multiple Messages
```php
// Parameters
$count = 100;  // Number of messages to retrieve
$offset = 0;   // Pagination offset

// Get messages
$result = $apiInstance->getMessages($count, $offset);
print_r($result);
```

#### Get Single Message
```php
// Get message by ID
$message_id = "your_message_id";
$result = $apiInstance->getMessage($message_id);
print_r($result);
```

## Groups API

### Creating Groups

First, initialize the Groups API client:

```php
$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    new GuzzleHttp\Client(),
    $config
);

// Create group request
$create_group_request = [
    "subject" => "Group Name",
    "participants" => [
        "13016789891",
        "13016789892"
    ]
];

// Create the group
$result = $apiInstance->createGroup($create_group_request);
print_r($result);
```

## Important Notes

1. Phone Numbers:
   - Always include country code (e.g., '13016789891' for US number)
   - Don't use special characters or spaces

2. Media URLs:
   - Must be publicly accessible
   - Support common image formats (JPEG, PNG, etc.)

3. Message Options:
   - Ephemeral: Time in seconds before message disappears
   - ViewOnce: Message can only be viewed once
   - TypingTime: Simulates natural typing delay

## Error Handling

It's recommended to implement try-catch blocks:

```php
try {
    $result = $apiInstance->sendMessageText($sender_text);
    print_r($result);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

## Rate Limits and Best Practices

1. Avoid sending too many messages in quick succession
2. Implement proper error handling
3. Store and handle message IDs for tracking
4. Regular monitoring of API responses
5. Maintain proper logging for debugging

## Support

For additional support or questions:
- For more information, please visit [Whapi.Cloud Support](https://whapi.cloud/support).

