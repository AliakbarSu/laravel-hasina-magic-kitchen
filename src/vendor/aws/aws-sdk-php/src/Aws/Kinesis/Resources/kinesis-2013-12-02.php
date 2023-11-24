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
    'apiVersion' => '2013-12-02',
    'endpointPrefix' => 'kinesis',
    'serviceFullName' => 'Amazon Kinesis',
    'serviceAbbreviation' => 'Kinesis',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'Kinesis_20131202.',
    'signatureVersion' => 'v4',
    'namespace' => 'Kinesis',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.us-east-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'kinesis.ap-southeast-2.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddTagsToStream' => [
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
                    'default' => 'Kinesis_20131202.AddTagsToStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'TagKey',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'CreateStream' => [
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
                    'default' => 'Kinesis_20131202.CreateStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ShardCount' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'DecreaseStreamRetentionPeriod' => [
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
                        'Kinesis_20131202.DecreaseStreamRetentionPeriod',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'RetentionPeriodHours' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 24,
                    'maximum' => 168,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'DeleteStream' => [
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
                    'default' => 'Kinesis_20131202.DeleteStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DescribeStream' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStreamOutput',
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
                    'default' => 'Kinesis_20131202.DescribeStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
                'ExclusiveStartShardId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'GetRecords' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetRecordsOutput',
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
                    'default' => 'Kinesis_20131202.GetRecords',
                ],
                'ShardIterator' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The request rate is too high, or the requested data is too large for the available throughput. Reduce the frequency or size of your requests. For more information, see Error Retries and Exponential Backoff in AWS in the AWS General Reference.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'The provided iterator exceeds the maximum age allowed.',
                    'class' => 'ExpiredIteratorException',
                ],
            ],
        ],
        'GetShardIterator' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetShardIteratorOutput',
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
                    'default' => 'Kinesis_20131202.GetShardIterator',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ShardId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ShardIteratorType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StartingSequenceNumber' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The request rate is too high, or the requested data is too large for the available throughput. Reduce the frequency or size of your requests. For more information, see Error Retries and Exponential Backoff in AWS in the AWS General Reference.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
            ],
        ],
        'IncreaseStreamRetentionPeriod' => [
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
                        'Kinesis_20131202.IncreaseStreamRetentionPeriod',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'RetentionPeriodHours' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 24,
                    'maximum' => 168,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
            ],
        ],
        'ListStreams' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListStreamsOutput',
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
                    'default' => 'Kinesis_20131202.ListStreams',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10000,
                ],
                'ExclusiveStartStreamName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'ListTagsForStream' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTagsForStreamOutput',
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
                    'default' => 'Kinesis_20131202.ListTagsForStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ExclusiveStartTagKey' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'MergeShards' => [
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
                    'default' => 'Kinesis_20131202.MergeShards',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ShardToMerge' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'AdjacentShardToMerge' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'PutRecord' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutRecordOutput',
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
                    'default' => 'Kinesis_20131202.PutRecord',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Data' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_encode'],
                ],
                'PartitionKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ExplicitHashKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SequenceNumberForOrdering' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The request rate is too high, or the requested data is too large for the available throughput. Reduce the frequency or size of your requests. For more information, see Error Retries and Exponential Backoff in AWS in the AWS General Reference.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
            ],
        ],
        'PutRecords' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutRecordsOutput',
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
                    'default' => 'Kinesis_20131202.PutRecords',
                ],
                'Records' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 500,
                    'items' => [
                        'name' => 'PutRecordsRequestEntry',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'required' => true,
                                'type' => 'string',
                                'filters' => ['base64_encode'],
                            ],
                            'ExplicitHashKey' => [
                                'type' => 'string',
                            ],
                            'PartitionKey' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The request rate is too high, or the requested data is too large for the available throughput. Reduce the frequency or size of your requests. For more information, see Error Retries and Exponential Backoff in AWS in the AWS General Reference.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
            ],
        ],
        'RemoveTagsFromStream' => [
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
                    'default' => 'Kinesis_20131202.RemoveTagsFromStream',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'TagKeys' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'SplitShard' => [
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
                    'default' => 'Kinesis_20131202.SplitShard',
                ],
                'StreamName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'ShardToSplit' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'NewStartingHashKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested resource could not be found. The stream might not be specified correctly, or it might not be in the ACTIVE state if the operation requires it.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource is not available for this operation. For successful operation, the resource needs to be in the ACTIVE state.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'A specified parameter exceeds its restrictions, is not supported, or can\'t be used. For more information, see the returned message.',
                    'class' => 'InvalidArgumentException',
                ],
                [
                    'reason' =>
                        'The requested resource exceeds the maximum number allowed, or the number of concurrent stream requests exceeds the maximum number allowed (5).',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DescribeStreamOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StreamDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StreamName' => [
                            'type' => 'string',
                        ],
                        'StreamARN' => [
                            'type' => 'string',
                        ],
                        'StreamStatus' => [
                            'type' => 'string',
                        ],
                        'Shards' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Shard',
                                'type' => 'object',
                                'properties' => [
                                    'ShardId' => [
                                        'type' => 'string',
                                    ],
                                    'ParentShardId' => [
                                        'type' => 'string',
                                    ],
                                    'AdjacentParentShardId' => [
                                        'type' => 'string',
                                    ],
                                    'HashKeyRange' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'StartingHashKey' => [
                                                'type' => 'string',
                                            ],
                                            'EndingHashKey' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SequenceNumberRange' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'StartingSequenceNumber' => [
                                                'type' => 'string',
                                            ],
                                            'EndingSequenceNumber' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'HasMoreShards' => [
                            'type' => 'boolean',
                        ],
                        'RetentionPeriodHours' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'GetRecordsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Records' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Record',
                        'type' => 'object',
                        'properties' => [
                            'SequenceNumber' => [
                                'type' => 'string',
                            ],
                            'ApproximateArrivalTimestamp' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                                'filters' => ['base64_decode'],
                            ],
                            'PartitionKey' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextShardIterator' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MillisBehindLatest' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'GetShardIteratorOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ShardIterator' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListStreamsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StreamNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'StreamName',
                        'type' => 'string',
                    ],
                ],
                'HasMoreStreams' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTagsForStreamOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Tags' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'HasMoreTags' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'PutRecordOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ShardId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SequenceNumber' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'PutRecordsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedRecordCount' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'Records' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PutRecordsResultEntry',
                        'type' => 'object',
                        'properties' => [
                            'SequenceNumber' => [
                                'type' => 'string',
                            ],
                            'ShardId' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeStream' => [
            'input_token' => 'ExclusiveStartShardId',
            'limit_key' => 'Limit',
            'more_results' => 'StreamDescription/HasMoreShards',
            'output_token' => 'StreamDescription/Shards/#/ShardId',
            'result_key' => 'StreamDescription/Shards',
        ],
        'ListStreams' => [
            'input_token' => 'ExclusiveStartStreamName',
            'limit_key' => 'Limit',
            'more_results' => 'HasMoreStreams',
            'output_token' => 'StreamNames/#',
            'result_key' => 'StreamNames',
        ],
    ],
];
