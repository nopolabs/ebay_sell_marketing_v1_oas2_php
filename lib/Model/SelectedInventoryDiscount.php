<?php
/**
 * SelectedInventoryDiscount
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * The Marketing API offers two platforms that let sellers promote and advertise their products: Promoted Listings is an eBay ad service that lets sellers set up ad campaigns for the products they want to promote. eBay displays the ads in search results and in other marketing modules as SPONSORED listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage of the sales price. For complete details, see Promoted Listings. Promotions Manager gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as &quot;20% off&quot; and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion teasers throughout buyer flows. For complete details, see Promotions Manager. Marketing reports, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts. Important! Sellers must have an active eBay Store subscription, and they must accept the Terms and Conditions before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the &quot;requirements and restrictions&quot; sections for Promoted Listings and Promotions Manager. The table below lists all the Marketing API calls grouped by resource.
 *
 * OpenAPI spec version: v1.4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Marketing\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Marketing\ObjectSerializer;

/**
 * SelectedInventoryDiscount Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields that describe the discounts applied to a set of inventory items and the order in which the selection rules are applied.
 * @package  Nopolabs\EBay\Sell\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SelectedInventoryDiscount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SelectedInventoryDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_benefit' => '\Nopolabs\EBay\Sell\Marketing\Model\DiscountBenefit',
        'discount_id' => 'string',
        'inventory_criterion' => '\Nopolabs\EBay\Sell\Marketing\Model\InventoryCriterion',
        'rule_order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_benefit' => null,
        'discount_id' => null,
        'inventory_criterion' => null,
        'rule_order' => null
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
        'discount_benefit' => 'discountBenefit',
        'discount_id' => 'discountId',
        'inventory_criterion' => 'inventoryCriterion',
        'rule_order' => 'ruleOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_benefit' => 'setDiscountBenefit',
        'discount_id' => 'setDiscountId',
        'inventory_criterion' => 'setInventoryCriterion',
        'rule_order' => 'setRuleOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_benefit' => 'getDiscountBenefit',
        'discount_id' => 'getDiscountId',
        'inventory_criterion' => 'getInventoryCriterion',
        'rule_order' => 'getRuleOrder'
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
        $this->container['discount_benefit'] = isset($data['discount_benefit']) ? $data['discount_benefit'] : null;
        $this->container['discount_id'] = isset($data['discount_id']) ? $data['discount_id'] : null;
        $this->container['inventory_criterion'] = isset($data['inventory_criterion']) ? $data['inventory_criterion'] : null;
        $this->container['rule_order'] = isset($data['rule_order']) ? $data['rule_order'] : null;
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
     * Gets discount_benefit
     *
     * @return \Nopolabs\EBay\Sell\Marketing\Model\DiscountBenefit
     */
    public function getDiscountBenefit()
    {
        return $this->container['discount_benefit'];
    }

    /**
     * Sets discount_benefit
     *
     * @param \Nopolabs\EBay\Sell\Marketing\Model\DiscountBenefit $discount_benefit discount_benefit
     *
     * @return $this
     */
    public function setDiscountBenefit($discount_benefit)
    {
        $this->container['discount_benefit'] = $discount_benefit;

        return $this;
    }

    /**
     * Gets discount_id
     *
     * @return string
     */
    public function getDiscountId()
    {
        return $this->container['discount_id'];
    }

    /**
     * Sets discount_id
     *
     * @param string $discount_id A unique, eBay-generated ID that you can use to identify the discount. This field is ignored in POST and PUT operations.
     *
     * @return $this
     */
    public function setDiscountId($discount_id)
    {
        $this->container['discount_id'] = $discount_id;

        return $this;
    }

    /**
     * Gets inventory_criterion
     *
     * @return \Nopolabs\EBay\Sell\Marketing\Model\InventoryCriterion
     */
    public function getInventoryCriterion()
    {
        return $this->container['inventory_criterion'];
    }

    /**
     * Sets inventory_criterion
     *
     * @param \Nopolabs\EBay\Sell\Marketing\Model\InventoryCriterion $inventory_criterion inventory_criterion
     *
     * @return $this
     */
    public function setInventoryCriterion($inventory_criterion)
    {
        $this->container['inventory_criterion'] = $inventory_criterion;

        return $this;
    }

    /**
     * Gets rule_order
     *
     * @return int
     */
    public function getRuleOrder()
    {
        return $this->container['rule_order'];
    }

    /**
     * Sets rule_order
     *
     * @param int $rule_order This field is reserved for future use.
     *
     * @return $this
     */
    public function setRuleOrder($rule_order)
    {
        $this->container['rule_order'] = $rule_order;

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


