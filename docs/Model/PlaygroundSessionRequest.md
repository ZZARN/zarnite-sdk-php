# PlaygroundSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent to test |
**mode** | **string** | Session mode: debug | eval | learner_live | [optional] [default to 'debug']
**playground** | **bool** | Whether this is a playground session | [optional] [default to true]
**learner_id** | **string** | Optional learner/user being simulated | [optional]
**thread_id** | **string** | Optional conversation thread | [optional]
**resume_session_id** | **string** | Optional prior session id to resume on the same thread | [optional]
**language** | **string** | Session-level language override (e.g. English, French) | [optional]
**voice** | [**\Zarnite\Model\PlaygroundVoiceConfigInput**](PlaygroundVoiceConfigInput.md) | Voice config | [optional]
**client** | [**\Zarnite\Model\PlaygroundClientMeta**](PlaygroundClientMeta.md) | Client metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
