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
    'apiVersion' => '2011-12-05',
    'endpointPrefix' => 'dynamodb',
    'serviceFullName' => 'Amazon DynamoDB',
    'serviceAbbreviation' => 'DynamoDB',
    'serviceType' => 'json',
    'jsonVersion' => '1.0',
    'targetPrefix' => 'DynamoDB_20111205.',
    'signatureVersion' => 'v4',
    'namespace' => 'DynamoDb',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'dynamodb.sa-east-1.amazonaws.com',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'dynamodb.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'BatchGetItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchGetItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Retrieves the attributes for multiple items from multiple tables using their primary keys.',
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
                    'default' => 'DynamoDB_20111205.BatchGetItem',
                ],
                'RequestItems' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'TableName',
                            'key_pattern' => '/[a-zA-Z0-9_.-]+/',
                        ],
                        'properties' => [
                            'Keys' => [
                                'required' => true,
                                'type' => 'array',
                                'minItems' => 1,
                                'maxItems' => 100,
                                'items' => [
                                    'name' => 'Key',
                                    'description' =>
                                        'The primary key that uniquely identifies each item in a table. A primary key can be a one attribute (hash) primary key or a two attribute (hash-and-range) primary key.',
                                    'type' => 'object',
                                    'properties' => [
                                        'HashKeyElement' => [
                                            'required' => true,
                                            'description' =>
                                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                            'type' => 'object',
                                            'properties' => [
                                                'S' => [
                                                    'description' =>
                                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                    'type' => 'string',
                                                ],
                                                'N' => [
                                                    'description' =>
                                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                    'type' => 'string',
                                                ],
                                                'B' => [
                                                    'description' =>
                                                        'Binary attributes are sequences of unsigned bytes.',
                                                    'type' => 'string',
                                                    'filters' => [
                                                        'base64_encode',
                                                    ],
                                                ],
                                                'SS' => [
                                                    'description' =>
                                                        'A set of strings.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'StringAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'NS' => [
                                                    'description' =>
                                                        'A set of numbers.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'NumberAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'BS' => [
                                                    'description' =>
                                                        'A set of binary attributes.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'BinaryAttributeValue',
                                                        'type' => 'string',
                                                        'filters' => [
                                                            'base64_encode',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RangeKeyElement' => [
                                            'description' =>
                                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                            'type' => 'object',
                                            'properties' => [
                                                'S' => [
                                                    'description' =>
                                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                    'type' => 'string',
                                                ],
                                                'N' => [
                                                    'description' =>
                                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                    'type' => 'string',
                                                ],
                                                'B' => [
                                                    'description' =>
                                                        'Binary attributes are sequences of unsigned bytes.',
                                                    'type' => 'string',
                                                    'filters' => [
                                                        'base64_encode',
                                                    ],
                                                ],
                                                'SS' => [
                                                    'description' =>
                                                        'A set of strings.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'StringAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'NS' => [
                                                    'description' =>
                                                        'A set of numbers.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'NumberAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'BS' => [
                                                    'description' =>
                                                        'A set of binary attributes.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'BinaryAttributeValue',
                                                        'type' => 'string',
                                                        'filters' => [
                                                            'base64_encode',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AttributesToGet' => [
                                'type' => 'array',
                                'minItems' => 1,
                                'items' => [
                                    'name' => 'AttributeName',
                                    'type' => 'string',
                                ],
                            ],
                            'ConsistentRead' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'BatchWriteItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'BatchWriteItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Allows to execute a batch of Put and/or Delete Requests for many tables in a single call. A total of 25 requests are allowed.',
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
                    'default' => 'DynamoDB_20111205.BatchWriteItem',
                ],
                'RequestItems' => [
                    'required' => true,
                    'description' =>
                        'A map of table name to list-of-write-requests. Used as input to the BatchWriteItem API call',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'array',
                        'minItems' => 1,
                        'maxItems' => 25,
                        'data' => [
                            'shape_name' => 'TableName',
                            'key_pattern' => '/[a-zA-Z0-9_.-]+/',
                        ],
                        'items' => [
                            'name' => 'WriteRequest',
                            'description' =>
                                'This structure is a Union of PutRequest and DeleteRequest. It can contain exactly one of PutRequest or DeleteRequest. Never Both. This is enforced in the code.',
                            'type' => 'object',
                            'properties' => [
                                'PutRequest' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Item' => [
                                            'required' => true,
                                            'description' => 'The item to put',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'description' =>
                                                    'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                                                'type' => 'object',
                                                'data' => [
                                                    'shape_name' =>
                                                        'AttributeName',
                                                ],
                                                'properties' => [
                                                    'S' => [
                                                        'description' =>
                                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                        'type' => 'string',
                                                    ],
                                                    'N' => [
                                                        'description' =>
                                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                        'type' => 'string',
                                                    ],
                                                    'B' => [
                                                        'description' =>
                                                            'Binary attributes are sequences of unsigned bytes.',
                                                        'type' => 'string',
                                                        'filters' => [
                                                            'base64_encode',
                                                        ],
                                                    ],
                                                    'SS' => [
                                                        'description' =>
                                                            'A set of strings.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'StringAttributeValue',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'NS' => [
                                                        'description' =>
                                                            'A set of numbers.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'NumberAttributeValue',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'BS' => [
                                                        'description' =>
                                                            'A set of binary attributes.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'BinaryAttributeValue',
                                                            'type' => 'string',
                                                            'filters' => [
                                                                'base64_encode',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'DeleteRequest' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'required' => true,
                                            'description' =>
                                                'The item\'s key to be delete',
                                            'type' => 'object',
                                            'properties' => [
                                                'HashKeyElement' => [
                                                    'required' => true,
                                                    'description' =>
                                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'S' => [
                                                            'description' =>
                                                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                            'type' => 'string',
                                                        ],
                                                        'N' => [
                                                            'description' =>
                                                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                            'type' => 'string',
                                                        ],
                                                        'B' => [
                                                            'description' =>
                                                                'Binary attributes are sequences of unsigned bytes.',
                                                            'type' => 'string',
                                                            'filters' => [
                                                                'base64_encode',
                                                            ],
                                                        ],
                                                        'SS' => [
                                                            'description' =>
                                                                'A set of strings.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'StringAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'NS' => [
                                                            'description' =>
                                                                'A set of numbers.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'NumberAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'BS' => [
                                                            'description' =>
                                                                'A set of binary attributes.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'BinaryAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                                'filters' => [
                                                                    'base64_encode',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RangeKeyElement' => [
                                                    'description' =>
                                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'S' => [
                                                            'description' =>
                                                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                            'type' => 'string',
                                                        ],
                                                        'N' => [
                                                            'description' =>
                                                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                            'type' => 'string',
                                                        ],
                                                        'B' => [
                                                            'description' =>
                                                                'Binary attributes are sequences of unsigned bytes.',
                                                            'type' => 'string',
                                                            'filters' => [
                                                                'base64_encode',
                                                            ],
                                                        ],
                                                        'SS' => [
                                                            'description' =>
                                                                'A set of strings.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'StringAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'NS' => [
                                                            'description' =>
                                                                'A set of numbers.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'NumberAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'BS' => [
                                                            'description' =>
                                                                'A set of binary attributes.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'BinaryAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                                'filters' => [
                                                                    'base64_encode',
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
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateTableOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' => 'Adds a new table to your account.',
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
                    'default' => 'DynamoDB_20111205.CreateTable',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table you want to create. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'KeySchema' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'AttributeName' => [
                                    'required' => true,
                                    'description' =>
                                        'The AttributeName of the KeySchemaElement.',
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'AttributeType' => [
                                    'required' => true,
                                    'description' =>
                                        'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                    'type' => 'string',
                                    'enum' => ['S', 'N', 'B'],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'AttributeName' => [
                                    'required' => true,
                                    'description' =>
                                        'The AttributeName of the KeySchemaElement.',
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                                'AttributeType' => [
                                    'required' => true,
                                    'description' =>
                                        'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                    'type' => 'string',
                                    'enum' => ['S', 'N', 'B'],
                                ],
                            ],
                        ],
                    ],
                ],
                'ProvisionedThroughput' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ReadCapacityUnits' => [
                            'required' => true,
                            'description' =>
                                'ReadCapacityUnits are in terms of strictly consistent reads, assuming items of 1k. 2k items require twice the ReadCapacityUnits. Eventually-consistent reads only require half the ReadCapacityUnits of stirctly consistent reads.',
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                        'WriteCapacityUnits' => [
                            'required' => true,
                            'description' =>
                                'WriteCapacityUnits are in terms of strictly consistent reads, assuming items of 1k. 2k items require twice the WriteCapacityUnits.',
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the subscriber exceeded the limits on the number of objects or operations.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' => 'Deletes a single item in a table by primary key.',
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
                    'default' => 'DynamoDB_20111205.DeleteItem',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to delete an item. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Expected' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'Allows you to provide an attribute name, and whether or not Amazon DynamoDB should check to see if the attribute value already exists; or if the attribute value exists and has a particular value before changing it.',
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'AttributeName',
                        ],
                        'properties' => [
                            'Value' => [
                                'description' =>
                                    'Specify whether or not a value already exists and has a specific content for the attribute name-value pair.',
                                'type' => 'object',
                                'properties' => [
                                    'S' => [
                                        'description' =>
                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                        'type' => 'string',
                                    ],
                                    'N' => [
                                        'description' =>
                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                        'type' => 'string',
                                    ],
                                    'B' => [
                                        'description' =>
                                            'Binary attributes are sequences of unsigned bytes.',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                    'SS' => [
                                        'description' => 'A set of strings.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NS' => [
                                        'description' => 'A set of numbers.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NumberAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'BS' => [
                                        'description' =>
                                            'A set of binary attributes.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BinaryAttributeValue',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                    ],
                                ],
                            ],
                            'Exists' => [
                                'description' =>
                                    'Specify whether or not a value already exists for the attribute name-value pair.',
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'ReturnValues' => [
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'NONE',
                        'ALL_OLD',
                        'UPDATED_OLD',
                        'ALL_NEW',
                        'UPDATED_NEW',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when an expected value does not match what was found in the system.',
                    'class' => 'ConditionalCheckFailedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteTableOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' => 'Deletes a table and all of its items.',
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
                    'default' => 'DynamoDB_20111205.DeleteTable',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table you want to delete. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the subscriber exceeded the limits on the number of objects or operations.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTableOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Retrieves information about the table, including the current status of the table, the primary key schema and when the table was created.',
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
                    'default' => 'DynamoDB_20111205.DescribeTable',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table you want to describe. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'GetItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Retrieves a set of Attributes for an item that matches the primary key.',
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
                    'default' => 'DynamoDB_20111205.GetItem',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to get an item. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'AttributesToGet' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
                'ConsistentRead' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListTables' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTablesOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Retrieves a paginated list of table names created by the AWS Account of the caller in the AWS Region (e.g. us-east-1).',
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
                    'default' => 'DynamoDB_20111205.ListTables',
                ],
                'ExclusiveStartTableName' => [
                    'description' =>
                        'The name of the table that starts the list. If you already ran a ListTables operation and received a LastEvaluatedTableName value in the response, use that value here to continue the list.',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 100,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'PutItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'PutItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Creates a new item, or replaces an old item with a new item (including all the attributes).',
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
                    'default' => 'DynamoDB_20111205.PutItem',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to put an item. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'Item' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'AttributeName',
                        ],
                        'properties' => [
                            'S' => [
                                'description' =>
                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                'type' => 'string',
                            ],
                            'N' => [
                                'description' =>
                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                'type' => 'string',
                            ],
                            'B' => [
                                'description' =>
                                    'Binary attributes are sequences of unsigned bytes.',
                                'type' => 'string',
                                'filters' => ['base64_encode'],
                            ],
                            'SS' => [
                                'description' => 'A set of strings.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StringAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'NS' => [
                                'description' => 'A set of numbers.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NumberAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BS' => [
                                'description' => 'A set of binary attributes.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BinaryAttributeValue',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                            ],
                        ],
                    ],
                ],
                'Expected' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'Allows you to provide an attribute name, and whether or not Amazon DynamoDB should check to see if the attribute value already exists; or if the attribute value exists and has a particular value before changing it.',
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'AttributeName',
                        ],
                        'properties' => [
                            'Value' => [
                                'description' =>
                                    'Specify whether or not a value already exists and has a specific content for the attribute name-value pair.',
                                'type' => 'object',
                                'properties' => [
                                    'S' => [
                                        'description' =>
                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                        'type' => 'string',
                                    ],
                                    'N' => [
                                        'description' =>
                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                        'type' => 'string',
                                    ],
                                    'B' => [
                                        'description' =>
                                            'Binary attributes are sequences of unsigned bytes.',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                    'SS' => [
                                        'description' => 'A set of strings.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NS' => [
                                        'description' => 'A set of numbers.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NumberAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'BS' => [
                                        'description' =>
                                            'A set of binary attributes.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BinaryAttributeValue',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                    ],
                                ],
                            ],
                            'Exists' => [
                                'description' =>
                                    'Specify whether or not a value already exists for the attribute name-value pair.',
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'ReturnValues' => [
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'NONE',
                        'ALL_OLD',
                        'UPDATED_OLD',
                        'ALL_NEW',
                        'UPDATED_NEW',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when an expected value does not match what was found in the system.',
                    'class' => 'ConditionalCheckFailedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'Query' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'QueryOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Gets the values of one or more items and its attributes by primary key (composite primary key, only).',
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
                    'default' => 'DynamoDB_20111205.Query',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to query. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'AttributesToGet' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
                'Limit' => [
                    'description' =>
                        'The maximum number of items to return. If Amazon DynamoDB hits this limit while querying the table, it stops the query and returns the matching values up to the limit, and a LastEvaluatedKey to apply in a subsequent operation to continue the query. Also, if the result set size exceeds 1MB before Amazon DynamoDB hits this limit, it stops the query and returns the matching values, and a LastEvaluatedKey to apply in a subsequent operation to continue the query.',
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'ConsistentRead' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'Count' => [
                    'description' =>
                        'If set to true, Amazon DynamoDB returns a total number of items that match the query parameters, instead of a list of the matching items and their attributes. Do not set Count to true while providing a list of AttributesToGet, otherwise Amazon DynamoDB returns a validation error.',
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'HashKeyValue' => [
                    'required' => true,
                    'description' =>
                        'Attribute value of the hash component of the composite primary key.',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'S' => [
                            'description' =>
                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                            'type' => 'string',
                        ],
                        'N' => [
                            'description' =>
                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                            'type' => 'string',
                        ],
                        'B' => [
                            'description' =>
                                'Binary attributes are sequences of unsigned bytes.',
                            'type' => 'string',
                            'filters' => ['base64_encode'],
                        ],
                        'SS' => [
                            'description' => 'A set of strings.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'StringAttributeValue',
                                'type' => 'string',
                            ],
                        ],
                        'NS' => [
                            'description' => 'A set of numbers.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'NumberAttributeValue',
                                'type' => 'string',
                            ],
                        ],
                        'BS' => [
                            'description' => 'A set of binary attributes.',
                            'type' => 'array',
                            'items' => [
                                'name' => 'BinaryAttributeValue',
                                'type' => 'string',
                                'filters' => ['base64_encode'],
                            ],
                        ],
                    ],
                ],
                'RangeKeyCondition' => [
                    'description' =>
                        'A container for the attribute values and comparison operators to use for the query.',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'AttributeValueList' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AttributeValue',
                                'description' =>
                                    'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                                'type' => 'object',
                                'properties' => [
                                    'S' => [
                                        'description' =>
                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                        'type' => 'string',
                                    ],
                                    'N' => [
                                        'description' =>
                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                        'type' => 'string',
                                    ],
                                    'B' => [
                                        'description' =>
                                            'Binary attributes are sequences of unsigned bytes.',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                    'SS' => [
                                        'description' => 'A set of strings.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NS' => [
                                        'description' => 'A set of numbers.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NumberAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'BS' => [
                                        'description' =>
                                            'A set of binary attributes.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BinaryAttributeValue',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ComparisonOperator' => [
                            'required' => true,
                            'type' => 'string',
                            'enum' => [
                                'EQ',
                                'NE',
                                'IN',
                                'LE',
                                'LT',
                                'GE',
                                'GT',
                                'BETWEEN',
                                'NOT_NULL',
                                'NULL',
                                'CONTAINS',
                                'NOT_CONTAINS',
                                'BEGINS_WITH',
                            ],
                        ],
                    ],
                ],
                'ScanIndexForward' => [
                    'description' =>
                        'Specifies forward or backward traversal of the index. Amazon DynamoDB returns results reflecting the requested order, determined by the range key. The default value is true (forward).',
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'ExclusiveStartKey' => [
                    'description' =>
                        'Primary key of the item from which to continue an earlier query. An earlier query might provide this value as the LastEvaluatedKey if that query operation was interrupted before completing the query; either because of the result set size or the Limit parameter. The LastEvaluatedKey can be passed back in a new query request to continue the operation from that point.',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
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
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'Scan' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ScanOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Retrieves one or more items and its attributes by performing a full scan of a table.',
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
                    'default' => 'DynamoDB_20111205.Scan',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to scan. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'AttributesToGet' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'items' => [
                        'name' => 'AttributeName',
                        'type' => 'string',
                    ],
                ],
                'Limit' => [
                    'description' =>
                        'The maximum number of items to return. If Amazon DynamoDB hits this limit while scanning the table, it stops the scan and returns the matching values up to the limit, and a LastEvaluatedKey to apply in a subsequent operation to continue the scan. Also, if the scanned data set size exceeds 1 MB before Amazon DynamoDB hits this limit, it stops the scan and returns the matching values up to the limit, and a LastEvaluatedKey to apply in a subsequent operation to continue the scan.',
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
                'Count' => [
                    'description' =>
                        'If set to true, Amazon DynamoDB returns a total number of items for the Scan operation, even if the operation has no matching items for the assigned filter. Do not set Count to true while providing a list of AttributesToGet, otherwise Amazon DynamoDB returns a validation error.',
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'ScanFilter' => [
                    'description' =>
                        'Evaluates the scan results and returns only the desired values.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'String',
                        ],
                        'properties' => [
                            'AttributeValueList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttributeValue',
                                    'description' =>
                                        'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'S' => [
                                            'description' =>
                                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                            'type' => 'string',
                                        ],
                                        'N' => [
                                            'description' =>
                                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                            'type' => 'string',
                                        ],
                                        'B' => [
                                            'description' =>
                                                'Binary attributes are sequences of unsigned bytes.',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                        'SS' => [
                                            'description' =>
                                                'A set of strings.',
                                            'type' => 'array',
                                            'items' => [
                                                'name' =>
                                                    'StringAttributeValue',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'NS' => [
                                            'description' =>
                                                'A set of numbers.',
                                            'type' => 'array',
                                            'items' => [
                                                'name' =>
                                                    'NumberAttributeValue',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'BS' => [
                                            'description' =>
                                                'A set of binary attributes.',
                                            'type' => 'array',
                                            'items' => [
                                                'name' =>
                                                    'BinaryAttributeValue',
                                                'type' => 'string',
                                                'filters' => ['base64_encode'],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ComparisonOperator' => [
                                'required' => true,
                                'type' => 'string',
                                'enum' => [
                                    'EQ',
                                    'NE',
                                    'IN',
                                    'LE',
                                    'LT',
                                    'GE',
                                    'GT',
                                    'BETWEEN',
                                    'NOT_NULL',
                                    'NULL',
                                    'CONTAINS',
                                    'NOT_CONTAINS',
                                    'BEGINS_WITH',
                                ],
                            ],
                        ],
                    ],
                ],
                'ExclusiveStartKey' => [
                    'description' =>
                        'Primary key of the item from which to continue an earlier scan. An earlier scan might provide this value if that scan operation was interrupted before scanning the entire table; either because of the result set size or the Limit parameter. The LastEvaluatedKey can be passed back in a new scan request to continue the operation from that point.',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
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
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateItem' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateItemOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' => 'Edits an existing item\'s attributes.',
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
                    'default' => 'DynamoDB_20111205.UpdateItem',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table in which you want to update an item. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'required' => true,
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                    'filters' => ['base64_encode'],
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'AttributeUpdates' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'Specifies the attribute to update and how to perform the update. Possible values: PUT (default), ADD or DELETE.',
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'AttributeName',
                        ],
                        'properties' => [
                            'Value' => [
                                'type' => 'object',
                                'properties' => [
                                    'S' => [
                                        'description' =>
                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                        'type' => 'string',
                                    ],
                                    'N' => [
                                        'description' =>
                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                        'type' => 'string',
                                    ],
                                    'B' => [
                                        'description' =>
                                            'Binary attributes are sequences of unsigned bytes.',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                    'SS' => [
                                        'description' => 'A set of strings.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NS' => [
                                        'description' => 'A set of numbers.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NumberAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'BS' => [
                                        'description' =>
                                            'A set of binary attributes.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BinaryAttributeValue',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                    ],
                                ],
                            ],
                            'Action' => [
                                'type' => 'string',
                                'enum' => ['ADD', 'PUT', 'DELETE'],
                            ],
                        ],
                    ],
                ],
                'Expected' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'Allows you to provide an attribute name, and whether or not Amazon DynamoDB should check to see if the attribute value already exists; or if the attribute value exists and has a particular value before changing it.',
                        'type' => 'object',
                        'data' => [
                            'shape_name' => 'AttributeName',
                        ],
                        'properties' => [
                            'Value' => [
                                'description' =>
                                    'Specify whether or not a value already exists and has a specific content for the attribute name-value pair.',
                                'type' => 'object',
                                'properties' => [
                                    'S' => [
                                        'description' =>
                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                        'type' => 'string',
                                    ],
                                    'N' => [
                                        'description' =>
                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                        'type' => 'string',
                                    ],
                                    'B' => [
                                        'description' =>
                                            'Binary attributes are sequences of unsigned bytes.',
                                        'type' => 'string',
                                        'filters' => ['base64_encode'],
                                    ],
                                    'SS' => [
                                        'description' => 'A set of strings.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'StringAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NS' => [
                                        'description' => 'A set of numbers.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NumberAttributeValue',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'BS' => [
                                        'description' =>
                                            'A set of binary attributes.',
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'BinaryAttributeValue',
                                            'type' => 'string',
                                            'filters' => ['base64_encode'],
                                        ],
                                    ],
                                ],
                            ],
                            'Exists' => [
                                'description' =>
                                    'Specify whether or not a value already exists for the attribute name-value pair.',
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
                'ReturnValues' => [
                    'type' => 'string',
                    'location' => 'json',
                    'enum' => [
                        'NONE',
                        'ALL_OLD',
                        'UPDATED_OLD',
                        'ALL_NEW',
                        'UPDATED_NEW',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when an expected value does not match what was found in the system.',
                    'class' => 'ConditionalCheckFailedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the level of provisioned throughput defined for the table is exceeded.',
                    'class' => 'ProvisionedThroughputExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateTable' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateTableOutput',
            'responseType' => 'model',
            'responseNotes' =>
                'Returns a json_decoded array of the response body',
            'summary' =>
                'Updates the provisioned throughput for the given table.',
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
                    'default' => 'DynamoDB_20111205.UpdateTable',
                ],
                'TableName' => [
                    'required' => true,
                    'description' =>
                        'The name of the table you want to update. Allowed characters are a-z, A-Z, 0-9, _ (underscore), - (hyphen) and . (period).',
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'ProvisionedThroughput' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ReadCapacityUnits' => [
                            'required' => true,
                            'description' =>
                                'ReadCapacityUnits are in terms of strictly consistent reads, assuming items of 1k. 2k items require twice the ReadCapacityUnits. Eventually-consistent reads only require half the ReadCapacityUnits of stirctly consistent reads.',
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                        'WriteCapacityUnits' => [
                            'required' => true,
                            'description' =>
                                'WriteCapacityUnits are in terms of strictly consistent reads, assuming items of 1k. 2k items require twice the WriteCapacityUnits.',
                            'type' => 'numeric',
                            'minimum' => 1,
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the resource which is being attempted to be changed is in use.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the subscriber exceeded the limits on the number of objects or operations.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the service has a problem when trying to process the request.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
    ],
    'models' => [
        'BatchGetItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Responses' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'The item attributes from a response in a specific table, along with the read resources consumed on the table during the request.',
                        'type' => 'object',
                        'properties' => [
                            'Items' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttributeMap',
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'description' =>
                                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                                        'type' => 'object',
                                        'properties' => [
                                            'S' => [
                                                'description' =>
                                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                'type' => 'string',
                                            ],
                                            'N' => [
                                                'description' =>
                                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                'type' => 'string',
                                            ],
                                            'B' => [
                                                'description' =>
                                                    'Binary attributes are sequences of unsigned bytes.',
                                                'type' => 'string',
                                            ],
                                            'SS' => [
                                                'description' =>
                                                    'A set of strings.',
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'StringAttributeValue',
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'NS' => [
                                                'description' =>
                                                    'A set of numbers.',
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'NumberAttributeValue',
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'BS' => [
                                                'description' =>
                                                    'A set of binary attributes.',
                                                'type' => 'array',
                                                'items' => [
                                                    'name' =>
                                                        'BinaryAttributeValue',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ConsumedCapacityUnits' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'UnprocessedKeys' => [
                    'description' =>
                        'Contains a map of tables and their respective keys that were not processed with the current response, possibly due to reaching a limit on the response size. The UnprocessedKeys value is in the same form as a RequestItems parameter (so the value can be provided directly to a subsequent BatchGetItem operation). For more information, see the above RequestItems parameter.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'object',
                        'properties' => [
                            'Keys' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Key',
                                    'description' =>
                                        'The primary key that uniquely identifies each item in a table. A primary key can be a one attribute (hash) primary key or a two attribute (hash-and-range) primary key.',
                                    'type' => 'object',
                                    'properties' => [
                                        'HashKeyElement' => [
                                            'description' =>
                                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                            'type' => 'object',
                                            'properties' => [
                                                'S' => [
                                                    'description' =>
                                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                    'type' => 'string',
                                                ],
                                                'N' => [
                                                    'description' =>
                                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                    'type' => 'string',
                                                ],
                                                'B' => [
                                                    'description' =>
                                                        'Binary attributes are sequences of unsigned bytes.',
                                                    'type' => 'string',
                                                ],
                                                'SS' => [
                                                    'description' =>
                                                        'A set of strings.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'StringAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'NS' => [
                                                    'description' =>
                                                        'A set of numbers.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'NumberAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'BS' => [
                                                    'description' =>
                                                        'A set of binary attributes.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'BinaryAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RangeKeyElement' => [
                                            'description' =>
                                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                            'type' => 'object',
                                            'properties' => [
                                                'S' => [
                                                    'description' =>
                                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                    'type' => 'string',
                                                ],
                                                'N' => [
                                                    'description' =>
                                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                    'type' => 'string',
                                                ],
                                                'B' => [
                                                    'description' =>
                                                        'Binary attributes are sequences of unsigned bytes.',
                                                    'type' => 'string',
                                                ],
                                                'SS' => [
                                                    'description' =>
                                                        'A set of strings.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'StringAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'NS' => [
                                                    'description' =>
                                                        'A set of numbers.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'NumberAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                                'BS' => [
                                                    'description' =>
                                                        'A set of binary attributes.',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'BinaryAttributeValue',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AttributesToGet' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttributeName',
                                    'type' => 'string',
                                ],
                            ],
                            'ConsistentRead' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchWriteItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Responses' => [
                    'description' =>
                        'The response object as a result of BatchWriteItem call. This is essentially a map of table name to ConsumedCapacityUnits.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'object',
                        'properties' => [
                            'ConsumedCapacityUnits' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'UnprocessedItems' => [
                    'description' =>
                        'The Items which we could not successfully process in a BatchWriteItem call is returned as UnprocessedItems',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'array',
                        'items' => [
                            'name' => 'WriteRequest',
                            'description' =>
                                'This structure is a Union of PutRequest and DeleteRequest. It can contain exactly one of PutRequest or DeleteRequest. Never Both. This is enforced in the code.',
                            'type' => 'object',
                            'properties' => [
                                'PutRequest' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Item' => [
                                            'description' => 'The item to put',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'description' =>
                                                    'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                                                'type' => 'object',
                                                'properties' => [
                                                    'S' => [
                                                        'description' =>
                                                            'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                        'type' => 'string',
                                                    ],
                                                    'N' => [
                                                        'description' =>
                                                            'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                        'type' => 'string',
                                                    ],
                                                    'B' => [
                                                        'description' =>
                                                            'Binary attributes are sequences of unsigned bytes.',
                                                        'type' => 'string',
                                                    ],
                                                    'SS' => [
                                                        'description' =>
                                                            'A set of strings.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'StringAttributeValue',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'NS' => [
                                                        'description' =>
                                                            'A set of numbers.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'NumberAttributeValue',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                    'BS' => [
                                                        'description' =>
                                                            'A set of binary attributes.',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'name' =>
                                                                'BinaryAttributeValue',
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'DeleteRequest' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' =>
                                                'The item\'s key to be delete',
                                            'type' => 'object',
                                            'properties' => [
                                                'HashKeyElement' => [
                                                    'description' =>
                                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'S' => [
                                                            'description' =>
                                                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                            'type' => 'string',
                                                        ],
                                                        'N' => [
                                                            'description' =>
                                                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                            'type' => 'string',
                                                        ],
                                                        'B' => [
                                                            'description' =>
                                                                'Binary attributes are sequences of unsigned bytes.',
                                                            'type' => 'string',
                                                        ],
                                                        'SS' => [
                                                            'description' =>
                                                                'A set of strings.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'StringAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'NS' => [
                                                            'description' =>
                                                                'A set of numbers.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'NumberAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'BS' => [
                                                            'description' =>
                                                                'A set of binary attributes.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'BinaryAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RangeKeyElement' => [
                                                    'description' =>
                                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'S' => [
                                                            'description' =>
                                                                'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                                            'type' => 'string',
                                                        ],
                                                        'N' => [
                                                            'description' =>
                                                                'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                                            'type' => 'string',
                                                        ],
                                                        'B' => [
                                                            'description' =>
                                                                'Binary attributes are sequences of unsigned bytes.',
                                                            'type' => 'string',
                                                        ],
                                                        'SS' => [
                                                            'description' =>
                                                                'A set of strings.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'StringAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'NS' => [
                                                            'description' =>
                                                                'A set of numbers.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'NumberAttributeValue',
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                        'BS' => [
                                                            'description' =>
                                                                'A set of binary attributes.',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'name' =>
                                                                    'BinaryAttributeValue',
                                                                'type' =>
                                                                    'string',
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
                ],
            ],
        ],
        'CreateTableOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TableDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'TableName' => [
                            'description' =>
                                'The name of the table being described.',
                            'type' => 'string',
                        ],
                        'KeySchema' => [
                            'type' => 'object',
                            'properties' => [
                                'HashKeyElement' => [
                                    'description' =>
                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'RangeKeyElement' => [
                                    'description' =>
                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TableStatus' => [
                            'type' => 'string',
                        ],
                        'CreationDateTime' => [
                            'type' => 'string',
                        ],
                        'ProvisionedThroughput' => [
                            'type' => 'object',
                            'properties' => [
                                'LastIncreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'LastDecreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'ReadCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                                'WriteCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'TableSizeBytes' => [
                            'type' => 'numeric',
                        ],
                        'ItemCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'description' =>
                        'If the ReturnValues parameter is provided as ALL_OLD in the request, Amazon DynamoDB returns an array of attribute name-value pairs (essentially, the deleted item). Otherwise, the response contains an empty set.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                        'type' => 'object',
                        'properties' => [
                            'S' => [
                                'description' =>
                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                'type' => 'string',
                            ],
                            'N' => [
                                'description' =>
                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                'type' => 'string',
                            ],
                            'B' => [
                                'description' =>
                                    'Binary attributes are sequences of unsigned bytes.',
                                'type' => 'string',
                            ],
                            'SS' => [
                                'description' => 'A set of strings.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StringAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'NS' => [
                                'description' => 'A set of numbers.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NumberAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BS' => [
                                'description' => 'A set of binary attributes.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BinaryAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteTableOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TableDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'TableName' => [
                            'description' =>
                                'The name of the table being described.',
                            'type' => 'string',
                        ],
                        'KeySchema' => [
                            'type' => 'object',
                            'properties' => [
                                'HashKeyElement' => [
                                    'description' =>
                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'RangeKeyElement' => [
                                    'description' =>
                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TableStatus' => [
                            'type' => 'string',
                        ],
                        'CreationDateTime' => [
                            'type' => 'string',
                        ],
                        'ProvisionedThroughput' => [
                            'type' => 'object',
                            'properties' => [
                                'LastIncreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'LastDecreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'ReadCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                                'WriteCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'TableSizeBytes' => [
                            'type' => 'numeric',
                        ],
                        'ItemCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTableOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Table' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'TableName' => [
                            'description' =>
                                'The name of the table being described.',
                            'type' => 'string',
                        ],
                        'KeySchema' => [
                            'type' => 'object',
                            'properties' => [
                                'HashKeyElement' => [
                                    'description' =>
                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'RangeKeyElement' => [
                                    'description' =>
                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TableStatus' => [
                            'type' => 'string',
                        ],
                        'CreationDateTime' => [
                            'type' => 'string',
                        ],
                        'ProvisionedThroughput' => [
                            'type' => 'object',
                            'properties' => [
                                'LastIncreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'LastDecreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'ReadCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                                'WriteCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'TableSizeBytes' => [
                            'type' => 'numeric',
                        ],
                        'ItemCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'GetItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Item' => [
                    'description' => 'Contains the requested attributes.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                        'type' => 'object',
                        'properties' => [
                            'S' => [
                                'description' =>
                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                'type' => 'string',
                            ],
                            'N' => [
                                'description' =>
                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                'type' => 'string',
                            ],
                            'B' => [
                                'description' =>
                                    'Binary attributes are sequences of unsigned bytes.',
                                'type' => 'string',
                            ],
                            'SS' => [
                                'description' => 'A set of strings.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StringAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'NS' => [
                                'description' => 'A set of numbers.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NumberAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BS' => [
                                'description' => 'A set of binary attributes.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BinaryAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTablesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TableNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TableName',
                        'type' => 'string',
                    ],
                ],
                'LastEvaluatedTableName' => [
                    'description' =>
                        'The name of the last table in the current list. Use this value as the ExclusiveStartTableName in a new request to continue the list until all the table names are returned. If this value is null, all table names have been returned.',
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'PutItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'description' =>
                        'Attribute values before the put operation, but only if the ReturnValues parameter is specified as ALL_OLD in the request.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                        'type' => 'object',
                        'properties' => [
                            'S' => [
                                'description' =>
                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                'type' => 'string',
                            ],
                            'N' => [
                                'description' =>
                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                'type' => 'string',
                            ],
                            'B' => [
                                'description' =>
                                    'Binary attributes are sequences of unsigned bytes.',
                                'type' => 'string',
                            ],
                            'SS' => [
                                'description' => 'A set of strings.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StringAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'NS' => [
                                'description' => 'A set of numbers.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NumberAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BS' => [
                                'description' => 'A set of binary attributes.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BinaryAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'QueryOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Items' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AttributeMap',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' =>
                                'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Count' => [
                    'description' => 'Number of items in the response.',
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'LastEvaluatedKey' => [
                    'description' =>
                        'Primary key of the item where the query operation stopped, inclusive of the previous result set. Use this value to start a new operation excluding this value in the new request. The LastEvaluatedKey is null when the entire query result set is complete (i.e. the operation processed the "last page").',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'ScanOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Items' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AttributeMap',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' =>
                                'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Count' => [
                    'description' => 'Number of items in the response.',
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'ScannedCount' => [
                    'description' =>
                        'Number of items in the complete scan before any filters are applied. A high ScannedCount value with few, or no, Count results indicates an inefficient Scan operation.',
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'LastEvaluatedKey' => [
                    'description' =>
                        'Primary key of the item where the scan operation stopped. Provide this value in a subsequent scan operation to continue the operation from that point. The LastEvaluatedKey is null when the entire scan result set is complete (i.e. the operation processed the "last page").',
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'HashKeyElement' => [
                            'description' =>
                                'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'RangeKeyElement' => [
                            'description' =>
                                'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                            'type' => 'object',
                            'properties' => [
                                'S' => [
                                    'description' =>
                                        'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                    'type' => 'string',
                                ],
                                'N' => [
                                    'description' =>
                                        'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                    'type' => 'string',
                                ],
                                'B' => [
                                    'description' =>
                                        'Binary attributes are sequences of unsigned bytes.',
                                    'type' => 'string',
                                ],
                                'SS' => [
                                    'description' => 'A set of strings.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'StringAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'NS' => [
                                    'description' => 'A set of numbers.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'NumberAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                                'BS' => [
                                    'description' =>
                                        'A set of binary attributes.',
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'BinaryAttributeValue',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateItemOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'description' =>
                        'A map of attribute name-value pairs, but only if the ReturnValues parameter is specified as something other than NONE in the request.',
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'description' =>
                            'AttributeValue can be String, Number, Binary, StringSet, NumberSet, BinarySet.',
                        'type' => 'object',
                        'properties' => [
                            'S' => [
                                'description' =>
                                    'Strings are Unicode with UTF-8 binary encoding. The maximum size is limited by the size of the primary key (1024 bytes as a range part of a key or 2048 bytes as a single part hash key) or the item size (64k).',
                                'type' => 'string',
                            ],
                            'N' => [
                                'description' =>
                                    'Numbers are positive or negative exact-value decimals and integers. A number can have up to 38 digits precision and can be between 10^-128 to 10^+126.',
                                'type' => 'string',
                            ],
                            'B' => [
                                'description' =>
                                    'Binary attributes are sequences of unsigned bytes.',
                                'type' => 'string',
                            ],
                            'SS' => [
                                'description' => 'A set of strings.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'StringAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'NS' => [
                                'description' => 'A set of numbers.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NumberAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                            'BS' => [
                                'description' => 'A set of binary attributes.',
                                'type' => 'array',
                                'items' => [
                                    'name' => 'BinaryAttributeValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'ConsumedCapacityUnits' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'UpdateTableOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TableDescription' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'TableName' => [
                            'description' =>
                                'The name of the table being described.',
                            'type' => 'string',
                        ],
                        'KeySchema' => [
                            'type' => 'object',
                            'properties' => [
                                'HashKeyElement' => [
                                    'description' =>
                                        'A hash key element is treated as the primary key, and can be a string or a number. Single attribute primary keys have one index value. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'RangeKeyElement' => [
                                    'description' =>
                                        'A range key element is treated as a secondary key (used in conjunction with the primary key), and can be a string or a number, and is only used for hash-and-range primary keys. The value can be String, Number, StringSet, NumberSet.',
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'description' =>
                                                'The AttributeName of the KeySchemaElement.',
                                            'type' => 'string',
                                        ],
                                        'AttributeType' => [
                                            'description' =>
                                                'The AttributeType of the KeySchemaElement which can be a String or a Number.',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'TableStatus' => [
                            'type' => 'string',
                        ],
                        'CreationDateTime' => [
                            'type' => 'string',
                        ],
                        'ProvisionedThroughput' => [
                            'type' => 'object',
                            'properties' => [
                                'LastIncreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'LastDecreaseDateTime' => [
                                    'type' => 'string',
                                ],
                                'ReadCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                                'WriteCapacityUnits' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'TableSizeBytes' => [
                            'type' => 'numeric',
                        ],
                        'ItemCount' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'BatchGetItem' => [
            'input_token' => 'RequestItems',
            'output_token' => 'UnprocessedKeys',
            'result_key' => 'Responses/*',
        ],
        'ListTables' => [
            'input_token' => 'ExclusiveStartTableName',
            'output_token' => 'LastEvaluatedTableName',
            'result_key' => 'TableNames',
        ],
        'Query' => [
            'input_token' => 'ExclusiveStartKey',
            'output_token' => 'LastEvaluatedKey',
            'result_key' => 'Items',
        ],
        'Scan' => [
            'input_token' => 'ExclusiveStartKey',
            'output_token' => 'LastEvaluatedKey',
            'result_key' => 'Items',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 20,
            'max_attempts' => 25,
        ],
        '__TableState' => [
            'operation' => 'DescribeTable',
        ],
        'TableExists' => [
            'extends' => '__TableState',
            'description' => 'Wait until a table exists and can be accessed',
            'success.type' => 'output',
            'success.path' => 'Table/TableStatus',
            'success.value' => 'ACTIVE',
            'ignore_errors' => ['ResourceNotFoundException'],
        ],
        'TableNotExists' => [
            'extends' => '__TableState',
            'description' => 'Wait until a table is deleted',
            'success.type' => 'error',
            'success.value' => 'ResourceNotFoundException',
        ],
    ],
];
