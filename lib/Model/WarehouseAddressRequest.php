<?php
/**
 * WarehouseAddressRequest
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
 * WarehouseAddressRequest Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseAddressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WarehouseAddressRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'street' => 'string',
        'city' => 'string',
        'house_number' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'street' => null,
        'city' => null,
        'house_number' => null,
        'postcode' => null,
        'country' => null,
        'phone' => null
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
        'street' => 'street',
        'city' => 'city',
        'house_number' => 'house_number',
        'postcode' => 'postcode',
        'country' => 'country',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'street' => 'setStreet',
        'city' => 'setCity',
        'house_number' => 'setHouseNumber',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'street' => 'getStreet',
        'city' => 'getCity',
        'house_number' => 'getHouseNumber',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'phone' => 'getPhone'
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
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['house_number'] === null) {
            $invalidProperties[] = "'house_number' can't be null";
        }
        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street part of Warehouse's address.
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City part of Warehouse's address.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number House number part of Warehouse's address.
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postal code of Warehouse's address.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country code according to ISO 3166
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number of Warehouse.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
