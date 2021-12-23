<?php
/**
 * PatchCampaignSpendLimit
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * PatchCampaignSpendLimit Class Doc Comment
 *
 * @category Class
 * @description campaign spend limit model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PatchCampaignSpendLimit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchCampaignSpendLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'spend_limit_type' => 'string',
        'spend_limit_renewal' => 'string',
        'spend_limit_amount' => '\criteo\api\marketingsolutions\preview\Model\NillableDecimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'spend_limit_type' => null,
        'spend_limit_renewal' => null,
        'spend_limit_amount' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'spend_limit_type' => 'spendLimitType',
        'spend_limit_renewal' => 'spendLimitRenewal',
        'spend_limit_amount' => 'spendLimitAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spend_limit_type' => 'setSpendLimitType',
        'spend_limit_renewal' => 'setSpendLimitRenewal',
        'spend_limit_amount' => 'setSpendLimitAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spend_limit_type' => 'getSpendLimitType',
        'spend_limit_renewal' => 'getSpendLimitRenewal',
        'spend_limit_amount' => 'getSpendLimitAmount'
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

    const SPEND_LIMIT_TYPE_CAPPED = 'capped';
    const SPEND_LIMIT_TYPE_UNCAPPED = 'uncapped';
    const SPEND_LIMIT_RENEWAL_UNDEFINED = 'undefined';
    const SPEND_LIMIT_RENEWAL_DAILY = 'daily';
    const SPEND_LIMIT_RENEWAL_MONTHLY = 'monthly';
    const SPEND_LIMIT_RENEWAL_LIFETIME = 'lifetime';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpendLimitTypeAllowableValues()
    {
        return [
            self::SPEND_LIMIT_TYPE_CAPPED,
            self::SPEND_LIMIT_TYPE_UNCAPPED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpendLimitRenewalAllowableValues()
    {
        return [
            self::SPEND_LIMIT_RENEWAL_UNDEFINED,
            self::SPEND_LIMIT_RENEWAL_DAILY,
            self::SPEND_LIMIT_RENEWAL_MONTHLY,
            self::SPEND_LIMIT_RENEWAL_LIFETIME,
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
        $this->container['spend_limit_type'] = $data['spend_limit_type'] ?? null;
        $this->container['spend_limit_renewal'] = $data['spend_limit_renewal'] ?? null;
        $this->container['spend_limit_amount'] = $data['spend_limit_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSpendLimitTypeAllowableValues();
        if (!is_null($this->container['spend_limit_type']) && !in_array($this->container['spend_limit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spend_limit_type', must be one of '%s'",
                $this->container['spend_limit_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpendLimitRenewalAllowableValues();
        if (!is_null($this->container['spend_limit_renewal']) && !in_array($this->container['spend_limit_renewal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spend_limit_renewal', must be one of '%s'",
                $this->container['spend_limit_renewal'],
                implode("', '", $allowedValues)
            );
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
     * Gets spend_limit_type
     *
     * @return string|null
     */
    public function getSpendLimitType()
    {
        return $this->container['spend_limit_type'];
    }

    /**
     * Sets spend_limit_type
     *
     * @param string|null $spend_limit_type Whether your spend limit is capped or not
     *
     * @return self
     */
    public function setSpendLimitType($spend_limit_type)
    {
        $allowedValues = $this->getSpendLimitTypeAllowableValues();
        if (!is_null($spend_limit_type) && !in_array($spend_limit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spend_limit_type', must be one of '%s'",
                    $spend_limit_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spend_limit_type'] = $spend_limit_type;

        return $this;
    }

    /**
     * Gets spend_limit_renewal
     *
     * @return string|null
     */
    public function getSpendLimitRenewal()
    {
        return $this->container['spend_limit_renewal'];
    }

    /**
     * Sets spend_limit_renewal
     *
     * @param string|null $spend_limit_renewal The pace of the spend limit renewal
     *
     * @return self
     */
    public function setSpendLimitRenewal($spend_limit_renewal)
    {
        $allowedValues = $this->getSpendLimitRenewalAllowableValues();
        if (!is_null($spend_limit_renewal) && !in_array($spend_limit_renewal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spend_limit_renewal', must be one of '%s'",
                    $spend_limit_renewal,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spend_limit_renewal'] = $spend_limit_renewal;

        return $this;
    }

    /**
     * Gets spend_limit_amount
     *
     * @return \criteo\api\marketingsolutions\preview\Model\NillableDecimal|null
     */
    public function getSpendLimitAmount()
    {
        return $this->container['spend_limit_amount'];
    }

    /**
     * Sets spend_limit_amount
     *
     * @param \criteo\api\marketingsolutions\preview\Model\NillableDecimal|null $spend_limit_amount spend_limit_amount
     *
     * @return self
     */
    public function setSpendLimitAmount($spend_limit_amount)
    {
        $this->container['spend_limit_amount'] = $spend_limit_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


