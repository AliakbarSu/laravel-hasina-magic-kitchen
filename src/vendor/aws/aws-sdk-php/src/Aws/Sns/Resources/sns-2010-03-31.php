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
    'apiVersion' => '2010-03-31',
    'endpointPrefix' => 'sns',
    'serviceFullName' => 'Amazon Simple Notification Service',
    'serviceAbbreviation' => 'Amazon SNS',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Sns',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'sns.us-gov-west-1.amazonaws.com',
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
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Label' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AWSAccountId' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AWSAccountId.member',
                    'items' => [
                        'name' => 'delegate',
                        'type' => 'string',
                    ],
                ],
                'ActionName' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ActionName.member',
                    'items' => [
                        'name' => 'action',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'ConfirmSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfirmSubscriptionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ConfirmSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AuthenticateOnUnsubscribe' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the customer already owns the maximum allowed number of subscriptions.',
                    'class' => 'SubscriptionLimitExceededException',
                ],
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'CreatePlatformApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreatePlatformApplicationResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreatePlatformApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Platform' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attributes.entry',
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
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'CreatePlatformEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateEndpointResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreatePlatformEndpoint',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'PlatformApplicationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CustomUserData' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attributes.entry',
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
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'CreateTopic' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateTopicResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateTopic',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Indicates that the customer already owns the maximum allowed number of topics.',
                    'class' => 'TopicLimitExceededException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'DeleteEndpoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteEndpoint',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'EndpointArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'DeletePlatformApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeletePlatformApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'PlatformApplicationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'DeleteTopic' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteTopic',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'GetEndpointAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetEndpointAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetEndpointAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'EndpointArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'GetPlatformApplicationAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetPlatformApplicationAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetPlatformApplicationAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'PlatformApplicationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'GetSubscriptionAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSubscriptionAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSubscriptionAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'SubscriptionArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'GetTopicAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetTopicAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetTopicAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'ListEndpointsByPlatformApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListEndpointsByPlatformApplicationResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListEndpointsByPlatformApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'PlatformApplicationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'ListPlatformApplications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListPlatformApplicationsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListPlatformApplications',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'ListSubscriptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListSubscriptionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListSubscriptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'ListSubscriptionsByTopic' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListSubscriptionsByTopicResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListSubscriptionsByTopic',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'ListTopics' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListTopicsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListTopics',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'Publish' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'PublishResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'Publish',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Message' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Subject' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MessageStructure' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MessageAttributes' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'MessageAttributes.entry',
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
                            'DataType' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'StringValue' => [
                                'type' => 'string',
                            ],
                            'BinaryValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' => 'Exception error indicating endpoint disabled.',
                    'class' => 'EndpointDisabledException',
                ],
                [
                    'reason' =>
                        'Exception error indicating platform application disabled.',
                    'class' => 'PlatformApplicationDisabledException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
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
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
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
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'SetEndpointAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetEndpointAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'EndpointArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attributes.entry',
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
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'SetPlatformApplicationAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetPlatformApplicationAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'PlatformApplicationArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Attributes' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'sentAs' => 'Attributes.entry',
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
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
        'SetSubscriptionAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetSubscriptionAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'SubscriptionArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeValue' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'SetTopicAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetTopicAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeValue' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'Subscribe' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SubscribeResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'Subscribe',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'TopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Protocol' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Endpoint' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the customer already owns the maximum allowed number of subscriptions.',
                    'class' => 'SubscriptionLimitExceededException',
                ],
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
            ],
        ],
        'Unsubscribe' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'Unsubscribe',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-03-31',
                ],
                'SubscriptionArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the user has been denied access to the requested resource.',
                    'class' => 'AuthorizationErrorException',
                ],
                [
                    'reason' =>
                        'Indicates that the requested resource does not exist.',
                    'class' => 'NotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ConfirmSubscriptionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SubscriptionArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreatePlatformApplicationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PlatformApplicationArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreateEndpointResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EndpointArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreateTopicResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TopicArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetEndpointAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'entry', 'key', 'value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'entry',
                        'type' => 'object',
                        'sentAs' => 'entry',
                        'additionalProperties' => true,
                        'properties' => [
                            'key' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetPlatformApplicationAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'entry', 'key', 'value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'entry',
                        'type' => 'object',
                        'sentAs' => 'entry',
                        'additionalProperties' => true,
                        'properties' => [
                            'key' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetSubscriptionAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'entry', 'key', 'value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'entry',
                        'type' => 'object',
                        'sentAs' => 'entry',
                        'additionalProperties' => true,
                        'properties' => [
                            'key' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetTopicAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Attributes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'filters' => [
                        [
                            'method' =>
                                'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                            'args' => ['@value', 'entry', 'key', 'value'],
                        ],
                    ],
                    'items' => [
                        'name' => 'entry',
                        'type' => 'object',
                        'sentAs' => 'entry',
                        'additionalProperties' => true,
                        'properties' => [
                            'key' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'ListEndpointsByPlatformApplicationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Endpoints' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Endpoint',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'EndpointArn' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'array',
                                'filters' => [
                                    [
                                        'method' =>
                                            'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                        'args' => [
                                            '@value',
                                            'entry',
                                            'key',
                                            'value',
                                        ],
                                    ],
                                ],
                                'items' => [
                                    'name' => 'entry',
                                    'type' => 'object',
                                    'sentAs' => 'entry',
                                    'additionalProperties' => true,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'additionalProperties' => false,
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListPlatformApplicationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PlatformApplications' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PlatformApplication',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PlatformApplicationArn' => [
                                'type' => 'string',
                            ],
                            'Attributes' => [
                                'type' => 'array',
                                'filters' => [
                                    [
                                        'method' =>
                                            'Aws\\Common\\Command\\XmlResponseLocationVisitor::xmlMap',
                                        'args' => [
                                            '@value',
                                            'entry',
                                            'key',
                                            'value',
                                        ],
                                    ],
                                ],
                                'items' => [
                                    'name' => 'entry',
                                    'type' => 'object',
                                    'sentAs' => 'entry',
                                    'additionalProperties' => true,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'additionalProperties' => false,
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListSubscriptionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subscriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Subscription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'SubscriptionArn' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'string',
                            ],
                            'Protocol' => [
                                'type' => 'string',
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                            ],
                            'TopicArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListSubscriptionsByTopicResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Subscriptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Subscription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'SubscriptionArn' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'string',
                            ],
                            'Protocol' => [
                                'type' => 'string',
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                            ],
                            'TopicArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListTopicsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Topics' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Topic',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'TopicArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'PublishResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MessageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SubscribeResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SubscriptionArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListEndpointsByPlatformApplication' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Endpoints',
        ],
        'ListPlatformApplications' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'PlatformApplications',
        ],
        'ListSubscriptions' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Subscriptions',
        ],
        'ListSubscriptionsByTopic' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Subscriptions',
        ],
        'ListTopics' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Topics/*/TopicArn',
        ],
    ],
];
