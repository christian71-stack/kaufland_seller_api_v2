<?php
/**
 * UnitPatchRequest
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
 * UnitPatchRequest Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitPatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\Kaufland\Seller\Model\WriteableUnitStatuses',
        'amount' => 'int',
        'handling_time' => 'int',
        'listing_price' => 'int',
        'minimum_price' => 'int',
        'note' => 'string',
        'id_shipping_group' => 'int',
        'id_warehouse' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'amount' => 'int32',
        'handling_time' => 'int32',
        'listing_price' => 'int32',
        'minimum_price' => 'int32',
        'note' => null,
        'id_shipping_group' => 'int64',
        'id_warehouse' => 'int64'
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
        'status' => 'status',
        'amount' => 'amount',
        'handling_time' => 'handling_time',
        'listing_price' => 'listing_price',
        'minimum_price' => 'minimum_price',
        'note' => 'note',
        'id_shipping_group' => 'id_shipping_group',
        'id_warehouse' => 'id_warehouse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'handling_time' => 'setHandlingTime',
        'listing_price' => 'setListingPrice',
        'minimum_price' => 'setMinimumPrice',
        'note' => 'setNote',
        'id_shipping_group' => 'setIdShippingGroup',
        'id_warehouse' => 'setIdWarehouse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'handling_time' => 'getHandlingTime',
        'listing_price' => 'getListingPrice',
        'minimum_price' => 'getMinimumPrice',
        'note' => 'getNote',
        'id_shipping_group' => 'getIdShippingGroup',
        'id_warehouse' => 'getIdWarehouse'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['handling_time'] = isset($data['handling_time']) ? $data['handling_time'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['minimum_price'] = isset($data['minimum_price']) ? $data['minimum_price'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['id_shipping_group'] = isset($data['id_shipping_group']) ? $data['id_shipping_group'] : null;
        $this->container['id_warehouse'] = isset($data['id_warehouse']) ? $data['id_warehouse'] : null;
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
     * Gets status
     *
     * @return \Kaufland\Seller\Model\WriteableUnitStatuses
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Kaufland\Seller\Model\WriteableUnitStatuses $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount of available Units
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets handling_time
     *
     * @return int
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time
     *
     * @param int $handling_time handling time
     *
     * @return $this
     */
    public function setHandlingTime($handling_time)
    {
        $this->container['handling_time'] = $handling_time;

        return $this;
    }

    /**
     * Gets listing_price
     *
     * @return int
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param int $listing_price Listing price, in integral cents of the storefront's currency (CZK for cz, EUR for de, sk). Minimum 1 cent, maximum differs by storefront (1 million EUR or 25 million CZK).
     *
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets minimum_price
     *
     * @return int
     */
    public function getMinimumPrice()
    {
        return $this->container['minimum_price'];
    }

    /**
     * Sets minimum_price
     *
     * @param int $minimum_price Minimum price, in integral cents of the storefront's currency. Only relevant for sellers subscribed to Tiefstpreisautomatik
     *
     * @return $this
     */
    public function setMinimumPrice($minimum_price)
    {
        $this->container['minimum_price'] = $minimum_price;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note A note for this unit
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets id_shipping_group
     *
     * @return int
     */
    public function getIdShippingGroup()
    {
        return $this->container['id_shipping_group'];
    }

    /**
     * Sets id_shipping_group
     *
     * @param int $id_shipping_group ID of the shipping group
     *
     * @return $this
     */
    public function setIdShippingGroup($id_shipping_group)
    {
        $this->container['id_shipping_group'] = $id_shipping_group;

        return $this;
    }

    /**
     * Gets id_warehouse
     *
     * @return int
     */
    public function getIdWarehouse()
    {
        return $this->container['id_warehouse'];
    }

    /**
     * Sets id_warehouse
     *
     * @param int $id_warehouse ID of warehouse
     *
     * @return $this
     */
    public function setIdWarehouse($id_warehouse)
    {
        $this->container['id_warehouse'] = $id_warehouse;

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
