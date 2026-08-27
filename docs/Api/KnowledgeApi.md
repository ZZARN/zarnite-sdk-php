# Zarnite\KnowledgeApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete()**](KnowledgeApi.md#deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete) | **DELETE** /v1/agents/{agent_id}/documents/{document_id} | Delete Agent Document |
| [**deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete()**](KnowledgeApi.md#deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete) | **DELETE** /v1/knowledge/documents/{document_id} | Delete Org Document |
| [**listAgentDocumentsV1AgentsAgentIdDocumentsGet()**](KnowledgeApi.md#listAgentDocumentsV1AgentsAgentIdDocumentsGet) | **GET** /v1/agents/{agent_id}/documents | List Agent Documents |
| [**listOrgDocumentsV1KnowledgeDocumentsGet()**](KnowledgeApi.md#listOrgDocumentsV1KnowledgeDocumentsGet) | **GET** /v1/knowledge/documents | List Org Documents |
| [**uploadAgentDocumentV1AgentsAgentIdDocumentsPost()**](KnowledgeApi.md#uploadAgentDocumentV1AgentsAgentIdDocumentsPost) | **POST** /v1/agents/{agent_id}/documents | Upload Agent Document |
| [**uploadOrgDocumentV1KnowledgeDocumentsPost()**](KnowledgeApi.md#uploadOrgDocumentV1KnowledgeDocumentsPost) | **POST** /v1/knowledge/documents | Upload Org Document |


## `deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete()`

```php
deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete($agent_id, $document_id, $org_id): \Zarnite\Model\EnvelopeKnowledgeDeleteResponse
```

Delete Agent Document

Delete a knowledge document from an agent's KB by document_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$document_id = 'document_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete($agent_id, $document_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->deleteAgentDocumentV1AgentsAgentIdDocumentsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **document_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeKnowledgeDeleteResponse**](../Model/EnvelopeKnowledgeDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete()`

```php
deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete($document_id, $org_id): \Zarnite\Model\EnvelopeKnowledgeDeleteResponse
```

Delete Org Document

Delete a knowledge document from the org-wide KB by document_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete($document_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->deleteOrgDocumentV1KnowledgeDocumentsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeKnowledgeDeleteResponse**](../Model/EnvelopeKnowledgeDeleteResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgentDocumentsV1AgentsAgentIdDocumentsGet()`

```php
listAgentDocumentsV1AgentsAgentIdDocumentsGet($agent_id, $org_id): \Zarnite\Model\EnvelopeListKnowledgeDocument
```

List Agent Documents

List knowledge documents uploaded to an agent's KB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->listAgentDocumentsV1AgentsAgentIdDocumentsGet($agent_id, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->listAgentDocumentsV1AgentsAgentIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeListKnowledgeDocument**](../Model/EnvelopeListKnowledgeDocument.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgDocumentsV1KnowledgeDocumentsGet()`

```php
listOrgDocumentsV1KnowledgeDocumentsGet($org_id): \Zarnite\Model\EnvelopeListKnowledgeDocument
```

List Org Documents

List knowledge documents uploaded to the org-wide KB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | Organization scope

try {
    $result = $apiInstance->listOrgDocumentsV1KnowledgeDocumentsGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->listOrgDocumentsV1KnowledgeDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| Organization scope | |

### Return type

[**\Zarnite\Model\EnvelopeListKnowledgeDocument**](../Model/EnvelopeListKnowledgeDocument.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAgentDocumentV1AgentsAgentIdDocumentsPost()`

```php
uploadAgentDocumentV1AgentsAgentIdDocumentsPost($agent_id, $file, $org_id, $user_id): \Zarnite\Model\EnvelopeKnowledgeUploadResponse
```

Upload Agent Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->uploadAgentDocumentV1AgentsAgentIdDocumentsPost($agent_id, $file, $org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->uploadAgentDocumentV1AgentsAgentIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeKnowledgeUploadResponse**](../Model/EnvelopeKnowledgeUploadResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOrgDocumentV1KnowledgeDocumentsPost()`

```php
uploadOrgDocumentV1KnowledgeDocumentsPost($file, $org_id, $user_id): \Zarnite\Model\EnvelopeKnowledgeUploadResponse
```

Upload Org Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = Zarnite\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zarnite\Api\KnowledgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$org_id = 'org_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->uploadOrgDocumentV1KnowledgeDocumentsPost($file, $org_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeApi->uploadOrgDocumentV1KnowledgeDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **org_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\Zarnite\Model\EnvelopeKnowledgeUploadResponse**](../Model/EnvelopeKnowledgeUploadResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
