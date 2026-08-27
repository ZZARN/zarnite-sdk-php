# Zarnite\RoutingApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrgConfigV1RoutingOrgConfigGet()**](RoutingApi.md#getOrgConfigV1RoutingOrgConfigGet) | **GET** /v1/routing/org-config | Get Org Config |
| [**getUserCategoryV1RoutingUserCategoryGet()**](RoutingApi.md#getUserCategoryV1RoutingUserCategoryGet) | **GET** /v1/routing/user-category | Get User Category |
| [**updateOrgConfigV1RoutingOrgConfigPut()**](RoutingApi.md#updateOrgConfigV1RoutingOrgConfigPut) | **PUT** /v1/routing/org-config | Update Org Config |
| [**updateUserCategoryV1RoutingUserCategoryPut()**](RoutingApi.md#updateUserCategoryV1RoutingUserCategoryPut) | **PUT** /v1/routing/user-category | Update User Category |


## `getOrgConfigV1RoutingOrgConfigGet()`

```php
getOrgConfigV1RoutingOrgConfigGet($org_id): \Zarnite\Model\EnvelopeOrgRoutingConfigResponse
```

Get Org Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string

try {
    $result = $apiInstance->getOrgConfigV1RoutingOrgConfigGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getOrgConfigV1RoutingOrgConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgRoutingConfigResponse**](../Model/EnvelopeOrgRoutingConfigResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCategoryV1RoutingUserCategoryGet()`

```php
getUserCategoryV1RoutingUserCategoryGet($org_id, $user_id): \Zarnite\Model\EnvelopeOrgUserCategoryResponse
```

Get User Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getUserCategoryV1RoutingUserCategoryGet($org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getUserCategoryV1RoutingUserCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgUserCategoryResponse**](../Model/EnvelopeOrgUserCategoryResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgConfigV1RoutingOrgConfigPut()`

```php
updateOrgConfigV1RoutingOrgConfigPut($org_id, $org_routing_config_update_request): \Zarnite\Model\EnvelopeOrgRoutingConfigResponse
```

Update Org Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$org_routing_config_update_request = new \Zarnite\Model\OrgRoutingConfigUpdateRequest(); // \Zarnite\Model\OrgRoutingConfigUpdateRequest

try {
    $result = $apiInstance->updateOrgConfigV1RoutingOrgConfigPut($org_id, $org_routing_config_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateOrgConfigV1RoutingOrgConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **org_routing_config_update_request** | [**\Zarnite\Model\OrgRoutingConfigUpdateRequest**](../Model/OrgRoutingConfigUpdateRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgRoutingConfigResponse**](../Model/EnvelopeOrgRoutingConfigResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserCategoryV1RoutingUserCategoryPut()`

```php
updateUserCategoryV1RoutingUserCategoryPut($org_id, $user_id, $org_user_category_update_request): \Zarnite\Model\EnvelopeOrgUserCategoryResponse
```

Update User Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string
$org_user_category_update_request = new \Zarnite\Model\OrgUserCategoryUpdateRequest(); // \Zarnite\Model\OrgUserCategoryUpdateRequest

try {
    $result = $apiInstance->updateUserCategoryV1RoutingUserCategoryPut($org_id, $user_id, $org_user_category_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->updateUserCategoryV1RoutingUserCategoryPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | |
| **org_user_category_update_request** | [**\Zarnite\Model\OrgUserCategoryUpdateRequest**](../Model/OrgUserCategoryUpdateRequest.md)|  | |

### Return type

[**\Zarnite\Model\EnvelopeOrgUserCategoryResponse**](../Model/EnvelopeOrgUserCategoryResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
