<?php
/**
 * SenderVoice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Whapi API
 *
 * Sending and receiving messages using HTTP requests. Fixed price with no hidden fees, without limits and restrictions. You will be able to send and receive text/media/files/locations/goods/orders/polls messages via WhatsApp in private or group chats. Guides and SDK can be found on our website.
 *
 * The version of the OpenAPI document: 1.8.7
 * Contact: care@whapi.cloud
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SenderVoice Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SenderVoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SenderVoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'quoted' => 'string',
        'ephemeral' => 'int',
        'edit' => 'string',
        'media' => '\OpenAPI\Client\Model\SendMediaMedia',
        'mime_type' => 'string',
        'no_encode' => 'bool',
        'no_cache' => 'bool',
        'seconds' => 'int',
        'recording_time' => 'float',
        'view_once' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'to' => null,
        'quoted' => null,
        'ephemeral' => null,
        'edit' => null,
        'media' => null,
        'mime_type' => null,
        'no_encode' => null,
        'no_cache' => null,
        'seconds' => 'int32',
        'recording_time' => null,
        'view_once' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'to' => false,
        'quoted' => false,
        'ephemeral' => false,
        'edit' => false,
        'media' => false,
        'mime_type' => false,
        'no_encode' => false,
        'no_cache' => false,
        'seconds' => false,
        'recording_time' => false,
        'view_once' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'to' => 'to',
        'quoted' => 'quoted',
        'ephemeral' => 'ephemeral',
        'edit' => 'edit',
        'media' => 'media',
        'mime_type' => 'mime_type',
        'no_encode' => 'no_encode',
        'no_cache' => 'no_cache',
        'seconds' => 'seconds',
        'recording_time' => 'recording_time',
        'view_once' => 'view_once'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'quoted' => 'setQuoted',
        'ephemeral' => 'setEphemeral',
        'edit' => 'setEdit',
        'media' => 'setMedia',
        'mime_type' => 'setMimeType',
        'no_encode' => 'setNoEncode',
        'no_cache' => 'setNoCache',
        'seconds' => 'setSeconds',
        'recording_time' => 'setRecordingTime',
        'view_once' => 'setViewOnce'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'quoted' => 'getQuoted',
        'ephemeral' => 'getEphemeral',
        'edit' => 'getEdit',
        'media' => 'getMedia',
        'mime_type' => 'getMimeType',
        'no_encode' => 'getNoEncode',
        'no_cache' => 'getNoCache',
        'seconds' => 'getSeconds',
        'recording_time' => 'getRecordingTime',
        'view_once' => 'getViewOnce'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('quoted', $data ?? [], null);
        $this->setIfExists('ephemeral', $data ?? [], null);
        $this->setIfExists('edit', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('mime_type', $data ?? [], null);
        $this->setIfExists('no_encode', $data ?? [], null);
        $this->setIfExists('no_cache', $data ?? [], null);
        $this->setIfExists('seconds', $data ?? [], null);
        $this->setIfExists('recording_time', $data ?? [], 0);
        $this->setIfExists('view_once', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if (!preg_match("/^[\\d-]{10,31}(@[\\w\\.]{1,})?$/", $this->container['to'])) {
            $invalidProperties[] = "invalid value for 'to', must be conform to the pattern /^[\\d-]{10,31}(@[\\w\\.]{1,})?$/.";
        }

        if (!is_null($this->container['quoted']) && !preg_match("/^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/", $this->container['quoted'])) {
            $invalidProperties[] = "invalid value for 'quoted', must be conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.";
        }

        if (!is_null($this->container['ephemeral']) && ($this->container['ephemeral'] > 604800)) {
            $invalidProperties[] = "invalid value for 'ephemeral', must be smaller than or equal to 604800.";
        }

        if (!is_null($this->container['ephemeral']) && ($this->container['ephemeral'] < 1)) {
            $invalidProperties[] = "invalid value for 'ephemeral', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['edit']) && !preg_match("/^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/", $this->container['edit'])) {
            $invalidProperties[] = "invalid value for 'edit', must be conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.";
        }

        if ($this->container['media'] === null) {
            $invalidProperties[] = "'media' can't be null";
        }
        if (!is_null($this->container['recording_time']) && ($this->container['recording_time'] < 0)) {
            $invalidProperties[] = "invalid value for 'recording_time', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID.
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        if ((!preg_match("/^[\\d-]{10,31}(@[\\w\\.]{1,})?$/", ObjectSerializer::toString($to)))) {
            throw new \InvalidArgumentException("invalid value for \$to when calling SenderVoice., must conform to the pattern /^[\\d-]{10,31}(@[\\w\\.]{1,})?$/.");
        }

        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets quoted
     *
     * @return string|null
     */
    public function getQuoted()
    {
        return $this->container['quoted'];
    }

    /**
     * Sets quoted
     *
     * @param string|null $quoted Message ID of the message to be quoted
     *
     * @return self
     */
    public function setQuoted($quoted)
    {
        if (is_null($quoted)) {
            throw new \InvalidArgumentException('non-nullable quoted cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/", ObjectSerializer::toString($quoted)))) {
            throw new \InvalidArgumentException("invalid value for \$quoted when calling SenderVoice., must conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.");
        }

        $this->container['quoted'] = $quoted;

        return $this;
    }

    /**
     * Gets ephemeral
     *
     * @return int|null
     */
    public function getEphemeral()
    {
        return $this->container['ephemeral'];
    }

    /**
     * Sets ephemeral
     *
     * @param int|null $ephemeral Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message.
     *
     * @return self
     */
    public function setEphemeral($ephemeral)
    {
        if (is_null($ephemeral)) {
            throw new \InvalidArgumentException('non-nullable ephemeral cannot be null');
        }

        if (($ephemeral > 604800)) {
            throw new \InvalidArgumentException('invalid value for $ephemeral when calling SenderVoice., must be smaller than or equal to 604800.');
        }
        if (($ephemeral < 1)) {
            throw new \InvalidArgumentException('invalid value for $ephemeral when calling SenderVoice., must be bigger than or equal to 1.');
        }

        $this->container['ephemeral'] = $ephemeral;

        return $this;
    }

    /**
     * Gets edit
     *
     * @return string|null
     */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
     * Sets edit
     *
     * @param string|null $edit Message ID of the message to be edited
     *
     * @return self
     */
    public function setEdit($edit)
    {
        if (is_null($edit)) {
            throw new \InvalidArgumentException('non-nullable edit cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/", ObjectSerializer::toString($edit)))) {
            throw new \InvalidArgumentException("invalid value for \$edit when calling SenderVoice., must conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.");
        }

        $this->container['edit'] = $edit;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\SendMediaMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\SendMediaMedia $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type Mime type of media
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        if (is_null($mime_type)) {
            throw new \InvalidArgumentException('non-nullable mime_type cannot be null');
        }
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets no_encode
     *
     * @return bool|null
     */
    public function getNoEncode()
    {
        return $this->container['no_encode'];
    }

    /**
     * Sets no_encode
     *
     * @param bool|null $no_encode Do not use our encoding
     *
     * @return self
     */
    public function setNoEncode($no_encode)
    {
        if (is_null($no_encode)) {
            throw new \InvalidArgumentException('non-nullable no_encode cannot be null');
        }
        $this->container['no_encode'] = $no_encode;

        return $this;
    }

    /**
     * Gets no_cache
     *
     * @return bool|null
     */
    public function getNoCache()
    {
        return $this->container['no_cache'];
    }

    /**
     * Sets no_cache
     *
     * @param bool|null $no_cache Do not use the cache in a request
     *
     * @return self
     */
    public function setNoCache($no_cache)
    {
        if (is_null($no_cache)) {
            throw new \InvalidArgumentException('non-nullable no_cache cannot be null');
        }
        $this->container['no_cache'] = $no_cache;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int|null
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int|null $seconds Optional. For audio files, this field indicates the duration of the audio file in seconds.
     *
     * @return self
     */
    public function setSeconds($seconds)
    {
        if (is_null($seconds)) {
            throw new \InvalidArgumentException('non-nullable seconds cannot be null');
        }
        $this->container['seconds'] = $seconds;

        return $this;
    }

    /**
     * Gets recording_time
     *
     * @return float|null
     */
    public function getRecordingTime()
    {
        return $this->container['recording_time'];
    }

    /**
     * Sets recording_time
     *
     * @param float|null $recording_time Time in seconds to simulate recording voice
     *
     * @return self
     */
    public function setRecordingTime($recording_time)
    {
        if (is_null($recording_time)) {
            throw new \InvalidArgumentException('non-nullable recording_time cannot be null');
        }

        if (($recording_time < 0)) {
            throw new \InvalidArgumentException('invalid value for $recording_time when calling SenderVoice., must be bigger than or equal to 0.');
        }

        $this->container['recording_time'] = $recording_time;

        return $this;
    }

    /**
     * Gets view_once
     *
     * @return bool|null
     */
    public function getViewOnce()
    {
        return $this->container['view_once'];
    }

    /**
     * Sets view_once
     *
     * @param bool|null $view_once Is view once
     *
     * @return self
     */
    public function setViewOnce($view_once)
    {
        if (is_null($view_once)) {
            throw new \InvalidArgumentException('non-nullable view_once cannot be null');
        }
        $this->container['view_once'] = $view_once;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


