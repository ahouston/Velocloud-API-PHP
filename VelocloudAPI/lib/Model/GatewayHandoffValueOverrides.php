<?php
/**
 * GatewayHandoffValueOverrides
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
 * GatewayHandoffValueOverrides Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GatewayHandoffValueOverrides implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'gateway_handoff_value_overrides';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vlan' => 'map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesVLAN]',
        'bgp' => 'map[string,\Swagger\Client\Model\GatewayHandoffValueBgp]',
        'bgp_inbound_map' => 'map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap]',
        'bgp_outbound_map' => 'map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap]',
        'local_address' => 'map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesLocalAddress]',
        'subnets' => 'map[string,object[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vlan' => null,
        'bgp' => null,
        'bgp_inbound_map' => null,
        'bgp_outbound_map' => null,
        'local_address' => null,
        'subnets' => null
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
        'vlan' => 'VLAN',
        'bgp' => 'bgp',
        'bgp_inbound_map' => 'bgpInboundMap',
        'bgp_outbound_map' => 'bgpOutboundMap',
        'local_address' => 'localAddress',
        'subnets' => 'subnets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vlan' => 'setVlan',
        'bgp' => 'setBgp',
        'bgp_inbound_map' => 'setBgpInboundMap',
        'bgp_outbound_map' => 'setBgpOutboundMap',
        'local_address' => 'setLocalAddress',
        'subnets' => 'setSubnets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vlan' => 'getVlan',
        'bgp' => 'getBgp',
        'bgp_inbound_map' => 'getBgpInboundMap',
        'bgp_outbound_map' => 'getBgpOutboundMap',
        'local_address' => 'getLocalAddress',
        'subnets' => 'getSubnets'
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
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['bgp'] = isset($data['bgp']) ? $data['bgp'] : null;
        $this->container['bgp_inbound_map'] = isset($data['bgp_inbound_map']) ? $data['bgp_inbound_map'] : null;
        $this->container['bgp_outbound_map'] = isset($data['bgp_outbound_map']) ? $data['bgp_outbound_map'] : null;
        $this->container['local_address'] = isset($data['local_address']) ? $data['local_address'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
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
     * Gets vlan
     *
     * @return map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesVLAN]
     */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
     * Sets vlan
     *
     * @param map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesVLAN] $vlan vlan
     *
     * @return $this
     */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;

        return $this;
    }

    /**
     * Gets bgp
     *
     * @return map[string,\Swagger\Client\Model\GatewayHandoffValueBgp]
     */
    public function getBgp()
    {
        return $this->container['bgp'];
    }

    /**
     * Sets bgp
     *
     * @param map[string,\Swagger\Client\Model\GatewayHandoffValueBgp] $bgp bgp
     *
     * @return $this
     */
    public function setBgp($bgp)
    {
        $this->container['bgp'] = $bgp;

        return $this;
    }

    /**
     * Gets bgp_inbound_map
     *
     * @return map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap]
     */
    public function getBgpInboundMap()
    {
        return $this->container['bgp_inbound_map'];
    }

    /**
     * Sets bgp_inbound_map
     *
     * @param map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap] $bgp_inbound_map bgp_inbound_map
     *
     * @return $this
     */
    public function setBgpInboundMap($bgp_inbound_map)
    {
        $this->container['bgp_inbound_map'] = $bgp_inbound_map;

        return $this;
    }

    /**
     * Gets bgp_outbound_map
     *
     * @return map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap]
     */
    public function getBgpOutboundMap()
    {
        return $this->container['bgp_outbound_map'];
    }

    /**
     * Sets bgp_outbound_map
     *
     * @param map[string,\Swagger\Client\Model\GatewayHandoffBgpRulesMap] $bgp_outbound_map bgp_outbound_map
     *
     * @return $this
     */
    public function setBgpOutboundMap($bgp_outbound_map)
    {
        $this->container['bgp_outbound_map'] = $bgp_outbound_map;

        return $this;
    }

    /**
     * Gets local_address
     *
     * @return map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesLocalAddress]
     */
    public function getLocalAddress()
    {
        return $this->container['local_address'];
    }

    /**
     * Sets local_address
     *
     * @param map[string,\Swagger\Client\Model\GatewayHandoffValueOverridesLocalAddress] $local_address local_address
     *
     * @return $this
     */
    public function setLocalAddress($local_address)
    {
        $this->container['local_address'] = $local_address;

        return $this;
    }

    /**
     * Gets subnets
     *
     * @return map[string,object[]]
     */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
     * Sets subnets
     *
     * @param map[string,object[]] $subnets subnets
     *
     * @return $this
     */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;

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


