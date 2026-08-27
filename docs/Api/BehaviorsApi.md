# Zarnite\BehaviorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBehaviorV1BehaviorsPost()**](BehaviorsApi.md#createBehaviorV1BehaviorsPost) | **POST** /v1/behaviors/ | Create Behavior |
| [**deleteBehaviorV1BehaviorsBehaviorIdDelete()**](BehaviorsApi.md#deleteBehaviorV1BehaviorsBehaviorIdDelete) | **DELETE** /v1/behaviors/{behavior_id} | Delete Behavior |
| [**getBehaviorV1BehaviorsBehaviorIdGet()**](BehaviorsApi.md#getBehaviorV1BehaviorsBehaviorIdGet) | **GET** /v1/behaviors/{behavior_id} | Get Behavior |
| [**listBehaviorsV1BehaviorsGet()**](BehaviorsApi.md#listBehaviorsV1BehaviorsGet) | **GET** /v1/behaviors/ | List Behaviors |
| [**updateBehaviorV1BehaviorsBehaviorIdPatch()**](BehaviorsApi.md#updateBehaviorV1BehaviorsBehaviorIdPatch) | **PATCH** /v1/behaviors/{behavior_id} | Update Behavior |
| [**updateBehaviorV1BehaviorsBehaviorIdPut()**](BehaviorsApi.md#updateBehaviorV1BehaviorsBehaviorIdPut) | **PUT** /v1/behaviors/{behavior_id} | Update Behavior |


## `createBehaviorV1BehaviorsPost()`

```php
createBehaviorV1BehaviorsPost($behavior_create): \Zarnite\Model\EnvelopeBehaviorResponse
```

Create Behavior

Create a new behavior config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$behavior_create = new \Zarnite\Model\BehaviorCreate(); // \Zarnite\Model\BehaviorCreate

try {
    $result = $apiInstance->createBehaviorV1BehaviorsPost($behavior_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->createBehaviorV1BehaviorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **behavior_create** | [**\Zarnite\Model\BehaviorCreate**](../Model/BehaviorCreate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeBehaviorResponse**](../Model/EnvelopeBehaviorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBehaviorV1BehaviorsBehaviorIdDelete()`

```php
deleteBehaviorV1BehaviorsBehaviorIdDelete($behavior_id, $org_id): \Zarnite\Model\EnvelopeBehaviorDeleteResponse
```

Delete Behavior

Delete a behavior. Linked agents will have behavior_id set to NULL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$behavior_id = 'behavior_id_example'; // string
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->deleteBehaviorV1BehaviorsBehaviorIdDelete($behavior_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->deleteBehaviorV1BehaviorsBehaviorIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **behavior_id** | **string**|  | |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeBehaviorDeleteResponse**](../Model/EnvelopeBehaviorDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBehaviorV1BehaviorsBehaviorIdGet()`

```php
getBehaviorV1BehaviorsBehaviorIdGet($behavior_id, $org_id): \Zarnite\Model\EnvelopeBehaviorResponse
```

Get Behavior

Get a specific behavior config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$behavior_id = 'behavior_id_example'; // string
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->getBehaviorV1BehaviorsBehaviorIdGet($behavior_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->getBehaviorV1BehaviorsBehaviorIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **behavior_id** | **string**|  | |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeBehaviorResponse**](../Model/EnvelopeBehaviorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBehaviorsV1BehaviorsGet()`

```php
listBehaviorsV1BehaviorsGet($org_id, $limit, $offset): \Zarnite\Model\EnvelopeListBehaviorResponse
```

List Behaviors

List all behaviors for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->listBehaviorsV1BehaviorsGet($org_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->listBehaviorsV1BehaviorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zarnite\Model\EnvelopeListBehaviorResponse**](../Model/EnvelopeListBehaviorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBehaviorV1BehaviorsBehaviorIdPatch()`

```php
updateBehaviorV1BehaviorsBehaviorIdPatch($behavior_id, $org_id, $behavior_update): \Zarnite\Model\EnvelopeBehaviorResponse
```

Update Behavior

Update an existing behavior config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$behavior_id = 'behavior_id_example'; // string
$org_id = 'org_id_example'; // string
$behavior_update = new \Zarnite\Model\BehaviorUpdate(); // \Zarnite\Model\BehaviorUpdate

try {
    $result = $apiInstance->updateBehaviorV1BehaviorsBehaviorIdPatch($behavior_id, $org_id, $behavior_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->updateBehaviorV1BehaviorsBehaviorIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **behavior_id** | **string**|  | |
| **org_id** | **string**|  | |
| **behavior_update** | [**\Zarnite\Model\BehaviorUpdate**](../Model/BehaviorUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeBehaviorResponse**](../Model/EnvelopeBehaviorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBehaviorV1BehaviorsBehaviorIdPut()`

```php
updateBehaviorV1BehaviorsBehaviorIdPut($behavior_id, $org_id, $behavior_update): \Zarnite\Model\EnvelopeBehaviorResponse
```

Update Behavior

Update an existing behavior config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$behavior_id = 'behavior_id_example'; // string
$org_id = 'org_id_example'; // string
$behavior_update = new \Zarnite\Model\BehaviorUpdate(); // \Zarnite\Model\BehaviorUpdate

try {
    $result = $apiInstance->updateBehaviorV1BehaviorsBehaviorIdPut($behavior_id, $org_id, $behavior_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->updateBehaviorV1BehaviorsBehaviorIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **behavior_id** | **string**|  | |
| **org_id** | **string**|  | |
| **behavior_update** | [**\Zarnite\Model\BehaviorUpdate**](../Model/BehaviorUpdate.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeBehaviorResponse**](../Model/EnvelopeBehaviorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
