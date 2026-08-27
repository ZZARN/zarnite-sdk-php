# PlaygroundVoiceLookupResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **string** | Organization scope |
**user_id** | **string** | Optional user scope | [optional]
**category** | **string** | Resolved routing category |
**source** | **string** | Category source (user_override|org_default) |
**livekit_stack** | **string** | Resolved LiveKit stack label |
**tts_provider** | **string** | Resolved TTS provider label |
**voice_access** | **string** | Resolved voice entitlement tier (free|paid) |
**voices** | **string[]** | Allowed voices for the resolved tier |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
