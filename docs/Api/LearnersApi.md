# Zarnite\LearnersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost()**](LearnersApi.md#cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost) | **POST** /v1/learners/{learner_id}/cancel-deletion | Cancel Learner Deletion |
| [**createLearnerV1LearnersPost()**](LearnersApi.md#createLearnerV1LearnersPost) | **POST** /v1/learners/ | Create Learner |
| [**deactivateLearnerV1LearnersLearnerIdDeactivatePost()**](LearnersApi.md#deactivateLearnerV1LearnersLearnerIdDeactivatePost) | **POST** /v1/learners/{learner_id}/deactivate | Deactivate Learner |
| [**deleteLearnerV1LearnersLearnerIdDelete()**](LearnersApi.md#deleteLearnerV1LearnersLearnerIdDelete) | **DELETE** /v1/learners/{learner_id} | Delete Learner |
| [**getLearnerV1LearnersLearnerIdGet()**](LearnersApi.md#getLearnerV1LearnersLearnerIdGet) | **GET** /v1/learners/{learner_id} | Get Learner |
| [**learnerActivityV1LearnersLearnerIdActivityGet()**](LearnersApi.md#learnerActivityV1LearnersLearnerIdActivityGet) | **GET** /v1/learners/{learner_id}/activity | Learner Activity |
| [**learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet()**](LearnersApi.md#learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet) | **GET** /v1/learners/{learner_id}/longitudinal-feedback | Learner Longitudinal Feedback |
| [**learnerMetadataV1LearnersLearnerIdMetadataGet()**](LearnersApi.md#learnerMetadataV1LearnersLearnerIdMetadataGet) | **GET** /v1/learners/{learner_id}/metadata | Learner Metadata |
| [**learnerScoreV1LearnersLearnerIdScoreGet()**](LearnersApi.md#learnerScoreV1LearnersLearnerIdScoreGet) | **GET** /v1/learners/{learner_id}/score | Learner Score |
| [**learnerStatsV1LearnersLearnerIdStatsGet()**](LearnersApi.md#learnerStatsV1LearnersLearnerIdStatsGet) | **GET** /v1/learners/{learner_id}/stats | Learner Stats |
| [**learnerSummaryV1LearnersLearnerIdSummaryGet()**](LearnersApi.md#learnerSummaryV1LearnersLearnerIdSummaryGet) | **GET** /v1/learners/{learner_id}/summary | Learner Summary |
| [**listLearnersV1LearnersGet()**](LearnersApi.md#listLearnersV1LearnersGet) | **GET** /v1/learners/ | List Learners |
| [**reinitiateLearnerV1LearnersLearnerIdReinitiatePost()**](LearnersApi.md#reinitiateLearnerV1LearnersLearnerIdReinitiatePost) | **POST** /v1/learners/{learner_id}/reinitiate | Reinitiate Learner |
| [**scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost()**](LearnersApi.md#scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost) | **POST** /v1/learners/{learner_id}/schedule-deletion | Schedule Learner Deletion |
| [**uploadCsvV1LearnersUploadCsvPost()**](LearnersApi.md#uploadCsvV1LearnersUploadCsvPost) | **POST** /v1/learners/upload-csv | Upload Csv |
| [**verifyLearnerV1LearnersVerifyPost()**](LearnersApi.md#verifyLearnerV1LearnersVerifyPost) | **POST** /v1/learners/verify | Verify Learner |


## `cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost()`

```php
cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerDeletionScheduleResponse
```

Cancel Learner Deletion

Cancel a pending learner deletion request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->cancelLearnerDeletionV1LearnersLearnerIdCancelDeletionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerDeletionScheduleResponse**](../Model/EnvelopeLearnerDeletionScheduleResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLearnerV1LearnersPost()`

```php
createLearnerV1LearnersPost($learner_create): \Zarnite\Model\EnvelopeLearnerCreateResponse
```

Create Learner

Create a new learner, generate an access key, and email credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_create = new \Zarnite\Model\LearnerCreate(); // \Zarnite\Model\LearnerCreate

try {
    $result = $apiInstance->createLearnerV1LearnersPost($learner_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->createLearnerV1LearnersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_create** | [**\Zarnite\Model\LearnerCreate**](../Model/LearnerCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerCreateResponse**](../Model/EnvelopeLearnerCreateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateLearnerV1LearnersLearnerIdDeactivatePost()`

```php
deactivateLearnerV1LearnersLearnerIdDeactivatePost($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerDeactivateResponse
```

Deactivate Learner

Deactivate a learner: set status to inactive and revoke their access key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->deactivateLearnerV1LearnersLearnerIdDeactivatePost($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->deactivateLearnerV1LearnersLearnerIdDeactivatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerDeactivateResponse**](../Model/EnvelopeLearnerDeactivateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLearnerV1LearnersLearnerIdDelete()`

```php
deleteLearnerV1LearnersLearnerIdDelete($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerDeleteResponse
```

Delete Learner

Delete a learner and learner-scoped records immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->deleteLearnerV1LearnersLearnerIdDelete($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->deleteLearnerV1LearnersLearnerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerDeleteResponse**](../Model/EnvelopeLearnerDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLearnerV1LearnersLearnerIdGet()`

```php
getLearnerV1LearnersLearnerIdGet($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerResponse
```

Get Learner

Get a single learner by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->getLearnerV1LearnersLearnerIdGet($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->getLearnerV1LearnersLearnerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerResponse**](../Model/EnvelopeLearnerResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerActivityV1LearnersLearnerIdActivityGet()`

```php
learnerActivityV1LearnersLearnerIdActivityGet($learner_id, $org_id, $limit): \Zarnite\Model\EnvelopeLearnerActivityResponse
```

Learner Activity

Get recent session activity timeline for a learner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope
$limit = 20; // int | Max events to return

try {
    $result = $apiInstance->learnerActivityV1LearnersLearnerIdActivityGet($learner_id, $org_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerActivityV1LearnersLearnerIdActivityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |
| **limit** | **int**| Max events to return | [optional] [default to 20] |

### Return type

[**\Zarnite\Model\EnvelopeLearnerActivityResponse**](../Model/EnvelopeLearnerActivityResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet()`

```php
learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet($learner_id, $org_id, $limit): \Zarnite\Model\EnvelopeLearnerLongitudinalFeedbackResponse
```

Learner Longitudinal Feedback

Get concise feedback comparing the learner's latest sessions with prior ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope
$limit = 5; // int | Recent conversation count to analyze

try {
    $result = $apiInstance->learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet($learner_id, $org_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerLongitudinalFeedbackV1LearnersLearnerIdLongitudinalFeedbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |
| **limit** | **int**| Recent conversation count to analyze | [optional] [default to 5] |

### Return type

[**\Zarnite\Model\EnvelopeLearnerLongitudinalFeedbackResponse**](../Model/EnvelopeLearnerLongitudinalFeedbackResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerMetadataV1LearnersLearnerIdMetadataGet()`

```php
learnerMetadataV1LearnersLearnerIdMetadataGet($learner_id, $org_id, $activity_limit): \Zarnite\Model\EnvelopeLearnerMetadataResponse
```

Learner Metadata

Return safe learner metadata plus current learning context in one frontend-friendly call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope
$activity_limit = 5; // int | Recent activity items to include

try {
    $result = $apiInstance->learnerMetadataV1LearnersLearnerIdMetadataGet($learner_id, $org_id, $activity_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerMetadataV1LearnersLearnerIdMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |
| **activity_limit** | **int**| Recent activity items to include | [optional] [default to 5] |

### Return type

[**\Zarnite\Model\EnvelopeLearnerMetadataResponse**](../Model/EnvelopeLearnerMetadataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerScoreV1LearnersLearnerIdScoreGet()`

```php
learnerScoreV1LearnersLearnerIdScoreGet($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerScoreResponse
```

Learner Score

Compute CEFR progression score for a learner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->learnerScoreV1LearnersLearnerIdScoreGet($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerScoreV1LearnersLearnerIdScoreGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerScoreResponse**](../Model/EnvelopeLearnerScoreResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerStatsV1LearnersLearnerIdStatsGet()`

```php
learnerStatsV1LearnersLearnerIdStatsGet($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerStatsResponse
```

Learner Stats

Get aggregated session & usage stats for a learner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->learnerStatsV1LearnersLearnerIdStatsGet($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerStatsV1LearnersLearnerIdStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerStatsResponse**](../Model/EnvelopeLearnerStatsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `learnerSummaryV1LearnersLearnerIdSummaryGet()`

```php
learnerSummaryV1LearnersLearnerIdSummaryGet($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerSummaryResponse
```

Learner Summary

Get personalized welcome message and summary for a learner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->learnerSummaryV1LearnersLearnerIdSummaryGet($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->learnerSummaryV1LearnersLearnerIdSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerSummaryResponse**](../Model/EnvelopeLearnerSummaryResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLearnersV1LearnersGet()`

```php
listLearnersV1LearnersGet($org_id, $status, $limit, $offset): \Zarnite\Model\EnvelopeListLearnerResponse
```

List Learners

List learners for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope
$status = 'status_example'; // string | Filter by status
$limit = 50; // int | Page size
$offset = 0; // int | Page offset

try {
    $result = $apiInstance->listLearnersV1LearnersGet($org_id, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->listLearnersV1LearnersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |
| **status** | **string**| Filter by status | [optional] |
| **limit** | **int**| Page size | [optional] [default to 50] |
| **offset** | **int**| Page offset | [optional] [default to 0] |

### Return type

[**\Zarnite\Model\EnvelopeListLearnerResponse**](../Model/EnvelopeListLearnerResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reinitiateLearnerV1LearnersLearnerIdReinitiatePost()`

```php
reinitiateLearnerV1LearnersLearnerIdReinitiatePost($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerReinitiateResponse
```

Reinitiate Learner

Reinitiate a learner: revoke old key, generate new key, set status to active, re-send credentials email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->reinitiateLearnerV1LearnersLearnerIdReinitiatePost($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->reinitiateLearnerV1LearnersLearnerIdReinitiatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerReinitiateResponse**](../Model/EnvelopeLearnerReinitiateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost()`

```php
scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost($learner_id, $org_id): \Zarnite\Model\EnvelopeLearnerDeletionScheduleResponse
```

Schedule Learner Deletion

Schedule learner data deletion to execute after the retention window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id = 'learner_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost($learner_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->scheduleLearnerDeletionV1LearnersLearnerIdScheduleDeletionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerDeletionScheduleResponse**](../Model/EnvelopeLearnerDeletionScheduleResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadCsvV1LearnersUploadCsvPost()`

```php
uploadCsvV1LearnersUploadCsvPost($org_id, $file): \Zarnite\Model\EnvelopeLearnerCsvResult
```

Upload Csv

Bulk import learners from CSV. Expected columns: name, email, learner_id (optional).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadCsvV1LearnersUploadCsvPost($org_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->uploadCsvV1LearnersUploadCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerCsvResult**](../Model/EnvelopeLearnerCsvResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyLearnerV1LearnersVerifyPost()`

```php
verifyLearnerV1LearnersVerifyPost($learner_verify_request): \Zarnite\Model\EnvelopeLearnerVerifyResponse
```

Verify Learner

Verify a learner-id + access key pair.  Returns valid=true and the learner status if the key matches, valid=false otherwise. Never reveals whether the learner exists to prevent enumeration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\LearnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_verify_request = new \Zarnite\Model\LearnerVerifyRequest(); // \Zarnite\Model\LearnerVerifyRequest

try {
    $result = $apiInstance->verifyLearnerV1LearnersVerifyPost($learner_verify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnersApi->verifyLearnerV1LearnersVerifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learner_verify_request** | [**\Zarnite\Model\LearnerVerifyRequest**](../Model/LearnerVerifyRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeLearnerVerifyResponse**](../Model/EnvelopeLearnerVerifyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
