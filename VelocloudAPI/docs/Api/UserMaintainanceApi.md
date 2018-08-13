# Swagger\Client\UserMaintainanceApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGetEnterpriseUsers**](UserMaintainanceApi.md#enterpriseGetEnterpriseUsers) | **POST** /enterprise/getEnterpriseUsers | Get list of enterprise users by enterprise id.
[**enterpriseInsertEnterprise**](UserMaintainanceApi.md#enterpriseInsertEnterprise) | **POST** /enterprise/insertEnterprise | Insert an enterprise, owned by the operator or an MSP.
[**enterpriseInsertEnterpriseUser**](UserMaintainanceApi.md#enterpriseInsertEnterpriseUser) | **POST** /enterprise/insertEnterpriseUser | Insert an enterprise user
[**enterpriseUserDeleteEnterpriseUser**](UserMaintainanceApi.md#enterpriseUserDeleteEnterpriseUser) | **POST** /enterpriseUser/deleteEnterpriseUser | Delete an enterprise user.
[**enterpriseUserUpdateEnterpriseUser**](UserMaintainanceApi.md#enterpriseUserUpdateEnterpriseUser) | **POST** /enterpriseUser/updateEnterpriseUser | Update an enterprise user
[**operatorUserDeleteOperatorUser**](UserMaintainanceApi.md#operatorUserDeleteOperatorUser) | **POST** /operatorUser/deleteOperatorUser | Delete an operator user
[**operatorUserInsertOperatorUser**](UserMaintainanceApi.md#operatorUserInsertOperatorUser) | **POST** /operatorUser/insertOperatorUser | Insert an operator user
[**operatorUserUpdateOperatorUser**](UserMaintainanceApi.md#operatorUserUpdateOperatorUser) | **POST** /operatorUser/updateOperatorUser | Update an operator user


# **enterpriseGetEnterpriseUsers**
> object enterpriseGetEnterpriseUsers($body)

Get list of enterprise users by enterprise id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseUsers(); // \Swagger\Client\Model\EnterpriseGetEnterpriseUsers | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->enterpriseGetEnterpriseUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseUsers**](../Model/EnterpriseGetEnterpriseUsers.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterprise**
> object enterpriseInsertEnterprise($body)

Insert an enterprise, owned by the operator or an MSP.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseObject(); // \Swagger\Client\Model\EnterpriseObject | 

try {
    $result = $apiInstance->enterpriseInsertEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->enterpriseInsertEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseObject**](../Model/EnterpriseObject.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseUser**
> object enterpriseInsertEnterpriseUser($body)

Insert an enterprise user

Insert an enterprise user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseUserObject(); // \Swagger\Client\Model\NewEnterpriseUserObject | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->enterpriseInsertEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnterpriseUserObject**](../Model/NewEnterpriseUserObject.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserDeleteEnterpriseUser**
> object enterpriseUserDeleteEnterpriseUser($body)

Delete an enterprise user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserDeleteEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->enterpriseUserDeleteEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser**](../Model/EnterpriseUserDeleteEnterpriseUser.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserUpdateEnterpriseUser**
> object enterpriseUserUpdateEnterpriseUser($body)

Update an enterprise user

Update an enterprise user provided an object <i>id</i> or other identifying attributes,and an <i>_update</i> object with the names and values of columns to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserUpdateEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->enterpriseUserUpdateEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser**](../Model/EnterpriseUserUpdateEnterpriseUser.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserDeleteOperatorUser**
> object operatorUserDeleteOperatorUser($body)

Delete an operator user

Delete an operator user object by ID or other attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserDeleteOperatorUser(); // \Swagger\Client\Model\OperatorUserDeleteOperatorUser | 

try {
    $result = $apiInstance->operatorUserDeleteOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->operatorUserDeleteOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserDeleteOperatorUser**](../Model/OperatorUserDeleteOperatorUser.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserInsertOperatorUser**
> object operatorUserInsertOperatorUser($body)

Insert an operator user

Insert an operator user and associate with an operator's network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserInsertOperatorUser(); // \Swagger\Client\Model\OperatorUserInsertOperatorUser | 

try {
    $result = $apiInstance->operatorUserInsertOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->operatorUserInsertOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserInsertOperatorUser**](../Model/OperatorUserInsertOperatorUser.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserUpdateOperatorUser**
> object operatorUserUpdateOperatorUser($body)

Update an operator user

Update an operator user provided an object <i>id</i> or other identifying attributes,and an <i>_update</i> object with the names and values of columns to be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserMaintainanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserUpdateOperatorUser(); // \Swagger\Client\Model\OperatorUserUpdateOperatorUser | 

try {
    $result = $apiInstance->operatorUserUpdateOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMaintainanceApi->operatorUserUpdateOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserUpdateOperatorUser**](../Model/OperatorUserUpdateOperatorUser.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

