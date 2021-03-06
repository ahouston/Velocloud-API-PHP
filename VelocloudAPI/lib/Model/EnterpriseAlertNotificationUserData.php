<?php
/**
 * EnterpriseAlertNotificationUserData
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
 * EnterpriseAlertNotificationUserData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseAlertNotificationUserData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_alert_notification_user_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'email_enabled' => 'int',
        'enabled' => 'int',
        'enterprise_user_id' => 'int',
        'mobile_enabled' => 'int',
        'mobile_phone' => 'string',
        'sms_enabled' => 'int',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'email_enabled' => null,
        'enabled' => null,
        'enterprise_user_id' => null,
        'mobile_enabled' => null,
        'mobile_phone' => null,
        'sms_enabled' => null,
        'username' => null
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
        'email' => 'email',
        'email_enabled' => 'emailEnabled',
        'enabled' => 'enabled',
        'enterprise_user_id' => 'enterpriseUserId',
        'mobile_enabled' => 'mobileEnabled',
        'mobile_phone' => 'mobilePhone',
        'sms_enabled' => 'smsEnabled',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'email_enabled' => 'setEmailEnabled',
        'enabled' => 'setEnabled',
        'enterprise_user_id' => 'setEnterpriseUserId',
        'mobile_enabled' => 'setMobileEnabled',
        'mobile_phone' => 'setMobilePhone',
        'sms_enabled' => 'setSmsEnabled',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'email_enabled' => 'getEmailEnabled',
        'enabled' => 'getEnabled',
        'enterprise_user_id' => 'getEnterpriseUserId',
        'mobile_enabled' => 'getMobileEnabled',
        'mobile_phone' => 'getMobilePhone',
        'sms_enabled' => 'getSmsEnabled',
        'username' => 'getUsername'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_enabled'] = isset($data['email_enabled']) ? $data['email_enabled'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['enterprise_user_id'] = isset($data['enterprise_user_id']) ? $data['enterprise_user_id'] : null;
        $this->container['mobile_enabled'] = isset($data['mobile_enabled']) ? $data['mobile_enabled'] : null;
        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['sms_enabled'] = isset($data['sms_enabled']) ? $data['sms_enabled'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['email_enabled'] === null) {
            $invalidProperties[] = "'email_enabled' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['enterprise_user_id'] === null) {
            $invalidProperties[] = "'enterprise_user_id' can't be null";
        }
        if ($this->container['mobile_enabled'] === null) {
            $invalidProperties[] = "'mobile_enabled' can't be null";
        }
        if ($this->container['mobile_phone'] === null) {
            $invalidProperties[] = "'mobile_phone' can't be null";
        }
        if ($this->container['sms_enabled'] === null) {
            $invalidProperties[] = "'sms_enabled' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
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

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['email_enabled'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        if ($this->container['enterprise_user_id'] === null) {
            return false;
        }
        if ($this->container['mobile_enabled'] === null) {
            return false;
        }
        if ($this->container['mobile_phone'] === null) {
            return false;
        }
        if ($this->container['sms_enabled'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_enabled
     *
     * @return int
     */
    public function getEmailEnabled()
    {
        return $this->container['email_enabled'];
    }

    /**
     * Sets email_enabled
     *
     * @param int $email_enabled email_enabled
     *
     * @return $this
     */
    public function setEmailEnabled($email_enabled)
    {
        $this->container['email_enabled'] = $email_enabled;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param int $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enterprise_user_id
     *
     * @return int
     */
    public function getEnterpriseUserId()
    {
        return $this->container['enterprise_user_id'];
    }

    /**
     * Sets enterprise_user_id
     *
     * @param int $enterprise_user_id enterprise_user_id
     *
     * @return $this
     */
    public function setEnterpriseUserId($enterprise_user_id)
    {
        $this->container['enterprise_user_id'] = $enterprise_user_id;

        return $this;
    }

    /**
     * Gets mobile_enabled
     *
     * @return int
     */
    public function getMobileEnabled()
    {
        return $this->container['mobile_enabled'];
    }

    /**
     * Sets mobile_enabled
     *
     * @param int $mobile_enabled mobile_enabled
     *
     * @return $this
     */
    public function setMobileEnabled($mobile_enabled)
    {
        $this->container['mobile_enabled'] = $mobile_enabled;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string $mobile_phone mobile_phone
     *
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets sms_enabled
     *
     * @return int
     */
    public function getSmsEnabled()
    {
        return $this->container['sms_enabled'];
    }

    /**
     * Sets sms_enabled
     *
     * @param int $sms_enabled sms_enabled
     *
     * @return $this
     */
    public function setSmsEnabled($sms_enabled)
    {
        $this->container['sms_enabled'] = $sms_enabled;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


