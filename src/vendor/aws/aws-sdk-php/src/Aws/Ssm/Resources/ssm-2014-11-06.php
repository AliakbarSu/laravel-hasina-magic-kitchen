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
    'apiVersion' => '2014-11-06',
    'endpointPrefix' => 'ssm',
    'serviceFullName' => 'Amazon Simple Systems Management Service',
    'serviceAbbreviation' => 'Amazon SSM',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AmazonSSM.',
    'signatureVersion' => 'v4',
    'namespace' => 'Ssm',
    'operations' => [
        'CancelCommand' => [
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
                    'default' => 'AmazonSSM.CancelCommand',
                ],
                'CommandId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 36,
                ],
                'InstanceIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 50,
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'InvalidCommandIdException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' =>
                        'You cannot specify an instance ID in more than one association.',
                    'class' => 'DuplicateInstanceIdException',
                ],
            ],
        ],
        'CreateAssociation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateAssociationResult',
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
                    'default' => 'AmazonSSM.CreateAssociation',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'array',
                        'data' => [
                            'shape_name' => 'ParameterName',
                        ],
                        'items' => [
                            'name' => 'ParameterValue',
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified association already exists.',
                    'class' => 'AssociationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You can have at most 2,000 active associations.',
                    'class' => 'AssociationLimitExceededException',
                ],
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' =>
                        'The document does not support the platform type of the given instance ID(s).',
                    'class' => 'UnsupportedPlatformTypeException',
                ],
                [
                    'reason' =>
                        'You must specify values for all required parameters in the SSM document. You can only supply values to parameters defined in the SSM document.',
                    'class' => 'InvalidParametersException',
                ],
            ],
        ],
        'CreateAssociationBatch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateAssociationBatchResult',
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
                    'default' => 'AmazonSSM.CreateAssociationBatch',
                ],
                'Entries' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'entries',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'data' => [
                                        'shape_name' => 'ParameterName',
                                    ],
                                    'items' => [
                                        'name' => 'ParameterValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' =>
                        'You must specify values for all required parameters in the SSM document. You can only supply values to parameters defined in the SSM document.',
                    'class' => 'InvalidParametersException',
                ],
                [
                    'reason' =>
                        'You cannot specify an instance ID in more than one association.',
                    'class' => 'DuplicateInstanceIdException',
                ],
                [
                    'reason' =>
                        'You can have at most 2,000 active associations.',
                    'class' => 'AssociationLimitExceededException',
                ],
                [
                    'reason' =>
                        'The document does not support the platform type of the given instance ID(s).',
                    'class' => 'UnsupportedPlatformTypeException',
                ],
            ],
        ],
        'CreateDocument' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateDocumentResult',
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
                    'default' => 'AmazonSSM.CreateDocument',
                ],
                'Content' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified SSM document already exists.',
                    'class' => 'DocumentAlreadyExistsException',
                ],
                [
                    'reason' => 'The size limit of an SSM document is 64 KB.',
                    'class' => 'MaxDocumentSizeExceededException',
                ],
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The content for the SSM document is not valid.',
                    'class' => 'InvalidDocumentContentException',
                ],
                [
                    'reason' =>
                        'You can have at most 100 active SSM documents.',
                    'class' => 'DocumentLimitExceededException',
                ],
            ],
        ],
        'DeleteAssociation' => [
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
                    'default' => 'AmazonSSM.DeleteAssociation',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified association does not exist.',
                    'class' => 'AssociationDoesNotExistException',
                ],
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' =>
                        'There are concurrent updates for a resource that supports one update at a time.',
                    'class' => 'TooManyUpdatesException',
                ],
            ],
        ],
        'DeleteDocument' => [
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
                    'default' => 'AmazonSSM.DeleteDocument',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' =>
                        'You must disassociate an SSM document from all instances before you can delete it.',
                    'class' => 'AssociatedInstancesException',
                ],
            ],
        ],
        'DescribeAssociation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeAssociationResult',
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
                    'default' => 'AmazonSSM.DescribeAssociation',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified association does not exist.',
                    'class' => 'AssociationDoesNotExistException',
                ],
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
            ],
        ],
        'DescribeDocument' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeDocumentResult',
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
                    'default' => 'AmazonSSM.DescribeDocument',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
            ],
        ],
        'DescribeInstanceInformation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeInstanceInformationResult',
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
                    'default' => 'AmazonSSM.DescribeInstanceInformation',
                ],
                'InstanceInformationFilterList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'InstanceInformationFilter',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'valueSet' => [
                                'required' => true,
                                'type' => 'array',
                                'minItems' => 1,
                                'maxItems' => 100,
                                'items' => [
                                    'name' => 'InstanceInformationFilterValue',
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 5,
                    'maximum' => 50,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' => 'The specified token is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' => 'The specified filter value is not valid.',
                    'class' => 'InvalidInstanceInformationFilterValueException',
                ],
                [
                    'reason' => 'The specified key is not valid.',
                    'class' => 'InvalidFilterKeyException',
                ],
            ],
        ],
        'GetDocument' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetDocumentResult',
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
                    'default' => 'AmazonSSM.GetDocument',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
            ],
        ],
        'ListAssociations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListAssociationsResult',
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
                    'default' => 'AmazonSSM.ListAssociations',
                ],
                'AssociationFilterList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'AssociationFilter',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 25,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified token is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListCommandInvocations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListCommandInvocationsResult',
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
                    'default' => 'AmazonSSM.ListCommandInvocations',
                ],
                'CommandId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 36,
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'CommandFilter',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'Details' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'InvalidCommandIdException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' => 'The specified key is not valid.',
                    'class' => 'InvalidFilterKeyException',
                ],
                [
                    'reason' => 'The specified token is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListCommands' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListCommandsResult',
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
                    'default' => 'AmazonSSM.ListCommands',
                ],
                'CommandId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 36,
                ],
                'InstanceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 50,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 3,
                    'items' => [
                        'name' => 'CommandFilter',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'class' => 'InvalidCommandIdException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' => 'The specified key is not valid.',
                    'class' => 'InvalidFilterKeyException',
                ],
                [
                    'reason' => 'The specified token is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
            ],
        ],
        'ListDocuments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListDocumentsResult',
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
                    'default' => 'AmazonSSM.ListDocuments',
                ],
                'DocumentFilterList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'DocumentFilter',
                        'type' => 'object',
                        'properties' => [
                            'key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'value' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 25,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' => 'The specified token is not valid.',
                    'class' => 'InvalidNextTokenException',
                ],
                [
                    'reason' => 'The specified key is not valid.',
                    'class' => 'InvalidFilterKeyException',
                ],
            ],
        ],
        'SendCommand' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'SendCommandResult',
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
                    'default' => 'AmazonSSM.SendCommand',
                ],
                'InstanceIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 50,
                    'items' => [
                        'name' => 'InstanceId',
                        'type' => 'string',
                    ],
                ],
                'DocumentName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TimeoutSeconds' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 30,
                    'maximum' => 2592000,
                ],
                'Comment' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'array',
                        'data' => [
                            'shape_name' => 'ParameterName',
                        ],
                        'items' => [
                            'name' => 'ParameterValue',
                            'type' => 'string',
                        ],
                    ],
                ],
                'OutputS3BucketName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'OutputS3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You cannot specify an instance ID in more than one association.',
                    'class' => 'DuplicateInstanceIdException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' => 'The S3 bucket does not exist.',
                    'class' => 'InvalidOutputFolderException',
                ],
                [
                    'reason' =>
                        'You must specify values for all required parameters in the SSM document. You can only supply values to parameters defined in the SSM document.',
                    'class' => 'InvalidParametersException',
                ],
                [
                    'reason' =>
                        'The document does not support the platform type of the given instance ID(s).',
                    'class' => 'UnsupportedPlatformTypeException',
                ],
            ],
        ],
        'UpdateAssociationStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateAssociationStatusResult',
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
                    'default' => 'AmazonSSM.UpdateAssociationStatus',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InstanceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AssociationStatus' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Date' => [
                            'required' => true,
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'Name' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Message' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'AdditionalInfo' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'An error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The instance is not in valid state. Valid states are: Running, Pending, Stopped, Stopping. Invalid states are: Shutting-down and Terminated.',
                    'class' => 'InvalidInstanceIdException',
                ],
                [
                    'reason' => 'The specified document does not exist.',
                    'class' => 'InvalidDocumentException',
                ],
                [
                    'reason' => 'The specified association does not exist.',
                    'class' => 'AssociationDoesNotExistException',
                ],
                [
                    'reason' =>
                        'The updated status is the same as the current status.',
                    'class' => 'StatusUnchangedException',
                ],
                [
                    'reason' =>
                        'There are concurrent updates for a resource that supports one update at a time.',
                    'class' => 'TooManyUpdatesException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateAssociationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AssociationDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'InstanceId' => [
                            'type' => 'string',
                        ],
                        'Date' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'Date' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                ],
                                'AdditionalInfo' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Parameters' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAssociationBatchResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Successful' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AssociationDescription',
                        'type' => 'object',
                        'sentAs' => 'AssociationDescription',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Date' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => 'string',
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                    ],
                                    'AdditionalInfo' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ParameterValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Failed' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FailedCreateAssociationEntry',
                        'type' => 'object',
                        'sentAs' => 'FailedCreateAssociationEntry',
                        'properties' => [
                            'Entry' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                    ],
                                    'Parameters' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'ParameterValue',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Fault' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDocumentResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DocumentDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Sha1' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CreatedDate' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Parameters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DocumentParameter',
                                'type' => 'object',
                                'sentAs' => 'DocumentParameter',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'DefaultValue' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'PlatformTypes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'PlatformType',
                                'type' => 'string',
                                'sentAs' => 'PlatformType',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAssociationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AssociationDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'InstanceId' => [
                            'type' => 'string',
                        ],
                        'Date' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'Date' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                ],
                                'AdditionalInfo' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Parameters' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDocumentResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Document' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Sha1' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CreatedDate' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Parameters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DocumentParameter',
                                'type' => 'object',
                                'sentAs' => 'DocumentParameter',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'DefaultValue' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'PlatformTypes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'PlatformType',
                                'type' => 'string',
                                'sentAs' => 'PlatformType',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeInstanceInformationResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceInformationList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'InstanceInformation',
                        'type' => 'object',
                        'sentAs' => 'InstanceInformation',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'PingStatus' => [
                                'type' => 'string',
                            ],
                            'LastPingDateTime' => [
                                'type' => 'string',
                            ],
                            'AgentVersion' => [
                                'type' => 'string',
                            ],
                            'IsLatestVersion' => [
                                'type' => 'boolean',
                            ],
                            'PlatformType' => [
                                'type' => 'string',
                            ],
                            'PlatformName' => [
                                'type' => 'string',
                            ],
                            'PlatformVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetDocumentResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Content' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListAssociationsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Associations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Association',
                        'type' => 'object',
                        'sentAs' => 'Association',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListCommandInvocationsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CommandInvocations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'CommandInvocation',
                        'type' => 'object',
                        'properties' => [
                            'CommandId' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'DocumentName' => [
                                'type' => 'string',
                            ],
                            'RequestedDateTime' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'TraceOutput' => [
                                'type' => 'string',
                            ],
                            'CommandPlugins' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CommandPlugin',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'ResponseCode' => [
                                            'type' => 'numeric',
                                        ],
                                        'ResponseStartDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'ResponseFinishDateTime' => [
                                            'type' => 'string',
                                        ],
                                        'Output' => [
                                            'type' => 'string',
                                        ],
                                        'OutputS3BucketName' => [
                                            'type' => 'string',
                                        ],
                                        'OutputS3KeyPrefix' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListCommandsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Commands' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Command',
                        'type' => 'object',
                        'properties' => [
                            'CommandId' => [
                                'type' => 'string',
                            ],
                            'DocumentName' => [
                                'type' => 'string',
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'ExpiresAfter' => [
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'ParameterValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'InstanceIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'InstanceId',
                                    'type' => 'string',
                                ],
                            ],
                            'RequestedDateTime' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'OutputS3BucketName' => [
                                'type' => 'string',
                            ],
                            'OutputS3KeyPrefix' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListDocumentsResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DocumentIdentifiers' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DocumentIdentifier',
                        'type' => 'object',
                        'sentAs' => 'DocumentIdentifier',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'PlatformTypes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PlatformType',
                                    'type' => 'string',
                                    'sentAs' => 'PlatformType',
                                ],
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'SendCommandResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Command' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'CommandId' => [
                            'type' => 'string',
                        ],
                        'DocumentName' => [
                            'type' => 'string',
                        ],
                        'Comment' => [
                            'type' => 'string',
                        ],
                        'ExpiresAfter' => [
                            'type' => 'string',
                        ],
                        'Parameters' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'InstanceIds' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'InstanceId',
                                'type' => 'string',
                            ],
                        ],
                        'RequestedDateTime' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'OutputS3BucketName' => [
                            'type' => 'string',
                        ],
                        'OutputS3KeyPrefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateAssociationStatusResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AssociationDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'InstanceId' => [
                            'type' => 'string',
                        ],
                        'Date' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'object',
                            'properties' => [
                                'Date' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                ],
                                'AdditionalInfo' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Parameters' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ParameterValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
