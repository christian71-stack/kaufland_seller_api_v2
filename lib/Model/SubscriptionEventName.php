<?php
/**
 * SubscriptionEventName
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
use \Kaufland\Seller\ObjectSerializer;

/**
 * SubscriptionEventName Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionEventName
{
    /**
     * Possible values of this enum
     */
    const ORDER_NEW = 'order_new';
    const ORDER_UNIT_NEW = 'order_unit_new';
    const ORDER_UNIT_STATUS_CHANGED = 'order_unit_status_changed';
    const ITEM_CHANGED = 'item_changed';
    const CATEGORY_CHANGED = 'category_changed';
    const RETURN_NEW = 'return_new';
    const RETURN_STATUS_CHANGED = 'return_status_changed';
    const RETURN_UNIT_STATUS_CHANGED = 'return_unit_status_changed';
    const ITEM_UNIT_NEW = 'item_unit_new';
    const ITEM_UNIT_CHANGED = 'item_unit_changed';
    const ITEM_UNIT_DELETED = 'item_unit_deleted';
    const ITEM_UNIT_OUT_OF_STOCK = 'item_unit_out_of_stock';
    const ITEM_UNIT_NOT_AVAILABLE = 'item_unit_not_available';
    const ITEM_UNIT_AVAILABLE = 'item_unit_available';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORDER_NEW,
            self::ORDER_UNIT_NEW,
            self::ORDER_UNIT_STATUS_CHANGED,
            self::ITEM_CHANGED,
            self::CATEGORY_CHANGED,
            self::RETURN_NEW,
            self::RETURN_STATUS_CHANGED,
            self::RETURN_UNIT_STATUS_CHANGED,
            self::ITEM_UNIT_NEW,
            self::ITEM_UNIT_CHANGED,
            self::ITEM_UNIT_DELETED,
            self::ITEM_UNIT_OUT_OF_STOCK,
            self::ITEM_UNIT_NOT_AVAILABLE,
            self::ITEM_UNIT_AVAILABLE,
        ];
    }
}
