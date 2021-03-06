<?php
/**
 * DiscountBenefit
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
 * DiscountBenefit Class Doc Comment
 *
 * @category Class
 * @description This container defines the promotional discount as either a monetary amount or a percentage of the sales price.  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Important!:&lt;/b&gt; You must populate one and only one of the fields in this container: &lt;ul&gt;&lt;li&gt;&lt;b&gt;amountOffItem&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;amountOffOrder&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;percentageOffItem&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;percentageOffOrder&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/p&gt;  &lt;p&gt;&lt;b&gt;Tip:&lt;/b&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/sell/static/marketing/ip-specifying-discounts.html\&quot;&gt;Configuring discounts for threshold promotions&lt;/a&gt; for information and examples on how to combine &lt;b&gt;discountBenefit&lt;/b&gt; and &lt;b&gt;discountSpecification&lt;/b&gt; values to create different types of promotions.&lt;/p&gt;
 * @package  Nopolabs\EBay\Sell\Marketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountBenefit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscountBenefit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_off_item' => '\Nopolabs\EBay\Sell\Marketing\Model\Amount',
        'amount_off_order' => '\Nopolabs\EBay\Sell\Marketing\Model\Amount',
        'percentage_off_item' => 'string',
        'percentage_off_order' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_off_item' => null,
        'amount_off_order' => null,
        'percentage_off_item' => null,
        'percentage_off_order' => null
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
        'amount_off_item' => 'amountOffItem',
        'amount_off_order' => 'amountOffOrder',
        'percentage_off_item' => 'percentageOffItem',
        'percentage_off_order' => 'percentageOffOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_off_item' => 'setAmountOffItem',
        'amount_off_order' => 'setAmountOffOrder',
        'percentage_off_item' => 'setPercentageOffItem',
        'percentage_off_order' => 'setPercentageOffOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_off_item' => 'getAmountOffItem',
        'amount_off_order' => 'getAmountOffOrder',
        'percentage_off_item' => 'getPercentageOffItem',
        'percentage_off_order' => 'getPercentageOffOrder'
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
        $this->container['amount_off_item'] = isset($data['amount_off_item']) ? $data['amount_off_item'] : null;
        $this->container['amount_off_order'] = isset($data['amount_off_order']) ? $data['amount_off_order'] : null;
        $this->container['percentage_off_item'] = isset($data['percentage_off_item']) ? $data['percentage_off_item'] : null;
        $this->container['percentage_off_order'] = isset($data['percentage_off_order']) ? $data['percentage_off_order'] : null;
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
     * Gets amount_off_item
     *
     * @return \Nopolabs\EBay\Sell\Marketing\Model\Amount
     */
    public function getAmountOffItem()
    {
        return $this->container['amount_off_item'];
    }

    /**
     * Sets amount_off_item
     *
     * @param \Nopolabs\EBay\Sell\Marketing\Model\Amount $amount_off_item amount_off_item
     *
     * @return $this
     */
    public function setAmountOffItem($amount_off_item)
    {
        $this->container['amount_off_item'] = $amount_off_item;

        return $this;
    }

    /**
     * Gets amount_off_order
     *
     * @return \Nopolabs\EBay\Sell\Marketing\Model\Amount
     */
    public function getAmountOffOrder()
    {
        return $this->container['amount_off_order'];
    }

    /**
     * Sets amount_off_order
     *
     * @param \Nopolabs\EBay\Sell\Marketing\Model\Amount $amount_off_order amount_off_order
     *
     * @return $this
     */
    public function setAmountOffOrder($amount_off_order)
    {
        $this->container['amount_off_order'] = $amount_off_order;

        return $this;
    }

    /**
     * Gets percentage_off_item
     *
     * @return string
     */
    public function getPercentageOffItem()
    {
        return $this->container['percentage_off_item'];
    }

    /**
     * Sets percentage_off_item
     *
     * @param string $percentage_off_item The percentage of the sales price that is discounted off the promoted item (or items) when the promotion criteria is met. Valid integer values for percentage off: &nbsp;&nbsp;Min: 5 &nbsp;&nbsp;Max: 80
     *
     * @return $this
     */
    public function setPercentageOffItem($percentage_off_item)
    {
        $this->container['percentage_off_item'] = $percentage_off_item;

        return $this;
    }

    /**
     * Gets percentage_off_order
     *
     * @return string
     */
    public function getPercentageOffOrder()
    {
        return $this->container['percentage_off_order'];
    }

    /**
     * Sets percentage_off_order
     *
     * @param string $percentage_off_order Used for threshold promotions, this is the percentage of the order price that is discounted off the order when the promotion criteria is met. This field is not value for markdown promotions. Valid integer values for percentage off: &nbsp;&nbsp;Min: 5 &nbsp;&nbsp;Max: 80
     *
     * @return $this
     */
    public function setPercentageOffOrder($percentage_off_order)
    {
        $this->container['percentage_off_order'] = $percentage_off_order;

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


