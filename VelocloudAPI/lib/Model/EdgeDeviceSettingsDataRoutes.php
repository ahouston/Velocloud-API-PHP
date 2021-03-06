<?php
/**
 * EdgeDeviceSettingsDataRoutes
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
 * EdgeDeviceSettingsDataRoutes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeDeviceSettingsDataRoutes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edgeDeviceSettingsData_routes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'icmp_probes' => 'object[]',
        'icmp_responders' => 'object[]',
        'static' => '\Swagger\Client\Model\EdgeDeviceSettingsDataRoutesStatic[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'icmp_probes' => null,
        'icmp_responders' => null,
        'static' => null
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
        'icmp_probes' => 'icmpProbes',
        'icmp_responders' => 'icmpResponders',
        'static' => 'static'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icmp_probes' => 'setIcmpProbes',
        'icmp_responders' => 'setIcmpResponders',
        'static' => 'setStatic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icmp_probes' => 'getIcmpProbes',
        'icmp_responders' => 'getIcmpResponders',
        'static' => 'getStatic'
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
        $this->container['icmp_probes'] = isset($data['icmp_probes']) ? $data['icmp_probes'] : null;
        $this->container['icmp_responders'] = isset($data['icmp_responders']) ? $data['icmp_responders'] : null;
        $this->container['static'] = isset($data['static']) ? $data['static'] : null;
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
     * Gets icmp_probes
     *
     * @return object[]
     */
    public function getIcmpProbes()
    {
        return $this->container['icmp_probes'];
    }

    /**
     * Sets icmp_probes
     *
     * @param object[] $icmp_probes icmp_probes
     *
     * @return $this
     */
    public function setIcmpProbes($icmp_probes)
    {
        $this->container['icmp_probes'] = $icmp_probes;

        return $this;
    }

    /**
     * Gets icmp_responders
     *
     * @return object[]
     */
    public function getIcmpResponders()
    {
        return $this->container['icmp_responders'];
    }

    /**
     * Sets icmp_responders
     *
     * @param object[] $icmp_responders icmp_responders
     *
     * @return $this
     */
    public function setIcmpResponders($icmp_responders)
    {
        $this->container['icmp_responders'] = $icmp_responders;

        return $this;
    }

    /**
     * Gets static
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataRoutesStatic[]
     */
    public function getStatic()
    {
        return $this->container['static'];
    }

    /**
     * Sets static
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataRoutesStatic[] $static static
     *
     * @return $this
     */
    public function setStatic($static)
    {
        $this->container['static'] = $static;

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


