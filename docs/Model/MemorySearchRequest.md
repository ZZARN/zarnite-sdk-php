# MemorySearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question** | **string** | Query to search against KB and memory |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope |
**user_id** | **string** | User scope (enforced by RBAC for user role) |
**thread_id** | **string** | Optional conversation/session identifier. When present, the API first searches memory summaries from that thread before falling back to user-level memory. | [optional]
**step_size** | **int** | Retrieval step size override | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
