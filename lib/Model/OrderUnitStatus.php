<?php
/**
 * OrderUnitStatus
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
 * OrderUnitStatus Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderUnitStatus
{
    /**
     * Possible values of this enum
     */
    const CANCELLED = 'cancelled';
    const NEED_TO_BE_SENT = 'need_to_be_sent';
    const OPEN = 'open';
    const RECEIVED = 'received';
    const RETURNED = 'returned';
    const RETURNED_PAID = 'returned_paid';
    const SENT = 'sent';
    const SENT_AND_AUTOPAID = 'sent_and_autopaid';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED
            self::NEED_TO_BE_SENT
            self::OPEN
            self::RECEIVED
            self::RETURNED
            self::RETURNED_PAID
            self::SENT
            self::SENT_AND_AUTOPAID
        ];
    }
}
