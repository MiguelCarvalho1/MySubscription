<?php
/**
 * ProductEdit
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
 * ProductEdit Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductEdit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductEdit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_retailer_id' => 'string',
        'currency' => '\OpenAPI\Client\Model\Currency',
        'images' => 'string[]',
        'availability' => 'string',
        'name' => 'string',
        'url' => 'string',
        'description' => 'string',
        'price' => 'float',
        'is_hidden' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_retailer_id' => null,
        'currency' => null,
        'images' => 'uri',
        'availability' => null,
        'name' => null,
        'url' => null,
        'description' => null,
        'price' => null,
        'is_hidden' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_retailer_id' => false,
        'currency' => false,
        'images' => false,
        'availability' => false,
        'name' => false,
        'url' => false,
        'description' => false,
        'price' => false,
        'is_hidden' => false
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
        'product_retailer_id' => 'product_retailer_id',
        'currency' => 'currency',
        'images' => 'images',
        'availability' => 'availability',
        'name' => 'name',
        'url' => 'url',
        'description' => 'description',
        'price' => 'price',
        'is_hidden' => 'is_hidden'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_retailer_id' => 'setProductRetailerId',
        'currency' => 'setCurrency',
        'images' => 'setImages',
        'availability' => 'setAvailability',
        'name' => 'setName',
        'url' => 'setUrl',
        'description' => 'setDescription',
        'price' => 'setPrice',
        'is_hidden' => 'setIsHidden'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_retailer_id' => 'getProductRetailerId',
        'currency' => 'getCurrency',
        'images' => 'getImages',
        'availability' => 'getAvailability',
        'name' => 'getName',
        'url' => 'getUrl',
        'description' => 'getDescription',
        'price' => 'getPrice',
        'is_hidden' => 'getIsHidden'
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

    public const AVAILABILITY_IN_STOCK = 'in stock';
    public const AVAILABILITY_OUT_OF_STOCK = 'out of stock';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY_IN_STOCK,
            self::AVAILABILITY_OUT_OF_STOCK,
        ];
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
        $this->setIfExists('product_retailer_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('is_hidden', $data ?? [], null);
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

        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ((count($this->container['images']) > 10)) {
            $invalidProperties[] = "invalid value for 'images', number of items must be less than or equal to 10.";
        }

        if ((count($this->container['images']) < 1)) {
            $invalidProperties[] = "invalid value for 'images', number of items must be greater than or equal to 1.";
        }

        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($this->container['availability']) && !in_array($this->container['availability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability', must be one of '%s'",
                $this->container['availability'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['price']) && ($this->container['price'] < 0)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 0.";
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
     * Gets product_retailer_id
     *
     * @return string|null
     */
    public function getProductRetailerId()
    {
        return $this->container['product_retailer_id'];
    }

    /**
     * Sets product_retailer_id
     *
     * @param string|null $product_retailer_id Product Retailer ID
     *
     * @return self
     */
    public function setProductRetailerId($product_retailer_id)
    {
        if (is_null($product_retailer_id)) {
            throw new \InvalidArgumentException('non-nullable product_retailer_id cannot be null');
        }
        $this->container['product_retailer_id'] = $product_retailer_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[] $images Product images urls
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }

        if ((count($images) > 10)) {
            throw new \InvalidArgumentException('invalid value for $images when calling ProductEdit., number of items must be less than or equal to 10.');
        }
        if ((count($images) < 1)) {
            throw new \InvalidArgumentException('invalid length for $images when calling ProductEdit., number of items must be greater than or equal to 1.');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string|null $availability Product availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($availability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availability', must be one of '%s'",
                    $availability,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Product name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Product url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Product description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Product price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        if (($price < 0)) {
            throw new \InvalidArgumentException('invalid value for $price when calling ProductEdit., must be bigger than or equal to 0.');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden Product is hidden
     *
     * @return self
     */
    public function setIsHidden($is_hidden)
    {
        if (is_null($is_hidden)) {
            throw new \InvalidArgumentException('non-nullable is_hidden cannot be null');
        }
        $this->container['is_hidden'] = $is_hidden;

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


