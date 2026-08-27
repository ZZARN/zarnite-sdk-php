# VoiceRuntimeCloseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Idempotency-safe worker event identifier |
**session_id** | **string** | Voice session identifier |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope |
**user_id** | **string** | Learner/user identifier |
**thread_id** | **string** | Conversation thread identifier |
**room_name** | **string** | LiveKit room name | [optional]
**started_at** | **\DateTime** | Worker-observed start time | [optional]
**ended_at** | **\DateTime** | Worker-observed end time | [optional]
**duration_seconds** | **float** | Final session duration in seconds | [optional]
**status** | **string** | Worker-reported final session status | [optional] [default to 'completed']
**usage** | [**\Zarnite\Model\VoiceRuntimeUsagePayload**](VoiceRuntimeUsagePayload.md) | Usage payload | [optional]
**transcript** | [**\Zarnite\Model\VoiceRuntimeTranscriptPayload**](VoiceRuntimeTranscriptPayload.md) | Transcript payload | [optional]
**final_feedback** | [**\Zarnite\Model\VoiceRuntimeFinalFeedback**](VoiceRuntimeFinalFeedback.md) | Optional final feedback summary | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
