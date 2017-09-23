<?php
/**
 * ModelAsset
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
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
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

namespace ispserverfarm\sevdesk\phpclient\sevDeskModel;

use \ArrayAccess;

/**
 * ModelAsset Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelAsset implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_voucher_pos' => '\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelVoucherPos',
        '_name' => 'string',
        '_sev_client' => 'object',
        '_useful_life' => 'int',
        '_acquisition_date' => '\DateTime',
        '_purchase_price' => 'float',
        '_purchase_price_accounting' => 'float',
        '_tax_rate' => 'float',
        '_asset_number' => 'string',
        '_accounting_type' => '\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType',
        '_status' => 'int',
        '_enshrined' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_voucher_pos' => null,
        '_name' => null,
        '_sev_client' => null,
        '_useful_life' => null,
        '_acquisition_date' => 'date-time',
        '_purchase_price' => 'float',
        '_purchase_price_accounting' => 'float',
        '_tax_rate' => 'float',
        '_asset_number' => null,
        '_accounting_type' => null,
        '_status' => null,
        '_enshrined' => null
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
        '_create' => '_create',
        '_update' => '_update',
        '_voucher_pos' => '_voucherPos',
        '_name' => '_name',
        '_sev_client' => '_sevClient',
        '_useful_life' => '_usefulLife',
        '_acquisition_date' => '_acquisitionDate',
        '_purchase_price' => '_purchasePrice',
        '_purchase_price_accounting' => '_purchasePriceAccounting',
        '_tax_rate' => '_taxRate',
        '_asset_number' => '_assetNumber',
        '_accounting_type' => '_accountingType',
        '_status' => '_status',
        '_enshrined' => '_enshrined'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_voucher_pos' => 'setVoucherPos',
        '_name' => 'setName',
        '_sev_client' => 'setSevClient',
        '_useful_life' => 'setUsefulLife',
        '_acquisition_date' => 'setAcquisitionDate',
        '_purchase_price' => 'setPurchasePrice',
        '_purchase_price_accounting' => 'setPurchasePriceAccounting',
        '_tax_rate' => 'setTaxRate',
        '_asset_number' => 'setAssetNumber',
        '_accounting_type' => 'setAccountingType',
        '_status' => 'setStatus',
        '_enshrined' => 'setEnshrined'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_voucher_pos' => 'getVoucherPos',
        '_name' => 'getName',
        '_sev_client' => 'getSevClient',
        '_useful_life' => 'getUsefulLife',
        '_acquisition_date' => 'getAcquisitionDate',
        '_purchase_price' => 'getPurchasePrice',
        '_purchase_price_accounting' => 'getPurchasePriceAccounting',
        '_tax_rate' => 'getTaxRate',
        '_asset_number' => 'getAssetNumber',
        '_accounting_type' => 'getAccountingType',
        '_status' => 'getStatus',
        '_enshrined' => 'getEnshrined'
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
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_voucher_pos'] = isset($data['_voucher_pos']) ? $data['_voucher_pos'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_useful_life'] = isset($data['_useful_life']) ? $data['_useful_life'] : null;
        $this->container['_acquisition_date'] = isset($data['_acquisition_date']) ? $data['_acquisition_date'] : null;
        $this->container['_purchase_price'] = isset($data['_purchase_price']) ? $data['_purchase_price'] : null;
        $this->container['_purchase_price_accounting'] = isset($data['_purchase_price_accounting']) ? $data['_purchase_price_accounting'] : null;
        $this->container['_tax_rate'] = isset($data['_tax_rate']) ? $data['_tax_rate'] : null;
        $this->container['_asset_number'] = isset($data['_asset_number']) ? $data['_asset_number'] : null;
        $this->container['_accounting_type'] = isset($data['_accounting_type']) ? $data['_accounting_type'] : null;
        $this->container['_status'] = isset($data['_status']) ? $data['_status'] : null;
        $this->container['_enshrined'] = isset($data['_enshrined']) ? $data['_enshrined'] : null;
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
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the asset was created
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _update
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['_update'];
    }

    /**
     * Sets _update
     * @param \DateTime $_update date the asset was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _voucher_pos
     * @return \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelVoucherPos
     */
    public function getVoucherPos()
    {
        return $this->container['_voucher_pos'];
    }

    /**
     * Sets _voucher_pos
     * @param \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelVoucherPos $_voucher_pos voucher position of the asset
     * @return $this
     */
    public function setVoucherPos($_voucher_pos)
    {
        $this->container['_voucher_pos'] = $_voucher_pos;

        return $this;
    }

    /**
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name 
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _sev_client
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['_sev_client'];
    }

    /**
     * Sets _sev_client
     * @param object $_sev_client sevClient is the unique id every customer has and is used in nearly all operations
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }

    /**
     * Gets _useful_life
     * @return int
     */
    public function getUsefulLife()
    {
        return $this->container['_useful_life'];
    }

    /**
     * Sets _useful_life
     * @param int $_useful_life lifespan of the asset
     * @return $this
     */
    public function setUsefulLife($_useful_life)
    {
        $this->container['_useful_life'] = $_useful_life;

        return $this;
    }

    /**
     * Gets _acquisition_date
     * @return \DateTime
     */
    public function getAcquisitionDate()
    {
        return $this->container['_acquisition_date'];
    }

    /**
     * Sets _acquisition_date
     * @param \DateTime $_acquisition_date date the asset was acquired
     * @return $this
     */
    public function setAcquisitionDate($_acquisition_date)
    {
        $this->container['_acquisition_date'] = $_acquisition_date;

        return $this;
    }

    /**
     * Gets _purchase_price
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->container['_purchase_price'];
    }

    /**
     * Sets _purchase_price
     * @param float $_purchase_price 
     * @return $this
     */
    public function setPurchasePrice($_purchase_price)
    {
        $this->container['_purchase_price'] = $_purchase_price;

        return $this;
    }

    /**
     * Gets _purchase_price_accounting
     * @return float
     */
    public function getPurchasePriceAccounting()
    {
        return $this->container['_purchase_price_accounting'];
    }

    /**
     * Sets _purchase_price_accounting
     * @param float $_purchase_price_accounting 
     * @return $this
     */
    public function setPurchasePriceAccounting($_purchase_price_accounting)
    {
        $this->container['_purchase_price_accounting'] = $_purchase_price_accounting;

        return $this;
    }

    /**
     * Gets _tax_rate
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['_tax_rate'];
    }

    /**
     * Sets _tax_rate
     * @param float $_tax_rate 
     * @return $this
     */
    public function setTaxRate($_tax_rate)
    {
        $this->container['_tax_rate'] = $_tax_rate;

        return $this;
    }

    /**
     * Gets _asset_number
     * @return string
     */
    public function getAssetNumber()
    {
        return $this->container['_asset_number'];
    }

    /**
     * Sets _asset_number
     * @param string $_asset_number 
     * @return $this
     */
    public function setAssetNumber($_asset_number)
    {
        $this->container['_asset_number'] = $_asset_number;

        return $this;
    }

    /**
     * Gets _accounting_type
     * @return \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType
     */
    public function getAccountingType()
    {
        return $this->container['_accounting_type'];
    }

    /**
     * Sets _accounting_type
     * @param \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType $_accounting_type accounting type of the asset
     * @return $this
     */
    public function setAccountingType($_accounting_type)
    {
        $this->container['_accounting_type'] = $_accounting_type;

        return $this;
    }

    /**
     * Gets _status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['_status'];
    }

    /**
     * Sets _status
     * @param int $_status 
     * @return $this
     */
    public function setStatus($_status)
    {
        $this->container['_status'] = $_status;

        return $this;
    }

    /**
     * Gets _enshrined
     * @return bool
     */
    public function getEnshrined()
    {
        return $this->container['_enshrined'];
    }

    /**
     * Sets _enshrined
     * @param bool $_enshrined 
     * @return $this
     */
    public function setEnshrined($_enshrined)
    {
        $this->container['_enshrined'] = $_enshrined;

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

