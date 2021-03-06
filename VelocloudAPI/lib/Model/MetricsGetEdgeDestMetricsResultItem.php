<?php
/**
 * MetricsGetEdgeDestMetricsResultItem
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
 * MetricsGetEdgeDestMetricsResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MetricsGetEdgeDestMetricsResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'metrics_get_edge_dest_metrics_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bytes_rx' => 'int',
        'bytes_tx' => 'int',
        'flow_count' => 'int',
        'packets_rx' => 'int',
        'packets_tx' => 'int',
        'total_bytes' => 'int',
        'total_packets' => 'int',
        'dest_domain' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bytes_rx' => null,
        'bytes_tx' => null,
        'flow_count' => null,
        'packets_rx' => null,
        'packets_tx' => null,
        'total_bytes' => null,
        'total_packets' => null,
        'dest_domain' => null,
        'name' => null
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
        'bytes_rx' => 'bytesRx',
        'bytes_tx' => 'bytesTx',
        'flow_count' => 'flowCount',
        'packets_rx' => 'packetsRx',
        'packets_tx' => 'packetsTx',
        'total_bytes' => 'totalBytes',
        'total_packets' => 'totalPackets',
        'dest_domain' => 'destDomain',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bytes_rx' => 'setBytesRx',
        'bytes_tx' => 'setBytesTx',
        'flow_count' => 'setFlowCount',
        'packets_rx' => 'setPacketsRx',
        'packets_tx' => 'setPacketsTx',
        'total_bytes' => 'setTotalBytes',
        'total_packets' => 'setTotalPackets',
        'dest_domain' => 'setDestDomain',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bytes_rx' => 'getBytesRx',
        'bytes_tx' => 'getBytesTx',
        'flow_count' => 'getFlowCount',
        'packets_rx' => 'getPacketsRx',
        'packets_tx' => 'getPacketsTx',
        'total_bytes' => 'getTotalBytes',
        'total_packets' => 'getTotalPackets',
        'dest_domain' => 'getDestDomain',
        'name' => 'getName'
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
        $this->container['bytes_rx'] = isset($data['bytes_rx']) ? $data['bytes_rx'] : null;
        $this->container['bytes_tx'] = isset($data['bytes_tx']) ? $data['bytes_tx'] : null;
        $this->container['flow_count'] = isset($data['flow_count']) ? $data['flow_count'] : null;
        $this->container['packets_rx'] = isset($data['packets_rx']) ? $data['packets_rx'] : null;
        $this->container['packets_tx'] = isset($data['packets_tx']) ? $data['packets_tx'] : null;
        $this->container['total_bytes'] = isset($data['total_bytes']) ? $data['total_bytes'] : null;
        $this->container['total_packets'] = isset($data['total_packets']) ? $data['total_packets'] : null;
        $this->container['dest_domain'] = isset($data['dest_domain']) ? $data['dest_domain'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dest_domain'] === null) {
            $invalidProperties[] = "'dest_domain' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

        if ($this->container['dest_domain'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bytes_rx
     *
     * @return int
     */
    public function getBytesRx()
    {
        return $this->container['bytes_rx'];
    }

    /**
     * Sets bytes_rx
     *
     * @param int $bytes_rx bytes_rx
     *
     * @return $this
     */
    public function setBytesRx($bytes_rx)
    {
        $this->container['bytes_rx'] = $bytes_rx;

        return $this;
    }

    /**
     * Gets bytes_tx
     *
     * @return int
     */
    public function getBytesTx()
    {
        return $this->container['bytes_tx'];
    }

    /**
     * Sets bytes_tx
     *
     * @param int $bytes_tx bytes_tx
     *
     * @return $this
     */
    public function setBytesTx($bytes_tx)
    {
        $this->container['bytes_tx'] = $bytes_tx;

        return $this;
    }

    /**
     * Gets flow_count
     *
     * @return int
     */
    public function getFlowCount()
    {
        return $this->container['flow_count'];
    }

    /**
     * Sets flow_count
     *
     * @param int $flow_count flow_count
     *
     * @return $this
     */
    public function setFlowCount($flow_count)
    {
        $this->container['flow_count'] = $flow_count;

        return $this;
    }

    /**
     * Gets packets_rx
     *
     * @return int
     */
    public function getPacketsRx()
    {
        return $this->container['packets_rx'];
    }

    /**
     * Sets packets_rx
     *
     * @param int $packets_rx packets_rx
     *
     * @return $this
     */
    public function setPacketsRx($packets_rx)
    {
        $this->container['packets_rx'] = $packets_rx;

        return $this;
    }

    /**
     * Gets packets_tx
     *
     * @return int
     */
    public function getPacketsTx()
    {
        return $this->container['packets_tx'];
    }

    /**
     * Sets packets_tx
     *
     * @param int $packets_tx packets_tx
     *
     * @return $this
     */
    public function setPacketsTx($packets_tx)
    {
        $this->container['packets_tx'] = $packets_tx;

        return $this;
    }

    /**
     * Gets total_bytes
     *
     * @return int
     */
    public function getTotalBytes()
    {
        return $this->container['total_bytes'];
    }

    /**
     * Sets total_bytes
     *
     * @param int $total_bytes total_bytes
     *
     * @return $this
     */
    public function setTotalBytes($total_bytes)
    {
        $this->container['total_bytes'] = $total_bytes;

        return $this;
    }

    /**
     * Gets total_packets
     *
     * @return int
     */
    public function getTotalPackets()
    {
        return $this->container['total_packets'];
    }

    /**
     * Sets total_packets
     *
     * @param int $total_packets total_packets
     *
     * @return $this
     */
    public function setTotalPackets($total_packets)
    {
        $this->container['total_packets'] = $total_packets;

        return $this;
    }

    /**
     * Gets dest_domain
     *
     * @return string
     */
    public function getDestDomain()
    {
        return $this->container['dest_domain'];
    }

    /**
     * Sets dest_domain
     *
     * @param string $dest_domain dest_domain
     *
     * @return $this
     */
    public function setDestDomain($dest_domain)
    {
        $this->container['dest_domain'] = $dest_domain;

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


