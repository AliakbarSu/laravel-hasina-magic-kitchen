<?php

return [
    'apiVersion' => '2015-07-09',
    'endpointPrefix' => 'codepipeline',
    'serviceFullName' => 'AWS CodePipeline',
    'serviceAbbreviation' => 'CodePipeline',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'CodePipeline_20150709.',
    'signatureVersion' => 'v4',
    'namespace' => 'CodePipeline',
    'operations' => [
        'AcknowledgeJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AcknowledgeJobOutput',
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
                    'default' => 'CodePipeline_20150709.AcknowledgeJob',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nonce' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified nonce was specified in an invalid format.',
                    'class' => 'InvalidNonceException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
            ],
        ],
        'AcknowledgeThirdPartyJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AcknowledgeThirdPartyJobOutput',
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
                        'CodePipeline_20150709.AcknowledgeThirdPartyJob',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'nonce' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'clientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified nonce was specified in an invalid format.',
                    'class' => 'InvalidNonceException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The client token was specified in an invalid format',
                    'class' => 'InvalidClientTokenException',
                ],
            ],
        ],
        'CreateCustomActionType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateCustomActionTypeOutput',
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
                    'default' => 'CodePipeline_20150709.CreateCustomActionType',
                ],
                'category' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'provider' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'settings' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'thirdPartyConfigurationUrl' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'entityUrlTemplate' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'executionUrlTemplate' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'revisionUrlTemplate' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'configurationProperties' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'ActionConfigurationProperty',
                        'type' => 'object',
                        'properties' => [
                            '' => [
                                'required' => true,
                                'type' => 'object',
                            ],
                        ],
                    ],
                ],
                'inputArtifactDetails' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'minimumCount' => [
                            'required' => true,
                            'type' => 'numeric',
                            'maximum' => 5,
                        ],
                        'maximumCount' => [
                            'required' => true,
                            'type' => 'numeric',
                            'maximum' => 5,
                        ],
                    ],
                ],
                'outputArtifactDetails' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'minimumCount' => [
                            'required' => true,
                            'type' => 'numeric',
                            'maximum' => 5,
                        ],
                        'maximumCount' => [
                            'required' => true,
                            'type' => 'numeric',
                            'maximum' => 5,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The number of pipelines associated with the AWS account has exceeded the limit allowed for the account.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'CreatePipeline' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreatePipelineOutput',
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
                    'default' => 'CodePipeline_20150709.CreatePipeline',
                ],
                'pipeline' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'roleArn' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'artifactStore' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                '' => [
                                    'type' => 'object',
                                    'location' => [
                                        'shape_name' => 'ArtifactStoreLocation',
                                        'type' => 'string',
                                        'min_length' => 3,
                                        'max_length' => 63,
                                        'pattern' => '[a-zA-Z0-9\\-\\.]+',
                                        'documentation' => '
                <p>The location for storing the artifacts for a pipeline, such as an S3 bucket or folder.</p>
        ',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                        'stages' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'StageDeclaration',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'blockers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BlockerDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                '' => [
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'actions' => [
                                        'required' => true,
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ActionDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'required' => true,
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'actionTypeId' => [
                                                    'required' => true,
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'category' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                        ],
                                                        'owner' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                        ],
                                                        'provider' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                            'minLength' => 1,
                                                        ],
                                                        'version' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                            'minLength' => 1,
                                                        ],
                                                    ],
                                                ],
                                                'runOrder' => [
                                                    'type' => 'numeric',
                                                    'minimum' => 1,
                                                    'maximum' => 999,
                                                ],
                                                'configuration' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'minLength' => 1,
                                                        'data' => [
                                                            'shape_name' =>
                                                                'ActionConfigurationKey',
                                                        ],
                                                    ],
                                                ],
                                                'inputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'InputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'required' => true,
                                                                'type' =>
                                                                    'string',
                                                                'minLength' => 1,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'roleArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'version' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline name is already in use.',
                    'class' => 'PipelineNameInUseException',
                ],
                [
                    'reason' =>
                        'The specified stage declaration was specified in an invalid format.',
                    'class' => 'InvalidStageDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified action declaration was specified in an invalid format.',
                    'class' => 'InvalidActionDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified gate declaration was specified in an invalid format.',
                    'class' => 'InvalidBlockerDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified structure was specified in an invalid format.',
                    'class' => 'InvalidStructureException',
                ],
                [
                    'reason' =>
                        'The number of pipelines associated with the AWS account has exceeded the limit allowed for the account.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DeleteCustomActionType' => [
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
                    'default' => 'CodePipeline_20150709.DeleteCustomActionType',
                ],
                'category' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'provider' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'DeletePipeline' => [
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
                    'default' => 'CodePipeline_20150709.DeletePipeline',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'DisableStageTransition' => [
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
                    'default' => 'CodePipeline_20150709.DisableStageTransition',
                ],
                'pipelineName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'stageName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'transitionType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'reason' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified stage was specified in an invalid format or cannot be found.',
                    'class' => 'StageNotFoundException',
                ],
            ],
        ],
        'EnableStageTransition' => [
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
                    'default' => 'CodePipeline_20150709.EnableStageTransition',
                ],
                'pipelineName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'stageName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'transitionType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified stage was specified in an invalid format or cannot be found.',
                    'class' => 'StageNotFoundException',
                ],
            ],
        ],
        'GetJobDetails' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetJobDetailsOutput',
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
                    'default' => 'CodePipeline_20150709.GetJobDetails',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
            ],
        ],
        'GetPipeline' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetPipelineOutput',
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
                    'default' => 'CodePipeline_20150709.GetPipeline',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified pipeline version was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineVersionNotFoundException',
                ],
            ],
        ],
        'GetPipelineState' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetPipelineStateOutput',
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
                    'default' => 'CodePipeline_20150709.GetPipelineState',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
            ],
        ],
        'GetThirdPartyJobDetails' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetThirdPartyJobDetailsOutput',
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
                        'CodePipeline_20150709.GetThirdPartyJobDetails',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'clientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The client token was specified in an invalid format',
                    'class' => 'InvalidClientTokenException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'InvalidJobException',
                ],
            ],
        ],
        'ListActionTypes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListActionTypesOutput',
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
                    'default' => 'CodePipeline_20150709.ListActionTypes',
                ],
                'actionOwnerFilter' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The next token was specified in an invalid format. Make sure that the next token you provided is the token returned by a previous call.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListPipelines' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListPipelinesOutput',
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
                    'default' => 'CodePipeline_20150709.ListPipelines',
                ],
                'nextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The next token was specified in an invalid format. Make sure that the next token you provided is the token returned by a previous call.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'PollForJobs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PollForJobsOutput',
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
                    'default' => 'CodePipeline_20150709.PollForJobs',
                ],
                'actionTypeId' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'category' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'owner' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'provider' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'maxBatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'queryParam' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'ActionConfigurationKey',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' => 'The specified action type cannot be found.',
                    'class' => 'ActionTypeNotFoundException',
                ],
            ],
        ],
        'PollForThirdPartyJobs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PollForThirdPartyJobsOutput',
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
                    'default' => 'CodePipeline_20150709.PollForThirdPartyJobs',
                ],
                'actionTypeId' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'category' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'owner' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'provider' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'version' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'maxBatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified action type cannot be found.',
                    'class' => 'ActionTypeNotFoundException',
                ],
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'PutActionRevision' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutActionRevisionOutput',
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
                    'default' => 'CodePipeline_20150709.PutActionRevision',
                ],
                'pipelineName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'stageName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'actionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'actionRevision' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revisionId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'revisionChangeId' => [
                            'type' => 'string',
                        ],
                        'created' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified stage was specified in an invalid format or cannot be found.',
                    'class' => 'StageNotFoundException',
                ],
                [
                    'reason' => 'The specified action cannot be found.',
                    'class' => 'ActionNotFoundException',
                ],
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
            ],
        ],
        'PutJobFailureResult' => [
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
                    'default' => 'CodePipeline_20150709.PutJobFailureResult',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'failureDetails' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified job state was specified in an invalid format.',
                    'class' => 'InvalidJobStateException',
                ],
            ],
        ],
        'PutJobSuccessResult' => [
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
                    'default' => 'CodePipeline_20150709.PutJobSuccessResult',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'currentRevision' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revision' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'changeIdentifier' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'continuationToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'executionDetails' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'summary' => [
                            'type' => 'string',
                        ],
                        'externalExecutionId' => [
                            'type' => 'string',
                        ],
                        'percentComplete' => [
                            'type' => 'numeric',
                            'maximum' => 100,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified job state was specified in an invalid format.',
                    'class' => 'InvalidJobStateException',
                ],
            ],
        ],
        'PutThirdPartyJobFailureResult' => [
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
                        'CodePipeline_20150709.PutThirdPartyJobFailureResult',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'clientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'failureDetails' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        '' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified job state was specified in an invalid format.',
                    'class' => 'InvalidJobStateException',
                ],
                [
                    'reason' =>
                        'The client token was specified in an invalid format',
                    'class' => 'InvalidClientTokenException',
                ],
            ],
        ],
        'PutThirdPartyJobSuccessResult' => [
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
                        'CodePipeline_20150709.PutThirdPartyJobSuccessResult',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'clientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'currentRevision' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'revision' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'changeIdentifier' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'continuationToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'executionDetails' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'summary' => [
                            'type' => 'string',
                        ],
                        'externalExecutionId' => [
                            'type' => 'string',
                        ],
                        'percentComplete' => [
                            'type' => 'numeric',
                            'maximum' => 100,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified job was specified in an invalid format or cannot be found.',
                    'class' => 'JobNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified job state was specified in an invalid format.',
                    'class' => 'InvalidJobStateException',
                ],
                [
                    'reason' =>
                        'The client token was specified in an invalid format',
                    'class' => 'InvalidClientTokenException',
                ],
            ],
        ],
        'StartPipelineExecution' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StartPipelineExecutionOutput',
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
                    'default' => 'CodePipeline_20150709.StartPipelineExecution',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was specified in an invalid format or cannot be found.',
                    'class' => 'PipelineNotFoundException',
                ],
            ],
        ],
        'UpdatePipeline' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdatePipelineOutput',
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
                    'default' => 'CodePipeline_20150709.UpdatePipeline',
                ],
                'pipeline' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'roleArn' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'artifactStore' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                '' => [
                                    'type' => 'object',
                                    'location' => [
                                        'shape_name' => 'ArtifactStoreLocation',
                                        'type' => 'string',
                                        'min_length' => 3,
                                        'max_length' => 63,
                                        'pattern' => '[a-zA-Z0-9\\-\\.]+',
                                        'documentation' => '
                <p>The location for storing the artifacts for a pipeline, such as an S3 bucket or folder.</p>
        ',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                        'stages' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'StageDeclaration',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'blockers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BlockerDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                '' => [
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'actions' => [
                                        'required' => true,
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ActionDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'required' => true,
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'actionTypeId' => [
                                                    'required' => true,
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'category' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                        ],
                                                        'owner' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                        ],
                                                        'provider' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                            'minLength' => 1,
                                                        ],
                                                        'version' => [
                                                            'required' => true,
                                                            'type' => 'string',
                                                            'minLength' => 1,
                                                        ],
                                                    ],
                                                ],
                                                'runOrder' => [
                                                    'type' => 'numeric',
                                                    'minimum' => 1,
                                                    'maximum' => 999,
                                                ],
                                                'configuration' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'minLength' => 1,
                                                        'data' => [
                                                            'shape_name' =>
                                                                'ActionConfigurationKey',
                                                        ],
                                                    ],
                                                ],
                                                'inputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'InputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'required' => true,
                                                                'type' =>
                                                                    'string',
                                                                'minLength' => 1,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'roleArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'version' => [
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The validation was specified in an invalid format.',
                    'class' => 'ValidationException',
                ],
                [
                    'reason' =>
                        'The specified stage declaration was specified in an invalid format.',
                    'class' => 'InvalidStageDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified action declaration was specified in an invalid format.',
                    'class' => 'InvalidActionDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified gate declaration was specified in an invalid format.',
                    'class' => 'InvalidBlockerDeclarationException',
                ],
                [
                    'reason' =>
                        'The specified structure was specified in an invalid format.',
                    'class' => 'InvalidStructureException',
                ],
            ],
        ],
    ],
    'models' => [
        'AcknowledgeJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'AcknowledgeThirdPartyJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateCustomActionTypeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'actionType' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'id' => [
                            'type' => 'object',
                            'properties' => [
                                'category' => [
                                    'type' => 'string',
                                ],
                                'owner' => [
                                    'type' => 'string',
                                ],
                                'provider' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'settings' => [
                            'type' => 'object',
                            'properties' => [
                                'thirdPartyConfigurationUrl' => [
                                    'type' => 'string',
                                ],
                                'entityUrlTemplate' => [
                                    'type' => 'string',
                                ],
                                'executionUrlTemplate' => [
                                    'type' => 'string',
                                ],
                                'revisionUrlTemplate' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'actionConfigurationProperties' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ActionConfigurationProperty',
                                'type' => 'object',
                                'properties' => [
                                    '' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                        'inputArtifactDetails' => [
                            'type' => 'object',
                            'properties' => [
                                'minimumCount' => [
                                    'type' => 'numeric',
                                ],
                                'maximumCount' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'outputArtifactDetails' => [
                            'type' => 'object',
                            'properties' => [
                                'minimumCount' => [
                                    'type' => 'numeric',
                                ],
                                'maximumCount' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePipelineOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'artifactStore' => [
                            'type' => 'object',
                            'properties' => [
                                '' => [
                                    'type' => 'object',
                                    'location' => [
                                        'shape_name' => 'ArtifactStoreLocation',
                                        'type' => 'string',
                                        'min_length' => 3,
                                        'max_length' => 63,
                                        'pattern' => '[a-zA-Z0-9\\-\\.]+',
                                        'documentation' => '
                <p>The location for storing the artifacts for a pipeline, such as an S3 bucket or folder.</p>
        ',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                        'stages' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'StageDeclaration',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'blockers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BlockerDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                '' => [
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'actions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ActionDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'actionTypeId' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'category' => [
                                                            'type' => 'string',
                                                        ],
                                                        'owner' => [
                                                            'type' => 'string',
                                                        ],
                                                        'provider' => [
                                                            'type' => 'string',
                                                        ],
                                                        'version' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'runOrder' => [
                                                    'type' => 'numeric',
                                                ],
                                                'configuration' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'outputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'OutputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'inputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'InputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'roleArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'version' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'GetJobDetailsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'jobDetails' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'id' => [
                            'type' => 'string',
                        ],
                        'data' => [
                            'type' => 'object',
                            'properties' => [
                                'actionTypeId' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'category' => [
                                            'type' => 'string',
                                        ],
                                        'owner' => [
                                            'type' => 'string',
                                        ],
                                        'provider' => [
                                            'type' => 'string',
                                        ],
                                        'version' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'actionConfiguration' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'configuration' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'pipelineContext' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'pipelineName' => [
                                            'type' => 'string',
                                        ],
                                        'stage' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'action' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'inputArtifacts' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Artifact',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'revision' => [
                                                'type' => 'string',
                                            ],
                                            'location' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    '' => [
                                                        'type' => 'object',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'outputArtifacts' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Artifact',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'revision' => [
                                                'type' => 'string',
                                            ],
                                            'location' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    '' => [
                                                        'type' => 'object',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'artifactCredentials' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'accessKeyId' => [
                                            'type' => 'string',
                                        ],
                                        'secretAccessKey' => [
                                            'type' => 'string',
                                        ],
                                        'sessionToken' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'continuationToken' => [
                                    'type' => 'string',
                                ],
                                'encryptionKey' => [
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'accountId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetPipelineOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'artifactStore' => [
                            'type' => 'object',
                            'properties' => [
                                '' => [
                                    'type' => 'object',
                                    'location' => [
                                        'shape_name' => 'ArtifactStoreLocation',
                                        'type' => 'string',
                                        'min_length' => 3,
                                        'max_length' => 63,
                                        'pattern' => '[a-zA-Z0-9\\-\\.]+',
                                        'documentation' => '
                <p>The location for storing the artifacts for a pipeline, such as an S3 bucket or folder.</p>
        ',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                        'stages' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'StageDeclaration',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'blockers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BlockerDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                '' => [
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'actions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ActionDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'actionTypeId' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'category' => [
                                                            'type' => 'string',
                                                        ],
                                                        'owner' => [
                                                            'type' => 'string',
                                                        ],
                                                        'provider' => [
                                                            'type' => 'string',
                                                        ],
                                                        'version' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'runOrder' => [
                                                    'type' => 'numeric',
                                                ],
                                                'configuration' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'outputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'OutputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'inputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'InputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'roleArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'version' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'GetPipelineStateOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'pipelineVersion' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'stageStates' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StageState',
                        'type' => 'object',
                        'properties' => [
                            'stageName' => [
                                'type' => 'string',
                            ],
                            'inboundTransitionState' => [
                                'type' => 'object',
                                'properties' => [
                                    'enabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'lastChangedBy' => [
                                        'type' => 'string',
                                    ],
                                    'lastChangedAt' => [
                                        'type' => 'string',
                                    ],
                                    'disabledReason' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'actionStates' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ActionState',
                                    'type' => 'object',
                                    'properties' => [
                                        'actionName' => [
                                            'type' => 'string',
                                        ],
                                        'currentRevision' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'revisionId' => [
                                                    'type' => 'string',
                                                ],
                                                'revisionChangeId' => [
                                                    'type' => 'string',
                                                ],
                                                'created' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'latestExecution' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'status' => [
                                                    'type' => 'string',
                                                ],
                                                'summary' => [
                                                    'type' => 'string',
                                                ],
                                                'lastStatusChange' => [
                                                    'type' => 'string',
                                                ],
                                                'externalExecutionId' => [
                                                    'type' => 'string',
                                                ],
                                                'externalExecutionUrl' => [
                                                    'type' => 'string',
                                                ],
                                                'percentComplete' => [
                                                    'type' => 'numeric',
                                                ],
                                                'errorDetails' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'code' => [
                                                            'type' => 'string',
                                                        ],
                                                        'message' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'entityUrl' => [
                                            'type' => 'string',
                                        ],
                                        'revisionUrl' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'created' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'updated' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetThirdPartyJobDetailsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'jobDetails' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'id' => [
                            'type' => 'string',
                        ],
                        'data' => [
                            'type' => 'object',
                            'properties' => [
                                'actionTypeId' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'category' => [
                                            'type' => 'string',
                                        ],
                                        'owner' => [
                                            'type' => 'string',
                                        ],
                                        'provider' => [
                                            'type' => 'string',
                                        ],
                                        'version' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'actionConfiguration' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'configuration' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'pipelineContext' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'pipelineName' => [
                                            'type' => 'string',
                                        ],
                                        'stage' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'action' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'inputArtifacts' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Artifact',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'revision' => [
                                                'type' => 'string',
                                            ],
                                            'location' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    '' => [
                                                        'type' => 'object',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'outputArtifacts' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Artifact',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'revision' => [
                                                'type' => 'string',
                                            ],
                                            'location' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    '' => [
                                                        'type' => 'object',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'artifactCredentials' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'accessKeyId' => [
                                            'type' => 'string',
                                        ],
                                        'secretAccessKey' => [
                                            'type' => 'string',
                                        ],
                                        'sessionToken' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'continuationToken' => [
                                    'type' => 'string',
                                ],
                                'encryptionKey' => [
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'nonce' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ListActionTypesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'actionTypes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ActionType',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'object',
                                'properties' => [
                                    'category' => [
                                        'type' => 'string',
                                    ],
                                    'owner' => [
                                        'type' => 'string',
                                    ],
                                    'provider' => [
                                        'type' => 'string',
                                    ],
                                    'version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'settings' => [
                                'type' => 'object',
                                'properties' => [
                                    'thirdPartyConfigurationUrl' => [
                                        'type' => 'string',
                                    ],
                                    'entityUrlTemplate' => [
                                        'type' => 'string',
                                    ],
                                    'executionUrlTemplate' => [
                                        'type' => 'string',
                                    ],
                                    'revisionUrlTemplate' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'actionConfigurationProperties' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ActionConfigurationProperty',
                                    'type' => 'object',
                                    'properties' => [
                                        '' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                            'inputArtifactDetails' => [
                                'type' => 'object',
                                'properties' => [
                                    'minimumCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'maximumCount' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'outputArtifactDetails' => [
                                'type' => 'object',
                                'properties' => [
                                    'minimumCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'maximumCount' => [
                                        'type' => 'numeric',
                                    ],
                                ],
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
        'ListPipelinesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelines' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineSummary',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'version' => [
                                'type' => 'numeric',
                            ],
                            'created' => [
                                'type' => 'string',
                            ],
                            'updated' => [
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
        'PollForJobsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'jobs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Job',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'data' => [
                                'type' => 'object',
                                'properties' => [
                                    'actionTypeId' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                            ],
                                            'owner' => [
                                                'type' => 'string',
                                            ],
                                            'provider' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'actionConfiguration' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'configuration' => [
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'pipelineContext' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'pipelineName' => [
                                                'type' => 'string',
                                            ],
                                            'stage' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'action' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'inputArtifacts' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Artifact',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'revision' => [
                                                    'type' => 'string',
                                                ],
                                                'location' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        '' => [
                                                            'type' => 'object',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'outputArtifacts' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Artifact',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'revision' => [
                                                    'type' => 'string',
                                                ],
                                                'location' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        '' => [
                                                            'type' => 'object',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'artifactCredentials' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'accessKeyId' => [
                                                'type' => 'string',
                                            ],
                                            'secretAccessKey' => [
                                                'type' => 'string',
                                            ],
                                            'sessionToken' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'continuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'encryptionKey' => [
                                        'type' => 'object',
                                        'properties' => [
                                            '' => [
                                                'type' => 'object',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'nonce' => [
                                'type' => 'string',
                            ],
                            'accountId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PollForThirdPartyJobsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'jobs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ThirdPartyJob',
                        'type' => 'object',
                        'properties' => [
                            'clientId' => [
                                'type' => 'string',
                            ],
                            'jobId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutActionRevisionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'newRevision' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'pipelineExecutionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'StartPipelineExecutionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineExecutionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdatePipelineOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                        'roleArn' => [
                            'type' => 'string',
                        ],
                        'artifactStore' => [
                            'type' => 'object',
                            'properties' => [
                                '' => [
                                    'type' => 'object',
                                    'location' => [
                                        'shape_name' => 'ArtifactStoreLocation',
                                        'type' => 'string',
                                        'min_length' => 3,
                                        'max_length' => 63,
                                        'pattern' => '[a-zA-Z0-9\\-\\.]+',
                                        'documentation' => '
                <p>The location for storing the artifacts for a pipeline, such as an S3 bucket or folder.</p>
        ',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                        'stages' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'StageDeclaration',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'blockers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BlockerDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                '' => [
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'actions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ActionDeclaration',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'type' => 'string',
                                                ],
                                                'actionTypeId' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'category' => [
                                                            'type' => 'string',
                                                        ],
                                                        'owner' => [
                                                            'type' => 'string',
                                                        ],
                                                        'provider' => [
                                                            'type' => 'string',
                                                        ],
                                                        'version' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'runOrder' => [
                                                    'type' => 'numeric',
                                                ],
                                                'configuration' => [
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'outputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'OutputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'inputArtifacts' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'InputArtifact',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'roleArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'version' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
