# PlaygroundMetricsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Session identifier |
**session_kind** | **string** | Session classification |
**status** | **string** | Current session status |
**duration_s** | **float** | Session duration in seconds | [optional]
**total_events** | **int** | Total events recorded |
**events** | [**\Zarnite\Model\PlaygroundMetricsEvent[]**](PlaygroundMetricsEvent.md) | Session events (latency, STT/TTS, etc.) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
