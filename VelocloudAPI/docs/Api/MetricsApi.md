# Swagger\Client\MetricsApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**metricsGetAggregateEdgeLinkMetrics**](MetricsApi.md#metricsGetAggregateEdgeLinkMetrics) | **POST** /metrics/getAggregateEdgeLinkMetrics | get aggregated edge link metrics across enterprises
[**metricsGetEdgeAppLinkMetrics**](MetricsApi.md#metricsGetEdgeAppLinkMetrics) | **POST** /metrics/getEdgeAppLinkMetrics | Fetch an array of flow metric grouped by link.
[**metricsGetEdgeAppMetrics**](MetricsApi.md#metricsGetEdgeAppMetrics) | **POST** /metrics/getEdgeAppMetrics | Fetch an array of application flow metrics.
[**metricsGetEdgeLinkMetrics**](MetricsApi.md#metricsGetEdgeLinkMetrics) | **POST** /metrics/getEdgeLinkMetrics | get edge link metrics


# **metricsGetAggregateEdgeLinkMetrics**
> object metricsGetAggregateEdgeLinkMetrics($body)

get aggregated edge link metrics across enterprises

get aggregated edge link metrics across enterprises

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetAggregateEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetAggregateEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetAggregateEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetAggregateEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetAggregateEdgeLinkMetrics**](../Model/MetricsGetAggregateEdgeLinkMetrics.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppLinkMetrics**
> object metricsGetEdgeAppLinkMetrics($body)

Fetch an array of flow metric grouped by link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics**](../Model/MetricsGetEdgeAppLinkMetrics.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppMetrics**
> object metricsGetEdgeAppMetrics($body)

Fetch an array of application flow metrics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeAppMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppMetrics**](../Model/MetricsGetEdgeAppMetrics.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeLinkMetrics**
> object metricsGetEdgeLinkMetrics($body)

get edge link metrics

get edge link metrics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeLinkMetrics**](../Model/MetricsGetEdgeLinkMetrics.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

