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
    'apiVersion' => '2015-03-31',
    'endpointPrefix' => 'lambda',
    'serviceFullName' => 'AWS Lambda',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'namespace' => 'Lambda',
    'operations' => [
        'AddPermission' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/functions/{FunctionName}/policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'AddPermissionResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'StatementId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Action' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Principal' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SourceArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SourceAccount' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Lambda function access policy is limited to 20 KB.',
                    'class' => 'PolicyLengthExceededException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'CreateAlias' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/functions/{FunctionName}/aliases',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'AliasConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'FunctionVersion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'CreateEventSourceMapping' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/event-source-mappings/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceMappingConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'EventSourceArn' => [
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
                'Enabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'BatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
                'StartingPosition' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
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
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'CreateFunction' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/functions',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'FunctionConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Runtime' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Handler' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Code' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ZipFile' => [
                            'type' => ['string', 'object'],
                        ],
                        'S3Bucket' => [
                            'type' => 'string',
                            'minLength' => 3,
                        ],
                        'S3Key' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'S3ObjectVersion' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Timeout' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'MemorySize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 128,
                    'maximum' => 1536,
                ],
                'Publish' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
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
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'You have exceeded your maximum total code size per account. Limits',
                    'class' => 'CodeStorageExceededException',
                ],
            ],
        ],
        'DeleteAlias' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
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
                'Name' => [
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
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'DeleteEventSourceMapping' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-03-31/event-source-mappings/{UUID}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceMappingConfiguration',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'DeleteFunction' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-03-31/functions/{FunctionName}',
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
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
            ],
        ],
        'GetAlias' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'AliasConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Name' => [
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'GetEventSourceMapping' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/event-source-mappings/{UUID}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceMappingConfiguration',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'GetFunction' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}',
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
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'GetFunctionConfiguration' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}/configuration',
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
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'GetPolicy' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}/policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'Invoke' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/functions/{FunctionName}/invocations',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'InvocationResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'InvocationType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'X-Amz-Invocation-Type',
                ],
                'LogType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'X-Amz-Log-Type',
                ],
                'ClientContext' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'X-Amz-Client-Context',
                ],
                'Payload' => [
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The request body could not be parsed as JSON.',
                    'class' => 'InvalidRequestContentException',
                ],
                [
                    'reason' =>
                        'The request payload exceeded the Invoke request body JSON input limit. For more information, see Limits',
                    'class' => 'RequestTooLargeException',
                ],
                [
                    'reason' =>
                        'The content type of the Invoke request body is not JSON.',
                    'class' => 'UnsupportedMediaTypeException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The request body could not be parsed as JSON.',
                    'class' => 'InvalidRequestContentException',
                ],
            ],
        ],
        'ListAliases' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}/aliases',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListAliasesResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'FunctionVersion' => [
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListEventSourceMappings' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/event-source-mappings/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListEventSourceMappingsResponse',
            'responseType' => 'model',
            'parameters' => [
                'EventSourceArn' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListFunctions' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/',
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
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListVersionsByFunction' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-03-31/functions/{FunctionName}/versions',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListVersionsByFunctionResponse',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'PublishVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-03-31/functions/{FunctionName}/versions',
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
                'CodeSha256' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'You have exceeded your maximum total code size per account. Limits',
                    'class' => 'CodeStorageExceededException',
                ],
            ],
        ],
        'RemovePermission' => [
            'httpMethod' => 'DELETE',
            'uri' =>
                '/2015-03-31/functions/{FunctionName}/policy/{StatementId}',
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
                'StatementId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Qualifier' => [
                    'type' => 'string',
                    'location' => 'query',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'UpdateAlias' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'AliasConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'FunctionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'FunctionVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'UpdateEventSourceMapping' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-03-31/event-source-mappings/{UUID}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EventSourceMappingConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'UUID' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'FunctionName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Enabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'BatchSize' => [
                    'type' => 'numeric',
                    'location' => 'json',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' => 'The resource already exists.',
                    'class' => 'ResourceConflictException',
                ],
            ],
        ],
        'UpdateFunctionCode' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-03-31/functions/{FunctionName}/code',
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
                'ZipFile' => [
                    'type' => ['string', 'object'],
                    'location' => 'json',
                ],
                'S3Bucket' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'S3Key' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'S3ObjectVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Publish' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'You have exceeded your maximum total code size per account. Limits',
                    'class' => 'CodeStorageExceededException',
                ],
            ],
        ],
        'UpdateFunctionConfiguration' => [
            'httpMethod' => 'PUT',
            'uri' => '/2015-03-31/functions/{FunctionName}/configuration',
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
                    'location' => 'json',
                ],
                'Handler' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Timeout' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'MemorySize' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 128,
                    'maximum' => 1536,
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
                        'The resource (for example, a Lambda function or access policy statement) specified in the request does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the CreateFunction or the UpdateFunctionConfiguration API, that AWS Lambda is unable to assume you will get this exception.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
    ],
    'models' => [
        'AddPermissionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Statement' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'AliasConfiguration' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AliasArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FunctionVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EventSourceMappingConfiguration' => [
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
                'EventSourceArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FunctionArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastProcessingResult' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StateTransitionReason' => [
                    'type' => 'string',
                    'location' => 'json',
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
                'FunctionArn' => [
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
                'CodeSha256' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Version' => [
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
                        'FunctionArn' => [
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
                        'CodeSha256' => [
                            'type' => 'string',
                        ],
                        'Version' => [
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
        'GetPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'InvocationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StatusCode' => [
                    'type' => 'numeric',
                    'location' => 'statusCode',
                ],
                'FunctionError' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'X-Amz-Function-Error',
                ],
                'LogResult' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'X-Amz-Log-Result',
                ],
                'Payload' => [
                    'type' => ['string', 'object'],
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
        'ListAliasesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Aliases' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AliasConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'AliasArn' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'FunctionVersion' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListEventSourceMappingsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EventSourceMappings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'EventSourceMappingConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'UUID' => [
                                'type' => 'string',
                            ],
                            'BatchSize' => [
                                'type' => 'numeric',
                            ],
                            'EventSourceArn' => [
                                'type' => 'string',
                            ],
                            'FunctionArn' => [
                                'type' => 'string',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                            'LastProcessingResult' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'StateTransitionReason' => [
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
                            'FunctionArn' => [
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
                            'CodeSha256' => [
                                'type' => 'string',
                            ],
                            'Version' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListVersionsByFunctionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Versions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FunctionConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'FunctionName' => [
                                'type' => 'string',
                            ],
                            'FunctionArn' => [
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
                            'CodeSha256' => [
                                'type' => 'string',
                            ],
                            'Version' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListEventSourceMappings' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'limit_key' => 'MaxItems',
            'result_key' => 'EventSourceMappings',
        ],
        'ListFunctions' => [
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'limit_key' => 'MaxItems',
            'result_key' => 'Functions',
        ],
    ],
];
