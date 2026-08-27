# VoiceRuntimeAgentContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_id** | **string** | Agent identifier |
**behavior_id** | **string** | Resolved behavior/profile identifier | [optional]
**system_prompt** | **string** | Resolved system prompt. This is the primary runtime behavior source. | [optional]
**response_language** | **string** | Resolved response locale/language | [optional]
**allowed_languages** | **string[]** | Configured allowed languages after normalization | [optional]
**voice** | **array<string,mixed>** | Resolved voice configuration | [optional]
**guardrails** | **array<string,mixed>** | Resolved guardrail payload | [optional]
**knowledge_base_enabled** | **bool** | Whether knowledge base is enabled for this agent | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
