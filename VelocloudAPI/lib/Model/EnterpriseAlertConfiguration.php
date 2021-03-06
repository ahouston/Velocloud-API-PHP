<?php
/**
 * EnterpriseAlertConfiguration
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
 * EnterpriseAlertConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseAlertConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_alert_configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'alert_definition_id' => 'int',
        'enterprise_id' => 'int',
        'enabled' => 'bool',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'definition' => '\Swagger\Client\Model\EnterpriseAlertDefinition',
        'first_notification_seconds' => 'int',
        'max_notifications' => 'int',
        'notification_interval_seconds' => 'int',
        'reset_interval_seconds' => 'int',
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
        'alert_definition_id' => null,
        'enterprise_id' => null,
        'enabled' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'definition' => null,
        'first_notification_seconds' => null,
        'max_notifications' => null,
        'notification_interval_seconds' => null,
        'reset_interval_seconds' => null,
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
        'alert_definition_id' => 'alertDefinitionId',
        'enterprise_id' => 'enterpriseId',
        'enabled' => 'enabled',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'definition' => 'definition',
        'first_notification_seconds' => 'firstNotificationSeconds',
        'max_notifications' => 'maxNotifications',
        'notification_interval_seconds' => 'notificationIntervalSeconds',
        'reset_interval_seconds' => 'resetIntervalSeconds',
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
        'alert_definition_id' => 'setAlertDefinitionId',
        'enterprise_id' => 'setEnterpriseId',
        'enabled' => 'setEnabled',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'definition' => 'setDefinition',
        'first_notification_seconds' => 'setFirstNotificationSeconds',
        'max_notifications' => 'setMaxNotifications',
        'notification_interval_seconds' => 'setNotificationIntervalSeconds',
        'reset_interval_seconds' => 'setResetIntervalSeconds',
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
        'alert_definition_id' => 'getAlertDefinitionId',
        'enterprise_id' => 'getEnterpriseId',
        'enabled' => 'getEnabled',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'definition' => 'getDefinition',
        'first_notification_seconds' => 'getFirstNotificationSeconds',
        'max_notifications' => 'getMaxNotifications',
        'notification_interval_seconds' => 'getNotificationIntervalSeconds',
        'reset_interval_seconds' => 'getResetIntervalSeconds',
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

    const NAME_EDGE_DOWN = 'EDGE_DOWN';
    const NAME_EDGE_UP = 'EDGE_UP';
    const NAME_LINK_DOWN = 'LINK_DOWN';
    const NAME_LINK_UP = 'LINK_UP';
    const NAME_VPN_TUNNEL_DOWN = 'VPN_TUNNEL_DOWN';
    const NAME_EDGE_HA_FAILOVER = 'EDGE_HA_FAILOVER';
    const NAME_EDGE_SERVICE_DOWN = 'EDGE_SERVICE_DOWN';
    const NAME_GATEWAY_SERVICE_DOWN = 'GATEWAY_SERVICE_DOWN';
    const NAME_TEST_ALERT = 'TEST_ALERT';
    const TYPE_EDGE_DOWN = 'EDGE_DOWN';
    const TYPE_EDGE_UP = 'EDGE_UP';
    const TYPE_LINK_DOWN = 'LINK_DOWN';
    const TYPE_LINK_UP = 'LINK_UP';
    const TYPE_VPN_TUNNEL_DOWN = 'VPN_TUNNEL_DOWN';
    const TYPE_EDGE_HA_FAILOVER = 'EDGE_HA_FAILOVER';
    const TYPE_EDGE_SERVICE_DOWN = 'EDGE_SERVICE_DOWN';
    const TYPE_GATEWAY_SERVICE_DOWN = 'GATEWAY_SERVICE_DOWN';
    const TYPE_TEST_ALERT = 'TEST_ALERT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_EDGE_DOWN,
            self::NAME_EDGE_UP,
            self::NAME_LINK_DOWN,
            self::NAME_LINK_UP,
            self::NAME_VPN_TUNNEL_DOWN,
            self::NAME_EDGE_HA_FAILOVER,
            self::NAME_EDGE_SERVICE_DOWN,
            self::NAME_GATEWAY_SERVICE_DOWN,
            self::NAME_TEST_ALERT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EDGE_DOWN,
            self::TYPE_EDGE_UP,
            self::TYPE_LINK_DOWN,
            self::TYPE_LINK_UP,
            self::TYPE_VPN_TUNNEL_DOWN,
            self::TYPE_EDGE_HA_FAILOVER,
            self::TYPE_EDGE_SERVICE_DOWN,
            self::TYPE_GATEWAY_SERVICE_DOWN,
            self::TYPE_TEST_ALERT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['alert_definition_id'] = isset($data['alert_definition_id']) ? $data['alert_definition_id'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['first_notification_seconds'] = isset($data['first_notification_seconds']) ? $data['first_notification_seconds'] : null;
        $this->container['max_notifications'] = isset($data['max_notifications']) ? $data['max_notifications'] : null;
        $this->container['notification_interval_seconds'] = isset($data['notification_interval_seconds']) ? $data['notification_interval_seconds'] : null;
        $this->container['reset_interval_seconds'] = isset($data['reset_interval_seconds']) ? $data['reset_interval_seconds'] : null;
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

        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($this->container['name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($this->container['name'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
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
     * Gets alert_definition_id
     *
     * @return int
     */
    public function getAlertDefinitionId()
    {
        return $this->container['alert_definition_id'];
    }

    /**
     * Sets alert_definition_id
     *
     * @param int $alert_definition_id alert_definition_id
     *
     * @return $this
     */
    public function setAlertDefinitionId($alert_definition_id)
    {
        $this->container['alert_definition_id'] = $alert_definition_id;

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
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($name) && !in_array($name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name'] = $name;

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
     * Gets definition
     *
     * @return \Swagger\Client\Model\EnterpriseAlertDefinition
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param \Swagger\Client\Model\EnterpriseAlertDefinition $definition definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets first_notification_seconds
     *
     * @return int
     */
    public function getFirstNotificationSeconds()
    {
        return $this->container['first_notification_seconds'];
    }

    /**
     * Sets first_notification_seconds
     *
     * @param int $first_notification_seconds first_notification_seconds
     *
     * @return $this
     */
    public function setFirstNotificationSeconds($first_notification_seconds)
    {
        $this->container['first_notification_seconds'] = $first_notification_seconds;

        return $this;
    }

    /**
     * Gets max_notifications
     *
     * @return int
     */
    public function getMaxNotifications()
    {
        return $this->container['max_notifications'];
    }

    /**
     * Sets max_notifications
     *
     * @param int $max_notifications max_notifications
     *
     * @return $this
     */
    public function setMaxNotifications($max_notifications)
    {
        $this->container['max_notifications'] = $max_notifications;

        return $this;
    }

    /**
     * Gets notification_interval_seconds
     *
     * @return int
     */
    public function getNotificationIntervalSeconds()
    {
        return $this->container['notification_interval_seconds'];
    }

    /**
     * Sets notification_interval_seconds
     *
     * @param int $notification_interval_seconds notification_interval_seconds
     *
     * @return $this
     */
    public function setNotificationIntervalSeconds($notification_interval_seconds)
    {
        $this->container['notification_interval_seconds'] = $notification_interval_seconds;

        return $this;
    }

    /**
     * Gets reset_interval_seconds
     *
     * @return int
     */
    public function getResetIntervalSeconds()
    {
        return $this->container['reset_interval_seconds'];
    }

    /**
     * Sets reset_interval_seconds
     *
     * @param int $reset_interval_seconds reset_interval_seconds
     *
     * @return $this
     */
    public function setResetIntervalSeconds($reset_interval_seconds)
    {
        $this->container['reset_interval_seconds'] = $reset_interval_seconds;

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


