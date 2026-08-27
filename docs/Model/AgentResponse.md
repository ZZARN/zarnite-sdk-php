# AgentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Agent identifier |
**org_id** | **string** | Owning organization |
**name** | **string** | Agent name |
**behavior_id** | **string** | Linked behavior identifier | [optional]
**behavior** | [**\Zarnite\Model\BehaviorResponse**](BehaviorResponse.md) | Resolved behavior config (populated on GET) | [optional]
**description** | **string** | Agent description | [optional]
**api_key_id** | **string** | API key binding | [optional]
**assigned_learners** | **int** | Assigned learner count | [optional] [default to 0]
**status** | **string** | Agent status |
**created_at** | **\DateTime** | Creation timestamp |
**updated_at** | **\DateTime** | Last update timestamp |
**language** | **string** | Agent language | [optional]
**languages** | **string[]** | Preferred language list | [optional]
**system_prompt** | **string** | Agent system prompt | [optional]
**tone** | **string** | Agent tone | [optional]
**strictness** | **string** | Agent strictness string | [optional]
**guardrails** | **array<string,mixed>** | Structured guardrail rules | [optional]
**enable_live_playground** | **bool** | Enable live playground | [optional] [default to false]
**voice** | **string** | Agent voice | [optional]
**enable_knowledge_base** | **bool** | Knowledge base enabled toggle | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
