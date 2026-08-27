# PlaygroundSessionDiagnosticsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Session identifier |
**session_kind** | **string** | Session classification |
**status** | **string** | Current session status |
**latency** | [**\Zarnite\Model\PlaygroundLatencyDiagnostics**](PlaygroundLatencyDiagnostics.md) | Latency rollup |
**events** | [**\Zarnite\Model\PlaygroundMetricsEvent[]**](PlaygroundMetricsEvent.md) | Recent session events | [optional]
**voice_quota** | **array<string,mixed>** | Voice quota snapshot attached to the session | [optional]
**runtime_config** | [**\Zarnite\Model\PlaygroundRuntimeConfigDiagnostics**](PlaygroundRuntimeConfigDiagnostics.md) | Runtime configuration visible to frontend diagnostics |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
