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
    'apiVersion' => '2014-11-11',
    'endpointPrefix' => 'lambda',
    'serviceFullName' => 'AWS Lambda',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'namespace' => 'Lambda',
    'operations' => [
        'AddEventSource' => [
            'httpMethod' => 'POST',
            'uri' => '/2014-11-13/event-source-mappings/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'EventSource' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'String',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'DeleteFunction' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2014-11-13/functions/{FunctionName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'GetEventSource' => [
            'httpMethod' => 'GET',
            'uri' => '/2014-11-13/event-source-mappings/{UUID}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'UUID' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'GetFunction' => [
            'httpMethod' => 'GET',
            'uri' => '/2014-11-13/functions/{FunctionName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetFunctionResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'GetFunctionConfiguration' => [
            'httpMethod' => 'GET',
            'uri' => '/2014-11-13/functions/{FunctionName}/configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'FunctionConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'InvokeAsync' => [
            'httpMethod' => 'POST',
            'uri' => '/2014-11-13/functions/{FunctionName}/invoke-async/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'InvokeAsyncResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'InvokeArgs' => [
                    'required' => true,
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The request body could not be parsed as JSON.',
                    'class' => 'InvalidRequestContentException',
                ],
            ],
        ],
        'ListEventSources' => [
            'httpMethod' => 'GET',
            'uri' => '/2014-11-13/event-source-mappings/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListEventSourcesResponse',
            'responseType' => 'model',
            'parameters' => [
                'EventSourceArn' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'EventSource',
                ],
                'FunctionName' => [
                    'type' => 'string',
                    'location' => 'query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'ListFunctions' => [
            'httpMethod' => 'GET',
            'uri' => '/2014-11-13/functions/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListFunctionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
            ],
        ],
        'RemoveEventSource' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2014-11-13/event-source-mappings/{UUID}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'UUID' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'UpdateFunctionConfiguration' => [
            'httpMethod' => 'PUT',
            'uri' => '/2014-11-13/functions/{FunctionName}/configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'FunctionConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Role' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Handler' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Timeout' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                    'maximum' => 60,
                ],
                'MemorySize' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 128,
                    'maximum' => 1024,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'UploadFunction' => [
            'httpMethod' => 'PUT',
            'uri' => '/2014-11-13/functions/{FunctionName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'FunctionConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'FunctionZip' => [
                    'required' => true,
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'Runtime' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Handler' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Mode' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'Timeout' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                    'maximum' => 60,
                ],
                'MemorySize' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 128,
                    'maximum' => 1024,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The AWS Lambda service encountered an internal error.',
                    'class' => 'ServiceException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the UploadFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The function or the event source specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'EventSourceConfiguration' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UUID' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'EventSource' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FunctionName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'Role' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IsActive' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'GetFunctionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Configuration' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'FunctionName' => [
                            'type' => 'string',
                        ],
                        'FunctionARN' => [
                            'type' => 'string',
                        ],
                        'ConfigurationId' => [
                            'type' => 'string',
                        ],
                        'Runtime' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'Handler' => [
                            'type' => 'string',
                        ],
                        'Mode' => [
                            'type' => 'string',
                        ],
                        'CodeSize' => [
                            'type' => 'numeric',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Timeout' => [
                            'type' => 'numeric',
                        ],
                        'MemorySize' => [
                            'type' => 'numeric',
                        ],
                        'LastModified' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Code' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'RepositoryType' => [
                            'type' => 'string',
                        ],
                        'Location' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'FunctionConfiguration' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FunctionName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FunctionARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigurationId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Runtime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Role' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Handler' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Mode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CodeSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Timeout' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'MemorySize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'InvokeAsyncResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'numeric',
                    'location' => 'statusCode',
                ],
            ],
        ],
        'ListEventSourcesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EventSources' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EventSourceConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'UUID' => [
                                'type' => 'string',
                            ],
                            'BatchSize' => [
                                'type' => 'numeric',
                            ],
                            'EventSource' => [
                                'type' => 'string',
                            ],
                            'FunctionName' => [
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Role' => [
                                'type' => 'string',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                            'IsActive' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFunctionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Functions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FunctionConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'FunctionName' => [
                                'type' => 'string',
                            ],
                            'FunctionARN' => [
                                'type' => 'string',
                            ],
                            'ConfigurationId' => [
                                'type' => 'string',
                            ],
                            'Runtime' => [
                                'type' => 'string',
                            ],
                            'Role' => [
                                'type' => 'string',
                            ],
                            'Handler' => [
                                'type' => 'string',
                            ],
                            'Mode' => [
                                'type' => 'string',
                            ],
                            'CodeSize' => [
                                'type' => 'numeric',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Timeout' => [
                                'type' => 'numeric',
                            ],
                            'MemorySize' => [
                                'type' => 'numeric',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListEventSources' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'limit_key' => 'MaxItems',
            'result_key' => 'EventSources',
        ],
        'ListFunctions' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'limit_key' => 'MaxItems',
            'result_key' => 'Functions',
        ],
    ],
];
