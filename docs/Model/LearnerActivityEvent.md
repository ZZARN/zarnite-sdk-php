# LearnerActivityEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Session identifier |
**agent_id** | **string** | Agent used in this session |
**session_kind** | **string** | Session type (playground_debug, learner_live, etc.) |
**status** | **string** | Session status (active, ended, timed_out) |
**started_at** | **string** | Session start time | [optional]
**ended_at** | **string** | Session end time | [optional]
**duration_s** | **float** | Session duration in seconds | [optional] [default to 0]
**event_count** | **int** | Number of events recorded in this session | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
