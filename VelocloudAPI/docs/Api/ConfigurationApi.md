# Swagger\Client\ConfigurationApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationCloneConfiguration**](ConfigurationApi.md#configurationCloneConfiguration) | **POST** /configuration/cloneConfiguration | Clone a configuration
[**configurationCloneEnterpriseTemplate**](ConfigurationApi.md#configurationCloneEnterpriseTemplate) | **POST** /configuration/cloneEnterpriseTemplate | clone a new configuration
[**configurationGetConfiguration**](ConfigurationApi.md#configurationGetConfiguration) | **POST** /configuration/getConfiguration | Get a configuration profile
[**configurationGetConfigurationModules**](ConfigurationApi.md#configurationGetConfigurationModules) | **POST** /configuration/getConfigurationModules | 
[**configurationInsertConfigurationModule**](ConfigurationApi.md#configurationInsertConfigurationModule) | **POST** /configuration/insertConfigurationModule | 
[**configurationUpdateConfiguration**](ConfigurationApi.md#configurationUpdateConfiguration) | **POST** /configuration/updateConfiguration | 
[**configurationUpdateConfigurationModule**](ConfigurationApi.md#configurationUpdateConfigurationModule) | **POST** /configuration/updateConfigurationModule | 


# **configurationCloneConfiguration**
> object configurationCloneConfiguration($body)

Clone a configuration

Clones an existing configuration by configurationId.Either an enterpriseId or networkId to associate the new config with either an enterprise or network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneConfiguration(); // \Swagger\Client\Model\ConfigurationCloneConfiguration | 

try {
    $result = $apiInstance->configurationCloneConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCloneConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneConfiguration**](../Model/ConfigurationCloneConfiguration.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationCloneEnterpriseTemplate**
> object configurationCloneEnterpriseTemplate($body)

clone a new configuration

creates a new enterprise configuration from the VCO enterprise default.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate(); // \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate | 

try {
    $result = $apiInstance->configurationCloneEnterpriseTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCloneEnterpriseTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate**](../Model/ConfigurationCloneEnterpriseTemplate.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfiguration**
> object configurationGetConfiguration($body)

Get a configuration profile

Get a configuration profile, optionally with module detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfiguration(); // \Swagger\Client\Model\ConfigurationGetConfiguration | 

try {
    $result = $apiInstance->configurationGetConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfiguration**](../Model/ConfigurationGetConfiguration.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationModules**
> object configurationGetConfigurationModules($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfigurationModules(); // \Swagger\Client\Model\ConfigurationGetConfigurationModules | 

try {
    $result = $apiInstance->configurationGetConfigurationModules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationModules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfigurationModules**](../Model/ConfigurationGetConfigurationModules.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationInsertConfigurationModule**
> object configurationInsertConfigurationModule($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationInsertConfigurationModule(); // \Swagger\Client\Model\ConfigurationInsertConfigurationModule | 

try {
    $result = $apiInstance->configurationInsertConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationInsertConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationInsertConfigurationModule**](../Model/ConfigurationInsertConfigurationModule.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationUpdateConfiguration**
> object configurationUpdateConfiguration($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfiguration(); // \Swagger\Client\Model\ConfigurationUpdateConfiguration | 

try {
    $result = $apiInstance->configurationUpdateConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationUpdateConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationUpdateConfiguration**](../Model/ConfigurationUpdateConfiguration.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationUpdateConfigurationModule**
> object configurationUpdateConfigurationModule($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfigurationModule(); // \Swagger\Client\Model\ConfigurationUpdateConfigurationModule | 

try {
    $result = $apiInstance->configurationUpdateConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationUpdateConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationUpdateConfigurationModule**](../Model/ConfigurationUpdateConfigurationModule.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

