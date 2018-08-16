<?php
/**
 * ClientDevice
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
 * ClientDevice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'client_device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'enterprise_id' => 'int',
        'mac_address' => 'string',
        'host_name' => 'string',
        'ip_address' => 'string',
        'os' => 'int',
        'os_name' => 'string',
        'os_version' => 'string',
        'device_type' => 'string',
        'device_model' => 'string',
        'last_contact' => '\DateTime',
        'modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created' => 'date-time',
        'enterprise_id' => null,
        'mac_address' => null,
        'host_name' => null,
        'ip_address' => null,
        'os' => null,
        'os_name' => null,
        'os_version' => null,
        'device_type' => null,
        'device_model' => null,
        'last_contact' => 'date-time',
        'modified' => 'date-time'
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
        'id' => 'id',
        'created' => 'created',
        'enterprise_id' => 'enterpriseId',
        'mac_address' => 'macAddress',
        'host_name' => 'hostName',
        'ip_address' => 'ipAddress',
        'os' => 'os',
        'os_name' => 'osName',
        'os_version' => 'osVersion',
        'device_type' => 'deviceType',
        'device_model' => 'deviceModel',
        'last_contact' => 'lastContact',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'enterprise_id' => 'setEnterpriseId',
        'mac_address' => 'setMacAddress',
        'host_name' => 'setHostName',
        'ip_address' => 'setIpAddress',
        'os' => 'setOs',
        'os_name' => 'setOsName',
        'os_version' => 'setOsVersion',
        'device_type' => 'setDeviceType',
        'device_model' => 'setDeviceModel',
        'last_contact' => 'setLastContact',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'enterprise_id' => 'getEnterpriseId',
        'mac_address' => 'getMacAddress',
        'host_name' => 'getHostName',
        'ip_address' => 'getIpAddress',
        'os' => 'getOs',
        'os_name' => 'getOsName',
        'os_version' => 'getOsVersion',
        'device_type' => 'getDeviceType',
        'device_model' => 'getDeviceModel',
        'last_contact' => 'getLastContact',
        'modified' => 'getModified'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['host_name'] = isset($data['host_name']) ? $data['host_name'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['os_name'] = isset($data['os_name']) ? $data['os_name'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['last_contact'] = isset($data['last_contact']) ? $data['last_contact'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['enterprise_id'] === null) {
            $invalidProperties[] = "'enterprise_id' can't be null";
        }
        if ($this->container['mac_address'] === null) {
            $invalidProperties[] = "'mac_address' can't be null";
        }
        if ($this->container['host_name'] === null) {
            $invalidProperties[] = "'host_name' can't be null";
        }
        if ($this->container['ip_address'] === null) {
            $invalidProperties[] = "'ip_address' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['os_name'] === null) {
            $invalidProperties[] = "'os_name' can't be null";
        }
        if ($this->container['os_version'] === null) {
            $invalidProperties[] = "'os_version' can't be null";
        }
        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        if ($this->container['device_model'] === null) {
            $invalidProperties[] = "'device_model' can't be null";
        }
        if ($this->container['last_contact'] === null) {
            $invalidProperties[] = "'last_contact' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalidProperties[] = "'modified' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['enterprise_id'] === null) {
            return false;
        }
        if ($this->container['mac_address'] === null) {
            return false;
        }
        if ($this->container['host_name'] === null) {
            return false;
        }
        if ($this->container['ip_address'] === null) {
            return false;
        }
        if ($this->container['os'] === null) {
            return false;
        }
        if ($this->container['os_name'] === null) {
            return false;
        }
        if ($this->container['os_version'] === null) {
            return false;
        }
        if ($this->container['device_type'] === null) {
            return false;
        }
        if ($this->container['device_model'] === null) {
            return false;
        }
        if ($this->container['last_contact'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets enterprise_id
     *
     * @return int
     */
    public function getEnterpriseId()
    {
        return $this->container['enterprise_id'];
    }

    /**
     * Sets enterprise_id
     *
     * @param int $enterprise_id enterprise_id
     *
     * @return $this
     */
    public function setEnterpriseId($enterprise_id)
    {
        $this->container['enterprise_id'] = $enterprise_id;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address mac_address
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets host_name
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string $host_name host_name
     *
     * @return $this
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets os
     *
     * @return int
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param int $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets os_name
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->container['os_name'];
    }

    /**
     * Sets os_name
     *
     * @param string $os_name os_name
     *
     * @return $this
     */
    public function setOsName($os_name)
    {
        $this->container['os_name'] = $os_name;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string $os_version os_version
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type device_type
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string $device_model device_model
     *
     * @return $this
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets last_contact
     *
     * @return \DateTime
     */
    public function getLastContact()
    {
        return $this->container['last_contact'];
    }

    /**
     * Sets last_contact
     *
     * @param \DateTime $last_contact last_contact
     *
     * @return $this
     */
    public function setLastContact($last_contact)
    {
        $this->container['last_contact'] = $last_contact;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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

