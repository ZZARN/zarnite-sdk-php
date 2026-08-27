# VoiceRuntimeCloseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accepted** | **bool** | Whether the worker event was accepted | [optional] [default to true]
**session_persisted** | **bool** | Whether the session close was persisted locally | [optional] [default to false]
**analytics_enqueued** | **bool** | Whether learner analytics refresh was triggered | [optional] [default to false]
**billing_enqueued** | **bool** | Whether usage/billing payload was persisted for downstream processing | [optional] [default to false]
**credit_wallet** | **array<string,mixed>** | Optional month credit wallet snapshot after debit | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
