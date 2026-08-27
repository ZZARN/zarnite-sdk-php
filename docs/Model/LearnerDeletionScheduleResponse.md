# LearnerDeletionScheduleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**learner_id** | **string** | Learner identifier |
**scheduled** | **bool** | Whether learner deletion is currently scheduled |
**requested_at** | **\DateTime** | When deletion was requested | [optional]
**scheduled_for** | **\DateTime** | When learner deletion will execute | [optional]
**requested_by** | **string** | Identifier for the admin who scheduled deletion | [optional]
**days_remaining** | **int** | Whole days remaining until deletion executes | [optional]
**cancellable** | **bool** | Whether deletion can still be cancelled | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
