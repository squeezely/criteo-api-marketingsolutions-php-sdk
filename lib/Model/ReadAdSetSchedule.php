<?php
/**
 * ReadAdSetSchedule
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
 * ReadAdSetSchedule Class Doc Comment
 *
 * @category Class
 * @description ad set schedule read model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start_date' => false,
		'end_date' => false,
		'activation_status' => false,
		'delivery_status' => false
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

    public const ACTIVATION_STATUS_ON = 'on';
    public const ACTIVATION_STATUS_OFF = 'off';
    public const DELIVERY_STATUS_DRAFT = 'draft';
    public const DELIVERY_STATUS_INACTIVE = 'inactive';
    public const DELIVERY_STATUS_LIVE = 'live';
    public const DELIVERY_STATUS_NOT_LIVE = 'notLive';
    public const DELIVERY_STATUS_PAUSING = 'pausing';
    public const DELIVERY_STATUS_PAUSED = 'paused';
    public const DELIVERY_STATUS_SCHEDULED = 'scheduled';
    public const DELIVERY_STATUS_ENDED = 'ended';
    public const DELIVERY_STATUS_NOT_DELIVERING = 'notDelivering';
    public const DELIVERY_STATUS_ARCHIVED = 'archived';

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
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('activation_status', $data ?? [], null);
        $this->setIfExists('delivery_status', $data ?? [], null);
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
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
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
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
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
        if (is_null($activation_status)) {
            throw new \InvalidArgumentException('non-nullable activation_status cannot be null');
        }
        $allowedValues = $this->getActivationStatusAllowableValues();
        if (!in_array($activation_status, $allowedValues, true)) {
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
        if (is_null($delivery_status)) {
            throw new \InvalidArgumentException('non-nullable delivery_status cannot be null');
        }
        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!in_array($delivery_status, $allowedValues, true)) {
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


