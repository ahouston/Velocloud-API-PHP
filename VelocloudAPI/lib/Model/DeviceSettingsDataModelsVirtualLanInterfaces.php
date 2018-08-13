<?php
/**
 * DeviceSettingsDataModelsVirtualLanInterfaces
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
 * DeviceSettingsDataModelsVirtualLanInterfaces Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceSettingsDataModelsVirtualLanInterfaces implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deviceSettingsData_models_virtual_lan_interfaces';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'space' => 'string',
        'name' => 'string',
        'type' => 'string',
        'cwp' => 'bool',
        'port_mode' => 'string',
        'untagged_vlan' => 'string',
        'disabled' => 'bool',
        'l2' => '\Swagger\Client\Model\EdgeDeviceSettingsDataL2',
        'vlan_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'space' => null,
        'name' => null,
        'type' => null,
        'cwp' => null,
        'port_mode' => null,
        'untagged_vlan' => null,
        'disabled' => null,
        'l2' => null,
        'vlan_ids' => null
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
        'space' => 'space',
        'name' => 'name',
        'type' => 'type',
        'cwp' => 'cwp',
        'port_mode' => 'portMode',
        'untagged_vlan' => 'untaggedVlan',
        'disabled' => 'disabled',
        'l2' => 'l2',
        'vlan_ids' => 'vlanIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'space' => 'setSpace',
        'name' => 'setName',
        'type' => 'setType',
        'cwp' => 'setCwp',
        'port_mode' => 'setPortMode',
        'untagged_vlan' => 'setUntaggedVlan',
        'disabled' => 'setDisabled',
        'l2' => 'setL2',
        'vlan_ids' => 'setVlanIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'space' => 'getSpace',
        'name' => 'getName',
        'type' => 'getType',
        'cwp' => 'getCwp',
        'port_mode' => 'getPortMode',
        'untagged_vlan' => 'getUntaggedVlan',
        'disabled' => 'getDisabled',
        'l2' => 'getL2',
        'vlan_ids' => 'getVlanIds'
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
        $this->container['space'] = isset($data['space']) ? $data['space'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cwp'] = isset($data['cwp']) ? $data['cwp'] : null;
        $this->container['port_mode'] = isset($data['port_mode']) ? $data['port_mode'] : null;
        $this->container['untagged_vlan'] = isset($data['untagged_vlan']) ? $data['untagged_vlan'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['vlan_ids'] = isset($data['vlan_ids']) ? $data['vlan_ids'] : null;
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
     * Gets space
     *
     * @return string
     */
    public function getSpace()
    {
        return $this->container['space'];
    }

    /**
     * Sets space
     *
     * @param string $space space
     *
     * @return $this
     */
    public function setSpace($space)
    {
        $this->container['space'] = $space;

        return $this;
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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cwp
     *
     * @return bool
     */
    public function getCwp()
    {
        return $this->container['cwp'];
    }

    /**
     * Sets cwp
     *
     * @param bool $cwp cwp
     *
     * @return $this
     */
    public function setCwp($cwp)
    {
        $this->container['cwp'] = $cwp;

        return $this;
    }

    /**
     * Gets port_mode
     *
     * @return string
     */
    public function getPortMode()
    {
        return $this->container['port_mode'];
    }

    /**
     * Sets port_mode
     *
     * @param string $port_mode port_mode
     *
     * @return $this
     */
    public function setPortMode($port_mode)
    {
        $this->container['port_mode'] = $port_mode;

        return $this;
    }

    /**
     * Gets untagged_vlan
     *
     * @return string
     */
    public function getUntaggedVlan()
    {
        return $this->container['untagged_vlan'];
    }

    /**
     * Sets untagged_vlan
     *
     * @param string $untagged_vlan untagged_vlan
     *
     * @return $this
     */
    public function setUntaggedVlan($untagged_vlan)
    {
        $this->container['untagged_vlan'] = $untagged_vlan;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets l2
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataL2
     */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
     * Sets l2
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataL2 $l2 l2
     *
     * @return $this
     */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;

        return $this;
    }

    /**
     * Gets vlan_ids
     *
     * @return int[]
     */
    public function getVlanIds()
    {
        return $this->container['vlan_ids'];
    }

    /**
     * Sets vlan_ids
     *
     * @param int[] $vlan_ids vlan_ids
     *
     * @return $this
     */
    public function setVlanIds($vlan_ids)
    {
        $this->container['vlan_ids'] = $vlan_ids;

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


