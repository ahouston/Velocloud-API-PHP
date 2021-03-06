<?php
/**
 * EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem
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
 * EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_proxy_get_enterprise_proxy_operator_profiles_result_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
        'description' => 'string',
        'edge_count' => 'int',
        'effective' => 'string',
        'id' => 'int',
        'modified' => 'string',
        'modules' => '\Swagger\Client\Model\ConfigurationModule[]',
        'name' => 'string',
        'version' => 'string',
        'edges' => '\Swagger\Client\Model\EdgeObject[]',
        'enterprises' => '\Swagger\Client\Model\ConfigurationEnterprise[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => null,
        'description' => null,
        'edge_count' => null,
        'effective' => null,
        'id' => null,
        'modified' => null,
        'modules' => null,
        'name' => null,
        'version' => null,
        'edges' => null,
        'enterprises' => null
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
        'created' => 'created',
        'description' => 'description',
        'edge_count' => 'edgeCount',
        'effective' => 'effective',
        'id' => 'id',
        'modified' => 'modified',
        'modules' => 'modules',
        'name' => 'name',
        'version' => 'version',
        'edges' => 'edges',
        'enterprises' => 'enterprises'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'description' => 'setDescription',
        'edge_count' => 'setEdgeCount',
        'effective' => 'setEffective',
        'id' => 'setId',
        'modified' => 'setModified',
        'modules' => 'setModules',
        'name' => 'setName',
        'version' => 'setVersion',
        'edges' => 'setEdges',
        'enterprises' => 'setEnterprises'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'description' => 'getDescription',
        'edge_count' => 'getEdgeCount',
        'effective' => 'getEffective',
        'id' => 'getId',
        'modified' => 'getModified',
        'modules' => 'getModules',
        'name' => 'getName',
        'version' => 'getVersion',
        'edges' => 'getEdges',
        'enterprises' => 'getEnterprises'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['edge_count'] = isset($data['edge_count']) ? $data['edge_count'] : null;
        $this->container['effective'] = isset($data['effective']) ? $data['effective'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['edges'] = isset($data['edges']) ? $data['edges'] : null;
        $this->container['enterprises'] = isset($data['enterprises']) ? $data['enterprises'] : null;
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
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets edge_count
     *
     * @return int
     */
    public function getEdgeCount()
    {
        return $this->container['edge_count'];
    }

    /**
     * Sets edge_count
     *
     * @param int $edge_count edge_count
     *
     * @return $this
     */
    public function setEdgeCount($edge_count)
    {
        $this->container['edge_count'] = $edge_count;

        return $this;
    }

    /**
     * Gets effective
     *
     * @return string
     */
    public function getEffective()
    {
        return $this->container['effective'];
    }

    /**
     * Sets effective
     *
     * @param string $effective effective
     *
     * @return $this
     */
    public function setEffective($effective)
    {
        $this->container['effective'] = $effective;

        return $this;
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
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return \Swagger\Client\Model\ConfigurationModule[]
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param \Swagger\Client\Model\ConfigurationModule[] $modules modules
     *
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets edges
     *
     * @return \Swagger\Client\Model\EdgeObject[]
     */
    public function getEdges()
    {
        return $this->container['edges'];
    }

    /**
     * Sets edges
     *
     * @param \Swagger\Client\Model\EdgeObject[] $edges edges
     *
     * @return $this
     */
    public function setEdges($edges)
    {
        $this->container['edges'] = $edges;

        return $this;
    }

    /**
     * Gets enterprises
     *
     * @return \Swagger\Client\Model\ConfigurationEnterprise[]
     */
    public function getEnterprises()
    {
        return $this->container['enterprises'];
    }

    /**
     * Sets enterprises
     *
     * @param \Swagger\Client\Model\ConfigurationEnterprise[] $enterprises enterprises
     *
     * @return $this
     */
    public function setEnterprises($enterprises)
    {
        $this->container['enterprises'] = $enterprises;

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


