# LearnerScoreResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**learner_id** | **string** | Learner identifier |
**score** | **int** | Overall proficiency score (0-100) |
**cefr_level** | **string** | CEFR level (A1-C2) |
**breakdown** | [**\Zarnite\Model\ScoreBreakdown**](ScoreBreakdown.md) | Per-dimension score breakdown |
**recommendation** | **string** | AI-generated recommendation text |
**assessed_at** | **string** | ISO timestamp of assessment |
**rubric_type** | **string** | Evaluation rubric used for scoring | [optional]
**rubric_reasoning** | **string** | Short explanation of why the rubric was selected | [optional]
**evaluation_mode** | **string** | Scoring mode, e.g. heuristic or llm_hybrid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
