# PlaygroundSessionTranscriptResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Voice session identifier |
**thread_id** | **string** | Conversation thread identifier |
**session_kind** | **string** | Session classification |
**status** | **string** | Current session status |
**started_at** | **string** | Session start time | [optional]
**ended_at** | **string** | Session end time | [optional]
**last_activity_at** | **string** | Most recent activity time | [optional]
**livekit_room_name** | **string** | LiveKit room backing the session | [optional]
**messages** | [**\Zarnite\Model\PlaygroundTranscriptMessage[]**](PlaygroundTranscriptMessage.md) | Ordered transcript messages for the session | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
