<?php
/**
 * GenerateAudiencePerformanceReportRequestAttributes
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
 * GenerateAudiencePerformanceReportRequestAttributes Class Doc Comment
 *
 * @category Class
 * @description Request attributes for async audience performance report
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GenerateAudiencePerformanceReportRequestAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenerateAudiencePerformanceReportRequestAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'advertiser_id' => 'string',
        'timezone' => 'string',
        'dimension' => 'string',
        'metrics' => 'string[]',
        'currency' => 'string',
        'ad_set_ids' => 'string[]',
        'audience_ids' => 'string[]',
        'segments_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'advertiser_id' => null,
        'timezone' => null,
        'dimension' => null,
        'metrics' => null,
        'currency' => null,
        'ad_set_ids' => null,
        'audience_ids' => null,
        'segments_ids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start_date' => false,
		'end_date' => false,
		'advertiser_id' => false,
		'timezone' => false,
		'dimension' => false,
		'metrics' => false,
		'currency' => false,
		'ad_set_ids' => false,
		'audience_ids' => false,
		'segments_ids' => false
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
        'advertiser_id' => 'advertiserId',
        'timezone' => 'timezone',
        'dimension' => 'dimension',
        'metrics' => 'metrics',
        'currency' => 'currency',
        'ad_set_ids' => 'adSetIds',
        'audience_ids' => 'audienceIds',
        'segments_ids' => 'segmentsIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'advertiser_id' => 'setAdvertiserId',
        'timezone' => 'setTimezone',
        'dimension' => 'setDimension',
        'metrics' => 'setMetrics',
        'currency' => 'setCurrency',
        'ad_set_ids' => 'setAdSetIds',
        'audience_ids' => 'setAudienceIds',
        'segments_ids' => 'setSegmentsIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'advertiser_id' => 'getAdvertiserId',
        'timezone' => 'getTimezone',
        'dimension' => 'getDimension',
        'metrics' => 'getMetrics',
        'currency' => 'getCurrency',
        'ad_set_ids' => 'getAdSetIds',
        'audience_ids' => 'getAudienceIds',
        'segments_ids' => 'getSegmentsIds'
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

    public const DIMENSION_ADVERTISER_ID = 'AdvertiserId';
    public const DIMENSION_ADVERTISER = 'Advertiser';
    public const DIMENSION_TOP30_BRANDS_BY_DISPLAYS = 'Top30BrandsByDisplays';
    public const DIMENSION_TOP30_BRANDS_BY_CLICKS = 'Top30BrandsByClicks';
    public const DIMENSION_TOP30_BRANDS_BY_SALES = 'Top30BrandsBySales';
    public const DIMENSION_TOP30_INTERESTS_BY_DISPLAYS = 'Top30InterestsByDisplays';
    public const DIMENSION_TOP30_INTERESTS_BY_CLICKS = 'Top30InterestsByClicks';
    public const DIMENSION_TOP30_INTERESTS_BY_SALES = 'Top30InterestsBySales';
    public const METRICS_CLICKS = 'Clicks';
    public const METRICS_DISPLAYS = 'Displays';
    public const METRICS_VISITS = 'Visits';
    public const METRICS_SALES = 'Sales';
    public const METRICS_REVENUE = 'Revenue';
    public const METRICS_COST_PER_VISIT = 'CostPerVisit';
    public const METRICS_EXPOSED_USERS = 'ExposedUsers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionAllowableValues()
    {
        return [
            self::DIMENSION_ADVERTISER_ID,
            self::DIMENSION_ADVERTISER,
            self::DIMENSION_TOP30_BRANDS_BY_DISPLAYS,
            self::DIMENSION_TOP30_BRANDS_BY_CLICKS,
            self::DIMENSION_TOP30_BRANDS_BY_SALES,
            self::DIMENSION_TOP30_INTERESTS_BY_DISPLAYS,
            self::DIMENSION_TOP30_INTERESTS_BY_CLICKS,
            self::DIMENSION_TOP30_INTERESTS_BY_SALES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricsAllowableValues()
    {
        return [
            self::METRICS_CLICKS,
            self::METRICS_DISPLAYS,
            self::METRICS_VISITS,
            self::METRICS_SALES,
            self::METRICS_REVENUE,
            self::METRICS_COST_PER_VISIT,
            self::METRICS_EXPOSED_USERS,
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
        $this->setIfExists('advertiser_id', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('dimension', $data ?? [], null);
        $this->setIfExists('metrics', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('ad_set_ids', $data ?? [], null);
        $this->setIfExists('audience_ids', $data ?? [], null);
        $this->setIfExists('segments_ids', $data ?? [], null);
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

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['advertiser_id'] === null) {
            $invalidProperties[] = "'advertiser_id' can't be null";
        }
        if ($this->container['dimension'] === null) {
            $invalidProperties[] = "'dimension' can't be null";
        }
        $allowedValues = $this->getDimensionAllowableValues();
        if (!is_null($this->container['dimension']) && !in_array($this->container['dimension'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dimension', must be one of '%s'",
                $this->container['dimension'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['metrics'] === null) {
            $invalidProperties[] = "'metrics' can't be null";
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
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
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
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
     * Gets advertiser_id
     *
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string $advertiser_id The advertiser id
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        if (is_null($advertiser_id)) {
            throw new \InvalidArgumentException('non-nullable advertiser_id cannot be null');
        }
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The timezone used for the report. Timezone Database format (Tz).
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string $dimension The dimension for the report.
     *
     * @return self
     */
    public function setDimension($dimension)
    {
        if (is_null($dimension)) {
            throw new \InvalidArgumentException('non-nullable dimension cannot be null');
        }
        $allowedValues = $this->getDimensionAllowableValues();
        if (!in_array($dimension, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dimension', must be one of '%s'",
                    $dimension,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dimension'] = $dimension;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[] $metrics The list of metrics to report.
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        if (is_null($metrics)) {
            throw new \InvalidArgumentException('non-nullable metrics cannot be null');
        }
        $allowedValues = $this->getMetricsAllowableValues();
        if (array_diff($metrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency used for the report. ISO 4217 code (three-letter capitals).
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
     * Gets ad_set_ids
     *
     * @return string[]|null
     */
    public function getAdSetIds()
    {
        return $this->container['ad_set_ids'];
    }

    /**
     * Sets ad_set_ids
     *
     * @param string[]|null $ad_set_ids The list of adSets ids. If empty, all the adSets will be fetched.
     *
     * @return self
     */
    public function setAdSetIds($ad_set_ids)
    {
        if (is_null($ad_set_ids)) {
            throw new \InvalidArgumentException('non-nullable ad_set_ids cannot be null');
        }


        $this->container['ad_set_ids'] = $ad_set_ids;

        return $this;
    }

    /**
     * Gets audience_ids
     *
     * @return string[]|null
     */
    public function getAudienceIds()
    {
        return $this->container['audience_ids'];
    }

    /**
     * Sets audience_ids
     *
     * @param string[]|null $audience_ids The list of Audiences ids. If empty, all the Audiences will be fetched
     *
     * @return self
     */
    public function setAudienceIds($audience_ids)
    {
        if (is_null($audience_ids)) {
            throw new \InvalidArgumentException('non-nullable audience_ids cannot be null');
        }


        $this->container['audience_ids'] = $audience_ids;

        return $this;
    }

    /**
     * Gets segments_ids
     *
     * @return string[]|null
     */
    public function getSegmentsIds()
    {
        return $this->container['segments_ids'];
    }

    /**
     * Sets segments_ids
     *
     * @param string[]|null $segments_ids The list of Segments ids. If empty, all the segments will be fetched
     *
     * @return self
     */
    public function setSegmentsIds($segments_ids)
    {
        if (is_null($segments_ids)) {
            throw new \InvalidArgumentException('non-nullable segments_ids cannot be null');
        }


        $this->container['segments_ids'] = $segments_ids;

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


