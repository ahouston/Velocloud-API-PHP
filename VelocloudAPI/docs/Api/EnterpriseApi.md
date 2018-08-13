# Swagger\Client\EnterpriseApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**edgeDeleteEdgeRecords**](EnterpriseApi.md#edgeDeleteEdgeRecords) | **POST** /edge/deleteEdgeRecords | Deletes Edge record(s)
[**enterpriseDeleteEnterprise**](EnterpriseApi.md#enterpriseDeleteEnterprise) | **POST** /enterprise/deleteEnterprise | Deletes enterprise
[**enterpriseDeleteEnterpriseGatewayRecords**](EnterpriseApi.md#enterpriseDeleteEnterpriseGatewayRecords) | **POST** /enterprise/deleteEnterpriseGatewayRecords | Deletes enterprise gateway record(s)
[**enterpriseGetEnterpiseRouteConfiguration**](EnterpriseApi.md#enterpriseGetEnterpiseRouteConfiguration) | **POST** /enterprise/getEnterpriseRouteConfiguration | Get route advertisement and routing preferences policy
[**enterpriseGetEnterpriseConfigurations**](EnterpriseApi.md#enterpriseGetEnterpriseConfigurations) | **POST** /enterprise/getEnterpriseConfigurations | get enterprise configuration profiles
[**enterpriseGetEnterpriseEdges**](EnterpriseApi.md#enterpriseGetEnterpriseEdges) | **POST** /enterprise/getEnterpriseEdges | Get edge list.
[**enterpriseGetEnterpriseRouteTable**](EnterpriseApi.md#enterpriseGetEnterpriseRouteTable) | **POST** /enterprise/getEnterpriseRouteTable | 
[**enterpriseGetEnterpriseServices**](EnterpriseApi.md#enterpriseGetEnterpriseServices) | **POST** /enterprise/getEnterpriseServices | 
[**enterpriseInsertEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseInsertEnterpriseNetworkAllocation) | **POST** /enterprise/insertEnterpriseNetworkAllocation | insert enterprise network allocation
[**enterpriseInsertEnterpriseService**](EnterpriseApi.md#enterpriseInsertEnterpriseService) | **POST** /enterprise/insertEnterpriseService | Insert an enterprise service
[**enterpriseInsertOrUpdateEnterpriseCapability**](EnterpriseApi.md#enterpriseInsertOrUpdateEnterpriseCapability) | **POST** /enterprise/insertOrUpdateEnterpriseCapability | 
[**enterpriseInsertOrUpdateEnterpriseGatewayHandoff**](EnterpriseApi.md#enterpriseInsertOrUpdateEnterpriseGatewayHandoff) | **POST** /enterprise/insertOrUpdateEnterpriseGatewayHandoff | 
[**enterpriseUpdateEnterpriseNetworkAllocation**](EnterpriseApi.md#enterpriseUpdateEnterpriseNetworkAllocation) | **POST** /enterprise/updateEnterpriseNetworkAllocation | 
[**enterpriseUpdateEnterpriseRoute**](EnterpriseApi.md#enterpriseUpdateEnterpriseRoute) | **POST** /enterprise/updateEnterpriseRoute | 
[**enterpriseUpdateEnterpriseRouteConfiguration**](EnterpriseApi.md#enterpriseUpdateEnterpriseRouteConfiguration) | **POST** /enterprise/updateEnterpriseRouteConfiguration | 
[**enterpriseUpdateEnterpriseSecurityPolicy**](EnterpriseApi.md#enterpriseUpdateEnterpriseSecurityPolicy) | **POST** /enterprise/updateEnterpriseSecurityPolicy | 
[**enterpriseUpdateEnterpriseService**](EnterpriseApi.md#enterpriseUpdateEnterpriseService) | **POST** /enterprise/updateEnterpriseService | 


# **edgeDeleteEdgeRecords**
> object edgeDeleteEdgeRecords($body)

Deletes Edge record(s)

Deletes the given Edge record(s), specified by record id and enterprise id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdgeRecords(); // \Swagger\Client\Model\EdgeDeleteEdgeRecords | 

try {
    $result = $apiInstance->edgeDeleteEdgeRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->edgeDeleteEdgeRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdgeRecords**](../Model/EdgeDeleteEdgeRecords.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterprise**
> object enterpriseDeleteEnterprise($body)

Deletes enterprise

Deletes the given enterprise, specified by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterprise(); // \Swagger\Client\Model\EnterpriseDeleteEnterprise | 

try {
    $result = $apiInstance->enterpriseDeleteEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterprise**](../Model/EnterpriseDeleteEnterprise.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseGatewayRecords**
> object enterpriseDeleteEnterpriseGatewayRecords($body)

Deletes enterprise gateway record(s)

Deletes the given enterprise gateway record(s), specified by gateway id, tag and enterprise id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseGatewayRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseDeleteEnterpriseGatewayRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords**](../Model/EnterpriseDeleteEnterpriseGatewayRecords.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpiseRouteConfiguration**
> object enterpriseGetEnterpiseRouteConfiguration($body)

Get route advertisement and routing preferences policy

Get enterprise route advertisement, routing peferences and OSPF,BGP advertisement policy as configured in the Overlay Flow Control table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseGetEnterpiseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpiseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration**](../Model/EnterpriseGetEnterpriseRouteConfiguration.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseConfigurations**
> object enterpriseGetEnterpriseConfigurations($body)

get enterprise configuration profiles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations**](../Model/EnterpriseGetEnterpriseConfigurations.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseEdges**
> object enterpriseGetEnterpriseEdges($body)

Get edge list.

Get the edges associated with an enterprise, with optional location and link detail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseEdges(); // \Swagger\Client\Model\EnterpriseGetEnterpriseEdges | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseEdges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseEdges**](../Model/EnterpriseGetEnterpriseEdges.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseRouteTable**
> object enterpriseGetEnterpriseRouteTable($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteTable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseRouteTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable**](../Model/EnterpriseGetEnterpriseRouteTable.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseServices**
> object enterpriseGetEnterpriseServices($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseServices(); // \Swagger\Client\Model\EnterpriseGetEnterpriseServices | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseGetEnterpriseServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseServices**](../Model/EnterpriseGetEnterpriseServices.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseNetworkAllocation**
> object enterpriseInsertEnterpriseNetworkAllocation($body)

insert enterprise network allocation

insert enterprise network allocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation**](../Model/EnterpriseInsertEnterpriseNetworkAllocation.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseService**
> object enterpriseInsertEnterpriseService($body)

Insert an enterprise service



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseService(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseService | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseService**](../Model/EnterpriseInsertEnterpriseService.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseCapability**
> object enterpriseInsertOrUpdateEnterpriseCapability($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseCapability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertOrUpdateEnterpriseCapability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability**](../Model/EnterpriseInsertOrUpdateEnterpriseCapability.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseGatewayHandoff**
> object enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseInsertOrUpdateEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff**](../Model/EnterpriseInsertOrUpdateEnterpriseGatewayHandoff.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseNetworkAllocation**
> object enterpriseUpdateEnterpriseNetworkAllocation($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation**](../Model/EnterpriseUpdateEnterpriseNetworkAllocation.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRoute**
> object enterpriseUpdateEnterpriseRoute($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute**](../Model/EnterpriseUpdateEnterpriseRoute.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRouteConfiguration**
> object enterpriseUpdateEnterpriseRouteConfiguration($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration**](../Model/EnterpriseUpdateEnterpriseRouteConfiguration.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseSecurityPolicy**
> object enterpriseUpdateEnterpriseSecurityPolicy($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseSecurityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseSecurityPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy**](../Model/EnterpriseUpdateEnterpriseSecurityPolicy.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseService**
> enterpriseUpdateEnterpriseService($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseService(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseService | 

try {
    $apiInstance->enterpriseUpdateEnterpriseService($body);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->enterpriseUpdateEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseService**](../Model/EnterpriseUpdateEnterpriseService.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

