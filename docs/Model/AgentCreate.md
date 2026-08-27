# AgentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Optional agent identifier. If omitted the API generates one. | [optional]
**name** | **string** | Human-readable agent name |
**org_id** | **string** | Organization that owns this agent |
**behavior_id** | **string** | Reference to an existing behavior record. Mutually exclusive with inline &#39;behavior&#39;. | [optional]
**behavior** | [**\Zarnite\Model\BehaviorCreate**](BehaviorCreate.md) | Inline behavior config — auto-creates a behavior record and links it to this agent. Mutually exclusive with behaviorId. | [optional]
**description** | **string** | Optional agent description | [optional]
**api_key_id** | **string** | API key binding selected for this agent | [optional]
**assigned_learners** | **int** | Count of learners assigned to this agent | [optional] [default to 0]
**status** | **string** | Operational status for the agent | [optional] [default to 'active']
**language** | **string** | Language for the agent (e.g. English, Spanish) | [optional]
**languages** | **string[]** | Preferred language list | [optional]
**system_prompt** | **string** | System prompt | [optional]
**tone** | **string** | Agent tone | [optional]
**strictness** | **string** | Agent strictness setting (e.g. high, low) | [optional]
**guardrails** | [**\Zarnite\Model\GuardrailsConfig**](GuardrailsConfig.md) | Structured guardrail rules | [optional]
**enable_live_playground** | **bool** | Enable live playground toggle | [optional] [default to false]
**voice** | **string** | Voice setting | [optional]
**enable_knowledge_base** | **bool** | Whether knowledge base is enabled | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
