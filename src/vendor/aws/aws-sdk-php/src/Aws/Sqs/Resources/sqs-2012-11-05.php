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
    'apiVersion' => '2012-11-05',
    'endpointPrefix' => 'sqs',
    'serviceFullName' => 'Amazon Simple Queue Service',
    'serviceAbbreviation' => 'Amazon SQS',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Sqs',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sqs.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddPermission' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddPermission',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Label' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AWSAccountIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AWSAccountId',
                    'items' => [
                        'name' => 'AWSAccountId',
                        'type' => 'string',
                    ],
                ],
                'Actions' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ActionName',
                    'items' => [
                        'name' => 'ActionName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The action that you requested would violate a limit. For example, ReceiveMessage returns this error if the maximum number of messages inflight has already been reached. AddPermission returns this error if the maximum number of permissions for the queue has already been reached.',
                    'class' => 'OverLimitException',
                ],
            ],
        ],
        'ChangeMessageVisibility' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ChangeMessageVisibility',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReceiptHandle' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'VisibilityTimeout' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The message referred to is not in flight.',
                    'class' => 'MessageNotInflightException',
                ],
                [
                    'reason' => 'The receipt handle provided is not valid.',
                    'class' => 'ReceiptHandleIsInvalidException',
                ],
            ],
        ],
        'ChangeMessageVisibilityBatch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ChangeMessageVisibilityBatchResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ChangeMessageVisibilityBatch',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Entries' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ChangeMessageVisibilityBatchRequestEntry',
                    'items' => [
                        'name' => 'ChangeMessageVisibilityBatchRequestEntry',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'ReceiptHandle' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'VisibilityTimeout' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Batch request contains more number of entries than permissible.',
                    'class' => 'TooManyEntriesInBatchRequestException',
                ],
                [
                    'reason' => 'Batch request does not contain an entry.',
                    'class' => 'EmptyBatchRequestException',
                ],
                [
                    'reason' =>
                        'Two or more batch entries have the same Id in the request.',
                    'class' => 'BatchEntryIdsNotDistinctException',
                ],
                [
                    'reason' =>
                        'The Id of a batch entry in a batch request does not abide by the specification.',
                    'class' => 'InvalidBatchEntryIdException',
                ],
            ],
        ],
        'CreateQueue' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateQueueResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateQueue',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attribute',
                    'data' => [
                        'keyName' => 'Name',
                        'valueName' => 'Value',
                    ],
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'QueueAttributeName',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You must wait 60 seconds after deleting a queue before you can create another with the same name.',
                    'class' => 'QueueDeletedRecentlyException',
                ],
                [
                    'reason' =>
                        'A queue already exists with this name. Amazon SQS returns this error only if the request includes attributes whose values differ from those of the existing queue.',
                    'class' => 'QueueNameExistsException',
                ],
            ],
        ],
        'DeleteMessage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteMessage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReceiptHandle' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The receipt handle is not valid for the current version.',
                    'class' => 'InvalidIdFormatException',
                ],
                [
                    'reason' => 'The receipt handle provided is not valid.',
                    'class' => 'ReceiptHandleIsInvalidException',
                ],
            ],
        ],
        'DeleteMessageBatch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DeleteMessageBatchResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteMessageBatch',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Entries' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DeleteMessageBatchRequestEntry',
                    'items' => [
                        'name' => 'DeleteMessageBatchRequestEntry',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'ReceiptHandle' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Batch request contains more number of entries than permissible.',
                    'class' => 'TooManyEntriesInBatchRequestException',
                ],
                [
                    'reason' => 'Batch request does not contain an entry.',
                    'class' => 'EmptyBatchRequestException',
                ],
                [
                    'reason' =>
                        'Two or more batch entries have the same Id in the request.',
                    'class' => 'BatchEntryIdsNotDistinctException',
                ],
                [
                    'reason' =>
                        'The Id of a batch entry in a batch request does not abide by the specification.',
                    'class' => 'InvalidBatchEntryIdException',
                ],
            ],
        ],
        'DeleteQueue' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteQueue',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'GetQueueAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetQueueAttributesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetQueueAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeName',
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The attribute referred to does not exist.',
                    'class' => 'InvalidAttributeNameException',
                ],
            ],
        ],
        'GetQueueUrl' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetQueueUrlResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetQueueUrl',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'QueueOwnerAWSAccountId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The queue referred to does not exist.',
                    'class' => 'QueueDoesNotExistException',
                ],
            ],
        ],
        'ListDeadLetterSourceQueues' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListDeadLetterSourceQueuesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListDeadLetterSourceQueues',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The queue referred to does not exist.',
                    'class' => 'QueueDoesNotExistException',
                ],
            ],
        ],
        'ListQueues' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListQueuesResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListQueues',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueNamePrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'PurgeQueue' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PurgeQueue',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The queue referred to does not exist.',
                    'class' => 'QueueDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the specified queue previously received a PurgeQueue request within the last 60 seconds, the time it can take to delete the messages in the queue.',
                    'class' => 'PurgeQueueInProgressException',
                ],
            ],
        ],
        'ReceiveMessage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReceiveMessageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReceiveMessage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeName',
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
                'MessageAttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'MessageAttributeName',
                    'items' => [
                        'name' => 'MessageAttributeName',
                        'type' => 'string',
                    ],
                ],
                'MaxNumberOfMessages' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'VisibilityTimeout' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'WaitTimeSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The action that you requested would violate a limit. For example, ReceiveMessage returns this error if the maximum number of messages inflight has already been reached. AddPermission returns this error if the maximum number of permissions for the queue has already been reached.',
                    'class' => 'OverLimitException',
                ],
            ],
        ],
        'RemovePermission' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemovePermission',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Label' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'SendMessage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SendMessageResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SendMessage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MessageBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DelaySeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MessageAttributes' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'MessageAttribute',
                    'data' => [
                        'keyName' => 'Name',
                        'valueName' => 'Value',
                    ],
                    'additionalProperties' => [
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'String',
                        ],
                        'properties' => [
                            'StringValue' => [
                                'type' => 'string',
                            ],
                            'BinaryValue' => [
                                'type' => 'string',
                            ],
                            'StringListValues' => [
                                'type' => 'array',
                                'sentAs' => 'StringListValue',
                                'items' => [
                                    'name' => 'StringListValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BinaryListValues' => [
                                'type' => 'array',
                                'sentAs' => 'BinaryListValue',
                                'items' => [
                                    'name' => 'BinaryListValue',
                                    'type' => 'string',
                                ],
                            ],
                            'DataType' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The message contains characters outside the allowed set.',
                    'class' => 'InvalidMessageContentsException',
                ],
                [
                    'reason' => 'Error code 400. Unsupported operation.',
                    'class' => 'UnsupportedOperationException',
                ],
            ],
        ],
        'SendMessageBatch' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SendMessageBatchResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SendMessageBatch',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Entries' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SendMessageBatchRequestEntry',
                    'items' => [
                        'name' => 'SendMessageBatchRequestEntry',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'MessageBody' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'DelaySeconds' => [
                                'type' => 'numeric',
                            ],
                            'MessageAttributes' => [
                                'type' => 'object',
                                'sentAs' => 'MessageAttribute',
                                'data' => [
                                    'keyName' => 'Name',
                                    'valueName' => 'Value',
                                ],
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'data' => [
                                        'shape_name' => 'String',
                                    ],
                                    'properties' => [
                                        'StringValue' => [
                                            'type' => 'string',
                                        ],
                                        'BinaryValue' => [
                                            'type' => 'string',
                                        ],
                                        'StringListValues' => [
                                            'type' => 'array',
                                            'sentAs' => 'StringListValue',
                                            'items' => [
                                                'name' => 'StringListValue',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'BinaryListValues' => [
                                            'type' => 'array',
                                            'sentAs' => 'BinaryListValue',
                                            'items' => [
                                                'name' => 'BinaryListValue',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'DataType' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Batch request contains more number of entries than permissible.',
                    'class' => 'TooManyEntriesInBatchRequestException',
                ],
                [
                    'reason' => 'Batch request does not contain an entry.',
                    'class' => 'EmptyBatchRequestException',
                ],
                [
                    'reason' =>
                        'Two or more batch entries have the same Id in the request.',
                    'class' => 'BatchEntryIdsNotDistinctException',
                ],
                [
                    'reason' =>
                        'The length of all the messages put together is more than the limit.',
                    'class' => 'BatchRequestTooLongException',
                ],
                [
                    'reason' =>
                        'The Id of a batch entry in a batch request does not abide by the specification.',
                    'class' => 'InvalidBatchEntryIdException',
                ],
                [
                    'reason' => 'Error code 400. Unsupported operation.',
                    'class' => 'UnsupportedOperationException',
                ],
            ],
        ],
        'SetQueueAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetQueueAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-11-05',
                ],
                'QueueUrl' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attribute',
                    'data' => [
                        'keyName' => 'Name',
                        'valueName' => 'Value',
                    ],
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'QueueAttributeName',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The attribute referred to does not exist.',
                    'class' => 'InvalidAttributeNameException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ChangeMessageVisibilityBatchResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Successful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'ChangeMessageVisibilityBatchResultEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'ChangeMessageVisibilityBatchResultEntry',
                        'type' => 'object',
                        'sentAs' => 'ChangeMessageVisibilityBatchResultEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Failed' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'BatchResultErrorEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'BatchResultErrorEntry',
                        'type' => 'object',
                        'sentAs' => 'BatchResultErrorEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'SenderFault' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateQueueResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'QueueUrl' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DeleteMessageBatchResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Successful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'DeleteMessageBatchResultEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'DeleteMessageBatchResultEntry',
                        'type' => 'object',
                        'sentAs' => 'DeleteMessageBatchResultEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Failed' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'BatchResultErrorEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'BatchResultErrorEntry',
                        'type' => 'object',
                        'sentAs' => 'BatchResultErrorEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'SenderFault' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetQueueAttributesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Attribute',
                    'data' => [
                        'xmlFlattened' => true,
                        'xmlMap' => [
                            'Policy',
                            'VisibilityTimeout',
                            'MaximumMessageSize',
                            'MessageRetentionPeriod',
                            'ApproximateNumberOfMessages',
                            'ApproximateNumberOfMessagesNotVisible',
                            'CreatedTimestamp',
                            'LastModifiedTimestamp',
                            'QueueArn',
                            'ApproximateNumberOfMessagesDelayed',
                            'DelaySeconds',
                            'ReceiveMessageWaitTimeSeconds',
                            'RedrivePolicy',
                        ],
                    ],
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'Attribute', 'Name', 'Value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'Attribute',
                        'type' => 'object',
                        'sentAs' => 'Attribute',
                        'additionalProperties' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetQueueUrlResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'QueueUrl' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListDeadLetterSourceQueuesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'queueUrls' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'QueueUrl',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'QueueUrl',
                        'type' => 'string',
                        'sentAs' => 'QueueUrl',
                    ],
                ],
            ],
        ],
        'ListQueuesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'QueueUrls' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'QueueUrl',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'QueueUrl',
                        'type' => 'string',
                        'sentAs' => 'QueueUrl',
                    ],
                ],
            ],
        ],
        'ReceiveMessageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Messages' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Message',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Message',
                        'type' => 'object',
                        'sentAs' => 'Message',
                        'properties' => [
                            'MessageId' => [
                                'type' => 'string',
                            ],
                            'ReceiptHandle' => [
                                'type' => 'string',
                            ],
                            'MD5OfBody' => [
                                'type' => 'string',
                            ],
                            'Body' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'array',
                                'sentAs' => 'Attribute',
                                'data' => [
                                    'xmlFlattened' => true,
                                    'xmlMap' => [
                                        'Policy',
                                        'VisibilityTimeout',
                                        'MaximumMessageSize',
                                        'MessageRetentionPeriod',
                                        'ApproximateNumberOfMessages',
                                        'ApproximateNumberOfMessagesNotVisible',
                                        'CreatedTimestamp',
                                        'LastModifiedTimestamp',
                                        'QueueArn',
                                        'ApproximateNumberOfMessagesDelayed',
                                        'DelaySeconds',
                                        'ReceiveMessageWaitTimeSeconds',
                                        'RedrivePolicy',
                                    ],
                                ],
                                'filters' => [
                                    [
                                        'method' =>
                                            'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                        'args' => [
                                            '@value',
                                            'Attribute',
                                            'Name',
                                            'Value',
                                        ],
                                    ],
                                ],
                                'items' => [
                                    'name' => 'Attribute',
                                    'type' => 'object',
                                    'sentAs' => 'Attribute',
                                    'additionalProperties' => true,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'additionalProperties' => false,
                            ],
                            'MD5OfMessageAttributes' => [
                                'type' => 'string',
                            ],
                            'MessageAttributes' => [
                                'type' => 'array',
                                'sentAs' => 'MessageAttribute',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'filters' => [
                                    [
                                        'method' =>
                                            'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                        'args' => [
                                            '@value',
                                            'MessageAttribute',
                                            'Name',
                                            'Value',
                                        ],
                                    ],
                                ],
                                'items' => [
                                    'name' => 'MessageAttribute',
                                    'type' => 'object',
                                    'sentAs' => 'MessageAttribute',
                                    'additionalProperties' => true,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'StringValue' => [
                                                    'type' => 'string',
                                                ],
                                                'BinaryValue' => [
                                                    'type' => 'string',
                                                ],
                                                'StringListValues' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'StringListValue',
                                                    'data' => [
                                                        'xmlFlattened' => true,
                                                    ],
                                                    'items' => [
                                                        'name' =>
                                                            'StringListValue',
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'StringListValue',
                                                    ],
                                                ],
                                                'BinaryListValues' => [
                                                    'type' => 'array',
                                                    'sentAs' =>
                                                        'BinaryListValue',
                                                    'data' => [
                                                        'xmlFlattened' => true,
                                                    ],
                                                    'items' => [
                                                        'name' =>
                                                            'BinaryListValue',
                                                        'type' => 'string',
                                                        'sentAs' =>
                                                            'BinaryListValue',
                                                    ],
                                                ],
                                                'DataType' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'additionalProperties' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SendMessageResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MD5OfMessageBody' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MD5OfMessageAttributes' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MessageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SendMessageBatchResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Successful' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'SendMessageBatchResultEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'SendMessageBatchResultEntry',
                        'type' => 'object',
                        'sentAs' => 'SendMessageBatchResultEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'MessageId' => [
                                'type' => 'string',
                            ],
                            'MD5OfMessageBody' => [
                                'type' => 'string',
                            ],
                            'MD5OfMessageAttributes' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Failed' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'BatchResultErrorEntry',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'BatchResultErrorEntry',
                        'type' => 'object',
                        'sentAs' => 'BatchResultErrorEntry',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'SenderFault' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListQueues' => [
            'result_key' => 'QueueUrls',
        ],
    ],
];
