<?php
/**
 * EdgeDeviceSettingsDataBgp
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
 * EdgeDeviceSettingsDataBgp Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeDeviceSettingsDataBgp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edgeDeviceSettingsData_bgp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asn' => 'string',
        'connected_routes' => 'bool',
        'disable_as_path_carry_over' => 'bool',
        'enabled' => 'bool',
        'filters' => '\Swagger\Client\Model\EdgeDeviceSettingsDataBgpFilters[]',
        'holdtime' => 'string',
        'keepalive' => 'string',
        'neighbors' => '\Swagger\Client\Model\ConfigEdgeBgpNeighbor[]',
        'networks' => '\Swagger\Client\Model\EdgeDeviceSettingsDataBgpNetworks[]',
        'overlay_prefix' => 'bool',
        'propagate_uplink' => 'bool',
        'router_id' => 'string',
        'uplink_community' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asn' => null,
        'connected_routes' => null,
        'disable_as_path_carry_over' => null,
        'enabled' => null,
        'filters' => null,
        'holdtime' => null,
        'keepalive' => null,
        'neighbors' => null,
        'networks' => null,
        'overlay_prefix' => null,
        'propagate_uplink' => null,
        'router_id' => null,
        'uplink_community' => null
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
        'asn' => 'ASN',
        'connected_routes' => 'connectedRoutes',
        'disable_as_path_carry_over' => 'disableASPathCarryOver',
        'enabled' => 'enabled',
        'filters' => 'filters',
        'holdtime' => 'holdtime',
        'keepalive' => 'keepalive',
        'neighbors' => 'neighbors',
        'networks' => 'networks',
        'overlay_prefix' => 'overlayPrefix',
        'propagate_uplink' => 'propagateUplink',
        'router_id' => 'routerId',
        'uplink_community' => 'uplinkCommunity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asn' => 'setAsn',
        'connected_routes' => 'setConnectedRoutes',
        'disable_as_path_carry_over' => 'setDisableAsPathCarryOver',
        'enabled' => 'setEnabled',
        'filters' => 'setFilters',
        'holdtime' => 'setHoldtime',
        'keepalive' => 'setKeepalive',
        'neighbors' => 'setNeighbors',
        'networks' => 'setNetworks',
        'overlay_prefix' => 'setOverlayPrefix',
        'propagate_uplink' => 'setPropagateUplink',
        'router_id' => 'setRouterId',
        'uplink_community' => 'setUplinkCommunity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asn' => 'getAsn',
        'connected_routes' => 'getConnectedRoutes',
        'disable_as_path_carry_over' => 'getDisableAsPathCarryOver',
        'enabled' => 'getEnabled',
        'filters' => 'getFilters',
        'holdtime' => 'getHoldtime',
        'keepalive' => 'getKeepalive',
        'neighbors' => 'getNeighbors',
        'networks' => 'getNetworks',
        'overlay_prefix' => 'getOverlayPrefix',
        'propagate_uplink' => 'getPropagateUplink',
        'router_id' => 'getRouterId',
        'uplink_community' => 'getUplinkCommunity'
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
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
        $this->container['connected_routes'] = isset($data['connected_routes']) ? $data['connected_routes'] : null;
        $this->container['disable_as_path_carry_over'] = isset($data['disable_as_path_carry_over']) ? $data['disable_as_path_carry_over'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['holdtime'] = isset($data['holdtime']) ? $data['holdtime'] : null;
        $this->container['keepalive'] = isset($data['keepalive']) ? $data['keepalive'] : null;
        $this->container['neighbors'] = isset($data['neighbors']) ? $data['neighbors'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['overlay_prefix'] = isset($data['overlay_prefix']) ? $data['overlay_prefix'] : null;
        $this->container['propagate_uplink'] = isset($data['propagate_uplink']) ? $data['propagate_uplink'] : null;
        $this->container['router_id'] = isset($data['router_id']) ? $data['router_id'] : null;
        $this->container['uplink_community'] = isset($data['uplink_community']) ? $data['uplink_community'] : null;
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
     * Gets asn
     *
     * @return string
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param string $asn asn
     *
     * @return $this
     */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;

        return $this;
    }

    /**
     * Gets connected_routes
     *
     * @return bool
     */
    public function getConnectedRoutes()
    {
        return $this->container['connected_routes'];
    }

    /**
     * Sets connected_routes
     *
     * @param bool $connected_routes connected_routes
     *
     * @return $this
     */
    public function setConnectedRoutes($connected_routes)
    {
        $this->container['connected_routes'] = $connected_routes;

        return $this;
    }

    /**
     * Gets disable_as_path_carry_over
     *
     * @return bool
     */
    public function getDisableAsPathCarryOver()
    {
        return $this->container['disable_as_path_carry_over'];
    }

    /**
     * Sets disable_as_path_carry_over
     *
     * @param bool $disable_as_path_carry_over disable_as_path_carry_over
     *
     * @return $this
     */
    public function setDisableAsPathCarryOver($disable_as_path_carry_over)
    {
        $this->container['disable_as_path_carry_over'] = $disable_as_path_carry_over;

        return $this;
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
     * Gets filters
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataBgpFilters[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataBgpFilters[] $filters filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets holdtime
     *
     * @return string
     */
    public function getHoldtime()
    {
        return $this->container['holdtime'];
    }

    /**
     * Sets holdtime
     *
     * @param string $holdtime holdtime
     *
     * @return $this
     */
    public function setHoldtime($holdtime)
    {
        $this->container['holdtime'] = $holdtime;

        return $this;
    }

    /**
     * Gets keepalive
     *
     * @return string
     */
    public function getKeepalive()
    {
        return $this->container['keepalive'];
    }

    /**
     * Sets keepalive
     *
     * @param string $keepalive keepalive
     *
     * @return $this
     */
    public function setKeepalive($keepalive)
    {
        $this->container['keepalive'] = $keepalive;

        return $this;
    }

    /**
     * Gets neighbors
     *
     * @return \Swagger\Client\Model\ConfigEdgeBgpNeighbor[]
     */
    public function getNeighbors()
    {
        return $this->container['neighbors'];
    }

    /**
     * Sets neighbors
     *
     * @param \Swagger\Client\Model\ConfigEdgeBgpNeighbor[] $neighbors neighbors
     *
     * @return $this
     */
    public function setNeighbors($neighbors)
    {
        $this->container['neighbors'] = $neighbors;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataBgpNetworks[]
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataBgpNetworks[] $networks networks
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets overlay_prefix
     *
     * @return bool
     */
    public function getOverlayPrefix()
    {
        return $this->container['overlay_prefix'];
    }

    /**
     * Sets overlay_prefix
     *
     * @param bool $overlay_prefix overlay_prefix
     *
     * @return $this
     */
    public function setOverlayPrefix($overlay_prefix)
    {
        $this->container['overlay_prefix'] = $overlay_prefix;

        return $this;
    }

    /**
     * Gets propagate_uplink
     *
     * @return bool
     */
    public function getPropagateUplink()
    {
        return $this->container['propagate_uplink'];
    }

    /**
     * Sets propagate_uplink
     *
     * @param bool $propagate_uplink propagate_uplink
     *
     * @return $this
     */
    public function setPropagateUplink($propagate_uplink)
    {
        $this->container['propagate_uplink'] = $propagate_uplink;

        return $this;
    }

    /**
     * Gets router_id
     *
     * @return string
     */
    public function getRouterId()
    {
        return $this->container['router_id'];
    }

    /**
     * Sets router_id
     *
     * @param string $router_id router_id
     *
     * @return $this
     */
    public function setRouterId($router_id)
    {
        $this->container['router_id'] = $router_id;

        return $this;
    }

    /**
     * Gets uplink_community
     *
     * @return int
     */
    public function getUplinkCommunity()
    {
        return $this->container['uplink_community'];
    }

    /**
     * Sets uplink_community
     *
     * @param int $uplink_community uplink_community
     *
     * @return $this
     */
    public function setUplinkCommunity($uplink_community)
    {
        $this->container['uplink_community'] = $uplink_community;

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


