<?php
/**
 * GatewayupdateGatewayAttributesHandOffDetailIcmpProbe
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
 * OpenAPI spec version: 0.9.0
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
 * GatewayupdateGatewayAttributesHandOffDetailIcmpProbe Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GatewayupdateGatewayAttributesHandOffDetailIcmpProbe implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'gatewayupdateGatewayAttributes_handOffDetail_icmpProbe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'probe_type' => 'string',
        'c_tag' => 'int',
        's_tag' => 'int',
        'destination_ip' => 'string',
        'frequency_seconds' => 'int',
        'threshold' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'probe_type' => null,
        'c_tag' => null,
        's_tag' => null,
        'destination_ip' => null,
        'frequency_seconds' => null,
        'threshold' => null
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
        'enabled' => 'enabled',
        'probe_type' => 'probeType',
        'c_tag' => 'cTag',
        's_tag' => 'sTag',
        'destination_ip' => 'destinationIp',
        'frequency_seconds' => 'frequencySeconds',
        'threshold' => 'threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'probe_type' => 'setProbeType',
        'c_tag' => 'setCTag',
        's_tag' => 'setSTag',
        'destination_ip' => 'setDestinationIp',
        'frequency_seconds' => 'setFrequencySeconds',
        'threshold' => 'setThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'probe_type' => 'getProbeType',
        'c_tag' => 'getCTag',
        's_tag' => 'getSTag',
        'destination_ip' => 'getDestinationIp',
        'frequency_seconds' => 'getFrequencySeconds',
        'threshold' => 'getThreshold'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['probe_type'] = isset($data['probe_type']) ? $data['probe_type'] : null;
        $this->container['c_tag'] = isset($data['c_tag']) ? $data['c_tag'] : null;
        $this->container['s_tag'] = isset($data['s_tag']) ? $data['s_tag'] : null;
        $this->container['destination_ip'] = isset($data['destination_ip']) ? $data['destination_ip'] : null;
        $this->container['frequency_seconds'] = isset($data['frequency_seconds']) ? $data['frequency_seconds'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
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

        return true;
    }


    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets probe_type
     *
     * @return string
     */
    public function getProbeType()
    {
        return $this->container['probe_type'];
    }

    /**
     * Sets probe_type
     *
     * @param string $probe_type probe_type
     *
     * @return $this
     */
    public function setProbeType($probe_type)
    {
        $this->container['probe_type'] = $probe_type;

        return $this;
    }

    /**
     * Gets c_tag
     *
     * @return int
     */
    public function getCTag()
    {
        return $this->container['c_tag'];
    }

    /**
     * Sets c_tag
     *
     * @param int $c_tag c_tag
     *
     * @return $this
     */
    public function setCTag($c_tag)
    {
        $this->container['c_tag'] = $c_tag;

        return $this;
    }

    /**
     * Gets s_tag
     *
     * @return int
     */
    public function getSTag()
    {
        return $this->container['s_tag'];
    }

    /**
     * Sets s_tag
     *
     * @param int $s_tag s_tag
     *
     * @return $this
     */
    public function setSTag($s_tag)
    {
        $this->container['s_tag'] = $s_tag;

        return $this;
    }

    /**
     * Gets destination_ip
     *
     * @return string
     */
    public function getDestinationIp()
    {
        return $this->container['destination_ip'];
    }

    /**
     * Sets destination_ip
     *
     * @param string $destination_ip destination_ip
     *
     * @return $this
     */
    public function setDestinationIp($destination_ip)
    {
        $this->container['destination_ip'] = $destination_ip;

        return $this;
    }

    /**
     * Gets frequency_seconds
     *
     * @return int
     */
    public function getFrequencySeconds()
    {
        return $this->container['frequency_seconds'];
    }

    /**
     * Sets frequency_seconds
     *
     * @param int $frequency_seconds frequency_seconds
     *
     * @return $this
     */
    public function setFrequencySeconds($frequency_seconds)
    {
        $this->container['frequency_seconds'] = $frequency_seconds;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return int
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param int $threshold threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

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


