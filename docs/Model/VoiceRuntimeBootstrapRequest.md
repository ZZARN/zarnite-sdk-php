# VoiceRuntimeBootstrapRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Voice session identifier |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope |
**user_id** | **string** | Learner/user identifier |
**thread_id** | **string** | Conversation thread identifier |
**room_name** | **string** | LiveKit room name | [optional]
**channel** | **string** | Channel label for the worker | [optional] [default to 'voice']
**is_preview** | **bool** | Whether the session is a preview/playground session | [optional] [default to false]
**started_at** | **\DateTime** | Worker-observed session start time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
