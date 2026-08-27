# LearnerReinitiateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Learner identifier |
**org_id** | **string** | Organization scope |
**name** | **string** | Learner name |
**email** | **string** | Learner email | [optional]
**learner_id** | **string** | External learner identifier | [optional]
**status** | **string** | Learner status (always &#39;active&#39; after reinitiation) |
**access_key** | **string** | New one-time raw access key — old key is immediately revoked |
**access_key_prefix** | **string** | Key prefix for identification |
**updated_at** | **\DateTime** | Last update timestamp |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
