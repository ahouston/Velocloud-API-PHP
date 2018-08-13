# Swagger\Client\RoleApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roleCreateRoleCustomization**](RoleApi.md#roleCreateRoleCustomization) | **POST** /role/createRoleCustomization | Create a role customization.
[**roleDeleteRoleCustomization**](RoleApi.md#roleDeleteRoleCustomization) | **POST** /role/deleteRoleCustomization | Delete a role customization.
[**roleGetUserTypeRoles**](RoleApi.md#roleGetUserTypeRoles) | **POST** /role/getUserTypeRoles | Return the roles for user type


# **roleCreateRoleCustomization**
> object roleCreateRoleCustomization($body)

Create a role customization.

This will create create a role customization given a roleId and an array of privilegeIds. .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleCreateRoleCustomization(); // \Swagger\Client\Model\RoleCreateRoleCustomization | 

try {
    $result = $apiInstance->roleCreateRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleCreateRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleCreateRoleCustomization**](../Model/RoleCreateRoleCustomization.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleDeleteRoleCustomization**
> object roleDeleteRoleCustomization($body)

Delete a role customization.

This will delete a role customization given a role customization name or forRoleId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleDeleteRoleCustomization(); // \Swagger\Client\Model\RoleDeleteRoleCustomization | 

try {
    $result = $apiInstance->roleDeleteRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleDeleteRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleDeleteRoleCustomization**](../Model/RoleDeleteRoleCustomization.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetUserTypeRoles**
> object roleGetUserTypeRoles($body)

Return the roles for user type

Return the defined roles for a specified user type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleGetUserTypeRoles(); // \Swagger\Client\Model\RoleGetUserTypeRoles | 

try {
    $result = $apiInstance->roleGetUserTypeRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGetUserTypeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleGetUserTypeRoles**](../Model/RoleGetUserTypeRoles.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

