# Zarnite\VoiceRuntimeApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost()**](VoiceRuntimeApi.md#bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost) | **POST** /v1/voice-runtime/sessions/bootstrap | Bootstrap Session |
| [**closeSessionV1VoiceRuntimeSessionsSessionIdClosePost()**](VoiceRuntimeApi.md#closeSessionV1VoiceRuntimeSessionsSessionIdClosePost) | **POST** /v1/voice-runtime/sessions/{session_id}/close | Close Session |
| [**writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost()**](VoiceRuntimeApi.md#writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost) | **POST** /v1/voice-runtime/sessions/{session_id}/feedback | Write Feedback |


## `bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost()`

```php
bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost($voice_runtime_bootstrap_request): \Zarnite\Model\EnvelopeVoiceRuntimeBootstrapResponse
```

Bootstrap Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\VoiceRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voice_runtime_bootstrap_request = new \Zarnite\Model\VoiceRuntimeBootstrapRequest(); // \Zarnite\Model\VoiceRuntimeBootstrapRequest

try {
    $result = $apiInstance->bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost($voice_runtime_bootstrap_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceRuntimeApi->bootstrapSessionV1VoiceRuntimeSessionsBootstrapPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voice_runtime_bootstrap_request** | [**\Zarnite\Model\VoiceRuntimeBootstrapRequest**](../Model/VoiceRuntimeBootstrapRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeVoiceRuntimeBootstrapResponse**](../Model/EnvelopeVoiceRuntimeBootstrapResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeSessionV1VoiceRuntimeSessionsSessionIdClosePost()`

```php
closeSessionV1VoiceRuntimeSessionsSessionIdClosePost($session_id, $voice_runtime_close_request): \Zarnite\Model\EnvelopeVoiceRuntimeCloseResponse
```

Close Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\VoiceRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$voice_runtime_close_request = new \Zarnite\Model\VoiceRuntimeCloseRequest(); // \Zarnite\Model\VoiceRuntimeCloseRequest

try {
    $result = $apiInstance->closeSessionV1VoiceRuntimeSessionsSessionIdClosePost($session_id, $voice_runtime_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceRuntimeApi->closeSessionV1VoiceRuntimeSessionsSessionIdClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **voice_runtime_close_request** | [**\Zarnite\Model\VoiceRuntimeCloseRequest**](../Model/VoiceRuntimeCloseRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeVoiceRuntimeCloseResponse**](../Model/EnvelopeVoiceRuntimeCloseResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost()`

```php
writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost($session_id, $voice_runtime_feedback_request): \Zarnite\Model\EnvelopeVoiceRuntimeFeedbackResponse
```

Write Feedback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\VoiceRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$voice_runtime_feedback_request = new \Zarnite\Model\VoiceRuntimeFeedbackRequest(); // \Zarnite\Model\VoiceRuntimeFeedbackRequest

try {
    $result = $apiInstance->writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost($session_id, $voice_runtime_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceRuntimeApi->writeFeedbackV1VoiceRuntimeSessionsSessionIdFeedbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **voice_runtime_feedback_request** | [**\Zarnite\Model\VoiceRuntimeFeedbackRequest**](../Model/VoiceRuntimeFeedbackRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeVoiceRuntimeFeedbackResponse**](../Model/EnvelopeVoiceRuntimeFeedbackResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
