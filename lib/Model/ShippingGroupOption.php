<?php
/**
 * ShippingGroupOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * OpenAPI spec version: 2.13.1
 * Contact: seller-api-support@kaufland-online.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaufland\Seller\Model;

use \ArrayAccess;
use \Kaufland\Seller\ObjectSerializer;

/**
 * ShippingGroupOption Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingGroupOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Kaufland\Seller\Model\SellerApiShippingGroupRegionOptionNameEnum',
        'cost_first' => 'int',
        'cost_next' => 'int',
        'cost_max' => 'int',
        'cost_free' => 'int',
        'cut_off_time' => 'string',
        'transport_time_min' => 'int',
        'transport_time_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'cost_first' => 'int32',
        'cost_next' => 'int32',
        'cost_max' => 'int32',
        'cost_free' => 'int32',
        'cut_off_time' => null,
        'transport_time_min' => 'int32',
        'transport_time_max' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'cost_first' => 'cost_first',
        'cost_next' => 'cost_next',
        'cost_max' => 'cost_max',
        'cost_free' => 'cost_free',
        'cut_off_time' => 'cut_off_time',
        'transport_time_min' => 'transport_time_min',
        'transport_time_max' => 'transport_time_max'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'cost_first' => 'setCostFirst',
        'cost_next' => 'setCostNext',
        'cost_max' => 'setCostMax',
        'cost_free' => 'setCostFree',
        'cut_off_time' => 'setCutOffTime',
        'transport_time_min' => 'setTransportTimeMin',
        'transport_time_max' => 'setTransportTimeMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'cost_first' => 'getCostFirst',
        'cost_next' => 'getCostNext',
        'cost_max' => 'getCostMax',
        'cost_free' => 'getCostFree',
        'cut_off_time' => 'getCutOffTime',
        'transport_time_min' => 'getTransportTimeMin',
        'transport_time_max' => 'getTransportTimeMax'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cost_first'] = isset($data['cost_first']) ? $data['cost_first'] : null;
        $this->container['cost_next'] = isset($data['cost_next']) ? $data['cost_next'] : null;
        $this->container['cost_max'] = isset($data['cost_max']) ? $data['cost_max'] : null;
        $this->container['cost_free'] = isset($data['cost_free']) ? $data['cost_free'] : null;
        $this->container['cut_off_time'] = isset($data['cut_off_time']) ? $data['cut_off_time'] : null;
        $this->container['transport_time_min'] = isset($data['transport_time_min']) ? $data['transport_time_min'] : null;
        $this->container['transport_time_max'] = isset($data['transport_time_max']) ? $data['transport_time_max'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['cost_first'] === null) {
            $invalidProperties[] = "'cost_first' can't be null";
        }
        if ($this->container['cost_next'] === null) {
            $invalidProperties[] = "'cost_next' can't be null";
        }
        if ($this->container['cost_max'] === null) {
            $invalidProperties[] = "'cost_max' can't be null";
        }
        if ($this->container['cost_free'] === null) {
            $invalidProperties[] = "'cost_free' can't be null";
        }
        if ($this->container['cut_off_time'] === null) {
            $invalidProperties[] = "'cut_off_time' can't be null";
        }
        if ($this->container['transport_time_min'] === null) {
            $invalidProperties[] = "'transport_time_min' can't be null";
        }
        if ($this->container['transport_time_max'] === null) {
            $invalidProperties[] = "'transport_time_max' can't be null";
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
     * Gets name
     *
     * @return \Kaufland\Seller\Model\SellerApiShippingGroupRegionOptionNameEnum
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Kaufland\Seller\Model\SellerApiShippingGroupRegionOptionNameEnum $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cost_first
     *
     * @return int
     */
    public function getCostFirst()
    {
        return $this->container['cost_first'];
    }

    /**
     * Sets cost_first
     *
     * @param int $cost_first Shipping cost for the first item of this shipping group.
     *
     * @return $this
     */
    public function setCostFirst($cost_first)
    {
        $this->container['cost_first'] = $cost_first;

        return $this;
    }

    /**
     * Gets cost_next
     *
     * @return int
     */
    public function getCostNext()
    {
        return $this->container['cost_next'];
    }

    /**
     * Sets cost_next
     *
     * @param int $cost_next Shipping cost of all further items of this shipping group.
     *
     * @return $this
     */
    public function setCostNext($cost_next)
    {
        $this->container['cost_next'] = $cost_next;

        return $this;
    }

    /**
     * Gets cost_max
     *
     * @return int
     */
    public function getCostMax()
    {
        return $this->container['cost_max'];
    }

    /**
     * Sets cost_max
     *
     * @param int $cost_max Maximum shipping cost
     *
     * @return $this
     */
    public function setCostMax($cost_max)
    {
        $this->container['cost_max'] = $cost_max;

        return $this;
    }

    /**
     * Gets cost_free
     *
     * @return int
     */
    public function getCostFree()
    {
        return $this->container['cost_free'];
    }

    /**
     * Sets cost_free
     *
     * @param int $cost_free Order value from which shipping will be free.
     *
     * @return $this
     */
    public function setCostFree($cost_free)
    {
        $this->container['cost_free'] = $cost_free;

        return $this;
    }

    /**
     * Gets cut_off_time
     *
     * @return string
     */
    public function getCutOffTime()
    {
        return $this->container['cut_off_time'];
    }

    /**
     * Sets cut_off_time
     *
     * @param string $cut_off_time cut_off_time
     *
     * @return $this
     */
    public function setCutOffTime($cut_off_time)
    {
        $this->container['cut_off_time'] = $cut_off_time;

        return $this;
    }

    /**
     * Gets transport_time_min
     *
     * @return int
     */
    public function getTransportTimeMin()
    {
        return $this->container['transport_time_min'];
    }

    /**
     * Sets transport_time_min
     *
     * @param int $transport_time_min Minimal time carrier needs from picking up the order until delivering it to the customer.
     *
     * @return $this
     */
    public function setTransportTimeMin($transport_time_min)
    {
        $this->container['transport_time_min'] = $transport_time_min;

        return $this;
    }

    /**
     * Gets transport_time_max
     *
     * @return int
     */
    public function getTransportTimeMax()
    {
        return $this->container['transport_time_max'];
    }

    /**
     * Sets transport_time_max
     *
     * @param int $transport_time_max Maximal time carrier needs from picking up the order until delivering it to the customer.
     *
     * @return $this
     */
    public function setTransportTimeMax($transport_time_max)
    {
        $this->container['transport_time_max'] = $transport_time_max;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
