# Zarnite\UsageBillingApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrgCreditsV1UsageCreditsGet()**](UsageBillingApi.md#getOrgCreditsV1UsageCreditsGet) | **GET** /v1/usage/credits | Get Org Credits |
| [**getOrgRagSessionLimitV1UsageRagSessionLimitGet()**](UsageBillingApi.md#getOrgRagSessionLimitV1UsageRagSessionLimitGet) | **GET** /v1/usage/rag-session-limit | Get Org Rag Session Limit |
| [**getOrgUsageV1UsageGet()**](UsageBillingApi.md#getOrgUsageV1UsageGet) | **GET** /v1/usage/ | Get Org Usage |
| [**getUsageLogsV1UsageLogsGet()**](UsageBillingApi.md#getUsageLogsV1UsageLogsGet) | **GET** /v1/usage/logs | Get Usage Logs |
| [**updateOrgCreditsV1UsageCreditsPut()**](UsageBillingApi.md#updateOrgCreditsV1UsageCreditsPut) | **PUT** /v1/usage/credits | Update Org Credits |
| [**updateOrgRagSessionLimitV1UsageRagSessionLimitPut()**](UsageBillingApi.md#updateOrgRagSessionLimitV1UsageRagSessionLimitPut) | **PUT** /v1/usage/rag-session-limit | Update Org Rag Session Limit |


## `getOrgCreditsV1UsageCreditsGet()`

```php
getOrgCreditsV1UsageCreditsGet($org_id): \Zarnite\Model\EnvelopeOrgCreditWalletResponse
```

Get Org Credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->getOrgCreditsV1UsageCreditsGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->getOrgCreditsV1UsageCreditsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgCreditWalletResponse**](../Model/EnvelopeOrgCreditWalletResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgRagSessionLimitV1UsageRagSessionLimitGet()`

```php
getOrgRagSessionLimitV1UsageRagSessionLimitGet($org_id, $user_id): \Zarnite\Model\EnvelopeOrgRagSessionLimitResponse
```

Get Org Rag Session Limit

Get org-level monthly RAG session limit policy and current usage snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getOrgRagSessionLimitV1UsageRagSessionLimitGet($org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->getOrgRagSessionLimitV1UsageRagSessionLimitGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeOrgRagSessionLimitResponse**](../Model/EnvelopeOrgRagSessionLimitResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgUsageV1UsageGet()`

```php
getOrgUsageV1UsageGet($org_id, $start_date, $end_date): \Zarnite\Model\EnvelopeAggregatedUsage
```

Get Org Usage

Retrieve aggregated usage for an organization over a date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->getOrgUsageV1UsageGet($org_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->getOrgUsageV1UsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeAggregatedUsage**](../Model/EnvelopeAggregatedUsage.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsageLogsV1UsageLogsGet()`

```php
getUsageLogsV1UsageLogsGet($org_id, $agent_id, $limit, $offset): \Zarnite\Model\EnvelopeListUsageLogEntry
```

Get Usage Logs

Retrieve raw usage logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->getUsageLogsV1UsageLogsGet($org_id, $agent_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->getUsageLogsV1UsageLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zarnite\Model\EnvelopeListUsageLogEntry**](../Model/EnvelopeListUsageLogEntry.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgCreditsV1UsageCreditsPut()`

```php
updateOrgCreditsV1UsageCreditsPut($org_id, $org_credit_wallet_update_request): \Zarnite\Model\EnvelopeOrgCreditWalletResponse
```

Update Org Credits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$org_credit_wallet_update_request = new \Zarnite\Model\OrgCreditWalletUpdateRequest(); // \Zarnite\Model\OrgCreditWalletUpdateRequest

try {
    $result = $apiInstance->updateOrgCreditsV1UsageCreditsPut($org_id, $org_credit_wallet_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->updateOrgCreditsV1UsageCreditsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **org_credit_wallet_update_request** | [**\Zarnite\Model\OrgCreditWalletUpdateRequest**](../Model/OrgCreditWalletUpdateRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgCreditWalletResponse**](../Model/EnvelopeOrgCreditWalletResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgRagSessionLimitV1UsageRagSessionLimitPut()`

```php
updateOrgRagSessionLimitV1UsageRagSessionLimitPut($org_id, $org_rag_session_limit_update_request): \Zarnite\Model\EnvelopeOrgRagSessionLimitResponse
```

Update Org Rag Session Limit

Create/update org-level monthly RAG session restriction policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\UsageBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$org_rag_session_limit_update_request = new \Zarnite\Model\OrgRagSessionLimitUpdateRequest(); // \Zarnite\Model\OrgRagSessionLimitUpdateRequest

try {
    $result = $apiInstance->updateOrgRagSessionLimitV1UsageRagSessionLimitPut($org_id, $org_rag_session_limit_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageBillingApi->updateOrgRagSessionLimitV1UsageRagSessionLimitPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **org_rag_session_limit_update_request** | [**\Zarnite\Model\OrgRagSessionLimitUpdateRequest**](../Model/OrgRagSessionLimitUpdateRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgRagSessionLimitResponse**](../Model/EnvelopeOrgRagSessionLimitResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
