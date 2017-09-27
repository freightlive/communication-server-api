<?php
/**
 * InstanceApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationServer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Communication Server API
 *
 * Bumbal Communication Server API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalCommunicationServer\API;

use \BumbalCommunicationServer\ApiClient;
use \BumbalCommunicationServer\ApiException;
use \BumbalCommunicationServer\Configuration;
use \BumbalCommunicationServer\ObjectSerializer;

/**
 * InstanceApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalCommunicationServer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstanceApi
{
    /**
     * API Client
     *
     * @var \BumbalCommunicationServer\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalCommunicationServer\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalCommunicationServer\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalCommunicationServer\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalCommunicationServer\ApiClient $apiClient set the API client
     *
     * @return InstanceApi
     */
    public function setApiClient(\BumbalCommunicationServer\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createInstance
     *
     * Create a Instance
     *
     * @param \BumbalCommunicationServer\Model\InstanceModel $body Instance object (required)
     * @param bool $generate_settings Generate Settings for this new Instance (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return \BumbalCommunicationServer\Model\ApiResponse
     */
    public function createInstance($body, $generate_settings)
    {
        list($response) = $this->createInstanceWithHttpInfo($body, $generate_settings);
        return $response;
    }

    /**
     * Operation createInstanceWithHttpInfo
     *
     * Create a Instance
     *
     * @param \BumbalCommunicationServer\Model\InstanceModel $body Instance object (required)
     * @param bool $generate_settings Generate Settings for this new Instance (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return array of \BumbalCommunicationServer\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInstanceWithHttpInfo($body, $generate_settings)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createInstance');
        }
        // verify the required parameter 'generate_settings' is set
        if ($generate_settings === null) {
            throw new \InvalidArgumentException('Missing the required parameter $generate_settings when calling createInstance');
        }
        // parse inputs
        $resourcePath = "/instance";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($generate_settings !== null) {
            $queryParams['generate_settings'] = $this->apiClient->getSerializer()->toQueryValue($generate_settings);
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationServer\Model\ApiResponse',
                '/instance'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationServer\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationServer\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteInstance
     *
     * Delete a Instance
     *
     * @param int $instance_id ID of the instance to delete (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return \BumbalCommunicationServer\Model\ApiResponse
     */
    public function deleteInstance($instance_id)
    {
        list($response) = $this->deleteInstanceWithHttpInfo($instance_id);
        return $response;
    }

    /**
     * Operation deleteInstanceWithHttpInfo
     *
     * Delete a Instance
     *
     * @param int $instance_id ID of the instance to delete (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return array of \BumbalCommunicationServer\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInstanceWithHttpInfo($instance_id)
    {
        // verify the required parameter 'instance_id' is set
        if ($instance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $instance_id when calling deleteInstance');
        }
        // parse inputs
        $resourcePath = "/instance/{instanceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($instance_id !== null) {
            $resourcePath = str_replace(
                "{" . "instanceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($instance_id),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationServer\Model\ApiResponse',
                '/instance/{instanceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationServer\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationServer\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveInstance
     *
     * Retrieve a Instance
     *
     * @param int $instance_id ID of instance to return (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return \BumbalCommunicationServer\Model\InstanceModel
     */
    public function retrieveInstance($instance_id)
    {
        list($response) = $this->retrieveInstanceWithHttpInfo($instance_id);
        return $response;
    }

    /**
     * Operation retrieveInstanceWithHttpInfo
     *
     * Retrieve a Instance
     *
     * @param int $instance_id ID of instance to return (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return array of \BumbalCommunicationServer\Model\InstanceModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveInstanceWithHttpInfo($instance_id)
    {
        // verify the required parameter 'instance_id' is set
        if ($instance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $instance_id when calling retrieveInstance');
        }
        // parse inputs
        $resourcePath = "/instance/{instanceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($instance_id !== null) {
            $resourcePath = str_replace(
                "{" . "instanceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($instance_id),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationServer\Model\InstanceModel',
                '/instance/{instanceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationServer\Model\InstanceModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationServer\Model\InstanceModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListInstance
     *
     * Retrieve List of Instances
     *
     * @param \BumbalCommunicationServer\Model\InstanceRetrieveListArguments $arguments Instance RetrieveList Arguments (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return \BumbalCommunicationServer\Model\InstanceListResponse
     */
    public function retrieveListInstance($arguments)
    {
        list($response) = $this->retrieveListInstanceWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListInstanceWithHttpInfo
     *
     * Retrieve List of Instances
     *
     * @param \BumbalCommunicationServer\Model\InstanceRetrieveListArguments $arguments Instance RetrieveList Arguments (required)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return array of \BumbalCommunicationServer\Model\InstanceListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListInstanceWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListInstance');
        }
        // parse inputs
        $resourcePath = "/instance";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationServer\Model\InstanceListResponse',
                '/instance'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationServer\Model\InstanceListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationServer\Model\InstanceListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateInstance
     *
     * Update an Instance
     *
     * @param int $instance_id ID of Instance to update (required)
     * @param \BumbalCommunicationServer\Model\InstanceModel $body Instance object that needs to be updated (optional)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return \BumbalCommunicationServer\Model\ApiResponse
     */
    public function updateInstance($instance_id, $body = null)
    {
        list($response) = $this->updateInstanceWithHttpInfo($instance_id, $body);
        return $response;
    }

    /**
     * Operation updateInstanceWithHttpInfo
     *
     * Update an Instance
     *
     * @param int $instance_id ID of Instance to update (required)
     * @param \BumbalCommunicationServer\Model\InstanceModel $body Instance object that needs to be updated (optional)
     * @throws \BumbalCommunicationServer\ApiException on non-2xx response
     * @return array of \BumbalCommunicationServer\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInstanceWithHttpInfo($instance_id, $body = null)
    {
        // verify the required parameter 'instance_id' is set
        if ($instance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $instance_id when calling updateInstance');
        }
        // parse inputs
        $resourcePath = "/instance/{instanceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($instance_id !== null) {
            $resourcePath = str_replace(
                "{" . "instanceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($instance_id),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalCommunicationServer\Model\ApiResponse',
                '/instance/{instanceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalCommunicationServer\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalCommunicationServer\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
