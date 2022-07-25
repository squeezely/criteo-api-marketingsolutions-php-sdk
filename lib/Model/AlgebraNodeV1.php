<?php
/**
 * AlgebraNodeV1
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
 * The version of the OpenAPI document: Preview
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
 * AlgebraNodeV1 Class Doc Comment
 *
 * @category Class
 * @description Node in the audience algebra definition.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlgebraNodeV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlgebraNodeV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'and' => '\criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]',
        'or' => '\criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]',
        'not' => '\criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1',
        'audience_segment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'and' => null,
        'or' => null,
        'not' => null,
        'audience_segment_id' => null
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
        'and' => 'and',
        'or' => 'or',
        'not' => 'not',
        'audience_segment_id' => 'audienceSegmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'and' => 'setAnd',
        'or' => 'setOr',
        'not' => 'setNot',
        'audience_segment_id' => 'setAudienceSegmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'and' => 'getAnd',
        'or' => 'getOr',
        'not' => 'getNot',
        'audience_segment_id' => 'getAudienceSegmentId'
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
        $this->container['and'] = $data['and'] ?? null;
        $this->container['or'] = $data['or'] ?? null;
        $this->container['not'] = $data['not'] ?? null;
        $this->container['audience_segment_id'] = $data['audience_segment_id'] ?? null;
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
     * Gets and
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]|null
     */
    public function getAnd()
    {
        return $this->container['and'];
    }

    /**
     * Sets and
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]|null $and and
     *
     * @return self
     */
    public function setAnd($and)
    {


        $this->container['and'] = $and;

        return $this;
    }

    /**
     * Gets or
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]|null
     */
    public function getOr()
    {
        return $this->container['or'];
    }

    /**
     * Sets or
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1[]|null $or or
     *
     * @return self
     */
    public function setOr($or)
    {


        $this->container['or'] = $or;

        return $this;
    }

    /**
     * Gets not
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1|null
     */
    public function getNot()
    {
        return $this->container['not'];
    }

    /**
     * Sets not
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AlgebraNodeV1|null $not not
     *
     * @return self
     */
    public function setNot($not)
    {
        $this->container['not'] = $not;

        return $this;
    }

    /**
     * Gets audience_segment_id
     *
     * @return string|null
     */
    public function getAudienceSegmentId()
    {
        return $this->container['audience_segment_id'];
    }

    /**
     * Sets audience_segment_id
     *
     * @param string|null $audience_segment_id audience_segment_id
     *
     * @return self
     */
    public function setAudienceSegmentId($audience_segment_id)
    {
        $this->container['audience_segment_id'] = $audience_segment_id;

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


