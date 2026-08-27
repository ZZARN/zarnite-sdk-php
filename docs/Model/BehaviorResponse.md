# BehaviorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Behavior identifier |
**org_id** | **string** | Owning organization |
**name** | **string** | Behavior name |
**description** | **string** | Behavior description | [optional]
**system_prompt** | **string** | Core instruction prompt | [optional]
**tone** | **string** | Tone setting | [optional]
**strictness** | **string** | Strictness setting | [optional]
**language** | **string** | Language | [optional]
**languages** | **string[]** | Preferred language list | [optional]
**guardrails** | **array<string,mixed>** | Structured guardrail rules | [optional]
**voice** | **string** | Voice setting | [optional]
**is_default** | **bool** | Whether this is the org default | [optional] [default to false]
**created_at** | **\DateTime** | Creation timestamp |
**updated_at** | **\DateTime** | Last update timestamp |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
