# GuardrailsConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_languages** | **string[]** | Languages the agent is allowed to use when responding | [optional]
**blocked_topics** | **string[]** | Topics the agent must never discuss | [optional]
**max_response_length** | **int** | Maximum token count per response | [optional]
**content_filters** | **string[]** | Content filter labels (e.g. profanity, pii) | [optional]
**custom_rules** | **array<string,mixed>** | Freeform custom guardrail rules | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
