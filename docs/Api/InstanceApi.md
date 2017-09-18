# BumbalCommunicationServer\InstanceApi

All URIs are relative to *https://communication.bumbal.eu/server/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInstance**](InstanceApi.md#createInstance) | **POST** /instance | Create a Instance
[**deleteInstance**](InstanceApi.md#deleteInstance) | **DELETE** /instance/{instanceId} | Delete a Instance
[**retrieveInstance**](InstanceApi.md#retrieveInstance) | **GET** /instance/{instanceId} | Retrieve a Instance
[**retrieveListInstance**](InstanceApi.md#retrieveListInstance) | **PUT** /instance | Retrieve List of Instances
[**updateInstance**](InstanceApi.md#updateInstance) | **PUT** /instance/{instanceId} | Update an Instance


# **createInstance**
> \BumbalCommunicationServer\Model\ApiResponse createInstance($body, $generate_settings)

Create a Instance

Create an instance for a message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationServer\Api\InstanceApi();
$body = new \BumbalCommunicationServer\Model\InstanceModel(); // \BumbalCommunicationServer\Model\InstanceModel | Instance object
$generate_settings = true; // bool | Generate Settings for this new Instance

try {
    $result = $api_instance->createInstance($body, $generate_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->createInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationServer\Model\InstanceModel**](../Model/\BumbalCommunicationServer\Model\InstanceModel.md)| Instance object |
 **generate_settings** | **bool**| Generate Settings for this new Instance |

### Return type

[**\BumbalCommunicationServer\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInstance**
> \BumbalCommunicationServer\Model\ApiResponse deleteInstance($instance_id)

Delete a Instance

Delete an Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationServer\Api\InstanceApi();
$instance_id = 789; // int | ID of the instance to delete

try {
    $result = $api_instance->deleteInstance($instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_id** | **int**| ID of the instance to delete |

### Return type

[**\BumbalCommunicationServer\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInstance**
> \BumbalCommunicationServer\Model\InstanceModel retrieveInstance($instance_id)

Retrieve a Instance

Retrieve an instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationServer\Api\InstanceApi();
$instance_id = 789; // int | ID of instance to return

try {
    $result = $api_instance->retrieveInstance($instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->retrieveInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_id** | **int**| ID of instance to return |

### Return type

[**\BumbalCommunicationServer\Model\InstanceModel**](../Model/InstanceModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListInstance**
> \BumbalCommunicationServer\Model\InstanceListResponse retrieveListInstance($arguments)

Retrieve List of Instances

Retrieve List of Instances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationServer\Api\InstanceApi();
$arguments = new \BumbalCommunicationServer\Model\InstanceRetrieveListArguments(); // \BumbalCommunicationServer\Model\InstanceRetrieveListArguments | Instance RetrieveList Arguments

try {
    $result = $api_instance->retrieveListInstance($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->retrieveListInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalCommunicationServer\Model\InstanceRetrieveListArguments**](../Model/\BumbalCommunicationServer\Model\InstanceRetrieveListArguments.md)| Instance RetrieveList Arguments |

### Return type

[**\BumbalCommunicationServer\Model\InstanceListResponse**](../Model/InstanceListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInstance**
> \BumbalCommunicationServer\Model\ApiResponse updateInstance($instance_id, $body)

Update an Instance

Update an Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationServer\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationServer\Api\InstanceApi();
$instance_id = 789; // int | ID of Instance to update
$body = new \BumbalCommunicationServer\Model\InstanceModel(); // \BumbalCommunicationServer\Model\InstanceModel | Instance object that needs to be updated

try {
    $result = $api_instance->updateInstance($instance_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->updateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_id** | **int**| ID of Instance to update |
 **body** | [**\BumbalCommunicationServer\Model\InstanceModel**](../Model/\BumbalCommunicationServer\Model\InstanceModel.md)| Instance object that needs to be updated | [optional]

### Return type

[**\BumbalCommunicationServer\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

