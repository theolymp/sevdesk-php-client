<?php
/**
 * ModelInvoiceFactory
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  <br />The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ispserverfarm\sevdesk\phpclient\Model;

use \ArrayAccess;

/**
 * ModelInvoiceFactory Class Doc Comment
 *
 * @category    Class
 * @description Below are the models which can be used for the functions in Invoice/Factory.php. Beware that you need to use them without the underscore at the beginning!
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelInvoiceFactory implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Invoice_Factory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice' => '\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice',
        'invoice_pos_save' => '\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice',
        'invoice_pos_delete' => '\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice',
        'discount_save' => '\ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts',
        'discount_delete' => '\ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice' => null,
        'invoice_pos_save' => null,
        'invoice_pos_delete' => null,
        'discount_save' => null,
        'discount_delete' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice' => 'invoice',
        'invoice_pos_save' => 'invoicePosSave[]',
        'invoice_pos_delete' => 'invoicePosDelete[]',
        'discount_save' => 'discountSave[]',
        'discount_delete' => 'discountDelete[]'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'invoice' => 'setInvoice',
        'invoice_pos_save' => 'setInvoicePosSave',
        'invoice_pos_delete' => 'setInvoicePosDelete',
        'discount_save' => 'setDiscountSave',
        'discount_delete' => 'setDiscountDelete'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'invoice' => 'getInvoice',
        'invoice_pos_save' => 'getInvoicePosSave',
        'invoice_pos_delete' => 'getInvoicePosDelete',
        'discount_save' => 'getDiscountSave',
        'discount_delete' => 'getDiscountDelete'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['invoice_pos_save'] = isset($data['invoice_pos_save']) ? $data['invoice_pos_save'] : null;
        $this->container['invoice_pos_delete'] = isset($data['invoice_pos_delete']) ? $data['invoice_pos_delete'] : null;
        $this->container['discount_save'] = isset($data['discount_save']) ? $data['discount_save'] : null;
        $this->container['discount_delete'] = isset($data['discount_delete']) ? $data['discount_delete'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets invoice
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice $invoice the Model_Invoice to create/update
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets invoice_pos_save
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice
     */
    public function getInvoicePosSave()
    {
        return $this->container['invoice_pos_save'];
    }

    /**
     * Sets invoice_pos_save
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice $invoice_pos_save the Model_InvoicePos to create/update
     * @return $this
     */
    public function setInvoicePosSave($invoice_pos_save)
    {
        $this->container['invoice_pos_save'] = $invoice_pos_save;

        return $this;
    }

    /**
     * Gets invoice_pos_delete
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice
     */
    public function getInvoicePosDelete()
    {
        return $this->container['invoice_pos_delete'];
    }

    /**
     * Sets invoice_pos_delete
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice $invoice_pos_delete the Model_InvoicePos to delete
     * @return $this
     */
    public function setInvoicePosDelete($invoice_pos_delete)
    {
        $this->container['invoice_pos_delete'] = $invoice_pos_delete;

        return $this;
    }

    /**
     * Gets discount_save
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts
     */
    public function getDiscountSave()
    {
        return $this->container['discount_save'];
    }

    /**
     * Sets discount_save
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts $discount_save the Model_Discounts to create/update
     * @return $this
     */
    public function setDiscountSave($discount_save)
    {
        $this->container['discount_save'] = $discount_save;

        return $this;
    }

    /**
     * Gets discount_delete
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts
     */
    public function getDiscountDelete()
    {
        return $this->container['discount_delete'];
    }

    /**
     * Sets discount_delete
     * @param \ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts $discount_delete the Model_Discounts to delete
     * @return $this
     */
    public function setDiscountDelete($discount_delete)
    {
        $this->container['discount_delete'] = $discount_delete;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


