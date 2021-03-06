<?php
/**
 * EnterpriseNetworkSpace
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
 * EnterpriseNetworkSpace Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseNetworkSpace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_network_space';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'mode' => 'string',
        'cidr_ip' => 'string',
        'cidr_prefix' => 'int',
        'max_vlans' => 'int',
        'vlans' => '\Swagger\Client\Model\Vlan[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'mode' => null,
        'cidr_ip' => null,
        'cidr_prefix' => null,
        'max_vlans' => null,
        'vlans' => null
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
        'mode' => 'mode',
        'cidr_ip' => 'cidrIp',
        'cidr_prefix' => 'cidrPrefix',
        'max_vlans' => 'maxVlans',
        'vlans' => 'vlans'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'mode' => 'setMode',
        'cidr_ip' => 'setCidrIp',
        'cidr_prefix' => 'setCidrPrefix',
        'max_vlans' => 'setMaxVlans',
        'vlans' => 'setVlans'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'mode' => 'getMode',
        'cidr_ip' => 'getCidrIp',
        'cidr_prefix' => 'getCidrPrefix',
        'max_vlans' => 'getMaxVlans',
        'vlans' => 'getVlans'
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

    const MODE__STATIC = 'static';
    const MODE_DYNAMIC = 'dynamic';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE__STATIC,
            self::MODE_DYNAMIC,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['cidr_ip'] = isset($data['cidr_ip']) ? $data['cidr_ip'] : null;
        $this->container['cidr_prefix'] = isset($data['cidr_prefix']) ? $data['cidr_prefix'] : null;
        $this->container['max_vlans'] = isset($data['max_vlans']) ? $data['max_vlans'] : null;
        $this->container['vlans'] = isset($data['vlans']) ? $data['vlans'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($this->container['mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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

        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($this->container['mode'], $allowedValues)) {
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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

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
     * Gets max_vlans
     *
     * @return int
     */
    public function getMaxVlans()
    {
        return $this->container['max_vlans'];
    }

    /**
     * Sets max_vlans
     *
     * @param int $max_vlans max_vlans
     *
     * @return $this
     */
    public function setMaxVlans($max_vlans)
    {
        $this->container['max_vlans'] = $max_vlans;

        return $this;
    }

    /**
     * Gets vlans
     *
     * @return \Swagger\Client\Model\Vlan[]
     */
    public function getVlans()
    {
        return $this->container['vlans'];
    }

    /**
     * Sets vlans
     *
     * @param \Swagger\Client\Model\Vlan[] $vlans vlans
     *
     * @return $this
     */
    public function setVlans($vlans)
    {
        $this->container['vlans'] = $vlans;

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


