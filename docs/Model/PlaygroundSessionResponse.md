# PlaygroundSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Created session identifier |
**session_kind** | **string** | Session classification |
**is_billable** | **bool** | Whether this session counts toward billing |
**room_name** | **string** | LiveKit room name |
**participant_identity** | **string** | Participant identity string |
**participant_name** | **string** | Participant display name |
**user_id** | **string** | Resolved user for the session |
**thread_id** | **string** | Resolved conversation thread |
**resumed_from_session_id** | **string** | Previous session id when resuming | [optional]
**resume_supported** | **bool** | Whether the client can resume the same thread in a fresh session | [optional] [default to true]
**max_duration_s** | **int** | Max duration for the current session in seconds |
**recommended_resume_after_s** | **int** | Recommended client-side reconnect time for seamless continuation |
**voice** | [**\Zarnite\Model\PlaygroundVoiceConfigOutput**](PlaygroundVoiceConfigOutput.md) | Resolved voice config | [optional]
**voice_quota** | **array<string,mixed>** | Billable voice quota snapshot for this session | [optional]
**routing_category** | **string** | Resolved routing category used for this session | [optional]
**livekit_stack** | **string** | Resolved LiveKit stack used for token minting | [optional]
**tts_provider** | **string** | Resolved TTS provider label | [optional]
**voice_access** | **string** | Resolved voice entitlement tier (free|paid) | [optional]
**livekit** | [**\Zarnite\Model\LiveKitDetails**](LiveKitDetails.md) | LiveKit connection details |
**expires_at** | **string** | Token expiry ISO timestamp |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
