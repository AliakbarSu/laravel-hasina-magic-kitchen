<?php

return [
    'apiVersion' => '2012-08-10',
    'endpointPrefix' => 'streams.dynamodb',
    'serviceFullName' => 'Amazon DynamoDB Streams',
    'serviceType' => 'json',
    'jsonVersion' => '1.0',
    'targetPrefix' => 'DynamoDBStreams_20120810.',
    'signatureVersion' => 'v4',
    'signingName' => 'dynamodb',
    'namespace' => 'DynamoDbStreams',
    'operations' => [
        'DescribeStream' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\DynamoDb\\DynamoDbCommand',
            'responseClass' => 'JsonOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'DynamoDBStreams_20120810.DescribeStream',
                ],
            ],
            'additionalParameters' => [
                'location' => 'json',
                'filters' => [
                    'Aws\DynamoDb\DynamoDbCommand::marshalAttributes',
                ],
            ],
        ],
        'GetRecords' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\DynamoDb\\DynamoDbCommand',
            'responseClass' => 'JsonOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'DynamoDBStreams_20120810.GetRecords',
                ],
            ],
            'additionalParameters' => [
                'location' => 'json',
                'filters' => [
                    'Aws\DynamoDb\DynamoDbCommand::marshalAttributes',
                ],
            ],
        ],
        'GetShardIterator' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\DynamoDb\\DynamoDbCommand',
            'responseClass' => 'JsonOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'DynamoDBStreams_20120810.GetShardIterator',
                ],
            ],
            'additionalParameters' => [
                'location' => 'json',
                'filters' => [
                    'Aws\DynamoDb\DynamoDbCommand::marshalAttributes',
                ],
            ],
        ],
        'ListStreams' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\DynamoDb\\DynamoDbCommand',
            'responseClass' => 'JsonOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.0',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'DynamoDBStreams_20120810.ListStreams',
                ],
            ],
            'additionalParameters' => [
                'location' => 'json',
                'filters' => [
                    'Aws\DynamoDb\DynamoDbCommand::marshalAttributes',
                ],
            ],
        ],
    ],
    'models' => [
        'JsonOutput' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json',
            ],
        ],
    ],
    'iterators' => [
        'DescribeStream' => [
            'input_token' => 'ExclusiveStartShardId',
            'output_token' => 'StreamDescription.LastEvaluatedShardId',
            'limit_key' => 'Limit',
            'result_key' => 'StreamDescription.Shards',
        ],
        'ListStreams' => [
            'input_token' => 'ExclusiveStartStreamId',
            'output_token' => 'LastEvaluatedStreamId',
            'limit_key' => 'Limit',
            'result_key' => 'StreamIds',
        ],
    ],
];
