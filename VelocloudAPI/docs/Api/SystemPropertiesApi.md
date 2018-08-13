# Swagger\Client\SystemPropertiesApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemPropertyGetSystemProperty**](SystemPropertiesApi.md#systemPropertyGetSystemProperty) | **POST** /systemProperty/getSystemProperty | Get system property
[**systemPropertyInsertOrUpdateSystemProperty**](SystemPropertiesApi.md#systemPropertyInsertOrUpdateSystemProperty) | **POST** /systemProperty/insertOrUpdateSystemProperty | Insert or Update a system property
[**systemPropertyInsertSystemProperty**](SystemPropertiesApi.md#systemPropertyInsertSystemProperty) | **POST** /systemProperty/insertSystemProperty | Insert a system property
[**systemPropertyUpdateSystemProperty**](SystemPropertiesApi.md#systemPropertyUpdateSystemProperty) | **POST** /systemProperty/updateSystemProperty | Update a system property


# **systemPropertyGetSystemProperty**
> object systemPropertyGetSystemProperty($body)

Get system property

Get a system property by object id or other attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyGetSystemProperty(); // \Swagger\Client\Model\SystemPropertyGetSystemProperty | 

try {
    $result = $apiInstance->systemPropertyGetSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertiesApi->systemPropertyGetSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyGetSystemProperty**](../Model/SystemPropertyGetSystemProperty.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertOrUpdateSystemProperty**
> object systemPropertyInsertOrUpdateSystemProperty($body)

Insert or Update a system property

Insert a system property. If property already exists, the property will be updated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertOrUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertiesApi->systemPropertyInsertOrUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty**](../Model/SystemPropertyInsertOrUpdateSystemProperty.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertSystemProperty**
> object systemPropertyInsertSystemProperty($body)

Insert a system property

Insert a system property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertiesApi->systemPropertyInsertSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertSystemProperty**](../Model/SystemPropertyInsertSystemProperty.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyUpdateSystemProperty**
> object systemPropertyUpdateSystemProperty($body)

Update a system property

Update a system property provided an object <i>id</i> or other identifying attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPropertiesApi->systemPropertyUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyUpdateSystemProperty**](../Model/SystemPropertyUpdateSystemProperty.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

