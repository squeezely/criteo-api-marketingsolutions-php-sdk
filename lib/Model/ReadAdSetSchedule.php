<?php
/**
 * ReadAdSetSchedule
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
 * ReadAdSetSchedule Class Doc Comment
 *
 * @category Class
 * @description ad set schedule read model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReadAdSetSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSetSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => '\criteo\api\marketingsolutions\preview\Model\NillableDateTime',
        'end_date' => '\criteo\api\marketingsolutions\preview\Model\NillableDateTime',
        'activation_status' => 'string',
        'delivery_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date' => null,
        'end_date' => null,
        'activation_status' => null,
        'delivery_status' => null
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'activation_status' => 'activationStatus',
        'delivery_status' => 'deliveryStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'activation_status' => 'setActivationStatus',
        'delivery_status' => 'setDeliveryStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'activation_status' => 'getActivationStatus',
        'delivery_status' => 'getDeliveryStatus'
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

    const ACTIVATION_STATUS_ON = 'on';
    const ACTIVATION_STATUS_OFF = 'off';
    const DELIVERY_STATUS_DRAFT = 'draft';
    const DELIVERY_STATUS_INACTIVE = 'inactive';
    const DELIVERY_STATUS_LIVE = 'live';
    const DELIVERY_STATUS_NOT_LIVE = 'notLive';
    const DELIVERY_STATUS_PAUSING = 'pausing';
    const DELIVERY_STATUS_PAUSED = 'paused';
    const DELIVERY_STATUS_SCHEDULED = 'scheduled';
    const DELIVERY_STATUS_ENDED = 'ended';
    const DELIVERY_STATUS_NOT_DELIVERING = 'notDelivering';
    const DELIVERY_STATUS_ARCHIVED = 'archived';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivationStatusAllowableValues()
    {
        return [
            self::ACTIVATION_STATUS_ON,
            self::ACTIVATION_STATUS_OFF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryStatusAllowableValues()
    {
        return [
            self::DELIVERY_STATUS_DRAFT,
            self::DELIVERY_STATUS_INACTIVE,
            self::DELIVERY_STATUS_LIVE,
            self::DELIVERY_STATUS_NOT_LIVE,
            self::DELIVERY_STATUS_PAUSING,
            self::DELIVERY_STATUS_PAUSED,
            self::DELIVERY_STATUS_SCHEDULED,
            self::DELIVERY_STATUS_ENDED,
            self::DELIVERY_STATUS_NOT_DELIVERING,
            self::DELIVERY_STATUS_ARCHIVED,
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
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['activation_status'] = $data['activation_status'] ?? null;
        $this->container['delivery_status'] = $data['delivery_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActivationStatusAllowableValues();
        if (!is_null($this->container['activation_status']) && !in_array($this->container['activation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'activation_status', must be one of '%s'",
                $this->container['activation_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!is_null($this->container['delivery_status']) && !in_array($this->container['delivery_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'delivery_status', must be one of '%s'",
                $this->container['delivery_status'],
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
     * Gets start_date
     *
     * @return \criteo\api\marketingsolutions\preview\Model\NillableDateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \criteo\api\marketingsolutions\preview\Model\NillableDateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \criteo\api\marketingsolutions\preview\Model\NillableDateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \criteo\api\marketingsolutions\preview\Model\NillableDateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets activation_status
     *
     * @return string|null
     */
    public function getActivationStatus()
    {
        return $this->container['activation_status'];
    }

    /**
     * Sets activation_status
     *
     * @param string|null $activation_status Activation status of the ad set, i.e. whether the consumer wants it to deliver
     *
     * @return self
     */
    public function setActivationStatus($activation_status)
    {
        $allowedValues = $this->getActivationStatusAllowableValues();
        if (!is_null($activation_status) && !in_array($activation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'activation_status', must be one of '%s'",
                    $activation_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activation_status'] = $activation_status;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param string|null $delivery_status Delivery status of the delivery of the ad set, i.e. whether the ad set is delivering
     *
     * @return self
     */
    public function setDeliveryStatus($delivery_status)
    {
        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!is_null($delivery_status) && !in_array($delivery_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'delivery_status', must be one of '%s'",
                    $delivery_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_status'] = $delivery_status;

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


