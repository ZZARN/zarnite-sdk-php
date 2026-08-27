# BehaviorCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** | Organization scope |
**name** | **string** | Human-readable behavior name |
**description** | **string** | Behavior description | [optional]
**system_prompt** | **string** | Core instruction prompt | [optional]
**tone** | **string** | e.g. friendly, professional | [optional]
**strictness** | **string** | e.g. high, medium, low | [optional]
**language** | **string** | e.g. English, Spanish | [optional]
**languages** | **string[]** | Preferred language list | [optional]
**guardrails** | [**\Zarnite\Model\GuardrailsConfig**](GuardrailsConfig.md) | Structured guardrail rules | [optional]
**voice** | **string** | Voice setting for TTS | [optional]
**is_default** | **bool** | Whether this is the org default behavior | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
