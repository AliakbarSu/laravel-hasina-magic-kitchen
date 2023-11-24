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
    'apiVersion' => '2013-11-01',
    'endpointPrefix' => 'cloudtrail',
    'serviceFullName' => 'AWS CloudTrail',
    'serviceAbbreviation' => 'CloudTrail',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.',
    'signatureVersion' => 'v4',
    'namespace' => 'CloudTrail',
    'regions' => [
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.ap-southeast-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.eu-west-1.amazonaws.com',
        ],
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.us-west-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'cloudtrail.sa-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
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
                    'default' =>
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.AddTags',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TagsList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the specified resource is not found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when an operation is called with an invalid trail ARN. The format of a trail ARN is arn:aws:cloudtrail:us-east-1:123456789012:trail/MyTrail.',
                    'class' => 'CloudTrailARNInvalidException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the specified resource type is not supported by CloudTrail.',
                    'class' => 'ResourceTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'The number of tags per trail has exceeded the permitted amount. Currently, the limit is 10.',
                    'class' => 'TagsLimitExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the key or value specified for the tag does not match the regular expression ^([\\\\p_.:/=+\\\\-@]*)$.',
                    'class' => 'InvalidTagParameterException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'CreateTrail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateTrailResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.CreateTrail',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3BucketName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SnsTopicName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IncludeGlobalServiceEvents' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'EnableLogFileValidation' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CloudWatchLogsLogGroupArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CloudWatchLogsRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the maximum number of trails is reached.',
                    'class' => 'MaximumNumberOfTrailsExceededException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the specified trail already exists.',
                    'class' => 'TrailAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the specified S3 bucket does not exist.',
                    'class' => 'S3BucketDoesNotExistException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the S3 bucket is not sufficient.',
                    'class' => 'InsufficientS3BucketPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the SNS topic is not sufficient.',
                    'class' => 'InsufficientSnsTopicPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the S3 bucket or KMS key is not sufficient.',
                    'class' => 'InsufficientEncryptionPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided S3 bucket name is not valid.',
                    'class' => 'InvalidS3BucketNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided S3 prefix is not valid.',
                    'class' => 'InvalidS3PrefixException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided SNS topic name is not valid.',
                    'class' => 'InvalidSnsTopicNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key ARN is invalid.',
                    'class' => 'InvalidKmsKeyIdException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
                [
                    'reason' => 'This exception is deprecated.',
                    'class' => 'TrailNotProvidedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key does not exist, or when the S3 bucket and the KMS key are not in the same region.',
                    'class' => 'KmsKeyNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key is disabled.',
                    'class' => 'KmsKeyDisabledException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided CloudWatch log group is not valid.',
                    'class' => 'InvalidCloudWatchLogsLogGroupArnException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided role is not valid.',
                    'class' => 'InvalidCloudWatchLogsRoleArnException',
                ],
                [
                    'reason' =>
                        'Cannot set a CloudWatch Logs delivery for this region.',
                    'class' => 'CloudWatchLogsDeliveryUnavailableException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'DeleteTrail' => [
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.DeleteTrail',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the trail with the given name is not found.',
                    'class' => 'TrailNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
            ],
        ],
        'DescribeTrails' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTrailsResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.DescribeTrails',
                ],
                'trailNameList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'GetTrailStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetTrailStatusResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.GetTrailStatus',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the trail with the given name is not found.',
                    'class' => 'TrailNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
            ],
        ],
        'ListPublicKeys' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListPublicKeysResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.ListPublicKeys',
                ],
                'StartTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
                'EndTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Occurs if the timestamp values are invalid. Either the start time occurs after the end time or the time range is outside the range of possible values.',
                    'class' => 'InvalidTimeRangeException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' => 'Reserved for future use.',
                    'class' => 'InvalidTokenException',
                ],
            ],
        ],
        'ListTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTagsResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.ListTags',
                ],
                'ResourceIdList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the specified resource is not found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when an operation is called with an invalid trail ARN. The format of a trail ARN is arn:aws:cloudtrail:us-east-1:123456789012:trail/MyTrail.',
                    'class' => 'CloudTrailARNInvalidException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the specified resource type is not supported by CloudTrail.',
                    'class' => 'ResourceTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
                [
                    'reason' => 'Reserved for future use.',
                    'class' => 'InvalidTokenException',
                ],
            ],
        ],
        'LookupEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'LookupEventsResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.LookupEvents',
                ],
                'LookupAttributes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'LookupAttribute',
                        'type' => 'object',
                        'properties' => [
                            'AttributeKey' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'AttributeValue' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'StartTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'json',
                ],
                'EndTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Occurs when an invalid lookup attribute is specified.',
                    'class' => 'InvalidLookupAttributesException',
                ],
                [
                    'reason' =>
                        'Occurs if the timestamp values are invalid. Either the start time occurs after the end time or the time range is outside the range of possible values.',
                    'class' => 'InvalidTimeRangeException',
                ],
                [
                    'reason' =>
                        'This exception is thrown if the limit specified is invalid.',
                    'class' => 'InvalidMaxResultsException',
                ],
                [
                    'reason' =>
                        'Invalid token or token that was previously used in a request with different parameters. This exception is thrown if the token is invalid.',
                    'class' => 'InvalidNextTokenException',
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
                    'default' =>
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.RemoveTags',
                ],
                'ResourceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TagsList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the specified resource is not found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when an operation is called with an invalid trail ARN. The format of a trail ARN is arn:aws:cloudtrail:us-east-1:123456789012:trail/MyTrail.',
                    'class' => 'CloudTrailARNInvalidException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the specified resource type is not supported by CloudTrail.',
                    'class' => 'ResourceTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the key or value specified for the tag does not match the regular expression ^([\\\\p_.:/=+\\\\-@]*)$.',
                    'class' => 'InvalidTagParameterException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
        'StartLogging' => [
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.StartLogging',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the trail with the given name is not found.',
                    'class' => 'TrailNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
            ],
        ],
        'StopLogging' => [
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.StopLogging',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the trail with the given name is not found.',
                    'class' => 'TrailNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
            ],
        ],
        'UpdateTrail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateTrailResponse',
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
                        'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101.UpdateTrail',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3BucketName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SnsTopicName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IncludeGlobalServiceEvents' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'EnableLogFileValidation' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'CloudWatchLogsLogGroupArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CloudWatchLogsRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This exception is thrown when the specified S3 bucket does not exist.',
                    'class' => 'S3BucketDoesNotExistException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the S3 bucket is not sufficient.',
                    'class' => 'InsufficientS3BucketPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the SNS topic is not sufficient.',
                    'class' => 'InsufficientSnsTopicPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the policy on the S3 bucket or KMS key is not sufficient.',
                    'class' => 'InsufficientEncryptionPolicyException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the trail with the given name is not found.',
                    'class' => 'TrailNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided S3 bucket name is not valid.',
                    'class' => 'InvalidS3BucketNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided S3 prefix is not valid.',
                    'class' => 'InvalidS3PrefixException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided SNS topic name is not valid.',
                    'class' => 'InvalidSnsTopicNameException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key ARN is invalid.',
                    'class' => 'InvalidKmsKeyIdException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided trail name is not valid. Trail names must meet the following requirements:    Contain only ASCII letters (a-z, A-Z), numbers (0-9), periods (.), underscores (_), or dashes (-) Start with a letter or number, and end with a letter or number Be between 3 and 128 characters Have no adjacent periods, underscores or dashes. Names like my-_namespace and my--namespace are invalid. Not be in IP address format (for example, 192.168.5.4)',
                    'class' => 'InvalidTrailNameException',
                ],
                [
                    'reason' => 'This exception is deprecated.',
                    'class' => 'TrailNotProvidedException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key does not exist, or when the S3 bucket and the KMS key are not in the same region.',
                    'class' => 'KmsKeyNotFoundException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the KMS key is disabled.',
                    'class' => 'KmsKeyDisabledException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided CloudWatch log group is not valid.',
                    'class' => 'InvalidCloudWatchLogsLogGroupArnException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the provided role is not valid.',
                    'class' => 'InvalidCloudWatchLogsRoleArnException',
                ],
                [
                    'reason' =>
                        'Cannot set a CloudWatch Logs delivery for this region.',
                    'class' => 'CloudWatchLogsDeliveryUnavailableException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not supported. For example, this exception will occur if an attempt is made to tag a trail and tagging is not supported in the current region.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'This exception is thrown when the requested operation is not permitted.',
                    'class' => 'OperationNotPermittedException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateTrailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3BucketName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SnsTopicName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IncludeGlobalServiceEvents' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'TrailARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogFileValidationEnabled' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'CloudWatchLogsLogGroupArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CloudWatchLogsRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeTrailsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'trailList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Trail',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'S3BucketName' => [
                                'type' => 'string',
                            ],
                            'S3KeyPrefix' => [
                                'type' => 'string',
                            ],
                            'SnsTopicName' => [
                                'type' => 'string',
                            ],
                            'IncludeGlobalServiceEvents' => [
                                'type' => 'boolean',
                            ],
                            'TrailARN' => [
                                'type' => 'string',
                            ],
                            'LogFileValidationEnabled' => [
                                'type' => 'boolean',
                            ],
                            'CloudWatchLogsLogGroupArn' => [
                                'type' => 'string',
                            ],
                            'CloudWatchLogsRoleArn' => [
                                'type' => 'string',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTrailStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IsLogging' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'LatestDeliveryError' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestNotificationError' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestDeliveryTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestNotificationTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StartLoggingTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StopLoggingTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestCloudWatchLogsDeliveryError' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestCloudWatchLogsDeliveryTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestDigestDeliveryTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestDigestDeliveryError' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestDeliveryAttemptTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestNotificationAttemptTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestNotificationAttemptSucceeded' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LatestDeliveryAttemptSucceeded' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TimeLoggingStarted' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TimeLoggingStopped' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListPublicKeysResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PublicKeyList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PublicKey',
                        'type' => 'object',
                        'properties' => [
                            'Value' => [
                                'type' => 'string',
                                'filters' => ['base64_decode'],
                            ],
                            'ValidityStartTime' => [
                                'type' => 'string',
                            ],
                            'ValidityEndTime' => [
                                'type' => 'string',
                            ],
                            'Fingerprint' => [
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
        'ListTagsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceTagList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ResourceTag',
                        'type' => 'object',
                        'properties' => [
                            'ResourceId' => [
                                'type' => 'string',
                            ],
                            'TagsList' => [
                                'type' => 'array',
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
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'LookupEventsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Event',
                        'type' => 'object',
                        'properties' => [
                            'EventId' => [
                                'type' => 'string',
                            ],
                            'EventName' => [
                                'type' => 'string',
                            ],
                            'EventTime' => [
                                'type' => 'string',
                            ],
                            'Username' => [
                                'type' => 'string',
                            ],
                            'Resources' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Resource',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'type' => 'string',
                                        ],
                                        'ResourceName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'CloudTrailEvent' => [
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
        'UpdateTrailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3BucketName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SnsTopicName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IncludeGlobalServiceEvents' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'TrailARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LogFileValidationEnabled' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'CloudWatchLogsLogGroupArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CloudWatchLogsRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeTrails' => [
            'result_key' => 'trailList',
        ],
    ],
];
