# 
Bumbal Communication Server API documentation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/communication-server-api.git"
    }
  ],
  "require": {
    "bumbal/communication-server-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://communication.bumbal.eu/server/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InstanceApi* | [**createInstance**](docs/Api/InstanceApi.md#createinstance) | **POST** /instance | Create a Instance
*InstanceApi* | [**deleteInstance**](docs/Api/InstanceApi.md#deleteinstance) | **DELETE** /instance/{instanceId} | Delete a Instance
*InstanceApi* | [**retrieveInstance**](docs/Api/InstanceApi.md#retrieveinstance) | **GET** /instance/{instanceId} | Retrieve a Instance
*InstanceApi* | [**retrieveListInstance**](docs/Api/InstanceApi.md#retrievelistinstance) | **PUT** /instance | Retrieve List of Instances
*InstanceApi* | [**updateInstance**](docs/Api/InstanceApi.md#updateinstance) | **PUT** /instance/{instanceId} | Update an Instance
*LogsApi* | [**retrieveListLog**](docs/Api/LogsApi.md#retrievelistlog) | **PUT** /log | Retrieve List of Activities
*LogsApi* | [**retrieveLog**](docs/Api/LogsApi.md#retrievelog) | **GET** /log/{logId} | Retrieve a log entry
*LogsApi* | [**truncateLog**](docs/Api/LogsApi.md#truncatelog) | **GET** /log/truncate | Truncate Log Table


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [InstanceFiltersModel](docs/Model/InstanceFiltersModel.md)
 - [InstanceListResponse](docs/Model/InstanceListResponse.md)
 - [InstanceModel](docs/Model/InstanceModel.md)
 - [InstanceOptionsModel](docs/Model/InstanceOptionsModel.md)
 - [InstanceRetrieveListArguments](docs/Model/InstanceRetrieveListArguments.md)
 - [LogFiltersModel](docs/Model/LogFiltersModel.md)
 - [LogListResponse](docs/Model/LogListResponse.md)
 - [LogModel](docs/Model/LogModel.md)
 - [LogOptionsModel](docs/Model/LogOptionsModel.md)
 - [LogRetrieveListArguments](docs/Model/LogRetrieveListArguments.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: ApiKey
- **Location**: HTTP header


## Author

gerb@bumbal.eu


