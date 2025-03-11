<?php
/**
 * SenderPoll
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
 * SenderPoll Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SenderPoll implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SenderPoll';

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
        'title' => 'string',
        'options' => 'string[]',
        'count' => 'int',
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
        'title' => null,
        'options' => null,
        'count' => null,
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
        'title' => false,
        'options' => false,
        'count' => false,
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
        'title' => 'title',
        'options' => 'options',
        'count' => 'count',
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
        'title' => 'setTitle',
        'options' => 'setOptions',
        'count' => 'setCount',
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
        'title' => 'getTitle',
        'options' => 'getOptions',
        'count' => 'getCount',
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ((count($this->container['options']) > 12)) {
            $invalidProperties[] = "invalid value for 'options', number of items must be less than or equal to 12.";
        }

        if ((count($this->container['options']) < 2)) {
            $invalidProperties[] = "invalid value for 'options', number of items must be greater than or equal to 2.";
        }

        if (!is_null($this->container['count']) && ($this->container['count'] > 1)) {
            $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException("invalid value for \$to when calling SenderPoll., must conform to the pattern /^[\\d-]{10,31}(@[\\w\\.]{1,})?$/.");
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
            throw new \InvalidArgumentException("invalid value for \$quoted when calling SenderPoll., must conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.");
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
            throw new \InvalidArgumentException('invalid value for $ephemeral when calling SenderPoll., must be smaller than or equal to 604800.');
        }
        if (($ephemeral < 1)) {
            throw new \InvalidArgumentException('invalid value for $ephemeral when calling SenderPoll., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException("invalid value for \$edit when calling SenderPoll., must conform to the pattern /^[A-Za-z0-9._]{4,23}-[A-Za-z0-9._]{4,14}(-[A-Za-z0-9._]{4,10})?(-[A-Za-z0-9._]{4,10})?$/.");
        }

        $this->container['edit'] = $edit;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of poll
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options Options of poll
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }

        if ((count($options) > 12)) {
            throw new \InvalidArgumentException('invalid value for $options when calling SenderPoll., number of items must be less than or equal to 12.');
        }
        if ((count($options) < 2)) {
            throw new \InvalidArgumentException('invalid length for $options when calling SenderPoll., number of items must be greater than or equal to 2.');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Number of selectable options in poll (1 - can choose only one option, 0 - any number of options)
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        if (($count > 1)) {
            throw new \InvalidArgumentException('invalid value for $count when calling SenderPoll., must be smaller than or equal to 1.');
        }
        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling SenderPoll., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

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


