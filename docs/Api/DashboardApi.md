# Zarnite\DashboardApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet()**](DashboardApi.md#learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet) | **GET** /v1/dashboard/organizations/{org_id}/learners/{learner_id}/insights | Learner Insights |
| [**organizationActivityV1DashboardOrganizationsOrgIdActivityGet()**](DashboardApi.md#organizationActivityV1DashboardOrganizationsOrgIdActivityGet) | **GET** /v1/dashboard/organizations/{org_id}/activity | Organization Activity |
| [**organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet()**](DashboardApi.md#organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet) | **GET** /v1/dashboard/organizations/{org_id}/analytics | Organization Analytics |
| [**organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet()**](DashboardApi.md#organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet) | **GET** /v1/dashboard/organizations/{org_id}/overview | Organization Overview |


## `learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet()`

```php
learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet($org_id, $learner_id): \Zarnite\Model\EnvelopeLearnerInsightsResponse
```

Learner Insights

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$learner_id = 'learner_id_example'; // string

try {
    $result = $apiInstance->learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet($org_id, $learner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->learnerInsightsV1DashboardOrganizationsOrgIdLearnersLearnerIdInsightsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **learner_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerInsightsResponse**](../Model/EnvelopeLearnerInsightsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationActivityV1DashboardOrganizationsOrgIdActivityGet()`

```php
organizationActivityV1DashboardOrganizationsOrgIdActivityGet($org_id, $limit): \Zarnite\Model\EnvelopeActivityFeedResponse
```

Organization Activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$limit = 20; // int

try {
    $result = $apiInstance->organizationActivityV1DashboardOrganizationsOrgIdActivityGet($org_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->organizationActivityV1DashboardOrganizationsOrgIdActivityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 20] |

### Return type

[**\Zarnite\Model\EnvelopeActivityFeedResponse**](../Model/EnvelopeActivityFeedResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet()`

```php
organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet($org_id, $range, $view, $class_id, $agent_id, $learner_id): \Zarnite\Model\EnvelopeOrganizationAnalyticsResponse
```

Organization Analytics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$range = 'Last 30 Days'; // string
$view = 'institution'; // string
$class_id = 'class_id_example'; // string
$agent_id = 'agent_id_example'; // string
$learner_id = 'learner_id_example'; // string

try {
    $result = $apiInstance->organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet($org_id, $range, $view, $class_id, $agent_id, $learner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->organizationAnalyticsV1DashboardOrganizationsOrgIdAnalyticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **range** | **string**|  | [optional] [default to &#39;Last 30 Days&#39;] |
| **view** | **string**|  | [optional] [default to &#39;institution&#39;] |
| **class_id** | **string**|  | [optional] |
| **agent_id** | **string**|  | [optional] |
| **learner_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeOrganizationAnalyticsResponse**](../Model/EnvelopeOrganizationAnalyticsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet()`

```php
organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet($org_id): \Zarnite\Model\EnvelopeDashboardOverviewResponse
```

Organization Overview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->organizationOverviewV1DashboardOrganizationsOrgIdOverviewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeDashboardOverviewResponse**](../Model/EnvelopeDashboardOverviewResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
