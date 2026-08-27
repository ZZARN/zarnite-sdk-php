# VoiceRuntimeHistoryContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summary** | **string** | Compact learner summary if available | [optional]
**recent_turns** | [**\Zarnite\Model\VoiceRuntimeHistoryTurn[]**](VoiceRuntimeHistoryTurn.md) | Recent ordered turns for the active thread | [optional]
**recent_threads** | [**\Zarnite\Model\VoiceRuntimeHistoryThread[]**](VoiceRuntimeHistoryThread.md) | Compact summaries of recent threads for continuity | [optional]
**feedback** | **array<string,mixed>** | Persisted learner feedback snapshot if available | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
