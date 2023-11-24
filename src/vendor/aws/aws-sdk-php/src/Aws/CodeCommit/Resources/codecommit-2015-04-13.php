<?php

return [
    'apiVersion' => '2015-04-13',
    'endpointPrefix' => 'codecommit',
    'serviceFullName' => 'AWS CodeCommit',
    'serviceAbbreviation' => 'CodeCommit',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'CodeCommit_20150413.',
    'signatureVersion' => 'v4',
    'namespace' => 'CodeCommit',
    'operations' => [
        'BatchGetRepositories' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchGetRepositoriesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.BatchGetRepositories',
                ],
                'repositoryNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RepositoryName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository names object is required but was not specified.',
                    'class' => 'RepositoryNamesRequiredException',
                ],
                [
                    'reason' =>
                        'The maximum number of allowed repository names was exceeded. Currently, this number is 25.',
                    'class' => 'MaximumRepositoryNamesExceededException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'CreateBranch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.CreateBranch',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'branchName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'commitId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'A branch name is required but was not specified.',
                    'class' => 'BranchNameRequiredException',
                ],
                [
                    'reason' => 'The specified branch name already exists.',
                    'class' => 'BranchNameExistsException',
                ],
                [
                    'reason' => 'The specified branch name is not valid.',
                    'class' => 'InvalidBranchNameException',
                ],
                [
                    'reason' => 'A commit ID was not specified.',
                    'class' => 'CommitIdRequiredException',
                ],
                [
                    'reason' =>
                        'The specified commit does not exist or no commit was specified, and the specified repository has no default branch.',
                    'class' => 'CommitDoesNotExistException',
                ],
                [
                    'reason' => 'The specified commit ID is not valid.',
                    'class' => 'InvalidCommitIdException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'CreateRepository' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateRepositoryOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.CreateRepository',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'repositoryDescription' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified repository name already exists.',
                    'class' => 'RepositoryNameExistsException',
                ],
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' =>
                        'The specified repository description is not valid.',
                    'class' => 'InvalidRepositoryDescriptionException',
                ],
                [
                    'reason' => 'A repository resource limit was exceeded.',
                    'class' => 'RepositoryLimitExceededException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'DeleteRepository' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteRepositoryOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.DeleteRepository',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'GetBranch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetBranchOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.GetBranch',
                ],
                'repositoryName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'branchName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' =>
                        'A branch name is required but was not specified.',
                    'class' => 'BranchNameRequiredException',
                ],
                [
                    'reason' => 'The specified branch name is not valid.',
                    'class' => 'InvalidBranchNameException',
                ],
                [
                    'reason' => 'The specified branch does not exist.',
                    'class' => 'BranchDoesNotExistException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'GetRepository' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetRepositoryOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.GetRepository',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'ListBranches' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListBranchesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.ListBranches',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The specified continuation token is not valid.',
                    'class' => 'InvalidContinuationTokenException',
                ],
            ],
        ],
        'ListRepositories' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListRepositoriesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.ListRepositories',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'sortBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'order' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified sort by value is not valid.',
                    'class' => 'InvalidSortByException',
                ],
                [
                    'reason' => 'The specified sort order is not valid.',
                    'class' => 'InvalidOrderException',
                ],
                [
                    'reason' =>
                        'The specified continuation token is not valid.',
                    'class' => 'InvalidContinuationTokenException',
                ],
            ],
        ],
        'UpdateDefaultBranch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.UpdateDefaultBranch',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'defaultBranchName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' =>
                        'A branch name is required but was not specified.',
                    'class' => 'BranchNameRequiredException',
                ],
                [
                    'reason' => 'The specified branch name is not valid.',
                    'class' => 'InvalidBranchNameException',
                ],
                [
                    'reason' => 'The specified branch does not exist.',
                    'class' => 'BranchDoesNotExistException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'UpdateRepositoryDescription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'CodeCommit_20150413.UpdateRepositoryDescription',
                ],
                'repositoryName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'repositoryDescription' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
                [
                    'reason' =>
                        'The specified repository description is not valid.',
                    'class' => 'InvalidRepositoryDescriptionException',
                ],
                [
                    'reason' => 'An encryption integrity check failed.',
                    'class' => 'EncryptionIntegrityChecksFailedException',
                ],
                [
                    'reason' => 'An encryption key could not be accessed.',
                    'class' => 'EncryptionKeyAccessDeniedException',
                ],
                [
                    'reason' => 'The encryption key is disabled.',
                    'class' => 'EncryptionKeyDisabledException',
                ],
                [
                    'reason' => 'No encryption key was found.',
                    'class' => 'EncryptionKeyNotFoundException',
                ],
                [
                    'reason' => 'The encryption key is not available.',
                    'class' => 'EncryptionKeyUnavailableException',
                ],
            ],
        ],
        'UpdateRepositoryName' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'CodeCommit_20150413.UpdateRepositoryName',
                ],
                'oldName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'newName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified repository does not exist.',
                    'class' => 'RepositoryDoesNotExistException',
                ],
                [
                    'reason' => 'The specified repository name already exists.',
                    'class' => 'RepositoryNameExistsException',
                ],
                [
                    'reason' =>
                        'A repository name is required but was not specified.',
                    'class' => 'RepositoryNameRequiredException',
                ],
                [
                    'reason' =>
                        'At least one specified repository name is not valid. This exception only occurs when a specified repository name is not valid. Other exceptions occur when a required repository parameter is missing, or when a specified repository does not exist.',
                    'class' => 'InvalidRepositoryNameException',
                ],
            ],
        ],
    ],
    'models' => [
        'BatchGetRepositoriesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'repositories' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RepositoryMetadata',
                        'type' => 'object',
                        'properties' => [
                            'accountId' => [
                                'type' => 'string',
                            ],
                            'repositoryId' => [
                                'type' => 'string',
                            ],
                            'repositoryName' => [
                                'type' => 'string',
                            ],
                            'repositoryDescription' => [
                                'type' => 'string',
                            ],
                            'defaultBranch' => [
                                'type' => 'string',
                            ],
                            'lastModifiedDate' => [
                                'type' => 'string',
                            ],
                            'creationDate' => [
                                'type' => 'string',
                            ],
                            'cloneUrlHttp' => [
                                'type' => 'string',
                            ],
                            'cloneUrlSsh' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'repositoriesNotFound' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RepositoryName',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateRepositoryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'repositoryMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'accountId' => [
                            'type' => 'string',
                        ],
                        'repositoryId' => [
                            'type' => 'string',
                        ],
                        'repositoryName' => [
                            'type' => 'string',
                        ],
                        'repositoryDescription' => [
                            'type' => 'string',
                        ],
                        'defaultBranch' => [
                            'type' => 'string',
                        ],
                        'lastModifiedDate' => [
                            'type' => 'string',
                        ],
                        'creationDate' => [
                            'type' => 'string',
                        ],
                        'cloneUrlHttp' => [
                            'type' => 'string',
                        ],
                        'cloneUrlSsh' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRepositoryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'repositoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetBranchOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'branch' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'branchName' => [
                            'type' => 'string',
                        ],
                        'commitId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetRepositoryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'repositoryMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'accountId' => [
                            'type' => 'string',
                        ],
                        'repositoryId' => [
                            'type' => 'string',
                        ],
                        'repositoryName' => [
                            'type' => 'string',
                        ],
                        'repositoryDescription' => [
                            'type' => 'string',
                        ],
                        'defaultBranch' => [
                            'type' => 'string',
                        ],
                        'lastModifiedDate' => [
                            'type' => 'string',
                        ],
                        'creationDate' => [
                            'type' => 'string',
                        ],
                        'cloneUrlHttp' => [
                            'type' => 'string',
                        ],
                        'cloneUrlSsh' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ListBranchesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'branches' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'BranchName',
                        'type' => 'string',
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListRepositoriesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'repositories' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RepositoryNameIdPair',
                        'type' => 'object',
                        'properties' => [
                            'repositoryName' => [
                                'type' => 'string',
                            ],
                            'repositoryId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListBranches' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'branches',
        ],
        'ListRepositories' => [
            'input_token' => 'nextToken',
            'output_token' => 'nextToken',
            'result_key' => 'repositories',
        ],
    ],
];
