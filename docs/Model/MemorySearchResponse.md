# MemorySearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kb_docs_retrieved** | **int** | Number of KB documents retrieved |
**memory_docs_retrieved** | **int** | Number of memory documents retrieved |
**context_tokens_used** | **int** | Estimated tokens used across KB and memory previews |
**context_token_budget** | **int** | Maximum token budget for this tier |
**pricing_tier** | **string** | Resolved pricing tier for the org |
**effective_step_size** | **int** | Effective step size after tier resolution |
**thread_scope_applied** | **bool** | Whether memory search was narrowed to the supplied thread_id |
**resolved_thread_id** | **string** | thread_id that was actually applied to memory search, or null when user-level fallback was used | [optional]
**kb_context_preview** | **string** | Preview of retrieved KB context (truncated) |
**memory_context_preview** | **string** | Preview of retrieved memory context (truncated) |
**kb_hits** | [**\Zarnite\Model\DocHit[]**](DocHit.md) | Individual KB document hits with metadata | [optional]
**memory_hits** | [**\Zarnite\Model\DocHit[]**](DocHit.md) | Individual memory hits with metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
