# LearnerLongitudinalFeedbackResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**learner_id** | **string** | Learner identifier |
**learner_name** | **string** | Learner display name |
**sessions_analyzed** | **int** | Number of recent sessions included |
**conversation_window** | **string** | Conversation window label |
**narrative** | **string** | Concise longitudinal feedback paragraph |
**metrics** | [**\Zarnite\Model\LearnerFeedbackMetrics**](LearnerFeedbackMetrics.md) | Current and previous learning signals |
**strengths** | **string[]** | Top positive learner signals | [optional]
**improvement_areas** | **string[]** | Top improvement areas | [optional]
**recommended_next_step** | **string** | Suggested action for the next session |
**recent_topics** | **string[]** | Recent topic keywords | [optional]
**generated_at** | **string** | ISO timestamp when feedback was generated |
**evaluation_mode** | **string** | Feedback generation mode, e.g. heuristic or llm_hybrid | [optional]
**rubric_type** | **string** | Evaluation rubric used for the feedback | [optional]
**rubric_reasoning** | **string** | Short explanation of why the rubric was selected | [optional]
**evaluation_criteria** | **array<string,string>[]** | Frontend-ready rubric criteria used for the evaluation | [optional]
**progression_comparison** | **array<string,mixed>** | Comparison of the latest part of the window against the older part | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
