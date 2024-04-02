<?php
/**
 * OrderUnitDetails
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
 * OrderUnitDetails Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderUnitDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderUnitDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_order_unit' => '\Kaufland\Seller\Model\LongInteger',
        'id_order' => 'string',
        'ts_created_iso' => '\DateTime',
        'is_marketplace_deemed_supplier' => 'bool',
        'ts_updated_iso' => '\DateTime',
        'status' => '\Kaufland\Seller\Model\OrderUnitStatus',
        'price' => '\Kaufland\Seller\Model\Integer',
        'id_offer' => 'string',
        'revenue_gross' => '\Kaufland\Seller\Model\Integer',
        'revenue_net' => '\Kaufland\Seller\Model\Integer',
        'note' => 'string',
        'unit_condition' => 'string',
        'storefront' => '\Kaufland\Seller\Model\Storefront',
        'currency' => '\Kaufland\Seller\Model\Currency',
        'delivery_time_min' => 'AllOfOrderUnitDetailsDeliveryTimeMin',
        'delivery_time_max' => 'AllOfOrderUnitDetailsDeliveryTimeMax',
        'delivery_time_expires_iso' => '\DateTime',
        'order_received_timestamp_iso' => '\DateTime',
        'shipping_rate' => '\Kaufland\Seller\Model\Integer',
        'cancel_reason' => 'string',
        'fulfillment_type' => '\Kaufland\Seller\Model\FulfillmentType',
        'buyer' => 'AllOfOrderUnitDetailsBuyer',
        'billing_address' => 'AllOfOrderUnitDetailsBillingAddress',
        'shipping_address' => 'AllOfOrderUnitDetailsShippingAddress',
        'product' => 'AllOfOrderUnitDetailsProduct',
        'delivery_attempt_timestamp_iso' => '\DateTime',
        'tickets' => '\Kaufland\Seller\Model\Ticket[]',
        'return_unit' => 'AllOfOrderUnitDetailsReturnUnit',
        'delivery' => '\Kaufland\Seller\Model\Delivery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_order_unit' => null,
        'id_order' => null,
        'ts_created_iso' => 'date-time',
        'is_marketplace_deemed_supplier' => null,
        'ts_updated_iso' => 'date-time',
        'status' => null,
        'price' => null,
        'id_offer' => null,
        'revenue_gross' => null,
        'revenue_net' => null,
        'note' => null,
        'unit_condition' => null,
        'storefront' => null,
        'currency' => null,
        'delivery_time_min' => null,
        'delivery_time_max' => null,
        'delivery_time_expires_iso' => 'date-time',
        'order_received_timestamp_iso' => 'date-time',
        'shipping_rate' => null,
        'cancel_reason' => null,
        'fulfillment_type' => null,
        'buyer' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'product' => null,
        'delivery_attempt_timestamp_iso' => 'date-time',
        'tickets' => null,
        'return_unit' => null,
        'delivery' => null
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
        'id_order_unit' => 'id_order_unit',
        'id_order' => 'id_order',
        'ts_created_iso' => 'ts_created_iso',
        'is_marketplace_deemed_supplier' => 'is_marketplace_deemed_supplier',
        'ts_updated_iso' => 'ts_updated_iso',
        'status' => 'status',
        'price' => 'price',
        'id_offer' => 'id_offer',
        'revenue_gross' => 'revenue_gross',
        'revenue_net' => 'revenue_net',
        'note' => 'note',
        'unit_condition' => 'unit_condition',
        'storefront' => 'storefront',
        'currency' => 'currency',
        'delivery_time_min' => 'delivery_time_min',
        'delivery_time_max' => 'delivery_time_max',
        'delivery_time_expires_iso' => 'delivery_time_expires_iso',
        'order_received_timestamp_iso' => 'order_received_timestamp_iso',
        'shipping_rate' => 'shipping_rate',
        'cancel_reason' => 'cancel_reason',
        'fulfillment_type' => 'fulfillment_type',
        'buyer' => 'buyer',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'product' => 'product',
        'delivery_attempt_timestamp_iso' => 'delivery_attempt_timestamp_iso',
        'tickets' => 'tickets',
        'return_unit' => 'return_unit',
        'delivery' => 'delivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_order_unit' => 'setIdOrderUnit',
        'id_order' => 'setIdOrder',
        'ts_created_iso' => 'setTsCreatedIso',
        'is_marketplace_deemed_supplier' => 'setIsMarketplaceDeemedSupplier',
        'ts_updated_iso' => 'setTsUpdatedIso',
        'status' => 'setStatus',
        'price' => 'setPrice',
        'id_offer' => 'setIdOffer',
        'revenue_gross' => 'setRevenueGross',
        'revenue_net' => 'setRevenueNet',
        'note' => 'setNote',
        'unit_condition' => 'setUnitCondition',
        'storefront' => 'setStorefront',
        'currency' => 'setCurrency',
        'delivery_time_min' => 'setDeliveryTimeMin',
        'delivery_time_max' => 'setDeliveryTimeMax',
        'delivery_time_expires_iso' => 'setDeliveryTimeExpiresIso',
        'order_received_timestamp_iso' => 'setOrderReceivedTimestampIso',
        'shipping_rate' => 'setShippingRate',
        'cancel_reason' => 'setCancelReason',
        'fulfillment_type' => 'setFulfillmentType',
        'buyer' => 'setBuyer',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'product' => 'setProduct',
        'delivery_attempt_timestamp_iso' => 'setDeliveryAttemptTimestampIso',
        'tickets' => 'setTickets',
        'return_unit' => 'setReturnUnit',
        'delivery' => 'setDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_order_unit' => 'getIdOrderUnit',
        'id_order' => 'getIdOrder',
        'ts_created_iso' => 'getTsCreatedIso',
        'is_marketplace_deemed_supplier' => 'getIsMarketplaceDeemedSupplier',
        'ts_updated_iso' => 'getTsUpdatedIso',
        'status' => 'getStatus',
        'price' => 'getPrice',
        'id_offer' => 'getIdOffer',
        'revenue_gross' => 'getRevenueGross',
        'revenue_net' => 'getRevenueNet',
        'note' => 'getNote',
        'unit_condition' => 'getUnitCondition',
        'storefront' => 'getStorefront',
        'currency' => 'getCurrency',
        'delivery_time_min' => 'getDeliveryTimeMin',
        'delivery_time_max' => 'getDeliveryTimeMax',
        'delivery_time_expires_iso' => 'getDeliveryTimeExpiresIso',
        'order_received_timestamp_iso' => 'getOrderReceivedTimestampIso',
        'shipping_rate' => 'getShippingRate',
        'cancel_reason' => 'getCancelReason',
        'fulfillment_type' => 'getFulfillmentType',
        'buyer' => 'getBuyer',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'product' => 'getProduct',
        'delivery_attempt_timestamp_iso' => 'getDeliveryAttemptTimestampIso',
        'tickets' => 'getTickets',
        'return_unit' => 'getReturnUnit',
        'delivery' => 'getDelivery'
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
        $this->container['id_order_unit'] = isset($data['id_order_unit']) ? $data['id_order_unit'] : null;
        $this->container['id_order'] = isset($data['id_order']) ? $data['id_order'] : null;
        $this->container['ts_created_iso'] = isset($data['ts_created_iso']) ? $data['ts_created_iso'] : null;
        $this->container['is_marketplace_deemed_supplier'] = isset($data['is_marketplace_deemed_supplier']) ? $data['is_marketplace_deemed_supplier'] : null;
        $this->container['ts_updated_iso'] = isset($data['ts_updated_iso']) ? $data['ts_updated_iso'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['id_offer'] = isset($data['id_offer']) ? $data['id_offer'] : null;
        $this->container['revenue_gross'] = isset($data['revenue_gross']) ? $data['revenue_gross'] : null;
        $this->container['revenue_net'] = isset($data['revenue_net']) ? $data['revenue_net'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['unit_condition'] = isset($data['unit_condition']) ? $data['unit_condition'] : null;
        $this->container['storefront'] = isset($data['storefront']) ? $data['storefront'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['delivery_time_min'] = isset($data['delivery_time_min']) ? $data['delivery_time_min'] : null;
        $this->container['delivery_time_max'] = isset($data['delivery_time_max']) ? $data['delivery_time_max'] : null;
        $this->container['delivery_time_expires_iso'] = isset($data['delivery_time_expires_iso']) ? $data['delivery_time_expires_iso'] : null;
        $this->container['order_received_timestamp_iso'] = isset($data['order_received_timestamp_iso']) ? $data['order_received_timestamp_iso'] : null;
        $this->container['shipping_rate'] = isset($data['shipping_rate']) ? $data['shipping_rate'] : null;
        $this->container['cancel_reason'] = isset($data['cancel_reason']) ? $data['cancel_reason'] : null;
        $this->container['fulfillment_type'] = isset($data['fulfillment_type']) ? $data['fulfillment_type'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['delivery_attempt_timestamp_iso'] = isset($data['delivery_attempt_timestamp_iso']) ? $data['delivery_attempt_timestamp_iso'] : null;
        $this->container['tickets'] = isset($data['tickets']) ? $data['tickets'] : null;
        $this->container['return_unit'] = isset($data['return_unit']) ? $data['return_unit'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_order_unit'] === null) {
            $invalidProperties[] = "'id_order_unit' can't be null";
        }
        if ($this->container['id_order'] === null) {
            $invalidProperties[] = "'id_order' can't be null";
        }
        if ($this->container['ts_created_iso'] === null) {
            $invalidProperties[] = "'ts_created_iso' can't be null";
        }
        if ($this->container['is_marketplace_deemed_supplier'] === null) {
            $invalidProperties[] = "'is_marketplace_deemed_supplier' can't be null";
        }
        if ($this->container['ts_updated_iso'] === null) {
            $invalidProperties[] = "'ts_updated_iso' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['id_offer'] === null) {
            $invalidProperties[] = "'id_offer' can't be null";
        }
        if ($this->container['revenue_gross'] === null) {
            $invalidProperties[] = "'revenue_gross' can't be null";
        }
        if ($this->container['revenue_net'] === null) {
            $invalidProperties[] = "'revenue_net' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['unit_condition'] === null) {
            $invalidProperties[] = "'unit_condition' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['delivery_time_min'] === null) {
            $invalidProperties[] = "'delivery_time_min' can't be null";
        }
        if ($this->container['delivery_time_max'] === null) {
            $invalidProperties[] = "'delivery_time_max' can't be null";
        }
        if ($this->container['delivery_time_expires_iso'] === null) {
            $invalidProperties[] = "'delivery_time_expires_iso' can't be null";
        }
        if ($this->container['order_received_timestamp_iso'] === null) {
            $invalidProperties[] = "'order_received_timestamp_iso' can't be null";
        }
        if ($this->container['shipping_rate'] === null) {
            $invalidProperties[] = "'shipping_rate' can't be null";
        }
        if ($this->container['cancel_reason'] === null) {
            $invalidProperties[] = "'cancel_reason' can't be null";
        }
        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['billing_address'] === null) {
            $invalidProperties[] = "'billing_address' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
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
     * Gets id_order_unit
     *
     * @return \Kaufland\Seller\Model\LongInteger
     */
    public function getIdOrderUnit()
    {
        return $this->container['id_order_unit'];
    }

    /**
     * Sets id_order_unit
     *
     * @param \Kaufland\Seller\Model\LongInteger $id_order_unit id_order_unit
     *
     * @return $this
     */
    public function setIdOrderUnit($id_order_unit)
    {
        $this->container['id_order_unit'] = $id_order_unit;

        return $this;
    }

    /**
     * Gets id_order
     *
     * @return string
     */
    public function getIdOrder()
    {
        return $this->container['id_order'];
    }

    /**
     * Sets id_order
     *
     * @param string $id_order id_order
     *
     * @return $this
     */
    public function setIdOrder($id_order)
    {
        $this->container['id_order'] = $id_order;

        return $this;
    }

    /**
     * Gets ts_created_iso
     *
     * @return \DateTime
     */
    public function getTsCreatedIso()
    {
        return $this->container['ts_created_iso'];
    }

    /**
     * Sets ts_created_iso
     *
     * @param \DateTime $ts_created_iso ts_created_iso
     *
     * @return $this
     */
    public function setTsCreatedIso($ts_created_iso)
    {
        $this->container['ts_created_iso'] = $ts_created_iso;

        return $this;
    }

    /**
     * Gets is_marketplace_deemed_supplier
     *
     * @return bool
     */
    public function getIsMarketplaceDeemedSupplier()
    {
        return $this->container['is_marketplace_deemed_supplier'];
    }

    /**
     * Sets is_marketplace_deemed_supplier
     *
     * @param bool $is_marketplace_deemed_supplier is_marketplace_deemed_supplier
     *
     * @return $this
     */
    public function setIsMarketplaceDeemedSupplier($is_marketplace_deemed_supplier)
    {
        $this->container['is_marketplace_deemed_supplier'] = $is_marketplace_deemed_supplier;

        return $this;
    }

    /**
     * Gets ts_updated_iso
     *
     * @return \DateTime
     */
    public function getTsUpdatedIso()
    {
        return $this->container['ts_updated_iso'];
    }

    /**
     * Sets ts_updated_iso
     *
     * @param \DateTime $ts_updated_iso ts_updated_iso
     *
     * @return $this
     */
    public function setTsUpdatedIso($ts_updated_iso)
    {
        $this->container['ts_updated_iso'] = $ts_updated_iso;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Kaufland\Seller\Model\OrderUnitStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Kaufland\Seller\Model\OrderUnitStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Kaufland\Seller\Model\Integer
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Kaufland\Seller\Model\Integer $price price
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
     * @param string $id_offer id_offer
     *
     * @return $this
     */
    public function setIdOffer($id_offer)
    {
        $this->container['id_offer'] = $id_offer;

        return $this;
    }

    /**
     * Gets revenue_gross
     *
     * @return \Kaufland\Seller\Model\Integer
     */
    public function getRevenueGross()
    {
        return $this->container['revenue_gross'];
    }

    /**
     * Sets revenue_gross
     *
     * @param \Kaufland\Seller\Model\Integer $revenue_gross revenue_gross
     *
     * @return $this
     */
    public function setRevenueGross($revenue_gross)
    {
        $this->container['revenue_gross'] = $revenue_gross;

        return $this;
    }

    /**
     * Gets revenue_net
     *
     * @return \Kaufland\Seller\Model\Integer
     */
    public function getRevenueNet()
    {
        return $this->container['revenue_net'];
    }

    /**
     * Sets revenue_net
     *
     * @param \Kaufland\Seller\Model\Integer $revenue_net revenue_net
     *
     * @return $this
     */
    public function setRevenueNet($revenue_net)
    {
        $this->container['revenue_net'] = $revenue_net;

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
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets unit_condition
     *
     * @return string
     */
    public function getUnitCondition()
    {
        return $this->container['unit_condition'];
    }

    /**
     * Sets unit_condition
     *
     * @param string $unit_condition unit_condition
     *
     * @return $this
     */
    public function setUnitCondition($unit_condition)
    {
        $this->container['unit_condition'] = $unit_condition;

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
     * Gets delivery_time_min
     *
     * @return AllOfOrderUnitDetailsDeliveryTimeMin
     */
    public function getDeliveryTimeMin()
    {
        return $this->container['delivery_time_min'];
    }

    /**
     * Sets delivery_time_min
     *
     * @param AllOfOrderUnitDetailsDeliveryTimeMin $delivery_time_min delivery_time_min
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
     * @return AllOfOrderUnitDetailsDeliveryTimeMax
     */
    public function getDeliveryTimeMax()
    {
        return $this->container['delivery_time_max'];
    }

    /**
     * Sets delivery_time_max
     *
     * @param AllOfOrderUnitDetailsDeliveryTimeMax $delivery_time_max delivery_time_max
     *
     * @return $this
     */
    public function setDeliveryTimeMax($delivery_time_max)
    {
        $this->container['delivery_time_max'] = $delivery_time_max;

        return $this;
    }

    /**
     * Gets delivery_time_expires_iso
     *
     * @return \DateTime
     */
    public function getDeliveryTimeExpiresIso()
    {
        return $this->container['delivery_time_expires_iso'];
    }

    /**
     * Sets delivery_time_expires_iso
     *
     * @param \DateTime $delivery_time_expires_iso delivery_time_expires_iso
     *
     * @return $this
     */
    public function setDeliveryTimeExpiresIso($delivery_time_expires_iso)
    {
        $this->container['delivery_time_expires_iso'] = $delivery_time_expires_iso;

        return $this;
    }

    /**
     * Gets order_received_timestamp_iso
     *
     * @return \DateTime
     */
    public function getOrderReceivedTimestampIso()
    {
        return $this->container['order_received_timestamp_iso'];
    }

    /**
     * Sets order_received_timestamp_iso
     *
     * @param \DateTime $order_received_timestamp_iso order_received_timestamp_iso
     *
     * @return $this
     */
    public function setOrderReceivedTimestampIso($order_received_timestamp_iso)
    {
        $this->container['order_received_timestamp_iso'] = $order_received_timestamp_iso;

        return $this;
    }

    /**
     * Gets shipping_rate
     *
     * @return \Kaufland\Seller\Model\Integer
     */
    public function getShippingRate()
    {
        return $this->container['shipping_rate'];
    }

    /**
     * Sets shipping_rate
     *
     * @param \Kaufland\Seller\Model\Integer $shipping_rate shipping_rate
     *
     * @return $this
     */
    public function setShippingRate($shipping_rate)
    {
        $this->container['shipping_rate'] = $shipping_rate;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string $cancel_reason cancel_reason
     *
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

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
     * Gets buyer
     *
     * @return AllOfOrderUnitDetailsBuyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param AllOfOrderUnitDetailsBuyer $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return AllOfOrderUnitDetailsBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param AllOfOrderUnitDetailsBillingAddress $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return AllOfOrderUnitDetailsShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param AllOfOrderUnitDetailsShippingAddress $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets product
     *
     * @return AllOfOrderUnitDetailsProduct
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param AllOfOrderUnitDetailsProduct $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets delivery_attempt_timestamp_iso
     *
     * @return \DateTime
     */
    public function getDeliveryAttemptTimestampIso()
    {
        return $this->container['delivery_attempt_timestamp_iso'];
    }

    /**
     * Sets delivery_attempt_timestamp_iso
     *
     * @param \DateTime $delivery_attempt_timestamp_iso The attribute is only responded when explicitly requested as an embedded field
     *
     * @return $this
     */
    public function setDeliveryAttemptTimestampIso($delivery_attempt_timestamp_iso)
    {
        $this->container['delivery_attempt_timestamp_iso'] = $delivery_attempt_timestamp_iso;

        return $this;
    }

    /**
     * Gets tickets
     *
     * @return \Kaufland\Seller\Model\Ticket[]
     */
    public function getTickets()
    {
        return $this->container['tickets'];
    }

    /**
     * Sets tickets
     *
     * @param \Kaufland\Seller\Model\Ticket[] $tickets The attribute is only responded when explicitly requested as an embedded field
     *
     * @return $this
     */
    public function setTickets($tickets)
    {
        $this->container['tickets'] = $tickets;

        return $this;
    }

    /**
     * Gets return_unit
     *
     * @return AllOfOrderUnitDetailsReturnUnit
     */
    public function getReturnUnit()
    {
        return $this->container['return_unit'];
    }

    /**
     * Sets return_unit
     *
     * @param AllOfOrderUnitDetailsReturnUnit $return_unit The attribute is only responded when explicitly requested as an embedded field
     *
     * @return $this
     */
    public function setReturnUnit($return_unit)
    {
        $this->container['return_unit'] = $return_unit;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Kaufland\Seller\Model\Delivery
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Kaufland\Seller\Model\Delivery $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

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
