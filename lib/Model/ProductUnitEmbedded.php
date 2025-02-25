<?php
/**
 * ProductUnitEmbedded
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
 * ProductUnitEmbedded Class Doc Comment
 *
 * @category Class
 * @description Used only for swagger documentation. Actual response comes from the shop api response
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductUnitEmbedded implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductUnitEmbedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_unit' => 'int',
        'id_product' => 'int',
        'condition' => '\Kaufland\Seller\Model\UnitCondition',
        'location' => 'string',
        'warehouse' => 'string',
        'amount' => 'int',
        'price' => 'int',
        'delivery_time_min' => 'int',
        'delivery_time_max' => 'int',
        'shipping_group' => 'string',
        'note' => 'string',
        'seller' => 'AllOfProductUnitEmbeddedSeller',
        'reference_price' => 'int',
        'shipping_rate' => 'int',
        'date_inserted' => '\DateTime',
        'date_lastchange' => '\DateTime',
        'fulfillment_type' => '\Kaufland\Seller\Model\FulfillmentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_unit' => 'int64',
        'id_product' => 'int64',
        'condition' => null,
        'location' => null,
        'warehouse' => null,
        'amount' => 'int32',
        'price' => 'int32',
        'delivery_time_min' => 'int32',
        'delivery_time_max' => 'int32',
        'shipping_group' => null,
        'note' => null,
        'seller' => null,
        'reference_price' => 'int32',
        'shipping_rate' => 'int32',
        'date_inserted' => 'date-time',
        'date_lastchange' => 'date-time',
        'fulfillment_type' => null
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
        'id_unit' => 'id_unit',
        'id_product' => 'id_product',
        'condition' => 'condition',
        'location' => 'location',
        'warehouse' => 'warehouse',
        'amount' => 'amount',
        'price' => 'price',
        'delivery_time_min' => 'delivery_time_min',
        'delivery_time_max' => 'delivery_time_max',
        'shipping_group' => 'shipping_group',
        'note' => 'note',
        'seller' => 'seller',
        'reference_price' => 'reference_price',
        'shipping_rate' => 'shipping_rate',
        'date_inserted' => 'date_inserted',
        'date_lastchange' => 'date_lastchange',
        'fulfillment_type' => 'fulfillment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_unit' => 'setIdUnit',
        'id_product' => 'setIdProduct',
        'condition' => 'setCondition',
        'location' => 'setLocation',
        'warehouse' => 'setWarehouse',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'delivery_time_min' => 'setDeliveryTimeMin',
        'delivery_time_max' => 'setDeliveryTimeMax',
        'shipping_group' => 'setShippingGroup',
        'note' => 'setNote',
        'seller' => 'setSeller',
        'reference_price' => 'setReferencePrice',
        'shipping_rate' => 'setShippingRate',
        'date_inserted' => 'setDateInserted',
        'date_lastchange' => 'setDateLastchange',
        'fulfillment_type' => 'setFulfillmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_unit' => 'getIdUnit',
        'id_product' => 'getIdProduct',
        'condition' => 'getCondition',
        'location' => 'getLocation',
        'warehouse' => 'getWarehouse',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'delivery_time_min' => 'getDeliveryTimeMin',
        'delivery_time_max' => 'getDeliveryTimeMax',
        'shipping_group' => 'getShippingGroup',
        'note' => 'getNote',
        'seller' => 'getSeller',
        'reference_price' => 'getReferencePrice',
        'shipping_rate' => 'getShippingRate',
        'date_inserted' => 'getDateInserted',
        'date_lastchange' => 'getDateLastchange',
        'fulfillment_type' => 'getFulfillmentType'
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
        $this->container['id_unit'] = isset($data['id_unit']) ? $data['id_unit'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['delivery_time_min'] = isset($data['delivery_time_min']) ? $data['delivery_time_min'] : null;
        $this->container['delivery_time_max'] = isset($data['delivery_time_max']) ? $data['delivery_time_max'] : null;
        $this->container['shipping_group'] = isset($data['shipping_group']) ? $data['shipping_group'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['reference_price'] = isset($data['reference_price']) ? $data['reference_price'] : null;
        $this->container['shipping_rate'] = isset($data['shipping_rate']) ? $data['shipping_rate'] : null;
        $this->container['date_inserted'] = isset($data['date_inserted']) ? $data['date_inserted'] : null;
        $this->container['date_lastchange'] = isset($data['date_lastchange']) ? $data['date_lastchange'] : null;
        $this->container['fulfillment_type'] = isset($data['fulfillment_type']) ? $data['fulfillment_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_unit'] === null) {
            $invalidProperties[] = "'id_unit' can't be null";
        }
        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['warehouse'] === null) {
            $invalidProperties[] = "'warehouse' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['delivery_time_min'] === null) {
            $invalidProperties[] = "'delivery_time_min' can't be null";
        }
        if ($this->container['delivery_time_max'] === null) {
            $invalidProperties[] = "'delivery_time_max' can't be null";
        }
        if ($this->container['shipping_group'] === null) {
            $invalidProperties[] = "'shipping_group' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['seller'] === null) {
            $invalidProperties[] = "'seller' can't be null";
        }
        if ($this->container['reference_price'] === null) {
            $invalidProperties[] = "'reference_price' can't be null";
        }
        if ($this->container['shipping_rate'] === null) {
            $invalidProperties[] = "'shipping_rate' can't be null";
        }
        if ($this->container['date_inserted'] === null) {
            $invalidProperties[] = "'date_inserted' can't be null";
        }
        if ($this->container['date_lastchange'] === null) {
            $invalidProperties[] = "'date_lastchange' can't be null";
        }
        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
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
     * Gets id_unit
     *
     * @return int
     */
    public function getIdUnit()
    {
        return $this->container['id_unit'];
    }

    /**
     * Sets id_unit
     *
     * @param int $id_unit id_unit
     *
     * @return $this
     */
    public function setIdUnit($id_unit)
    {
        $this->container['id_unit'] = $id_unit;

        return $this;
    }

    /**
     * Gets id_product
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     *
     * @param int $id_product id_product
     *
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Kaufland\Seller\Model\UnitCondition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Kaufland\Seller\Model\UnitCondition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Warehouse location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse Warehouse name
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

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
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price Price at which this unit will be offered on Kaufland.de
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets delivery_time_min
     *
     * @return int
     */
    public function getDeliveryTimeMin()
    {
        return $this->container['delivery_time_min'];
    }

    /**
     * Sets delivery_time_min
     *
     * @param int $delivery_time_min delivery_time_min
     *
     * @return $this
     */
    public function setDeliveryTimeMin($delivery_time_min)
    {
        $this->container['delivery_time_min'] = $delivery_time_min;

        return $this;
    }

    /**
     * Gets delivery_time_max
     *
     * @return int
     */
    public function getDeliveryTimeMax()
    {
        return $this->container['delivery_time_max'];
    }

    /**
     * Sets delivery_time_max
     *
     * @param int $delivery_time_max delivery_time_max
     *
     * @return $this
     */
    public function setDeliveryTimeMax($delivery_time_max)
    {
        $this->container['delivery_time_max'] = $delivery_time_max;

        return $this;
    }

    /**
     * Gets shipping_group
     *
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->container['shipping_group'];
    }

    /**
     * Sets shipping_group
     *
     * @param string $shipping_group Shipping group name
     *
     * @return $this
     */
    public function setShippingGroup($shipping_group)
    {
        $this->container['shipping_group'] = $shipping_group;

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
     * Gets seller
     *
     * @return AllOfProductUnitEmbeddedSeller
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param AllOfProductUnitEmbeddedSeller $seller Seller pseudonym for the unit
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets reference_price
     *
     * @return int
     */
    public function getReferencePrice()
    {
        return $this->container['reference_price'];
    }

    /**
     * Sets reference_price
     *
     * @param int $reference_price reference_price
     *
     * @return $this
     */
    public function setReferencePrice($reference_price)
    {
        $this->container['reference_price'] = $reference_price;

        return $this;
    }

    /**
     * Gets shipping_rate
     *
     * @return int
     */
    public function getShippingRate()
    {
        return $this->container['shipping_rate'];
    }

    /**
     * Sets shipping_rate
     *
     * @param int $shipping_rate shipping_rate
     *
     * @return $this
     */
    public function setShippingRate($shipping_rate)
    {
        $this->container['shipping_rate'] = $shipping_rate;

        return $this;
    }

    /**
     * Gets date_inserted
     *
     * @return \DateTime
     */
    public function getDateInserted()
    {
        return $this->container['date_inserted'];
    }

    /**
     * Sets date_inserted
     *
     * @param \DateTime $date_inserted date_inserted
     *
     * @return $this
     */
    public function setDateInserted($date_inserted)
    {
        $this->container['date_inserted'] = $date_inserted;

        return $this;
    }

    /**
     * Gets date_lastchange
     *
     * @return \DateTime
     */
    public function getDateLastchange()
    {
        return $this->container['date_lastchange'];
    }

    /**
     * Sets date_lastchange
     *
     * @param \DateTime $date_lastchange date_lastchange
     *
     * @return $this
     */
    public function setDateLastchange($date_lastchange)
    {
        $this->container['date_lastchange'] = $date_lastchange;

        return $this;
    }

    /**
     * Gets fulfillment_type
     *
     * @return \Kaufland\Seller\Model\FulfillmentType
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillment_type'];
    }

    /**
     * Sets fulfillment_type
     *
     * @param \Kaufland\Seller\Model\FulfillmentType $fulfillment_type fulfillment_type
     *
     * @return $this
     */
    public function setFulfillmentType($fulfillment_type)
    {
        $this->container['fulfillment_type'] = $fulfillment_type;

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
