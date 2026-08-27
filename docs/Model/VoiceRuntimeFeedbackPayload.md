# VoiceRuntimeFeedbackPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Feedback/event kind emitted by the worker |
**narrative** | **string** | Human-readable summary or note | [optional]
**recommendation** | **string** | Recommended learner next step | [optional]
**confidence_score** | **float** | Confidence score if computed by the worker | [optional]
**cefr_level** | **string** | CEFR level if inferred by the worker | [optional]
**strengths** | **string[]** | Optional learner strengths | [optional]
**weaknesses** | **string[]** | Optional learner weaknesses | [optional]
**details** | **array<string,mixed>** | Additional structured feedback details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
