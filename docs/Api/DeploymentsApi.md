# Zarnite\DeploymentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeploymentV1DeploymentsPost()**](DeploymentsApi.md#createDeploymentV1DeploymentsPost) | **POST** /v1/deployments/ | Create Deployment |
| [**deleteDeploymentV1DeploymentsDeployIdDelete()**](DeploymentsApi.md#deleteDeploymentV1DeploymentsDeployIdDelete) | **DELETE** /v1/deployments/{deploy_id} | Delete Deployment |
| [**listDeploymentsV1DeploymentsGet()**](DeploymentsApi.md#listDeploymentsV1DeploymentsGet) | **GET** /v1/deployments/ | List Deployments |
| [**resolveShareV1DeploymentsShareShareIdGet()**](DeploymentsApi.md#resolveShareV1DeploymentsShareShareIdGet) | **GET** /v1/deployments/share/{share_id} | Resolve Share |
| [**updateDeploymentV1DeploymentsDeployIdPut()**](DeploymentsApi.md#updateDeploymentV1DeploymentsDeployIdPut) | **PUT** /v1/deployments/{deploy_id} | Update Deployment |
| [**verifyShareAccessV1DeploymentsShareShareIdVerifyPost()**](DeploymentsApi.md#verifyShareAccessV1DeploymentsShareShareIdVerifyPost) | **POST** /v1/deployments/share/{share_id}/verify | Verify Share Access |


## `createDeploymentV1DeploymentsPost()`

```php
createDeploymentV1DeploymentsPost($deployment_create): \Zarnite\Model\EnvelopeDeploymentResponse
```

Create Deployment

Create a new deployment with a unique share link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_create = new \Zarnite\Model\DeploymentCreate(); // \Zarnite\Model\DeploymentCreate

try {
    $result = $apiInstance->createDeploymentV1DeploymentsPost($deployment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->createDeploymentV1DeploymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deployment_create** | [**\Zarnite\Model\DeploymentCreate**](../Model/DeploymentCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeDeploymentResponse**](../Model/EnvelopeDeploymentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeploymentV1DeploymentsDeployIdDelete()`

```php
deleteDeploymentV1DeploymentsDeployIdDelete($deploy_id, $org_id): \Zarnite\Model\EnvelopeDeploymentDeleteResponse
```

Delete Deployment

Delete a deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploy_id = 'deploy_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->deleteDeploymentV1DeploymentsDeployIdDelete($deploy_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->deleteDeploymentV1DeploymentsDeployIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deploy_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeDeploymentDeleteResponse**](../Model/EnvelopeDeploymentDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeploymentsV1DeploymentsGet()`

```php
listDeploymentsV1DeploymentsGet($org_id, $agent_id): \Zarnite\Model\EnvelopeListDeploymentResponse
```

List Deployments

List deployments for an organization, optionally filtered by agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope
$agent_id = 'agent_id_example'; // string | Filter by agent

try {
    $result = $apiInstance->listDeploymentsV1DeploymentsGet($org_id, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->listDeploymentsV1DeploymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |
| **agent_id** | **string**| Filter by agent | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeListDeploymentResponse**](../Model/EnvelopeListDeploymentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveShareV1DeploymentsShareShareIdGet()`

```php
resolveShareV1DeploymentsShareShareIdGet($share_id): \Zarnite\Model\EnvelopeDeploymentResponse
```

Resolve Share

Public endpoint: resolve a share link to its deployment config. No auth required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$share_id = 'share_id_example'; // string

try {
    $result = $apiInstance->resolveShareV1DeploymentsShareShareIdGet($share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->resolveShareV1DeploymentsShareShareIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **share_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeDeploymentResponse**](../Model/EnvelopeDeploymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeploymentV1DeploymentsDeployIdPut()`

```php
updateDeploymentV1DeploymentsDeployIdPut($deploy_id, $org_id, $deployment_update): \Zarnite\Model\EnvelopeDeploymentResponse
```

Update Deployment

Update deployment settings (name, active status, access list, config).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploy_id = 'deploy_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope
$deployment_update = new \Zarnite\Model\DeploymentUpdate(); // \Zarnite\Model\DeploymentUpdate

try {
    $result = $apiInstance->updateDeploymentV1DeploymentsDeployIdPut($deploy_id, $org_id, $deployment_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->updateDeploymentV1DeploymentsDeployIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deploy_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |
| **deployment_update** | [**\Zarnite\Model\DeploymentUpdate**](../Model/DeploymentUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeDeploymentResponse**](../Model/EnvelopeDeploymentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyShareAccessV1DeploymentsShareShareIdVerifyPost()`

```php
verifyShareAccessV1DeploymentsShareShareIdVerifyPost($share_id, $deployment_share_verify_request): \Zarnite\Model\EnvelopeDeploymentShareVerifyResponse
```

Verify Share Access

Public endpoint: verify learner credentials for a deployment share link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zarnite\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$share_id = 'share_id_example'; // string
$deployment_share_verify_request = new \Zarnite\Model\DeploymentShareVerifyRequest(); // \Zarnite\Model\DeploymentShareVerifyRequest

try {
    $result = $apiInstance->verifyShareAccessV1DeploymentsShareShareIdVerifyPost($share_id, $deployment_share_verify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->verifyShareAccessV1DeploymentsShareShareIdVerifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **share_id** | **string**|  | |
| **deployment_share_verify_request** | [**\Zarnite\Model\DeploymentShareVerifyRequest**](../Model/DeploymentShareVerifyRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeDeploymentShareVerifyResponse**](../Model/EnvelopeDeploymentShareVerifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
