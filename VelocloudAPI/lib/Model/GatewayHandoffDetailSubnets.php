<?php
/**
 * GatewayHandoffDetailSubnets
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Velocloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GatewayHandoffDetailSubnets Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GatewayHandoffDetailSubnets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'gateway_handoff_detail_subnets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'route_cost' => 'int',
        'cidr_ip' => 'string',
        'cidr_prefix' => 'int',
        'encrypt' => 'bool',
        'hand_off_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'route_cost' => null,
        'cidr_ip' => null,
        'cidr_prefix' => null,
        'encrypt' => null,
        'hand_off_type' => null
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
        'route_cost' => 'routeCost',
        'cidr_ip' => 'cidrIp',
        'cidr_prefix' => 'cidrPrefix',
        'encrypt' => 'encrypt',
        'hand_off_type' => 'handOffType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'route_cost' => 'setRouteCost',
        'cidr_ip' => 'setCidrIp',
        'cidr_prefix' => 'setCidrPrefix',
        'encrypt' => 'setEncrypt',
        'hand_off_type' => 'setHandOffType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'route_cost' => 'getRouteCost',
        'cidr_ip' => 'getCidrIp',
        'cidr_prefix' => 'getCidrPrefix',
        'encrypt' => 'getEncrypt',
        'hand_off_type' => 'getHandOffType'
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

    const HAND_OFF_TYPE_NAT = 'NAT';
    const HAND_OFF_TYPE_VLAN = 'VLAN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandOffTypeAllowableValues()
    {
        return [
            self::HAND_OFF_TYPE_NAT,
            self::HAND_OFF_TYPE_VLAN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['route_cost'] = isset($data['route_cost']) ? $data['route_cost'] : null;
        $this->container['cidr_ip'] = isset($data['cidr_ip']) ? $data['cidr_ip'] : null;
        $this->container['cidr_prefix'] = isset($data['cidr_prefix']) ? $data['cidr_prefix'] : null;
        $this->container['encrypt'] = isset($data['encrypt']) ? $data['encrypt'] : null;
        $this->container['hand_off_type'] = isset($data['hand_off_type']) ? $data['hand_off_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!in_array($this->container['hand_off_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hand_off_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!in_array($this->container['hand_off_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets route_cost
     *
     * @return int
     */
    public function getRouteCost()
    {
        return $this->container['route_cost'];
    }

    /**
     * Sets route_cost
     *
     * @param int $route_cost route_cost
     *
     * @return $this
     */
    public function setRouteCost($route_cost)
    {
        $this->container['route_cost'] = $route_cost;

        return $this;
    }

    /**
     * Gets cidr_ip
     *
     * @return string
     */
    public function getCidrIp()
    {
        return $this->container['cidr_ip'];
    }

    /**
     * Sets cidr_ip
     *
     * @param string $cidr_ip cidr_ip
     *
     * @return $this
     */
    public function setCidrIp($cidr_ip)
    {
        $this->container['cidr_ip'] = $cidr_ip;

        return $this;
    }

    /**
     * Gets cidr_prefix
     *
     * @return int
     */
    public function getCidrPrefix()
    {
        return $this->container['cidr_prefix'];
    }

    /**
     * Sets cidr_prefix
     *
     * @param int $cidr_prefix cidr_prefix
     *
     * @return $this
     */
    public function setCidrPrefix($cidr_prefix)
    {
        $this->container['cidr_prefix'] = $cidr_prefix;

        return $this;
    }

    /**
     * Gets encrypt
     *
     * @return bool
     */
    public function getEncrypt()
    {
        return $this->container['encrypt'];
    }

    /**
     * Sets encrypt
     *
     * @param bool $encrypt encrypt
     *
     * @return $this
     */
    public function setEncrypt($encrypt)
    {
        $this->container['encrypt'] = $encrypt;

        return $this;
    }

    /**
     * Gets hand_off_type
     *
     * @return string
     */
    public function getHandOffType()
    {
        return $this->container['hand_off_type'];
    }

    /**
     * Sets hand_off_type
     *
     * @param string $hand_off_type hand_off_type
     *
     * @return $this
     */
    public function setHandOffType($hand_off_type)
    {
        $allowedValues = $this->getHandOffTypeAllowableValues();
        if (!is_null($hand_off_type) && !in_array($hand_off_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hand_off_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hand_off_type'] = $hand_off_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


