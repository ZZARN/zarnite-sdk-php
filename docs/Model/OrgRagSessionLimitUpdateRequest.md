# OrgRagSessionLimitUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether org-level monthly RAG session limits are enforced |
**monthly_session_limit** | **int** | Maximum distinct RAG sessions (thread_id) allowed per month when enabled | [optional]
**monthly_user_session_limit** | **int** | Maximum distinct RAG sessions per user per month when enabled | [optional]
**monthly_user_time_limit_minutes** | **int** | Maximum cumulative RAG active time per user per month, in minutes, when enabled | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
