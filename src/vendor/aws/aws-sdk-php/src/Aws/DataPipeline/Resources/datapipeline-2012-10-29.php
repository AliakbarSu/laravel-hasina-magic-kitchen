<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

return [
    'apiVersion' => '2012-10-29',
    'endpointPrefix' => 'datapipeline',
    'serviceFullName' => 'AWS Data Pipeline',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'DataPipeline.',
    'signatureVersion' => 'v4',
    'namespace' => 'DataPipeline',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'datapipeline.us-east-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'datapipeline.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'datapipeline.eu-west-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'datapipeline.ap-southeast-2.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'datapipeline.ap-northeast-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'ActivatePipeline' => [
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
                    'default' => 'DataPipeline.ActivatePipeline',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'parameterValues' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterValue',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'stringValue' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'startTimestamp' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'AddTags' => [
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
                    'default' => 'DataPipeline.AddTags',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
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
                    'default' => 'DataPipeline.CreatePipeline',
                ],
                'name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'uniqueId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'tags' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DeactivatePipeline' => [
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
                    'default' => 'DataPipeline.DeactivatePipeline',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'cancelActive' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
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
                    'default' => 'DataPipeline.DeletePipeline',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeObjects' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeObjectsOutput',
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
                    'default' => 'DataPipeline.DescribeObjects',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'objectIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'id',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'evaluateExpressions' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'DescribePipelines' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribePipelinesOutput',
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
                    'default' => 'DataPipeline.DescribePipelines',
                ],
                'pipelineIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'id',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'EvaluateExpression' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EvaluateExpressionOutput',
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
                    'default' => 'DataPipeline.EvaluateExpression',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'objectId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'expression' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' => 'The specified task was not found.',
                    'class' => 'TaskNotFoundException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'GetPipelineDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetPipelineDefinitionOutput',
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
                    'default' => 'DataPipeline.GetPipelineDefinition',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'version' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
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
                    'default' => 'DataPipeline.ListPipelines',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'PollForTask' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PollForTaskOutput',
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
                    'default' => 'DataPipeline.PollForTask',
                ],
                'workerGroup' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'instanceIdentity' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'document' => [
                            'type' => 'string',
                        ],
                        'signature' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' => 'The specified task was not found.',
                    'class' => 'TaskNotFoundException',
                ],
            ],
        ],
        'PutPipelineDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutPipelineDefinitionOutput',
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
                    'default' => 'DataPipeline.PutPipelineDefinition',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'pipelineObjects' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'fields' => [
                                'required' => true,
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Field',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                        'refValue' => [
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterObjects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'attributes' => [
                                'required' => true,
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterAttribute',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'stringValue' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterValues' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterValue',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'stringValue' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'QueryObjects' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'QueryObjectsOutput',
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
                    'default' => 'DataPipeline.QueryObjects',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'query' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'selectors' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Selector',
                                'type' => 'object',
                                'properties' => [
                                    'fieldName' => [
                                        'type' => 'string',
                                    ],
                                    'operator' => [
                                        'type' => 'object',
                                        'properties' => [
                                            '' => [],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'sphere' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'RemoveTags' => [
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
                    'default' => 'DataPipeline.RemoveTags',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'tagKeys' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'string',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'ReportTaskProgress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ReportTaskProgressOutput',
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
                    'default' => 'DataPipeline.ReportTaskProgress',
                ],
                'taskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'fields' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Field',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'stringValue' => [
                                'type' => 'string',
                            ],
                            'refValue' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' => 'The specified task was not found.',
                    'class' => 'TaskNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'ReportTaskRunnerHeartbeat' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ReportTaskRunnerHeartbeatOutput',
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
                    'default' => 'DataPipeline.ReportTaskRunnerHeartbeat',
                ],
                'taskrunnerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'workerGroup' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'hostname' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'SetStatus' => [
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
                    'default' => 'DataPipeline.SetStatus',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'objectIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'id',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'SetTaskStatus' => [
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
                    'default' => 'DataPipeline.SetTaskStatus',
                ],
                'taskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'taskStatus' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'errorId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'errorMessage' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'errorStackTrace' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' => 'The specified task was not found.',
                    'class' => 'TaskNotFoundException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
        'ValidatePipelineDefinition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ValidatePipelineDefinitionOutput',
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
                    'default' => 'DataPipeline.ValidatePipelineDefinition',
                ],
                'pipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'pipelineObjects' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'name' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'fields' => [
                                'required' => true,
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Field',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                        'refValue' => [
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterObjects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'attributes' => [
                                'required' => true,
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterAttribute',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'required' => true,
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'stringValue' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterValues' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterValue',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'stringValue' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An internal service error occurred.',
                    'class' => 'InternalServiceErrorException',
                ],
                [
                    'reason' =>
                        'The request was not valid. Verify that your request was properly formatted, that the signature was generated with the correct credentials, and that you haven\'t exceeded any of the service limits for your account.',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'reason' =>
                        'The specified pipeline was not found. Verify that you used the correct user and account identifiers.',
                    'class' => 'PipelineNotFoundException',
                ],
                [
                    'reason' => 'The specified pipeline has been deleted.',
                    'class' => 'PipelineDeletedException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreatePipelineOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeObjectsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineObjects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'fields' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Field',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                        'refValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'hasMoreResults' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribePipelinesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineDescriptionList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineDescription',
                        'type' => 'object',
                        'properties' => [
                            'pipelineId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'fields' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Field',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                        'refValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                            ],
                            'tags' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Tag',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EvaluateExpressionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'evaluatedExpression' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetPipelineDefinitionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineObjects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'fields' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Field',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                        'refValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterObjects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterObject',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'attributes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterAttribute',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'stringValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'parameterValues' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ParameterValue',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'stringValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPipelinesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'pipelineIdList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PipelineIdName',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'hasMoreResults' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'PollForTaskOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'taskObject' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'taskId' => [
                            'type' => 'string',
                        ],
                        'pipelineId' => [
                            'type' => 'string',
                        ],
                        'attemptId' => [
                            'type' => 'string',
                        ],
                        'objects' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'fields' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Field',
                                            'type' => 'object',
                                            'properties' => [
                                                'key' => [
                                                    'type' => 'string',
                                                ],
                                                'stringValue' => [
                                                    'type' => 'string',
                                                ],
                                                'refValue' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutPipelineDefinitionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'validationErrors' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ValidationError',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'validationMessage',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'validationWarnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ValidationWarning',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'warnings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'validationMessage',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'errored' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'QueryObjectsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ids' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'id',
                        'type' => 'string',
                    ],
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'hasMoreResults' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ReportTaskProgressOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'canceled' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ReportTaskRunnerHeartbeatOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'terminate' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ValidatePipelineDefinitionOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'validationErrors' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ValidationError',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'validationMessage',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'validationWarnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ValidationWarning',
                        'type' => 'object',
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                            'warnings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'validationMessage',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'errored' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListPipelines' => [
            'input_token' => 'marker',
            'output_token' => 'marker',
            'more_results' => 'hasMoreResults',
            'result_key' => 'pipelineIdList',
        ],
        'DescribeObjects' => [
            'input_token' => 'marker',
            'output_token' => 'marker',
            'more_results' => 'hasMoreResults',
            'result_key' => 'pipelineObjects',
        ],
        'DescribePipelines' => [
            'result_key' => 'pipelineDescriptionList',
        ],
        'QueryObjects' => [
            'input_token' => 'marker',
            'output_token' => 'marker',
            'more_results' => 'hasMoreResults',
            'limit_key' => 'limit',
            'result_key' => 'ids',
        ],
    ],
];
