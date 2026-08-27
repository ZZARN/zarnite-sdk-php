# Zarnite\APIKeysApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiKeyStatsV1ApiKeysStatsGet()**](APIKeysApi.md#apiKeyStatsV1ApiKeysStatsGet) | **GET** /v1/api-keys/stats | Api Key Stats |
| [**createApiKeyV1ApiKeysPost()**](APIKeysApi.md#createApiKeyV1ApiKeysPost) | **POST** /v1/api-keys/ | Create Api Key |
| [**listApiKeysV1ApiKeysGet()**](APIKeysApi.md#listApiKeysV1ApiKeysGet) | **GET** /v1/api-keys/ | List Api Keys |
| [**revokeApiKeyV1ApiKeysKeyIdDelete()**](APIKeysApi.md#revokeApiKeyV1ApiKeysKeyIdDelete) | **DELETE** /v1/api-keys/{key_id} | Revoke Api Key |
| [**updateApiKeyV1ApiKeysKeyIdPut()**](APIKeysApi.md#updateApiKeyV1ApiKeysKeyIdPut) | **PUT** /v1/api-keys/{key_id} | Update Api Key |


## `apiKeyStatsV1ApiKeysStatsGet()`

```php
apiKeyStatsV1ApiKeysStatsGet($org_id): \Zarnite\Model\EnvelopeApiKeyStatsResponse
```

Api Key Stats

Aggregate API key statistics for the org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->apiKeyStatsV1ApiKeysStatsGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->apiKeyStatsV1ApiKeysStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeApiKeyStatsResponse**](../Model/EnvelopeApiKeyStatsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiKeyV1ApiKeysPost()`

```php
createApiKeyV1ApiKeysPost($api_key_create): \Zarnite\Model\EnvelopeApiKeyCreateResponse
```

Create Api Key

Create a new API key. Returns the raw key exactly once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_create = new \Zarnite\Model\ApiKeyCreate(); // \Zarnite\Model\ApiKeyCreate

try {
    $result = $apiInstance->createApiKeyV1ApiKeysPost($api_key_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKeyV1ApiKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_create** | [**\Zarnite\Model\ApiKeyCreate**](../Model/ApiKeyCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeApiKeyCreateResponse**](../Model/EnvelopeApiKeyCreateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiKeysV1ApiKeysGet()`

```php
listApiKeysV1ApiKeysGet($org_id): \Zarnite\Model\EnvelopeListApiKeyResponse
```

List Api Keys

List all API keys for an org (never returns raw keys).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->listApiKeysV1ApiKeysGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->listApiKeysV1ApiKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeListApiKeyResponse**](../Model/EnvelopeListApiKeyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeApiKeyV1ApiKeysKeyIdDelete()`

```php
revokeApiKeyV1ApiKeysKeyIdDelete($key_id, $org_id): \Zarnite\Model\EnvelopeApiKeyDeleteResponse
```

Revoke Api Key

Permanently revoke (delete) an API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 'key_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->revokeApiKeyV1ApiKeysKeyIdDelete($key_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->revokeApiKeyV1ApiKeysKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeApiKeyDeleteResponse**](../Model/EnvelopeApiKeyDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKeyV1ApiKeysKeyIdPut()`

```php
updateApiKeyV1ApiKeysKeyIdPut($key_id, $org_id, $api_key_update): \Zarnite\Model\EnvelopeApiKeyResponse
```

Update Api Key

Update API key metadata (name, scopes, rate_limit, is_active).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 'key_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope
$api_key_update = new \Zarnite\Model\ApiKeyUpdate(); // \Zarnite\Model\ApiKeyUpdate

try {
    $result = $apiInstance->updateApiKeyV1ApiKeysKeyIdPut($key_id, $org_id, $api_key_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->updateApiKeyV1ApiKeysKeyIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |
| **api_key_update** | [**\Zarnite\Model\ApiKeyUpdate**](../Model/ApiKeyUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeApiKeyResponse**](../Model/EnvelopeApiKeyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
