# OrgRagSessionLimitResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** | Organization scope |
**enabled** | **bool** | Whether monthly session limit is enabled |
**monthly_session_limit** | **int** | Configured monthly session cap | [optional]
**monthly_user_session_limit** | **int** | Configured monthly per-user session cap | [optional]
**monthly_user_time_limit_minutes** | **int** | Configured monthly per-user RAG time cap in minutes | [optional]
**month** | **string** | UTC month window in YYYY-MM format |
**used_sessions** | **int** | Distinct sessions already used this month |
**remaining_sessions** | **int** | Remaining sessions for this month (null when disabled/unbounded) | [optional]
**user_id** | **string** | Queried user scope when provided | [optional]
**used_user_sessions** | **int** | Distinct sessions used by queried user this month | [optional]
**remaining_user_sessions** | **int** | Remaining sessions for queried user this month | [optional]
**used_user_time_minutes** | **float** | Used RAG time by queried user this month in minutes | [optional]
**remaining_user_time_minutes** | **float** | Remaining RAG time by queried user this month in minutes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
