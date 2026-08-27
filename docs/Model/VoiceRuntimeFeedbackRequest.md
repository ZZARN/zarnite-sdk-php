# VoiceRuntimeFeedbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Idempotency-safe worker feedback event identifier |
**session_id** | **string** | Voice session identifier |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope |
**user_id** | **string** | Learner/user identifier |
**thread_id** | **string** | Conversation thread identifier |
**feedback** | [**\Zarnite\Model\VoiceRuntimeFeedbackPayload**](VoiceRuntimeFeedbackPayload.md) | Structured feedback payload |
**source** | **string** | Worker source label | [optional] [default to 'livekit-mig-worker']
**created_at** | **\DateTime** | Worker-observed feedback timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
