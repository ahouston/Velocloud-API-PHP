# Swagger\Client\DisasterRecoveryApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disasterRecoveryConfigureActiveForReplication**](DisasterRecoveryApi.md#disasterRecoveryConfigureActiveForReplication) | **POST** /disasterRecovery/configureActiveForReplication | Configure current VCO to be active and specified VCO to be standby for VCO disaster recovery replication
[**disasterRecoveryDemoteActive**](DisasterRecoveryApi.md#disasterRecoveryDemoteActive) | **POST** /disasterRecovery/demoteActive | Demote current server from active to zombie
[**disasterRecoveryGetReplicationBlob**](DisasterRecoveryApi.md#disasterRecoveryGetReplicationBlob) | **POST** /disasterRecovery/getReplicationBlob | [Unused by default] Get from the active VCO the blob needed to configure VCO replication on the standby.
[**disasterRecoveryGetReplicationStatus**](DisasterRecoveryApi.md#disasterRecoveryGetReplicationStatus) | **POST** /disasterRecovery/getReplicationStatus | Get VCO disaster recovery status
[**disasterRecoveryPrepareForStandby**](DisasterRecoveryApi.md#disasterRecoveryPrepareForStandby) | **POST** /disasterRecovery/prepareForStandby | Prepare current VCO to be configured as a standby system
[**disasterRecoveryPromoteStandbyToActive**](DisasterRecoveryApi.md#disasterRecoveryPromoteStandbyToActive) | **POST** /disasterRecovery/promoteStandbyToActive | Promote the current server, expected to be a standby, to take over as the single standalone VCO
[**disasterRecoveryRemoveStandby**](DisasterRecoveryApi.md#disasterRecoveryRemoveStandby) | **POST** /disasterRecovery/removeStandby | Unconfigure VCO disaster recovery on the current server
[**disasterRecoveryTransitionToStandby**](DisasterRecoveryApi.md#disasterRecoveryTransitionToStandby) | **POST** /disasterRecovery/transitionToStandby | Configure current VCO to transition to standby in disaster recovery active/standby pair.


# **disasterRecoveryConfigureActiveForReplication**
> object disasterRecoveryConfigureActiveForReplication($body)

Configure current VCO to be active and specified VCO to be standby for VCO disaster recovery replication

Configure the current VCO to be active and the specified VCO to be standby for VCO disaster recovery replication. Required attributes are 1) standbyList, a single-entry array containing the standbyAddress and standbyUuid, 2) drVCOUser, a VCO super user available on both the active and standby VCOs, and 3) drVCOPassword, the password of drVCOUser on the standby VCO (unless the autoConfigStandby option is specified as false). The call sets up the active VCO to allow replication from the standby and then (unless autoConfigStandby is false) makes a transitionToStandby API call to the specified standby, expected to have been previously placed in STANDBY_CANDIDATE state via prepareForStandby.  After this call, the active and standby VCOs should be polled via getReplicationStatus until they  both reach STANDBY_RUNNING drState (or a configuration error is reported).  (Note: the drVCOPassword is not persisted.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication(); // \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication | 

try {
    $result = $apiInstance->disasterRecoveryConfigureActiveForReplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryConfigureActiveForReplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication**](../Model/DisasterRecoveryConfigureActiveForReplication.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryDemoteActive**
> object disasterRecoveryDemoteActive($body)

Demote current server from active to zombie

No input parameters are required.  The active server is expected to be in the drState FAILURE_GET_STANDBY_STATUS or FAILURE_MYSQL_ACTIVE_STATUS, meaning that DR protection had been engaged (with the last successful replication status observed at lastDRProtectedTime) but that active failed a health check since that time.  If the active server is in the drState STANDBY_RUNNING, meaning that it has detected no problems in interacting with the standby server, the operator can force demotion of the active using the optional parameter force passed with value of true; in this case, the operator must ensure the standby server has already been successfully promoted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryDemoteActive(); // \Swagger\Client\Model\DisasterRecoveryDemoteActive | 

try {
    $result = $apiInstance->disasterRecoveryDemoteActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryDemoteActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryDemoteActive**](../Model/DisasterRecoveryDemoteActive.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryGetReplicationBlob**
> object disasterRecoveryGetReplicationBlob($body)

[Unused by default] Get from the active VCO the blob needed to configure VCO replication on the standby.

[Unused by default] Get from the active VCO the blob needed to configure VCO replication on the standby. Only used when configureActiveForReplication was called with autoConfigStandby set to false [true by default].

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationBlob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryGetReplicationBlob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryGetReplicationStatus**
> object disasterRecoveryGetReplicationStatus($body)

Get VCO disaster recovery status

Get VCO disaster recovery replication status, optionally with client contact, state transition history, and storage information.  No input parameters are required.  Can optionally specify 1 or more of the following with parameters: clientContact,clientCount,stateHistory,storageInfo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus(); // \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryGetReplicationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatus**](../Model/DisasterRecoveryGetReplicationStatus.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryPrepareForStandby**
> object disasterRecoveryPrepareForStandby($body)

Prepare current VCO to be configured as a standby system

Transition current VCO to quiesced state, ready to be configured as a standby system. No input parameters are required.  After this call, VCO will be restarted in standby mode; caller should subsequently poll getReplicationStatus until drState is STANDBY_CANDIDATE.  This is the first step to configuring VCO Disaster Recovery.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryPrepareForStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryPrepareForStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryPromoteStandbyToActive**
> object disasterRecoveryPromoteStandbyToActive($body)

Promote the current server, expected to be a standby, to take over as the single standalone VCO

The current server is expected to be a standby in the drState FAILURE_MYSQL_STANDBY_STATUS, meaning that DR protection had been engaged (with the last successful replication status observed at lastDRProtectedTime) but that standby has been unable to replicate since that time. If the standby server is in the drState STANDBY_RUNNING, meaning that it has detected no problems in replicating from the active server, the operator can force promotion of the standby using the optional parameter force passed with value of true; in this case, the standby server will call demoteActive/force on the active.  The operator should, if possible, ensure the formerly active server is demoted by running demoteServer directly on that server if the standby server was unable to do so successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive(); // \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive | 

try {
    $result = $apiInstance->disasterRecoveryPromoteStandbyToActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryPromoteStandbyToActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive**](../Model/DisasterRecoveryPromoteStandbyToActive.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryRemoveStandby**
> object disasterRecoveryRemoveStandby($body)

Unconfigure VCO disaster recovery on the current server

Unconfigure VCO disaster recovery on the current server.  Also, make a best-effort call to removeStandby on the paired DR server. No input parameters are required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryRemoveStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryRemoveStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryTransitionToStandby**
> object disasterRecoveryTransitionToStandby($body)

Configure current VCO to transition to standby in disaster recovery active/standby pair.

Configure current VCO to transition to standby in disaster recovery active/standby pair. Requires parameter activeAccessFromStandby, which contains the data needed to configure standby. This data is produced by configureActiveForReplication, which by default, automatically calls transitionToStandby; an explicit call is only needed, with a blob obtained from getReplicationBlob, if configureActiveForReplication is called with autoConfigStandby set false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisasterRecoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryTransitionToStandby(); // \Swagger\Client\Model\DisasterRecoveryTransitionToStandby | 

try {
    $result = $apiInstance->disasterRecoveryTransitionToStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisasterRecoveryApi->disasterRecoveryTransitionToStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryTransitionToStandby**](../Model/DisasterRecoveryTransitionToStandby.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

