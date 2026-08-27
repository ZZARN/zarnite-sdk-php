# Zarnite\AgentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignLearnerV1AgentsAgentIdAssignmentsPost()**](AgentsApi.md#assignLearnerV1AgentsAgentIdAssignmentsPost) | **POST** /v1/agents/{agent_id}/assignments | Assign Learner |
| [**createAgentV1AgentsPost()**](AgentsApi.md#createAgentV1AgentsPost) | **POST** /v1/agents/ | Create Agent |
| [**deleteAgentV1AgentsAgentIdDelete()**](AgentsApi.md#deleteAgentV1AgentsAgentIdDelete) | **DELETE** /v1/agents/{agent_id} | Delete Agent |
| [**getAgentV1AgentsAgentIdGet()**](AgentsApi.md#getAgentV1AgentsAgentIdGet) | **GET** /v1/agents/{agent_id} | Get Agent |
| [**listAgentsV1AgentsGet()**](AgentsApi.md#listAgentsV1AgentsGet) | **GET** /v1/agents/ | List Agents |
| [**listAssignmentsV1AgentsAgentIdAssignmentsGet()**](AgentsApi.md#listAssignmentsV1AgentsAgentIdAssignmentsGet) | **GET** /v1/agents/{agent_id}/assignments | List Assignments |
| [**revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete()**](AgentsApi.md#revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete) | **DELETE** /v1/agents/{agent_id}/assignments/{learner_id} | Revoke Assignment |
| [**updateAgentV1AgentsAgentIdPatch()**](AgentsApi.md#updateAgentV1AgentsAgentIdPatch) | **PATCH** /v1/agents/{agent_id} | Update Agent |
| [**updateAgentV1AgentsAgentIdPut()**](AgentsApi.md#updateAgentV1AgentsAgentIdPut) | **PUT** /v1/agents/{agent_id} | Update Agent |


## `assignLearnerV1AgentsAgentIdAssignmentsPost()`

```php
assignLearnerV1AgentsAgentIdAssignmentsPost($agent_id, $assignment_create): \Zarnite\Model\EnvelopeAssignmentResponse
```

Assign Learner

Assign a learner to this agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$assignment_create = new \Zarnite\Model\AssignmentCreate(); // \Zarnite\Model\AssignmentCreate

try {
    $result = $apiInstance->assignLearnerV1AgentsAgentIdAssignmentsPost($agent_id, $assignment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->assignLearnerV1AgentsAgentIdAssignmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **assignment_create** | [**\Zarnite\Model\AssignmentCreate**](../Model/AssignmentCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeAssignmentResponse**](../Model/EnvelopeAssignmentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAgentV1AgentsPost()`

```php
createAgentV1AgentsPost($agent_create): \Zarnite\Model\EnvelopeAgentResponse
```

Create Agent

Create a new agent. Requires admin role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_create = new \Zarnite\Model\AgentCreate(); // \Zarnite\Model\AgentCreate

try {
    $result = $apiInstance->createAgentV1AgentsPost($agent_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->createAgentV1AgentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_create** | [**\Zarnite\Model\AgentCreate**](../Model/AgentCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentResponse**](../Model/EnvelopeAgentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgentV1AgentsAgentIdDelete()`

```php
deleteAgentV1AgentsAgentIdDelete($agent_id, $org_id): \Zarnite\Model\EnvelopeAgentDeleteResponse
```

Delete Agent

Delete an agent and return a typed confirmation envelope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->deleteAgentV1AgentsAgentIdDelete($agent_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->deleteAgentV1AgentsAgentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentDeleteResponse**](../Model/EnvelopeAgentDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentV1AgentsAgentIdGet()`

```php
getAgentV1AgentsAgentIdGet($agent_id, $org_id): \Zarnite\Model\EnvelopeAgentResponse
```

Get Agent

Get details of a specific agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->getAgentV1AgentsAgentIdGet($agent_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->getAgentV1AgentsAgentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentResponse**](../Model/EnvelopeAgentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgentsV1AgentsGet()`

```php
listAgentsV1AgentsGet($org_id, $agent_id, $status, $limit, $offset): \Zarnite\Model\EnvelopeListAgentResponse
```

List Agents

List all agents for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string
$status = 'status_example'; // string
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->listAgentsV1AgentsGet($org_id, $agent_id, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->listAgentsV1AgentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zarnite\Model\EnvelopeListAgentResponse**](../Model/EnvelopeListAgentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssignmentsV1AgentsAgentIdAssignmentsGet()`

```php
listAssignmentsV1AgentsAgentIdAssignmentsGet($agent_id, $org_id): \Zarnite\Model\EnvelopeListAssignmentResponse
```

List Assignments

List learners assigned to this agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->listAssignmentsV1AgentsAgentIdAssignmentsGet($agent_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->listAssignmentsV1AgentsAgentIdAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeListAssignmentResponse**](../Model/EnvelopeListAssignmentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete()`

```php
revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete($agent_id, $learner_id, $org_id): \Zarnite\Model\EnvelopeAssignmentDeleteResponse
```

Revoke Assignment

Revoke a learner's assignment from this agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete($agent_id, $learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->revokeAssignmentV1AgentsAgentIdAssignmentsLearnerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeAssignmentDeleteResponse**](../Model/EnvelopeAssignmentDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgentV1AgentsAgentIdPatch()`

```php
updateAgentV1AgentsAgentIdPatch($agent_id, $org_id, $agent_update): \Zarnite\Model\EnvelopeAgentResponse
```

Update Agent

Update an existing agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string
$agent_update = new \Zarnite\Model\AgentUpdate(); // \Zarnite\Model\AgentUpdate

try {
    $result = $apiInstance->updateAgentV1AgentsAgentIdPatch($agent_id, $org_id, $agent_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->updateAgentV1AgentsAgentIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**|  | |
| **agent_update** | [**\Zarnite\Model\AgentUpdate**](../Model/AgentUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentResponse**](../Model/EnvelopeAgentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgentV1AgentsAgentIdPut()`

```php
updateAgentV1AgentsAgentIdPut($agent_id, $org_id, $agent_update): \Zarnite\Model\EnvelopeAgentResponse
```

Update Agent

Update an existing agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string
$agent_update = new \Zarnite\Model\AgentUpdate(); // \Zarnite\Model\AgentUpdate

try {
    $result = $apiInstance->updateAgentV1AgentsAgentIdPut($agent_id, $org_id, $agent_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->updateAgentV1AgentsAgentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**|  | |
| **agent_update** | [**\Zarnite\Model\AgentUpdate**](../Model/AgentUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentResponse**](../Model/EnvelopeAgentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
