# Zarnite\AnalyticsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet()**](AnalyticsApi.md#agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet) | **GET** /v1/analytics/agent/{agent_id}/performance | Agent Performance |
| [**orgOverviewV1AnalyticsOrgOrgIdGet()**](AnalyticsApi.md#orgOverviewV1AnalyticsOrgOrgIdGet) | **GET** /v1/analytics/org/{org_id} | Org Overview |
| [**userSummaryV1AnalyticsUserUserIdGet()**](AnalyticsApi.md#userSummaryV1AnalyticsUserUserIdGet) | **GET** /v1/analytics/user/{user_id} | User Summary |
| [**userTopicsV1AnalyticsUserUserIdTopicsGet()**](AnalyticsApi.md#userTopicsV1AnalyticsUserUserIdTopicsGet) | **GET** /v1/analytics/user/{user_id}/topics | User Topics |
| [**userTrendsV1AnalyticsUserUserIdTrendsGet()**](AnalyticsApi.md#userTrendsV1AnalyticsUserUserIdTrendsGet) | **GET** /v1/analytics/user/{user_id}/trends | User Trends |


## `agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet()`

```php
agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet($agent_id, $org_id): \Zarnite\Model\EnvelopeAgentPerformanceResponse
```

Agent Performance

Get agent performance metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet($agent_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->agentPerformanceV1AnalyticsAgentAgentIdPerformanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeAgentPerformanceResponse**](../Model/EnvelopeAgentPerformanceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orgOverviewV1AnalyticsOrgOrgIdGet()`

```php
orgOverviewV1AnalyticsOrgOrgIdGet($org_id): \Zarnite\Model\EnvelopeOrgOverviewResponse
```

Org Overview

Get organization overview.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->orgOverviewV1AnalyticsOrgOrgIdGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->orgOverviewV1AnalyticsOrgOrgIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgOverviewResponse**](../Model/EnvelopeOrgOverviewResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSummaryV1AnalyticsUserUserIdGet()`

```php
userSummaryV1AnalyticsUserUserIdGet($user_id, $org_id, $agent_id): \Zarnite\Model\EnvelopeUserSummaryResponse
```

User Summary

Get user activity summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->userSummaryV1AnalyticsUserUserIdGet($user_id, $org_id, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->userSummaryV1AnalyticsUserUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeUserSummaryResponse**](../Model/EnvelopeUserSummaryResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTopicsV1AnalyticsUserUserIdTopicsGet()`

```php
userTopicsV1AnalyticsUserUserIdTopicsGet($user_id, $org_id, $agent_id, $limit): \Zarnite\Model\EnvelopeUserTopicsResponse
```

User Topics

Get user conversation topics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string
$limit = 10; // int

try {
    $result = $apiInstance->userTopicsV1AnalyticsUserUserIdTopicsGet($user_id, $org_id, $agent_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->userTopicsV1AnalyticsUserUserIdTopicsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 10] |

### Return type

[**\Zarnite\Model\EnvelopeUserTopicsResponse**](../Model/EnvelopeUserTopicsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTrendsV1AnalyticsUserUserIdTrendsGet()`

```php
userTrendsV1AnalyticsUserUserIdTrendsGet($user_id, $org_id, $agent_id, $days): \Zarnite\Model\EnvelopeUsageTrendsResponse
```

User Trends

Get user usage trends over a given period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string
$days = 30; // int

try {
    $result = $apiInstance->userTrendsV1AnalyticsUserUserIdTrendsGet($user_id, $org_id, $agent_id, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->userTrendsV1AnalyticsUserUserIdTrendsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **days** | **int**|  | [optional] [default to 30] |

### Return type

[**\Zarnite\Model\EnvelopeUsageTrendsResponse**](../Model/EnvelopeUsageTrendsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
