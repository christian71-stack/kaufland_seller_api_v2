<?php
/**
 * UnitEmbedded
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
 * UnitEmbedded Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitEmbedded implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitEmbedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\Kaufland\Seller\Model\UnitStatuses',
        'currency' => '\Kaufland\Seller\Model\Currency',
        'condition' => '\Kaufland\Seller\Model\UnitCondition',
        'id_unit' => 'int',
        'note' => 'string',
        'listing_price' => 'int',
        'minimum_price' => 'int',
        'price' => 'int',
        'id_offer' => 'string',
        'id_product' => 'int',
        'id_shipping_group' => 'int',
        'id_warehouse' => 'int',
        'amount' => 'int',
        'date_inserted_iso' => '\DateTime',
        'date_lastchange_iso' => '\DateTime',
        'handling_time' => 'int',
        'shipping_rate' => 'int',
        'storefront' => '\Kaufland\Seller\Model\Storefront',
        'transport_time_min' => 'int',
        'transport_time_max' => 'int',
        'product' => '\Kaufland\Seller\Model\Product',
        'fulfillment_type' => '\Kaufland\Seller\Model\FulfillmentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'currency' => null,
        'condition' => null,
        'id_unit' => 'int64',
        'note' => null,
        'listing_price' => 'int32',
        'minimum_price' => 'int32',
        'price' => 'int32',
        'id_offer' => null,
        'id_product' => 'int64',
        'id_shipping_group' => 'int64',
        'id_warehouse' => 'int64',
        'amount' => 'int32',
        'date_inserted_iso' => 'date-time',
        'date_lastchange_iso' => 'date-time',
        'handling_time' => 'int32',
        'shipping_rate' => 'int32',
        'storefront' => null,
        'transport_time_min' => 'int32',
        'transport_time_max' => 'int32',
        'product' => null,
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
        'status' => 'status',
        'currency' => 'currency',
        'condition' => 'condition',
        'id_unit' => 'id_unit',
        'note' => 'note',
        'listing_price' => 'listing_price',
        'minimum_price' => 'minimum_price',
        'price' => 'price',
        'id_offer' => 'id_offer',
        'id_product' => 'id_product',
        'id_shipping_group' => 'id_shipping_group',
        'id_warehouse' => 'id_warehouse',
        'amount' => 'amount',
        'date_inserted_iso' => 'date_inserted_iso',
        'date_lastchange_iso' => 'date_lastchange_iso',
        'handling_time' => 'handling_time',
        'shipping_rate' => 'shipping_rate',
        'storefront' => 'storefront',
        'transport_time_min' => 'transport_time_min',
        'transport_time_max' => 'transport_time_max',
        'product' => 'product',
        'fulfillment_type' => 'fulfillment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'currency' => 'setCurrency',
        'condition' => 'setCondition',
        'id_unit' => 'setIdUnit',
        'note' => 'setNote',
        'listing_price' => 'setListingPrice',
        'minimum_price' => 'setMinimumPrice',
        'price' => 'setPrice',
        'id_offer' => 'setIdOffer',
        'id_product' => 'setIdProduct',
        'id_shipping_group' => 'setIdShippingGroup',
        'id_warehouse' => 'setIdWarehouse',
        'amount' => 'setAmount',
        'date_inserted_iso' => 'setDateInsertedIso',
        'date_lastchange_iso' => 'setDateLastchangeIso',
        'handling_time' => 'setHandlingTime',
        'shipping_rate' => 'setShippingRate',
        'storefront' => 'setStorefront',
        'transport_time_min' => 'setTransportTimeMin',
        'transport_time_max' => 'setTransportTimeMax',
        'product' => 'setProduct',
        'fulfillment_type' => 'setFulfillmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'currency' => 'getCurrency',
        'condition' => 'getCondition',
        'id_unit' => 'getIdUnit',
        'note' => 'getNote',
        'listing_price' => 'getListingPrice',
        'minimum_price' => 'getMinimumPrice',
        'price' => 'getPrice',
        'id_offer' => 'getIdOffer',
        'id_product' => 'getIdProduct',
        'id_shipping_group' => 'getIdShippingGroup',
        'id_warehouse' => 'getIdWarehouse',
        'amount' => 'getAmount',
        'date_inserted_iso' => 'getDateInsertedIso',
        'date_lastchange_iso' => 'getDateLastchangeIso',
        'handling_time' => 'getHandlingTime',
        'shipping_rate' => 'getShippingRate',
        'storefront' => 'getStorefront',
        'transport_time_min' => 'getTransportTimeMin',
        'transport_time_max' => 'getTransportTimeMax',
        'product' => 'getProduct',
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['id_unit'] = isset($data['id_unit']) ? $data['id_unit'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['minimum_price'] = isset($data['minimum_price']) ? $data['minimum_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['id_offer'] = isset($data['id_offer']) ? $data['id_offer'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['id_shipping_group'] = isset($data['id_shipping_group']) ? $data['id_shipping_group'] : null;
        $this->container['id_warehouse'] = isset($data['id_warehouse']) ? $data['id_warehouse'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['date_inserted_iso'] = isset($data['date_inserted_iso']) ? $data['date_inserted_iso'] : null;
        $this->container['date_lastchange_iso'] = isset($data['date_lastchange_iso']) ? $data['date_lastchange_iso'] : null;
        $this->container['handling_time'] = isset($data['handling_time']) ? $data['handling_time'] : null;
        $this->container['shipping_rate'] = isset($data['shipping_rate']) ? $data['shipping_rate'] : null;
        $this->container['storefront'] = isset($data['storefront']) ? $data['storefront'] : null;
        $this->container['transport_time_min'] = isset($data['transport_time_min']) ? $data['transport_time_min'] : null;
        $this->container['transport_time_max'] = isset($data['transport_time_max']) ? $data['transport_time_max'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['id_unit'] === null) {
            $invalidProperties[] = "'id_unit' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if ($this->container['minimum_price'] === null) {
            $invalidProperties[] = "'minimum_price' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['id_offer'] === null) {
            $invalidProperties[] = "'id_offer' can't be null";
        }
        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if ($this->container['id_shipping_group'] === null) {
            $invalidProperties[] = "'id_shipping_group' can't be null";
        }
        if ($this->container['id_warehouse'] === null) {
            $invalidProperties[] = "'id_warehouse' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['date_inserted_iso'] === null) {
            $invalidProperties[] = "'date_inserted_iso' can't be null";
        }
        if ($this->container['date_lastchange_iso'] === null) {
            $invalidProperties[] = "'date_lastchange_iso' can't be null";
        }
        if ($this->container['handling_time'] === null) {
            $invalidProperties[] = "'handling_time' can't be null";
        }
        if ($this->container['shipping_rate'] === null) {
            $invalidProperties[] = "'shipping_rate' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['transport_time_min'] === null) {
            $invalidProperties[] = "'transport_time_min' can't be null";
        }
        if ($this->container['transport_time_max'] === null) {
            $invalidProperties[] = "'transport_time_max' can't be null";
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
     * Gets status
     *
     * @return \Kaufland\Seller\Model\UnitStatuses
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Kaufland\Seller\Model\UnitStatuses $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Kaufland\Seller\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Kaufland\Seller\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param int $id_unit Internal ID of Unit, unique across all Units
     *
     * @return $this
     */
    public function setIdUnit($id_unit)
    {
        $this->container['id_unit'] = $id_unit;

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
     * @param int $listing_price Listing price, available only for Seller
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
     * @param int $minimum_price Minimum price, available only for Seller with Tiefstpreisautomatik
     *
     * @return $this
     */
    public function setMinimumPrice($minimum_price)
    {
        $this->container['minimum_price'] = $minimum_price;

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
     * Gets id_offer
     *
     * @return string
     */
    public function getIdOffer()
    {
        return $this->container['id_offer'];
    }

    /**
     * Sets id_offer
     *
     * @param string $id_offer Seller's unique ID for offer(s)
     *
     * @return $this
     */
    public function setIdOffer($id_offer)
    {
        $this->container['id_offer'] = $id_offer;

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
     * @param int $id_product Internal ID of Product, unique across all Products
     *
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

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
     * Gets date_inserted_iso
     *
     * @return \DateTime
     */
    public function getDateInsertedIso()
    {
        return $this->container['date_inserted_iso'];
    }

    /**
     * Sets date_inserted_iso
     *
     * @param \DateTime $date_inserted_iso DateTime when unit was created
     *
     * @return $this
     */
    public function setDateInsertedIso($date_inserted_iso)
    {
        $this->container['date_inserted_iso'] = $date_inserted_iso;

        return $this;
    }

    /**
     * Gets date_lastchange_iso
     *
     * @return \DateTime
     */
    public function getDateLastchangeIso()
    {
        return $this->container['date_lastchange_iso'];
    }

    /**
     * Sets date_lastchange_iso
     *
     * @param \DateTime $date_lastchange_iso DateTime when unit has been edited for the last time
     *
     * @return $this
     */
    public function setDateLastchangeIso($date_lastchange_iso)
    {
        $this->container['date_lastchange_iso'] = $date_lastchange_iso;

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
     * Gets storefront
     *
     * @return \Kaufland\Seller\Model\Storefront
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param \Kaufland\Seller\Model\Storefront $storefront storefront
     *
     * @return $this
     */
    public function setStorefront($storefront)
    {
        $this->container['storefront'] = $storefront;

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
     * @param int $transport_time_min Transport time minimum
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
     * @param int $transport_time_max Transport time maximum
     *
     * @return $this
     */
    public function setTransportTimeMax($transport_time_max)
    {
        $this->container['transport_time_max'] = $transport_time_max;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Kaufland\Seller\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Kaufland\Seller\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
