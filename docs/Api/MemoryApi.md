# Zarnite\MemoryApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**memorySearchV1MemorySearchPost()**](MemoryApi.md#memorySearchV1MemorySearchPost) | **POST** /v1/memory/search | Memory Search |
| [**memoryStatsV1MemoryStatsGet()**](MemoryApi.md#memoryStatsV1MemoryStatsGet) | **GET** /v1/memory/stats | Memory Stats |


## `memorySearchV1MemorySearchPost()`

```php
memorySearchV1MemorySearchPost($memory_search_request): \Zarnite\Model\EnvelopeMemorySearchResponse
```

Memory Search

Search KB and memory for a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$memory_search_request = new \Zarnite\Model\MemorySearchRequest(); // \Zarnite\Model\MemorySearchRequest

try {
    $result = $apiInstance->memorySearchV1MemorySearchPost($memory_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->memorySearchV1MemorySearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memory_search_request** | [**\Zarnite\Model\MemorySearchRequest**](../Model/MemorySearchRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeMemorySearchResponse**](../Model/EnvelopeMemorySearchResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `memoryStatsV1MemoryStatsGet()`

```php
memoryStatsV1MemoryStatsGet($org_id, $agent_id): \Zarnite\Model\EnvelopeMemoryStatsResponse
```

Memory Stats

Get document counts for KB and memory collections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->memoryStatsV1MemoryStatsGet($org_id, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->memoryStatsV1MemoryStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **agent_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeMemoryStatsResponse**](../Model/EnvelopeMemoryStatsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
