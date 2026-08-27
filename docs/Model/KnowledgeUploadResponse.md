# KnowledgeUploadResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Upload outcome |
**scope** | **string** | Knowledge base scope that received the file |
**org_id** | **string** | Organization scope |
**agent_id** | **string** | Agent scope when uploading to an agent KB | [optional]
**kb_target_agent_id** | **string** | Agent identifier actually stored in KB metadata |
**user_id** | **string** | Optional user attribution stored on uploaded chunks | [optional]
**file** | **string** | Uploaded filename |
**chunks_indexed** | **int** | Number of chunks inserted into the vector store |
**chunk_limit_applied** | **bool** | Whether upload chunk cap truncated the document |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
