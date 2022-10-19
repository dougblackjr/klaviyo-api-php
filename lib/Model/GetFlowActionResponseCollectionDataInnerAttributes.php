<?php
/**
 * GetFlowActionResponseCollectionDataInnerAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2022-10-17
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * GetFlowActionResponseCollectionDataInnerAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFlowActionResponseCollectionDataInnerAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFlowActionResponseCollection_data_inner_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_type' => 'string',
        'status' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'settings' => 'object',
        'tracking_options' => '\KlaviyoAPI\Model\GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions',
        'send_options' => '\KlaviyoAPI\Model\SendOptions',
        'render_options' => '\KlaviyoAPI\Model\SMSRenderOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_type' => null,
        'status' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'settings' => null,
        'tracking_options' => null,
        'send_options' => null,
        'render_options' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action_type' => 'action_type',
        'status' => 'status',
        'created' => 'created',
        'updated' => 'updated',
        'settings' => 'settings',
        'tracking_options' => 'tracking_options',
        'send_options' => 'send_options',
        'render_options' => 'render_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'settings' => 'setSettings',
        'tracking_options' => 'setTrackingOptions',
        'send_options' => 'setSendOptions',
        'render_options' => 'setRenderOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'settings' => 'getSettings',
        'tracking_options' => 'getTrackingOptions',
        'send_options' => 'getSendOptions',
        'render_options' => 'getRenderOptions'
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
        return self::$openAPIModelName;
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
        $this->container['action_type'] = $data['action_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['tracking_options'] = $data['tracking_options'] ?? null;
        $this->container['send_options'] = $data['send_options'] ?? null;
        $this->container['render_options'] = $data['render_options'] ?? null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets action_type
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string|null $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return object|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param object|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets tracking_options
     *
     * @return \KlaviyoAPI\Model\GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions|null
     */
    public function getTrackingOptions()
    {
        return $this->container['tracking_options'];
    }

    /**
     * Sets tracking_options
     *
     * @param \KlaviyoAPI\Model\GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions|null $tracking_options tracking_options
     *
     * @return self
     */
    public function setTrackingOptions($tracking_options)
    {
        $this->container['tracking_options'] = $tracking_options;

        return $this;
    }

    /**
     * Gets send_options
     *
     * @return \KlaviyoAPI\Model\SendOptions|null
     */
    public function getSendOptions()
    {
        return $this->container['send_options'];
    }

    /**
     * Sets send_options
     *
     * @param \KlaviyoAPI\Model\SendOptions|null $send_options send_options
     *
     * @return self
     */
    public function setSendOptions($send_options)
    {
        $this->container['send_options'] = $send_options;

        return $this;
    }

    /**
     * Gets render_options
     *
     * @return \KlaviyoAPI\Model\SMSRenderOptions|null
     */
    public function getRenderOptions()
    {
        return $this->container['render_options'];
    }

    /**
     * Sets render_options
     *
     * @param \KlaviyoAPI\Model\SMSRenderOptions|null $render_options render_options
     *
     * @return self
     */
    public function setRenderOptions($render_options)
    {
        $this->container['render_options'] = $render_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


