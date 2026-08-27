# DeploymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Deployment identifier |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Deployed agent |
**share_id** | **string** | Public share identifier for URL construction |
**name** | **string** | Deployment name | [optional]
**is_active** | **bool** | Whether deployment is live |
**allowed_user_ids** | **string[]** | Authorized user IDs | [optional]
**config** | **array<string,mixed>** | Deployment config | [optional]
**created_at** | **\DateTime** | Creation timestamp |
**updated_at** | **\DateTime** | Last update |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
