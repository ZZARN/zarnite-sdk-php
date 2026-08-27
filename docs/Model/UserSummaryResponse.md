# UserSummaryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** |  |
**agent_id** | **string** |  |
**user_id** | **string** |  |
**messages** | **array<string,mixed>** | Message counts (total, user, assistant) |
**first_activity** | **string** | ISO timestamp of first activity | [optional]
**last_activity** | **string** | ISO timestamp of last activity | [optional]
**sessions** | **array<string,mixed>** | Session stats (total, active, avg_duration_s, last_session) |
**most_active_hours** | **mixed[]** | Top 5 most active hours |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
