# Swagger\Client\AllApi

All URIs are relative to *https://sprint-vco1.velocloud.net/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationCloneConfiguration**](AllApi.md#configurationCloneConfiguration) | **POST** /configuration/cloneConfiguration | Clone a configuration
[**configurationCloneEnterpriseTemplate**](AllApi.md#configurationCloneEnterpriseTemplate) | **POST** /configuration/cloneEnterpriseTemplate | clone a new configuration
[**configurationGetConfiguration**](AllApi.md#configurationGetConfiguration) | **POST** /configuration/getConfiguration | Get a configuration profile
[**configurationGetConfigurationModules**](AllApi.md#configurationGetConfigurationModules) | **POST** /configuration/getConfigurationModules | 
[**configurationInsertConfigurationModule**](AllApi.md#configurationInsertConfigurationModule) | **POST** /configuration/insertConfigurationModule | 
[**configurationUpdateConfiguration**](AllApi.md#configurationUpdateConfiguration) | **POST** /configuration/updateConfiguration | 
[**configurationUpdateConfigurationModule**](AllApi.md#configurationUpdateConfigurationModule) | **POST** /configuration/updateConfigurationModule | 
[**disasterRecoveryConfigureActiveForReplication**](AllApi.md#disasterRecoveryConfigureActiveForReplication) | **POST** /disasterRecovery/configureActiveForReplication | Configure current VCO to be active and specified VCO to be standby for VCO disaster recovery replication
[**disasterRecoveryDemoteActive**](AllApi.md#disasterRecoveryDemoteActive) | **POST** /disasterRecovery/demoteActive | Demote current server from active to zombie
[**disasterRecoveryGetReplicationBlob**](AllApi.md#disasterRecoveryGetReplicationBlob) | **POST** /disasterRecovery/getReplicationBlob | [Unused by default] Get from the active VCO the blob needed to configure VCO replication on the standby.
[**disasterRecoveryGetReplicationStatus**](AllApi.md#disasterRecoveryGetReplicationStatus) | **POST** /disasterRecovery/getReplicationStatus | Get VCO disaster recovery status
[**disasterRecoveryPrepareForStandby**](AllApi.md#disasterRecoveryPrepareForStandby) | **POST** /disasterRecovery/prepareForStandby | Prepare current VCO to be configured as a standby system
[**disasterRecoveryPromoteStandbyToActive**](AllApi.md#disasterRecoveryPromoteStandbyToActive) | **POST** /disasterRecovery/promoteStandbyToActive | Promote the current server, expected to be a standby, to take over as the single standalone VCO
[**disasterRecoveryRemoveStandby**](AllApi.md#disasterRecoveryRemoveStandby) | **POST** /disasterRecovery/removeStandby | Unconfigure VCO disaster recovery on the current server
[**disasterRecoveryTransitionToStandby**](AllApi.md#disasterRecoveryTransitionToStandby) | **POST** /disasterRecovery/transitionToStandby | Configure current VCO to transition to standby in disaster recovery active/standby pair.
[**edgeDeleteEdge**](AllApi.md#edgeDeleteEdge) | **POST** /edge/deleteEdge | 
[**edgeDeleteEdgeRecords**](AllApi.md#edgeDeleteEdgeRecords) | **POST** /edge/deleteEdgeRecords | Deletes Edge record(s)
[**edgeEdgeCancelReactivation**](AllApi.md#edgeEdgeCancelReactivation) | **POST** /edge/edgeCancelReactivation | Cancel reactivation
[**edgeEdgeProvision**](AllApi.md#edgeEdgeProvision) | **POST** /edge/edgeProvision | Provision an edge
[**edgeEdgeRequestReactivation**](AllApi.md#edgeEdgeRequestReactivation) | **POST** /edge/edgeRequestReactivation | reactivate edge
[**edgeGetEdge**](AllApi.md#edgeGetEdge) | **POST** /edge/getEdge | Get edge info
[**edgeGetEdgeConfigurationStack**](AllApi.md#edgeGetEdgeConfigurationStack) | **POST** /edge/getEdgeConfigurationStack | 
[**edgeSetEdgeHandOffGateways**](AllApi.md#edgeSetEdgeHandOffGateways) | **POST** /edge/setEdgeHandOffGateways | 
[**edgeUpdateEdgeAdminPassword**](AllApi.md#edgeUpdateEdgeAdminPassword) | **POST** /edge/updateEdgeAdminPassword | update credentials
[**edgeUpdateEdgeAttributes**](AllApi.md#edgeUpdateEdgeAttributes) | **POST** /edge/updateEdgeAttributes | Update edge attributes (name and description).
[**enterpriseDeleteEnterprise**](AllApi.md#enterpriseDeleteEnterprise) | **POST** /enterprise/deleteEnterprise | Deletes enterprise
[**enterpriseDeleteEnterpriseGatewayRecords**](AllApi.md#enterpriseDeleteEnterpriseGatewayRecords) | **POST** /enterprise/deleteEnterpriseGatewayRecords | Deletes enterprise gateway record(s)
[**enterpriseGetEnterpiseRouteConfiguration**](AllApi.md#enterpriseGetEnterpiseRouteConfiguration) | **POST** /enterprise/getEnterpriseRouteConfiguration | Get route advertisement and routing preferences policy
[**enterpriseGetEnterpriseConfigurations**](AllApi.md#enterpriseGetEnterpriseConfigurations) | **POST** /enterprise/getEnterpriseConfigurations | get enterprise configuration profiles
[**enterpriseGetEnterpriseEdges**](AllApi.md#enterpriseGetEnterpriseEdges) | **POST** /enterprise/getEnterpriseEdges | Get edge list.
[**enterpriseGetEnterpriseRouteTable**](AllApi.md#enterpriseGetEnterpriseRouteTable) | **POST** /enterprise/getEnterpriseRouteTable | 
[**enterpriseGetEnterpriseServices**](AllApi.md#enterpriseGetEnterpriseServices) | **POST** /enterprise/getEnterpriseServices | 
[**enterpriseGetEnterpriseUsers**](AllApi.md#enterpriseGetEnterpriseUsers) | **POST** /enterprise/getEnterpriseUsers | Get list of enterprise users by enterprise id.
[**enterpriseInsertEnterprise**](AllApi.md#enterpriseInsertEnterprise) | **POST** /enterprise/insertEnterprise | Insert an enterprise, owned by the operator or an MSP.
[**enterpriseInsertEnterpriseNetworkAllocation**](AllApi.md#enterpriseInsertEnterpriseNetworkAllocation) | **POST** /enterprise/insertEnterpriseNetworkAllocation | insert enterprise network allocation
[**enterpriseInsertEnterpriseService**](AllApi.md#enterpriseInsertEnterpriseService) | **POST** /enterprise/insertEnterpriseService | Insert an enterprise service
[**enterpriseInsertEnterpriseUser**](AllApi.md#enterpriseInsertEnterpriseUser) | **POST** /enterprise/insertEnterpriseUser | Insert an enterprise user
[**enterpriseInsertOrUpdateEnterpriseCapability**](AllApi.md#enterpriseInsertOrUpdateEnterpriseCapability) | **POST** /enterprise/insertOrUpdateEnterpriseCapability | 
[**enterpriseInsertOrUpdateEnterpriseGatewayHandoff**](AllApi.md#enterpriseInsertOrUpdateEnterpriseGatewayHandoff) | **POST** /enterprise/insertOrUpdateEnterpriseGatewayHandoff | 
[**enterpriseUpdateEnterpriseNetworkAllocation**](AllApi.md#enterpriseUpdateEnterpriseNetworkAllocation) | **POST** /enterprise/updateEnterpriseNetworkAllocation | 
[**enterpriseUpdateEnterpriseRoute**](AllApi.md#enterpriseUpdateEnterpriseRoute) | **POST** /enterprise/updateEnterpriseRoute | 
[**enterpriseUpdateEnterpriseRouteConfiguration**](AllApi.md#enterpriseUpdateEnterpriseRouteConfiguration) | **POST** /enterprise/updateEnterpriseRouteConfiguration | 
[**enterpriseUpdateEnterpriseSecurityPolicy**](AllApi.md#enterpriseUpdateEnterpriseSecurityPolicy) | **POST** /enterprise/updateEnterpriseSecurityPolicy | 
[**enterpriseUpdateEnterpriseService**](AllApi.md#enterpriseUpdateEnterpriseService) | **POST** /enterprise/updateEnterpriseService | 
[**enterpriseUserDeleteEnterpriseUser**](AllApi.md#enterpriseUserDeleteEnterpriseUser) | **POST** /enterpriseUser/deleteEnterpriseUser | Delete an enterprise user.
[**enterpriseUserUpdateEnterpriseUser**](AllApi.md#enterpriseUserUpdateEnterpriseUser) | **POST** /enterpriseUser/updateEnterpriseUser | Update an enterprise user
[**eventGetEnterpriseEvents**](AllApi.md#eventGetEnterpriseEvents) | **POST** /event/getEnterpriseEvents | Fetch edge events
[**eventGetOperatorEvents**](AllApi.md#eventGetOperatorEvents) | **POST** event/getOperatorEvents | Fetch Operator Events
[**gatewayDeleteGateway**](AllApi.md#gatewayDeleteGateway) | **POST** /gateway/deleteGateway | 
[**gatewayGatewayProvision**](AllApi.md#gatewayGatewayProvision) | **POST** /gateway/gatewayProvision | Provision a gateway
[**gatewayUpdateGatewayAttributes**](AllApi.md#gatewayUpdateGatewayAttributes) | **POST** /gateway/updateGatewayAttributes | 
[**loginEnterpriseLogin**](AllApi.md#loginEnterpriseLogin) | **POST** /login/enterpriseLogin | Authentication for non-operator users
[**loginOperatorLogin**](AllApi.md#loginOperatorLogin) | **POST** /login/operatorLogin | Authentication for an operator user
[**logout**](AllApi.md#logout) | **POST** /logout | Deactivates a given authorization cookie
[**meta**](AllApi.md#meta) | **POST** /meta/{apiPath} | Get meta-data on any other API call
[**metricsGetAggregateEdgeLinkMetrics**](AllApi.md#metricsGetAggregateEdgeLinkMetrics) | **POST** /metrics/getAggregateEdgeLinkMetrics | get aggregated edge link metrics across enterprises
[**metricsGetEdgeAppLinkMetrics**](AllApi.md#metricsGetEdgeAppLinkMetrics) | **POST** /metrics/getEdgeAppLinkMetrics | Fetch an array of flow metric grouped by link.
[**metricsGetEdgeAppMetrics**](AllApi.md#metricsGetEdgeAppMetrics) | **POST** /metrics/getEdgeAppMetrics | Fetch an array of application flow metrics.
[**metricsGetEdgeLinkMetrics**](AllApi.md#metricsGetEdgeLinkMetrics) | **POST** /metrics/getEdgeLinkMetrics | get edge link metrics
[**monitoringGetAggregateEnterpriseEvents**](AllApi.md#monitoringGetAggregateEnterpriseEvents) | **POST** /monitoring/getAggregateEnterpriseEvents | Fetch all ent. events
[**monitoringGetAggregates**](AllApi.md#monitoringGetAggregates) | **POST** /monitoring/getAggregates | Generate aggregate enterprise/edge information
[**monitoringGetEdgeBgpPeerStatus**](AllApi.md#monitoringGetEdgeBgpPeerStatus) | **POST** /monitoring/getEnterpriseEdgeBgpPeerStatus | get BGP adjacency status for an edge
[**monitoringGetEnterpriseBgpPeerStatus**](AllApi.md#monitoringGetEnterpriseBgpPeerStatus) | **POST** /monitoring/getEnterpriseBgpPeerStatus | get enterprise BGP adjacency status
[**monitoringGetEnterpriseEdgeLinkStatus**](AllApi.md#monitoringGetEnterpriseEdgeLinkStatus) | **POST** /monitoring/getEnterpriseEdgeLinkStatus | edge and link status for monitoring
[**networkDeleteNetworkGatewayPool**](AllApi.md#networkDeleteNetworkGatewayPool) | **POST** /network/deleteNetworkGatewayPool | 
[**networkGetNetworkConfigurations**](AllApi.md#networkGetNetworkConfigurations) | **POST** /network/getNetworkConfigurations | Get configuration profiles
[**networkGetNetworkEnterprises**](AllApi.md#networkGetNetworkEnterprises) | **POST** /network/getNetworkEnterprises | Get list of enterprises by network.
[**networkGetNetworkGatewayPools**](AllApi.md#networkGetNetworkGatewayPools) | **POST** /network/getNetworkGatewayPools | Get list of gateway pools
[**networkGetNetworkGateways**](AllApi.md#networkGetNetworkGateways) | **POST** /network/getNetworkGateways | 
[**networkGetNetworkOperatorUsers**](AllApi.md#networkGetNetworkOperatorUsers) | **POST** /network/getNetworkOperatorUsers | Get list of operator users associated with a network
[**networkInsertNetworkGatewayPool**](AllApi.md#networkInsertNetworkGatewayPool) | **POST** /network/insertNetworkGatewayPool | Insert gateway pool
[**networkUpdateNetworkGatewayPoolAttributes**](AllApi.md#networkUpdateNetworkGatewayPoolAttributes) | **POST** /network/updateNetworkGatwayPoolAttributes | 
[**operatorUserDeleteOperatorUser**](AllApi.md#operatorUserDeleteOperatorUser) | **POST** /operatorUser/deleteOperatorUser | Delete an operator user
[**operatorUserInsertOperatorUser**](AllApi.md#operatorUserInsertOperatorUser) | **POST** /operatorUser/insertOperatorUser | Insert an operator user
[**operatorUserUpdateOperatorUser**](AllApi.md#operatorUserUpdateOperatorUser) | **POST** /operatorUser/updateOperatorUser | Update an operator user
[**roleCreateRoleCustomization**](AllApi.md#roleCreateRoleCustomization) | **POST** /role/createRoleCustomization | Create a role customization.
[**roleDeleteRoleCustomization**](AllApi.md#roleDeleteRoleCustomization) | **POST** /role/deleteRoleCustomization | Delete a role customization.
[**roleGetUserTypeRoles**](AllApi.md#roleGetUserTypeRoles) | **POST** /role/getUserTypeRoles | Return the roles for user type
[**systemPropertyGetSystemProperty**](AllApi.md#systemPropertyGetSystemProperty) | **POST** /systemProperty/getSystemProperty | Get system property
[**systemPropertyInsertOrUpdateSystemProperty**](AllApi.md#systemPropertyInsertOrUpdateSystemProperty) | **POST** /systemProperty/insertOrUpdateSystemProperty | Insert or Update a system property
[**systemPropertyInsertSystemProperty**](AllApi.md#systemPropertyInsertSystemProperty) | **POST** /systemProperty/insertSystemProperty | Insert a system property
[**systemPropertyUpdateSystemProperty**](AllApi.md#systemPropertyUpdateSystemProperty) | **POST** /systemProperty/updateSystemProperty | Update a system property


# **configurationCloneConfiguration**
> object configurationCloneConfiguration($body)

Clone a configuration

Clones an existing configuration by configurationId.Either an enterpriseId or networkId to associate the new config with either an enterprise or network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneConfiguration(); // \Swagger\Client\Model\ConfigurationCloneConfiguration | 

try {
    $result = $apiInstance->configurationCloneConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationCloneConfiguration: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate(); // \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate | 

try {
    $result = $apiInstance->configurationCloneEnterpriseTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationCloneEnterpriseTemplate: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfiguration(); // \Swagger\Client\Model\ConfigurationGetConfiguration | 

try {
    $result = $apiInstance->configurationGetConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationGetConfiguration: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfigurationModules(); // \Swagger\Client\Model\ConfigurationGetConfigurationModules | 

try {
    $result = $apiInstance->configurationGetConfigurationModules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationGetConfigurationModules: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationInsertConfigurationModule(); // \Swagger\Client\Model\ConfigurationInsertConfigurationModule | 

try {
    $result = $apiInstance->configurationInsertConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationInsertConfigurationModule: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfiguration(); // \Swagger\Client\Model\ConfigurationUpdateConfiguration | 

try {
    $result = $apiInstance->configurationUpdateConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationUpdateConfiguration: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfigurationModule(); // \Swagger\Client\Model\ConfigurationUpdateConfigurationModule | 

try {
    $result = $apiInstance->configurationUpdateConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationUpdateConfigurationModule: ', $e->getMessage(), PHP_EOL;
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

# **disasterRecoveryConfigureActiveForReplication**
> object disasterRecoveryConfigureActiveForReplication($body)

Configure current VCO to be active and specified VCO to be standby for VCO disaster recovery replication

Configure the current VCO to be active and the specified VCO to be standby for VCO disaster recovery replication. Required attributes are 1) standbyList, a single-entry array containing the standbyAddress and standbyUuid, 2) drVCOUser, a VCO super user available on both the active and standby VCOs, and 3) drVCOPassword, the password of drVCOUser on the standby VCO (unless the autoConfigStandby option is specified as false). The call sets up the active VCO to allow replication from the standby and then (unless autoConfigStandby is false) makes a transitionToStandby API call to the specified standby, expected to have been previously placed in STANDBY_CANDIDATE state via prepareForStandby.  After this call, the active and standby VCOs should be polled via getReplicationStatus until they  both reach STANDBY_RUNNING drState (or a configuration error is reported).  (Note: the drVCOPassword is not persisted.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication(); // \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication | 

try {
    $result = $apiInstance->disasterRecoveryConfigureActiveForReplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryConfigureActiveForReplication: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryDemoteActive(); // \Swagger\Client\Model\DisasterRecoveryDemoteActive | 

try {
    $result = $apiInstance->disasterRecoveryDemoteActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryDemoteActive: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationBlob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryGetReplicationBlob: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus(); // \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryGetReplicationStatus: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryPrepareForStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryPrepareForStandby: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive(); // \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive | 

try {
    $result = $apiInstance->disasterRecoveryPromoteStandbyToActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryPromoteStandbyToActive: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->disasterRecoveryRemoveStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryRemoveStandby: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryTransitionToStandby(); // \Swagger\Client\Model\DisasterRecoveryTransitionToStandby | 

try {
    $result = $apiInstance->disasterRecoveryTransitionToStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryTransitionToStandby: ', $e->getMessage(), PHP_EOL;
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

# **edgeDeleteEdge**
> object edgeDeleteEdge($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdge(); // \Swagger\Client\Model\EdgeDeleteEdge | 

try {
    $result = $apiInstance->edgeDeleteEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeDeleteEdge: ', $e->getMessage(), PHP_EOL;
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

# **edgeDeleteEdgeRecords**
> object edgeDeleteEdgeRecords($body)

Deletes Edge record(s)

Deletes the given Edge record(s), specified by record id and enterprise id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdgeRecords(); // \Swagger\Client\Model\EdgeDeleteEdgeRecords | 

try {
    $result = $apiInstance->edgeDeleteEdgeRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeDeleteEdgeRecords: ', $e->getMessage(), PHP_EOL;
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

# **edgeEdgeCancelReactivation**
> object edgeEdgeCancelReactivation($body)

Cancel reactivation

Cancel a pending reactivation request for an edge.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeCancelReactivation(); // \Swagger\Client\Model\EdgeEdgeCancelReactivation | 

try {
    $result = $apiInstance->edgeEdgeCancelReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeCancelReactivation: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeProvision(); // \Swagger\Client\Model\EdgeEdgeProvision | 

try {
    $result = $apiInstance->edgeEdgeProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeProvision: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeRequestReactivation(); // \Swagger\Client\Model\EdgeEdgeRequestReactivation | 

try {
    $result = $apiInstance->edgeEdgeRequestReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeRequestReactivation: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdge(); // \Swagger\Client\Model\EdgeGetEdge | 

try {
    $result = $apiInstance->edgeGetEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeGetEdge: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdgeConfigurationStack(); // \Swagger\Client\Model\EdgeGetEdgeConfigurationStack | 

try {
    $result = $apiInstance->edgeGetEdgeConfigurationStack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeGetEdgeConfigurationStack: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeHandOffGateways(); // \Swagger\Client\Model\EdgeSetEdgeHandOffGateways | 

try {
    $result = $apiInstance->edgeSetEdgeHandOffGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeSetEdgeHandOffGateways: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword(); // \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword | 

try {
    $result = $apiInstance->edgeUpdateEdgeAdminPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeUpdateEdgeAdminPassword: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAttributes(); // \Swagger\Client\Model\EdgeUpdateEdgeAttributes | 

try {
    $result = $apiInstance->edgeUpdateEdgeAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeUpdateEdgeAttributes: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseDeleteEnterprise**
> object enterpriseDeleteEnterprise($body)

Deletes enterprise

Deletes the given enterprise, specified by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterprise(); // \Swagger\Client\Model\EnterpriseDeleteEnterprise | 

try {
    $result = $apiInstance->enterpriseDeleteEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterprise: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseGatewayRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterpriseGatewayRecords: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseGetEnterpiseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpiseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseConfigurations: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseEdges(); // \Swagger\Client\Model\EnterpriseGetEnterpriseEdges | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseEdges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseEdges: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteTable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseRouteTable: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseServices(); // \Swagger\Client\Model\EnterpriseGetEnterpriseServices | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseServices: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseGetEnterpriseUsers**
> object enterpriseGetEnterpriseUsers($body)

Get list of enterprise users by enterprise id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseUsers(); // \Swagger\Client\Model\EnterpriseGetEnterpriseUsers | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseUsers: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseObject(); // \Swagger\Client\Model\EnterpriseObject | 

try {
    $result = $apiInstance->enterpriseInsertEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterprise: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseInsertEnterpriseNetworkAllocation**
> object enterpriseInsertEnterpriseNetworkAllocation($body)

insert enterprise network allocation

insert enterprise network allocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseService(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseService | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseService: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseInsertEnterpriseUser**
> object enterpriseInsertEnterpriseUser($body)

Insert an enterprise user

Insert an enterprise user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseUserObject(); // \Swagger\Client\Model\NewEnterpriseUserObject | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseUser: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseInsertOrUpdateEnterpriseCapability**
> object enterpriseInsertOrUpdateEnterpriseCapability($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseCapability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseCapability: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseRoute: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseSecurityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseSecurityPolicy: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseService(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseService | 

try {
    $apiInstance->enterpriseUpdateEnterpriseService($body);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseService: ', $e->getMessage(), PHP_EOL;
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

# **enterpriseUserDeleteEnterpriseUser**
> object enterpriseUserDeleteEnterpriseUser($body)

Delete an enterprise user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserDeleteEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUserDeleteEnterpriseUser: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserUpdateEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUserUpdateEnterpriseUser: ', $e->getMessage(), PHP_EOL;
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

# **eventGetEnterpriseEvents**
> object eventGetEnterpriseEvents($body)

Fetch edge events

Fetch edge events in an enterprise or edge context, returns an array of filters and sorted edge events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetEnterpriseEvents(); // \Swagger\Client\Model\EventGetEnterpriseEvents | 

try {
    $result = $apiInstance->eventGetEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->eventGetEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetEnterpriseEvents**](../Model/EventGetEnterpriseEvents.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventGetOperatorEvents**
> object eventGetOperatorEvents($body)

Fetch Operator Events

Fetch Operator Events by network ID (optional, if not specified will be taken for the callers security context). Optionally, a filter object can be used to limit the number of events returned. Additionally, a time interval can be specified with an interval object. If no end date is given, it will default to the current date. Gateway ID can be supplied to filter events to those from a specific gateway.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetOperatorEvents(); // \Swagger\Client\Model\EventGetOperatorEvents | 

try {
    $result = $apiInstance->eventGetOperatorEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->eventGetOperatorEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetOperatorEvents**](../Model/EventGetOperatorEvents.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayDeleteGateway**
> object gatewayDeleteGateway($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayDeleteGateway(); // \Swagger\Client\Model\GatewayDeleteGateway | 

try {
    $result = $apiInstance->gatewayDeleteGateway($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayDeleteGateway: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayGatewayProvision(); // \Swagger\Client\Model\GatewayGatewayProvision | 

try {
    $result = $apiInstance->gatewayGatewayProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayGatewayProvision: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayUpdateGatewayAttributes(); // \Swagger\Client\Model\GatewayUpdateGatewayAttributes | 

try {
    $result = $apiInstance->gatewayUpdateGatewayAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayUpdateGatewayAttributes: ', $e->getMessage(), PHP_EOL;
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

# **loginEnterpriseLogin**
> loginEnterpriseLogin($authorization)

Authentication for non-operator users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginEnterpriseLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->loginEnterpriseLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOperatorLogin**
> loginOperatorLogin($authorization)

Authentication for an operator user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginOperatorLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->loginOperatorLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout()

Deactivates a given authorization cookie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logout();
} catch (Exception $e) {
    echo 'Exception when calling AllApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meta**
> \Swagger\Client\Model\InlineResponse200 meta($api_path)

Get meta-data on any other API call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_path = "api_path_example"; // string | the path to another api method, starting after /rest/

try {
    $result = $apiInstance->meta($api_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->meta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_path** | **string**| the path to another api method, starting after /rest/ |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetAggregateEdgeLinkMetrics**
> object metricsGetAggregateEdgeLinkMetrics($body)

get aggregated edge link metrics across enterprises

get aggregated edge link metrics across enterprises

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetAggregateEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetAggregateEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetAggregateEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetAggregateEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppLinkMetrics: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppMetrics: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
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

# **monitoringGetAggregateEnterpriseEvents**
> object monitoringGetAggregateEnterpriseEvents($body)

Fetch all ent. events

Fetch all events across all enterprises. When called in MSP context, only enterprises managed by the MSP are queried.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents(); // \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents | 

try {
    $result = $apiInstance->monitoringGetAggregateEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetAggregateEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregates(); // \Swagger\Client\Model\MonitoringGetAggregates | 

try {
    $result = $apiInstance->monitoringGetAggregates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetAggregates: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEdgeBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEdgeBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEnterpriseBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEnterpriseBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeLinkStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEnterpriseEdgeLinkStatus: ', $e->getMessage(), PHP_EOL;
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

# **networkDeleteNetworkGatewayPool**
> object networkDeleteNetworkGatewayPool($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool(); // \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool | 

try {
    $result = $apiInstance->networkDeleteNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkDeleteNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkDeleteNetworkGatewayPool**](../Model/NetworkDeleteNetworkGatewayPool.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkConfigurations**
> object networkGetNetworkConfigurations($body)

Get configuration profiles

Get the configuration profiles associated with an operators network including the modules associated with each profile. Templates are not returned from this call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkConfigurations(); // \Swagger\Client\Model\NetworkGetNetworkConfigurations | 

try {
    $result = $apiInstance->networkGetNetworkConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkConfigurations**](../Model/NetworkGetNetworkConfigurations.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkEnterprises**
> object networkGetNetworkEnterprises($body)

Get list of enterprises by network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkEnterprises(); // \Swagger\Client\Model\NetworkGetNetworkEnterprises | 

try {
    $result = $apiInstance->networkGetNetworkEnterprises($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkEnterprises**](../Model/NetworkGetNetworkEnterprises.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGatewayPools**
> object networkGetNetworkGatewayPools($body)

Get list of gateway pools

Get list of gateway pools associated with a network, optionally with the gateways that belong to each pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGatewayPools(); // \Swagger\Client\Model\NetworkGetNetworkGatewayPools | 

try {
    $result = $apiInstance->networkGetNetworkGatewayPools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkGatewayPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGatewayPools**](../Model/NetworkGetNetworkGatewayPools.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGateways**
> object networkGetNetworkGateways($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGateways(); // \Swagger\Client\Model\NetworkGetNetworkGateways | 

try {
    $result = $apiInstance->networkGetNetworkGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGateways**](../Model/NetworkGetNetworkGateways.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkOperatorUsers**
> object networkGetNetworkOperatorUsers($body)

Get list of operator users associated with a network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkOperatorUsers(); // \Swagger\Client\Model\NetworkGetNetworkOperatorUsers | 

try {
    $result = $apiInstance->networkGetNetworkOperatorUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkOperatorUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkOperatorUsers**](../Model/NetworkGetNetworkOperatorUsers.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkInsertNetworkGatewayPool**
> object networkInsertNetworkGatewayPool($body)

Insert gateway pool

Insert a gateway pool associated with a network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkInsertNetworkGatewayPool(); // \Swagger\Client\Model\NetworkInsertNetworkGatewayPool | 

try {
    $result = $apiInstance->networkInsertNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkInsertNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkInsertNetworkGatewayPool**](../Model/NetworkInsertNetworkGatewayPool.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkUpdateNetworkGatewayPoolAttributes**
> object networkUpdateNetworkGatewayPoolAttributes($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes(); // \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes | 

try {
    $result = $apiInstance->networkUpdateNetworkGatewayPoolAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkUpdateNetworkGatewayPoolAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes**](../Model/NetworkUpdateNetworkGatewayPoolAttributes.md)|  |

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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserDeleteOperatorUser(); // \Swagger\Client\Model\OperatorUserDeleteOperatorUser | 

try {
    $result = $apiInstance->operatorUserDeleteOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserDeleteOperatorUser: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserInsertOperatorUser(); // \Swagger\Client\Model\OperatorUserInsertOperatorUser | 

try {
    $result = $apiInstance->operatorUserInsertOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserInsertOperatorUser: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserUpdateOperatorUser(); // \Swagger\Client\Model\OperatorUserUpdateOperatorUser | 

try {
    $result = $apiInstance->operatorUserUpdateOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserUpdateOperatorUser: ', $e->getMessage(), PHP_EOL;
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

# **roleCreateRoleCustomization**
> object roleCreateRoleCustomization($body)

Create a role customization.

This will create create a role customization given a roleId and an array of privilegeIds. .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleCreateRoleCustomization(); // \Swagger\Client\Model\RoleCreateRoleCustomization | 

try {
    $result = $apiInstance->roleCreateRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleCreateRoleCustomization: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleDeleteRoleCustomization(); // \Swagger\Client\Model\RoleDeleteRoleCustomization | 

try {
    $result = $apiInstance->roleDeleteRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleDeleteRoleCustomization: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleGetUserTypeRoles(); // \Swagger\Client\Model\RoleGetUserTypeRoles | 

try {
    $result = $apiInstance->roleGetUserTypeRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleGetUserTypeRoles: ', $e->getMessage(), PHP_EOL;
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

# **systemPropertyGetSystemProperty**
> object systemPropertyGetSystemProperty($body)

Get system property

Get a system property by object id or other attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyGetSystemProperty(); // \Swagger\Client\Model\SystemPropertyGetSystemProperty | 

try {
    $result = $apiInstance->systemPropertyGetSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyGetSystemProperty: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertOrUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyInsertOrUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyInsertSystemProperty: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
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

