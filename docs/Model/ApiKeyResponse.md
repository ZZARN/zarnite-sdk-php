# ApiKeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | API key identifier |
**org_id** | **string** | Organization scope |
**name** | **string** | Key name |
**prefix** | **string** | Key prefix for identification |
**scopes** | **string[]** | Permission scopes |
**rate_limit** | **int** | Rate limit (req/min) |
**is_active** | **bool** | Whether key is active |
**last_used_at** | **\DateTime** | Last usage timestamp | [optional]
**total_requests** | **int** | Lifetime request count | [optional] [default to 0]
**created_at** | **\DateTime** | Creation timestamp |
**updated_at** | **\DateTime** | Last update |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
