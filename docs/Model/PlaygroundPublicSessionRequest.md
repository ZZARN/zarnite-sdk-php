# PlaygroundPublicSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** | Filter by status | [optional]
**name** | **string** | Draft tutor display name | [optional]
**description** | **string** | Draft tutor description | [optional]
**system_prompt** | **string** | Unsaved draft system prompt to test | [optional]
**tone** | **string** | Draft tone setting | [optional]
**strictness** | **string** | Draft strictness setting | [optional]
**language** | **string** | Draft strictness setting | [optional]
**languages** | **string[]** | Draft allowed language list | [optional]
**voice** | [**\Zarnite\Model\PlaygroundVoiceConfigInput**](PlaygroundVoiceConfigInput.md) | Draft voice config | [optional]
**guardrails** | [**\Zarnite\Model\GuardrailsConfig**](GuardrailsConfig.md) | Draft guardrail config | [optional]
**behavior** | **array<string,mixed>** | Optional raw behavior object from the create-agent form | [optional]
**preview_agent_id** | **string** | Filter by status | [optional]
**enable_knowledge_base** | **bool** | Whether the preview session should use knowledge retrieval. | [optional]
**knowledge_base_agent_ids** | **string[]** | Optional KB agent ids to search during preview sessions. | [optional]
**learner_id** | **string** | Filter by status | [optional]
**thread_id** | **string** | Filter by status | [optional]
**max_duration_s** | **int** | Preview session duration cap in seconds. Must be 180-300 seconds. | [optional] [default to 300]
**client** | [**\Zarnite\Model\PlaygroundClientMeta**](PlaygroundClientMeta.md) | Client metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
