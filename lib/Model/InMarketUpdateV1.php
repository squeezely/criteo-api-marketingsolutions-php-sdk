<?php
/**
 * InMarketUpdateV1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\preview\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\preview\ObjectSerializer;

/**
 * InMarketUpdateV1 Class Doc Comment
 *
 * @category Class
 * @description Settings to target users based on high shopping intents and demographics.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InMarketUpdateV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InMarketUpdateV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'buying_power' => 'string[]',
        'gender' => '\criteo\api\marketingsolutions\preview\Model\NillableGenderV1',
        'interest_ids' => 'string[]',
        'brand_ids' => 'string[]',
        'price_range' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'buying_power' => null,
        'gender' => null,
        'interest_ids' => null,
        'brand_ids' => null,
        'price_range' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
		'buying_power' => false,
		'gender' => false,
		'interest_ids' => false,
		'brand_ids' => false,
		'price_range' => false
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
        'country' => 'country',
        'buying_power' => 'buyingPower',
        'gender' => 'gender',
        'interest_ids' => 'interestIds',
        'brand_ids' => 'brandIds',
        'price_range' => 'priceRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'buying_power' => 'setBuyingPower',
        'gender' => 'setGender',
        'interest_ids' => 'setInterestIds',
        'brand_ids' => 'setBrandIds',
        'price_range' => 'setPriceRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'buying_power' => 'getBuyingPower',
        'gender' => 'getGender',
        'interest_ids' => 'getInterestIds',
        'brand_ids' => 'getBrandIds',
        'price_range' => 'getPriceRange'
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

    public const BUYING_POWER_LOW = 'Low';
    public const BUYING_POWER_MEDIUM = 'Medium';
    public const BUYING_POWER_HIGH = 'High';
    public const BUYING_POWER_VERY_HIGH = 'VeryHigh';
    public const PRICE_RANGE_LOW = 'Low';
    public const PRICE_RANGE_MEDIUM = 'Medium';
    public const PRICE_RANGE_HIGH = 'High';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBuyingPowerAllowableValues()
    {
        return [
            self::BUYING_POWER_LOW,
            self::BUYING_POWER_MEDIUM,
            self::BUYING_POWER_HIGH,
            self::BUYING_POWER_VERY_HIGH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceRangeAllowableValues()
    {
        return [
            self::PRICE_RANGE_LOW,
            self::PRICE_RANGE_MEDIUM,
            self::PRICE_RANGE_HIGH,
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('buying_power', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('interest_ids', $data ?? [], null);
        $this->setIfExists('brand_ids', $data ?? [], null);
        $this->setIfExists('price_range', $data ?? [], null);
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets buying_power
     *
     * @return string[]|null
     */
    public function getBuyingPower()
    {
        return $this->container['buying_power'];
    }

    /**
     * Sets buying_power
     *
     * @param string[]|null $buying_power buying_power
     *
     * @return self
     */
    public function setBuyingPower($buying_power)
    {
        if (is_null($buying_power)) {
            throw new \InvalidArgumentException('non-nullable buying_power cannot be null');
        }
        $allowedValues = $this->getBuyingPowerAllowableValues();
        if (array_diff($buying_power, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'buying_power', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['buying_power'] = $buying_power;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \criteo\api\marketingsolutions\preview\Model\NillableGenderV1|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \criteo\api\marketingsolutions\preview\Model\NillableGenderV1|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets interest_ids
     *
     * @return string[]|null
     */
    public function getInterestIds()
    {
        return $this->container['interest_ids'];
    }

    /**
     * Sets interest_ids
     *
     * @param string[]|null $interest_ids interest_ids
     *
     * @return self
     */
    public function setInterestIds($interest_ids)
    {
        if (is_null($interest_ids)) {
            throw new \InvalidArgumentException('non-nullable interest_ids cannot be null');
        }


        $this->container['interest_ids'] = $interest_ids;

        return $this;
    }

    /**
     * Gets brand_ids
     *
     * @return string[]|null
     */
    public function getBrandIds()
    {
        return $this->container['brand_ids'];
    }

    /**
     * Sets brand_ids
     *
     * @param string[]|null $brand_ids brand_ids
     *
     * @return self
     */
    public function setBrandIds($brand_ids)
    {
        if (is_null($brand_ids)) {
            throw new \InvalidArgumentException('non-nullable brand_ids cannot be null');
        }


        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return string[]|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param string[]|null $price_range price_range
     *
     * @return self
     */
    public function setPriceRange($price_range)
    {
        if (is_null($price_range)) {
            throw new \InvalidArgumentException('non-nullable price_range cannot be null');
        }
        $allowedValues = $this->getPriceRangeAllowableValues();
        if (array_diff($price_range, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_range', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['price_range'] = $price_range;

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


