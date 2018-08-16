<?php
/**
 * GatewayHandoffValue
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
 * GatewayHandoffValue Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GatewayHandoffValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'gateway_handoff_value';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'override' => 'bool',
        'c_tag' => 'int',
        's_tag' => 'int',
        'local_address' => '\Swagger\Client\Model\GatewayHandoffValueLocalAddress',
        'static_routes' => '\Swagger\Client\Model\GatewayHandoffValueStaticRoutes',
        'bgp' => '\Swagger\Client\Model\GatewayHandoffValueBgp',
        'bgp_inbound_map' => '\Swagger\Client\Model\GatewayHandoffBgpRulesMap',
        'bgp_outbound_map' => '\Swagger\Client\Model\GatewayHandoffBgpRulesMap',
        'overrides' => '\Swagger\Client\Model\GatewayHandoffValueOverrides'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'override' => null,
        'c_tag' => null,
        's_tag' => null,
        'local_address' => null,
        'static_routes' => null,
        'bgp' => null,
        'bgp_inbound_map' => null,
        'bgp_outbound_map' => null,
        'overrides' => null
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
        'type' => 'type',
        'override' => 'override',
        'c_tag' => 'cTag',
        's_tag' => 'sTag',
        'local_address' => 'localAddress',
        'static_routes' => 'staticRoutes',
        'bgp' => 'bgp',
        'bgp_inbound_map' => 'bgpInboundMap',
        'bgp_outbound_map' => 'bgpOutboundMap',
        'overrides' => 'overrides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'override' => 'setOverride',
        'c_tag' => 'setCTag',
        's_tag' => 'setSTag',
        'local_address' => 'setLocalAddress',
        'static_routes' => 'setStaticRoutes',
        'bgp' => 'setBgp',
        'bgp_inbound_map' => 'setBgpInboundMap',
        'bgp_outbound_map' => 'setBgpOutboundMap',
        'overrides' => 'setOverrides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'override' => 'getOverride',
        'c_tag' => 'getCTag',
        's_tag' => 'getSTag',
        'local_address' => 'getLocalAddress',
        'static_routes' => 'getStaticRoutes',
        'bgp' => 'getBgp',
        'bgp_inbound_map' => 'getBgpInboundMap',
        'bgp_outbound_map' => 'getBgpOutboundMap',
        'overrides' => 'getOverrides'
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

    const TYPE__8021_Q = '802.1Q';
    const TYPE__8021AD = '802.1ad';
    const TYPE_QIN_Q__0X9100 = 'QinQ (0x9100)';
    const TYPE_QIN_Q__0X8100 = 'QinQ (0x8100)';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__8021_Q,
            self::TYPE__8021AD,
            self::TYPE_QIN_Q__0X9100,
            self::TYPE_QIN_Q__0X8100,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : false;
        $this->container['c_tag'] = isset($data['c_tag']) ? $data['c_tag'] : null;
        $this->container['s_tag'] = isset($data['s_tag']) ? $data['s_tag'] : null;
        $this->container['local_address'] = isset($data['local_address']) ? $data['local_address'] : null;
        $this->container['static_routes'] = isset($data['static_routes']) ? $data['static_routes'] : null;
        $this->container['bgp'] = isset($data['bgp']) ? $data['bgp'] : null;
        $this->container['bgp_inbound_map'] = isset($data['bgp_inbound_map']) ? $data['bgp_inbound_map'] : null;
        $this->container['bgp_outbound_map'] = isset($data['bgp_outbound_map']) ? $data['bgp_outbound_map'] : null;
        $this->container['overrides'] = isset($data['overrides']) ? $data['overrides'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets override
     *
     * @return bool
     */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
     * Sets override
     *
     * @param bool $override override
     *
     * @return $this
     */
    public function setOverride($override)
    {
        $this->container['override'] = $override;

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
     * Gets local_address
     *
     * @return \Swagger\Client\Model\GatewayHandoffValueLocalAddress
     */
    public function getLocalAddress()
    {
        return $this->container['local_address'];
    }

    /**
     * Sets local_address
     *
     * @param \Swagger\Client\Model\GatewayHandoffValueLocalAddress $local_address local_address
     *
     * @return $this
     */
    public function setLocalAddress($local_address)
    {
        $this->container['local_address'] = $local_address;

        return $this;
    }

    /**
     * Gets static_routes
     *
     * @return \Swagger\Client\Model\GatewayHandoffValueStaticRoutes
     */
    public function getStaticRoutes()
    {
        return $this->container['static_routes'];
    }

    /**
     * Sets static_routes
     *
     * @param \Swagger\Client\Model\GatewayHandoffValueStaticRoutes $static_routes static_routes
     *
     * @return $this
     */
    public function setStaticRoutes($static_routes)
    {
        $this->container['static_routes'] = $static_routes;

        return $this;
    }

    /**
     * Gets bgp
     *
     * @return \Swagger\Client\Model\GatewayHandoffValueBgp
     */
    public function getBgp()
    {
        return $this->container['bgp'];
    }

    /**
     * Sets bgp
     *
     * @param \Swagger\Client\Model\GatewayHandoffValueBgp $bgp bgp
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
     * @return \Swagger\Client\Model\GatewayHandoffBgpRulesMap
     */
    public function getBgpInboundMap()
    {
        return $this->container['bgp_inbound_map'];
    }

    /**
     * Sets bgp_inbound_map
     *
     * @param \Swagger\Client\Model\GatewayHandoffBgpRulesMap $bgp_inbound_map bgp_inbound_map
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
     * @return \Swagger\Client\Model\GatewayHandoffBgpRulesMap
     */
    public function getBgpOutboundMap()
    {
        return $this->container['bgp_outbound_map'];
    }

    /**
     * Sets bgp_outbound_map
     *
     * @param \Swagger\Client\Model\GatewayHandoffBgpRulesMap $bgp_outbound_map bgp_outbound_map
     *
     * @return $this
     */
    public function setBgpOutboundMap($bgp_outbound_map)
    {
        $this->container['bgp_outbound_map'] = $bgp_outbound_map;

        return $this;
    }

    /**
     * Gets overrides
     *
     * @return \Swagger\Client\Model\GatewayHandoffValueOverrides
     */
    public function getOverrides()
    {
        return $this->container['overrides'];
    }

    /**
     * Sets overrides
     *
     * @param \Swagger\Client\Model\GatewayHandoffValueOverrides $overrides overrides
     *
     * @return $this
     */
    public function setOverrides($overrides)
    {
        $this->container['overrides'] = $overrides;

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

