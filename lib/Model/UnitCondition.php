<?php
/**
 * UnitCondition
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
 * UnitCondition Class Doc Comment
 *
 * @category Class
 * @package  Kaufland\Seller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitCondition
{
    /**
     * Possible values of this enum
     */
    const USED___ACCEPTABLE = 'USED___ACCEPTABLE';
    const USED___VERY_GOOD = 'USED___VERY_GOOD';
    const USED___AS_NEW = 'USED___AS_NEW';
    const USED___GOOD = 'USED___GOOD';
    const _NEW = 'NEW';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USED___ACCEPTABLE
            self::USED___VERY_GOOD
            self::USED___AS_NEW
            self::USED___GOOD
            self::_NEW
        ];
    }
}
