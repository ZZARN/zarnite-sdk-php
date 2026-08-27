# Zarnite\PlaygroundApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bootstrapSessionV1PlaygroundSessionsPost()**](PlaygroundApi.md#bootstrapSessionV1PlaygroundSessionsPost) | **POST** /v1/playground/sessions | Bootstrap Session |
| [**endSessionV1PlaygroundSessionsSessionIdEndPost()**](PlaygroundApi.md#endSessionV1PlaygroundSessionsSessionIdEndPost) | **POST** /v1/playground/sessions/{session_id}/end | End Session |
| [**markActivityV1PlaygroundSessionsSessionIdActivityPost()**](PlaygroundApi.md#markActivityV1PlaygroundSessionsSessionIdActivityPost) | **POST** /v1/playground/sessions/{session_id}/activity | Mark Activity |
| [**recentTranscriptsV1PlaygroundTranscriptsRecentGet()**](PlaygroundApi.md#recentTranscriptsV1PlaygroundTranscriptsRecentGet) | **GET** /v1/playground/transcripts/recent | Recent Transcripts |
| [**sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet()**](PlaygroundApi.md#sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet) | **GET** /v1/playground/sessions/{session_id}/diagnostics | Session Diagnostics |
| [**sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet()**](PlaygroundApi.md#sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet) | **GET** /v1/playground/sessions/{session_id}/metrics | Session Metrics |
| [**sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet()**](PlaygroundApi.md#sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet) | **GET** /v1/playground/sessions/{session_id}/transcript | Session Transcript |
| [**supportedVoicesV1PlaygroundVoicesGet()**](PlaygroundApi.md#supportedVoicesV1PlaygroundVoicesGet) | **GET** /v1/playground/voices | Supported Voices |
| [**voiceLookupV1PlaygroundVoicesLookupGet()**](PlaygroundApi.md#voiceLookupV1PlaygroundVoicesLookupGet) | **GET** /v1/playground/voices/lookup | Voice Lookup |


## `bootstrapSessionV1PlaygroundSessionsPost()`

```php
bootstrapSessionV1PlaygroundSessionsPost($playground_session_request): \Zarnite\Model\EnvelopePlaygroundSessionResponse
```

Bootstrap Session

Bootstrap a Playground voice session.  Creates a DB record, mints a LiveKit token, and returns connection details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playground_session_request = new \Zarnite\Model\PlaygroundSessionRequest(); // \Zarnite\Model\PlaygroundSessionRequest

try {
    $result = $apiInstance->bootstrapSessionV1PlaygroundSessionsPost($playground_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->bootstrapSessionV1PlaygroundSessionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playground_session_request** | [**\Zarnite\Model\PlaygroundSessionRequest**](../Model/PlaygroundSessionRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundSessionResponse**](../Model/EnvelopePlaygroundSessionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `endSessionV1PlaygroundSessionsSessionIdEndPost()`

```php
endSessionV1PlaygroundSessionsSessionIdEndPost($session_id, $playground_end_request): \Zarnite\Model\EnvelopePlaygroundEndResponse
```

End Session

End a Playground voice session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$playground_end_request = new \Zarnite\Model\PlaygroundEndRequest(); // \Zarnite\Model\PlaygroundEndRequest

try {
    $result = $apiInstance->endSessionV1PlaygroundSessionsSessionIdEndPost($session_id, $playground_end_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->endSessionV1PlaygroundSessionsSessionIdEndPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **playground_end_request** | [**\Zarnite\Model\PlaygroundEndRequest**](../Model/PlaygroundEndRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundEndResponse**](../Model/EnvelopePlaygroundEndResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markActivityV1PlaygroundSessionsSessionIdActivityPost()`

```php
markActivityV1PlaygroundSessionsSessionIdActivityPost($session_id): \Zarnite\Model\EnvelopePlaygroundActivityResponse
```

Mark Activity

Heartbeat endpoint used by the client to keep a session alive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->markActivityV1PlaygroundSessionsSessionIdActivityPost($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->markActivityV1PlaygroundSessionsSessionIdActivityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundActivityResponse**](../Model/EnvelopePlaygroundActivityResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recentTranscriptsV1PlaygroundTranscriptsRecentGet()`

```php
recentTranscriptsV1PlaygroundTranscriptsRecentGet($org_id, $agent_id, $user_id, $limit): \Zarnite\Model\EnvelopeListPlaygroundSessionTranscriptResponse
```

Recent Transcripts

Return the last few LiveKit session transcripts for one user and agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string
$user_id = 'user_id_example'; // string
$limit = 5; // int

try {
    $result = $apiInstance->recentTranscriptsV1PlaygroundTranscriptsRecentGet($org_id, $agent_id, $user_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->recentTranscriptsV1PlaygroundTranscriptsRecentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | |
| **user_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 5] |

### Return type

[**\Zarnite\Model\EnvelopeListPlaygroundSessionTranscriptResponse**](../Model/EnvelopeListPlaygroundSessionTranscriptResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet()`

```php
sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet($session_id): \Zarnite\Model\EnvelopePlaygroundSessionDiagnosticsResponse
```

Session Diagnostics

Get frontend-friendly Playground diagnostics for latency, config, quota, and events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->sessionDiagnosticsV1PlaygroundSessionsSessionIdDiagnosticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundSessionDiagnosticsResponse**](../Model/EnvelopePlaygroundSessionDiagnosticsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet()`

```php
sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet($session_id): \Zarnite\Model\EnvelopePlaygroundMetricsResponse
```

Session Metrics

Get debug telemetry for a Playground session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->sessionMetricsV1PlaygroundSessionsSessionIdMetricsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundMetricsResponse**](../Model/EnvelopePlaygroundMetricsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet()`

```php
sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet($session_id): \Zarnite\Model\EnvelopePlaygroundSessionTranscriptResponse
```

Session Transcript

Return the full ordered transcript for one LiveKit voice session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->sessionTranscriptV1PlaygroundSessionsSessionIdTranscriptGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundSessionTranscriptResponse**](../Model/EnvelopePlaygroundSessionTranscriptResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supportedVoicesV1PlaygroundVoicesGet()`

```php
supportedVoicesV1PlaygroundVoicesGet($org_id, $user_id): \Zarnite\Model\EnvelopeListStr
```

Supported Voices

Return canonical Gemini voice names accepted by Playground sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->supportedVoicesV1PlaygroundVoicesGet($org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->supportedVoicesV1PlaygroundVoicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeListStr**](../Model/EnvelopeListStr.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voiceLookupV1PlaygroundVoicesLookupGet()`

```php
voiceLookupV1PlaygroundVoicesLookupGet($org_id, $user_id): \Zarnite\Model\EnvelopePlaygroundVoiceLookupResponse
```

Voice Lookup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\PlaygroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->voiceLookupV1PlaygroundVoicesLookupGet($org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaygroundApi->voiceLookupV1PlaygroundVoicesLookupGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopePlaygroundVoiceLookupResponse**](../Model/EnvelopePlaygroundVoiceLookupResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
