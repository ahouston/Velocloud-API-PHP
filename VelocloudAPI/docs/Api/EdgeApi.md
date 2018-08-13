# Swagger\Client\EdgeApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**edgeDeleteEdge**](EdgeApi.md#edgeDeleteEdge) | **POST** /edge/deleteEdge | 
[**edgeEdgeCancelReactivation**](EdgeApi.md#edgeEdgeCancelReactivation) | **POST** /edge/edgeCancelReactivation | Cancel reactivation
[**edgeEdgeProvision**](EdgeApi.md#edgeEdgeProvision) | **POST** /edge/edgeProvision | Provision an edge
[**edgeEdgeRequestReactivation**](EdgeApi.md#edgeEdgeRequestReactivation) | **POST** /edge/edgeRequestReactivation | reactivate edge
[**edgeGetEdge**](EdgeApi.md#edgeGetEdge) | **POST** /edge/getEdge | Get edge info
[**edgeGetEdgeConfigurationStack**](EdgeApi.md#edgeGetEdgeConfigurationStack) | **POST** /edge/getEdgeConfigurationStack | 
[**edgeSetEdgeHandOffGateways**](EdgeApi.md#edgeSetEdgeHandOffGateways) | **POST** /edge/setEdgeHandOffGateways | 
[**edgeUpdateEdgeAdminPassword**](EdgeApi.md#edgeUpdateEdgeAdminPassword) | **POST** /edge/updateEdgeAdminPassword | update credentials
[**edgeUpdateEdgeAttributes**](EdgeApi.md#edgeUpdateEdgeAttributes) | **POST** /edge/updateEdgeAttributes | Update edge attributes (name and description).


# **edgeDeleteEdge**
> object edgeDeleteEdge($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdge(); // \Swagger\Client\Model\EdgeDeleteEdge | 

try {
    $result = $apiInstance->edgeDeleteEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeDeleteEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdge**](../Model/EdgeDeleteEdge.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeCancelReactivation**
> object edgeEdgeCancelReactivation($body)

Cancel reactivation

Cancel a pending reactivation request for an edge.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeCancelReactivation(); // \Swagger\Client\Model\EdgeEdgeCancelReactivation | 

try {
    $result = $apiInstance->edgeEdgeCancelReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeCancelReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeCancelReactivation**](../Model/EdgeEdgeCancelReactivation.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeProvision**
> object edgeEdgeProvision($body)

Provision an edge

provision an edge prior to activation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeProvision(); // \Swagger\Client\Model\EdgeEdgeProvision | 

try {
    $result = $apiInstance->edgeEdgeProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeProvision**](../Model/EdgeEdgeProvision.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeRequestReactivation**
> object edgeEdgeRequestReactivation($body)

reactivate edge

update activation state for an edge to REACTIVATION_PENDING

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeRequestReactivation(); // \Swagger\Client\Model\EdgeEdgeRequestReactivation | 

try {
    $result = $apiInstance->edgeEdgeRequestReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeEdgeRequestReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeRequestReactivation**](../Model/EdgeEdgeRequestReactivation.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdge**
> object edgeGetEdge($body)

Get edge info

Get VELOCLOUD_EDGE object, with optional link and site information.  Query by object id, deviceId, activationKey or logicalId.   All four values are unique so are sufficient to identify a single edge in the database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdge(); // \Swagger\Client\Model\EdgeGetEdge | 

try {
    $result = $apiInstance->edgeGetEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeGetEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdge**](../Model/EdgeGetEdge.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdgeConfigurationStack**
> object edgeGetEdgeConfigurationStack($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdgeConfigurationStack(); // \Swagger\Client\Model\EdgeGetEdgeConfigurationStack | 

try {
    $result = $apiInstance->edgeGetEdgeConfigurationStack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeGetEdgeConfigurationStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdgeConfigurationStack**](../Model/EdgeGetEdgeConfigurationStack.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeHandOffGateways**
> object edgeSetEdgeHandOffGateways($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeHandOffGateways(); // \Swagger\Client\Model\EdgeSetEdgeHandOffGateways | 

try {
    $result = $apiInstance->edgeSetEdgeHandOffGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeSetEdgeHandOffGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeHandOffGateways**](../Model/EdgeSetEdgeHandOffGateways.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAdminPassword**
> object edgeUpdateEdgeAdminPassword($body)

update credentials

Request an update to the edge local UI authentication credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword(); // \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword | 

try {
    $result = $apiInstance->edgeUpdateEdgeAdminPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeUpdateEdgeAdminPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAdminPassword**](../Model/EdgeUpdateEdgeAdminPassword.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAttributes**
> object edgeUpdateEdgeAttributes($body)

Update edge attributes (name and description).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAttributes(); // \Swagger\Client\Model\EdgeUpdateEdgeAttributes | 

try {
    $result = $apiInstance->edgeUpdateEdgeAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApi->edgeUpdateEdgeAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAttributes**](../Model/EdgeUpdateEdgeAttributes.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

