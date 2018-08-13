# Swagger\Client\MonitoringApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**monitoringGetAggregateEnterpriseEvents**](MonitoringApi.md#monitoringGetAggregateEnterpriseEvents) | **POST** /monitoring/getAggregateEnterpriseEvents | Fetch all ent. events
[**monitoringGetAggregates**](MonitoringApi.md#monitoringGetAggregates) | **POST** /monitoring/getAggregates | Generate aggregate enterprise/edge information
[**monitoringGetEdgeBgpPeerStatus**](MonitoringApi.md#monitoringGetEdgeBgpPeerStatus) | **POST** /monitoring/getEnterpriseEdgeBgpPeerStatus | get BGP adjacency status for an edge
[**monitoringGetEnterpriseBgpPeerStatus**](MonitoringApi.md#monitoringGetEnterpriseBgpPeerStatus) | **POST** /monitoring/getEnterpriseBgpPeerStatus | get enterprise BGP adjacency status
[**monitoringGetEnterpriseEdgeLinkStatus**](MonitoringApi.md#monitoringGetEnterpriseEdgeLinkStatus) | **POST** /monitoring/getEnterpriseEdgeLinkStatus | edge and link status for monitoring


# **monitoringGetAggregateEnterpriseEvents**
> object monitoringGetAggregateEnterpriseEvents($body)

Fetch all ent. events

Fetch all events across all enterprises. When called in MSP context, only enterprises managed by the MSP are queried.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents(); // \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents | 

try {
    $result = $apiInstance->monitoringGetAggregateEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetAggregateEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents**](../Model/MonitoringGetAggregateEnterpriseEvents.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregates**
> object monitoringGetAggregates($body)

Generate aggregate enterprise/edge information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregates(); // \Swagger\Client\Model\MonitoringGetAggregates | 

try {
    $result = $apiInstance->monitoringGetAggregates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetAggregates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregates**](../Model/MonitoringGetAggregates.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEdgeBgpPeerStatus**
> object[] monitoringGetEdgeBgpPeerStatus($body)

get BGP adjacency status for an edge

Get information about the edge's BGP peer status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEdgeBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEdgeBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseBgpPeerStatus**
> object[] monitoringGetEnterpriseBgpPeerStatus($body)

get enterprise BGP adjacency status

Get edge and edge-link status and basic attributes for monitoring

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEnterpriseBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEnterpriseBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseEdgeLinkStatus**
> object[] monitoringGetEnterpriseEdgeLinkStatus($body)

edge and link status for monitoring

Get edge and edge-link status and basic attributes for monitoring

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeLinkStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->monitoringGetEnterpriseEdgeLinkStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

