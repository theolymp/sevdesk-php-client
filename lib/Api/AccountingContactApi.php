<?php
/**
 * AccountingContactApi
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swagger Codegen team
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

namespace ispserverfarm\sevdesk\phpclient\Api;

use \ispserverfarm\sevdesk\phpclient\ApiClient;
use \ispserverfarm\sevdesk\phpclient\ApiException;
use \ispserverfarm\sevdesk\phpclient\Configuration;
use \ispserverfarm\sevdesk\phpclient\ObjectSerializer;

/**
 * AccountingContactApi Class Doc Comment
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountingContactApi
{
    /**
     * API Client
     *
     * @var \ispserverfarm\sevdesk\phpclient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ispserverfarm\sevdesk\phpclient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ispserverfarm\sevdesk\phpclient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ispserverfarm\sevdesk\phpclient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ispserverfarm\sevdesk\phpclient\ApiClient $apiClient set the API client
     *
     * @return AccountingContactApi
     */
    public function setApiClient(\ispserverfarm\sevdesk\phpclient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation accountingContactIsAvailableDebitorCreditorNumber
     *
     * Return if a debitor / creditor number is available
     *
     * @param int $contact_id If you want to exclude a contact from getting checked you can provide its id here (optional)
     * @param string $contact_object_name Contact object name (optional, default to Contact)
     * @param string $debitor_number debitor number of which you want to know if it is available (optional, default to )
     * @param string $creditor_number creditor number of which you want to know if it is available (optional, default to )
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function accountingContactIsAvailableDebitorCreditorNumber($contact_id = null, $contact_object_name = 'Contact', $debitor_number = '', $creditor_number = '')
    {
        list($response) = $this->accountingContactIsAvailableDebitorCreditorNumberWithHttpInfo($contact_id, $contact_object_name, $debitor_number, $creditor_number);
        return $response;
    }

    /**
     * Operation accountingContactIsAvailableDebitorCreditorNumberWithHttpInfo
     *
     * Return if a debitor / creditor number is available
     *
     * @param int $contact_id If you want to exclude a contact from getting checked you can provide its id here (optional)
     * @param string $contact_object_name Contact object name (optional, default to Contact)
     * @param string $debitor_number debitor number of which you want to know if it is available (optional, default to )
     * @param string $creditor_number creditor number of which you want to know if it is available (optional, default to )
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountingContactIsAvailableDebitorCreditorNumberWithHttpInfo($contact_id = null, $contact_object_name = 'Contact', $debitor_number = '', $creditor_number = '')
    {
        // parse inputs
        $resourcePath = "/AccountingContact/isAvailableDebitorCreditorNumber";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($contact_id !== null) {
            $queryParams['contact[id]'] = $this->apiClient->getSerializer()->toQueryValue($contact_id);
        }
        // query params
        if ($contact_object_name !== null) {
            $queryParams['contact[objectName]'] = $this->apiClient->getSerializer()->toQueryValue($contact_object_name);
        }
        // query params
        if ($debitor_number !== null) {
            $queryParams['debitorNumber'] = $this->apiClient->getSerializer()->toQueryValue($debitor_number);
        }
        // query params
        if ($creditor_number !== null) {
            $queryParams['creditorNumber'] = $this->apiClient->getSerializer()->toQueryValue($creditor_number);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/AccountingContact/isAvailableDebitorCreditorNumber'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation addAccountingContact
     *
     * Create a new accounting contact
     *
     * @param string $body To create an accounting contact, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact
     */
    public function addAccountingContact($body)
    {
        list($response) = $this->addAccountingContactWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addAccountingContactWithHttpInfo
     *
     * Create a new accounting contact
     *
     * @param string $body To create an accounting contact, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function addAccountingContactWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addAccountingContact');
        }
        // parse inputs
        $resourcePath = "/AccountingContact";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact',
                '/AccountingContact'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAccountingContact
     *
     * Delete an existing accounting contact
     *
     * @param int $id id of accounting contact you want to delete (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function deleteAccountingContact($id)
    {
        list($response) = $this->deleteAccountingContactWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteAccountingContactWithHttpInfo
     *
     * Delete an existing accounting contact
     *
     * @param int $id id of accounting contact you want to delete (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAccountingContactWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteAccountingContact');
        }
        // parse inputs
        $resourcePath = "/AccountingContact/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/AccountingContact/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountingContacts
     *
     * Get an overview of all accounting contacts
     *
     * @param int $limit Limits the number of entries returned. Default is 100 (optional, default to 100)
     * @param int $offset Set the index where the returned discounts start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact
     */
    public function getAccountingContacts($limit = '100', $offset = '0', $embed = null)
    {
        list($response) = $this->getAccountingContactsWithHttpInfo($limit, $offset, $embed);
        return $response;
    }

    /**
     * Operation getAccountingContactsWithHttpInfo
     *
     * Get an overview of all accounting contacts
     *
     * @param int $limit Limits the number of entries returned. Default is 100 (optional, default to 100)
     * @param int $offset Set the index where the returned discounts start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountingContactsWithHttpInfo($limit = '100', $offset = '0', $embed = null)
    {
        // parse inputs
        $resourcePath = "/AccountingContact";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if (is_array($embed)) {
            $embed = $this->apiClient->getSerializer()->serializeCollection($embed, 'csv', true);
        }
        if ($embed !== null) {
            $queryParams['embed'] = $this->apiClient->getSerializer()->toQueryValue($embed);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact',
                '/AccountingContact'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateAccountingContact
     *
     * Update an existing accounting contact
     *
     * @param int $id id of accounting contact you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create accounting contact.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; (optional)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact
     */
    public function updateAccountingContact($id, $body = null)
    {
        list($response) = $this->updateAccountingContactWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateAccountingContactWithHttpInfo
     *
     * Update an existing accounting contact
     *
     * @param int $id id of accounting contact you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create accounting contact.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; (optional)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAccountingContactWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateAccountingContact');
        }
        // parse inputs
        $resourcePath = "/AccountingContact/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact',
                '/AccountingContact/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingContact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
