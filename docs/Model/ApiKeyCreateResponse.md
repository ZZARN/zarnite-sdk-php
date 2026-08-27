# ApiKeyCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | API key identifier |
**org_id** | **string** | Organization scope |
**name** | **string** | Key name |
**prefix** | **string** | Key prefix for identification (e.g. &#39;zrn_abc123&#39;) |
**raw_key** | **string** | Full API key — shown only once on creation |
**scopes** | **string[]** | Permission scopes |
**rate_limit** | **int** | Rate limit (req/min) |
**is_active** | **bool** | Whether key is active | [optional] [default to true]
**created_at** | **\DateTime** | Creation timestamp |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
