# KnowledgeDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_id** | **string** | Stable identifier for this document (derived from source_file + scope) |
**source_file** | **string** | Original uploaded filename |
**scope** | **string** | Whether this document belongs to an agent KB or org-wide KB |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope (null for org-wide documents) | [optional]
**chunk_count** | **int** | Number of vector chunks stored for this document |
**uploaded_by** | **string** | User who uploaded this document | [optional]
**created_at** | **string** | Earliest chunk creation time (approximate upload time) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
