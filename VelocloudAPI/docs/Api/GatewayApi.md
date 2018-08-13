# Swagger\Client\GatewayApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gatewayDeleteGateway**](GatewayApi.md#gatewayDeleteGateway) | **POST** /gateway/deleteGateway | 
[**gatewayGatewayProvision**](GatewayApi.md#gatewayGatewayProvision) | **POST** /gateway/gatewayProvision | Provision a gateway
[**gatewayUpdateGatewayAttributes**](GatewayApi.md#gatewayUpdateGatewayAttributes) | **POST** /gateway/updateGatewayAttributes | 


# **gatewayDeleteGateway**
> object gatewayDeleteGateway($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayDeleteGateway(); // \Swagger\Client\Model\GatewayDeleteGateway | 

try {
    $result = $apiInstance->gatewayDeleteGateway($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayDeleteGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayDeleteGateway**](../Model/GatewayDeleteGateway.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayGatewayProvision**
> object gatewayGatewayProvision($body)

Provision a gateway

Provision a gateway into an operator network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayGatewayProvision(); // \Swagger\Client\Model\GatewayGatewayProvision | 

try {
    $result = $apiInstance->gatewayGatewayProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayGatewayProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayGatewayProvision**](../Model/GatewayGatewayProvision.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayUpdateGatewayAttributes**
> object gatewayUpdateGatewayAttributes($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayUpdateGatewayAttributes(); // \Swagger\Client\Model\GatewayUpdateGatewayAttributes | 

try {
    $result = $apiInstance->gatewayUpdateGatewayAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->gatewayUpdateGatewayAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayUpdateGatewayAttributes**](../Model/GatewayUpdateGatewayAttributes.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

