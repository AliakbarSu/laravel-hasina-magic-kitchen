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
    'apiVersion' => '2014-06-30',
    'endpointPrefix' => 'cognito-sync',
    'serviceFullName' => 'Amazon Cognito Sync',
    'serviceType' => 'rest-json',
    'jsonVersion' => '1.1',
    'signatureVersion' => 'v4',
    'namespace' => 'CognitoSync',
    'operations' => [
        'BulkPublish' => [
            'httpMethod' => 'POST',
            'uri' => '/identitypools/{IdentityPoolId}/bulkpublish',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'BulkPublishResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'An exception thrown when there is an IN_PROGRESS bulk publish operation for the given identity pool.',
                    'class' => 'DuplicateRequestException',
                ],
                [
                    'reason' =>
                        'An exception thrown when a bulk publish operation is requested less than 24 hours after a previous bulk publish operation completed successfully.',
                    'class' => 'AlreadyStreamedException',
                ],
            ],
        ],
        'DeleteDataset' => [
            'httpMethod' => 'DELETE',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DeleteDatasetResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown if an update can\'t be applied because the resource was changed by another call and this would result in a conflict.',
                    'class' => 'ResourceConflictException',
                ],
            ],
        ],
        'DescribeDataset' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeDatasetResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'DescribeIdentityPoolUsage' => [
            'httpMethod' => 'GET',
            'uri' => '/identitypools/{IdentityPoolId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeIdentityPoolUsageResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'DescribeIdentityUsage' => [
            'httpMethod' => 'GET',
            'uri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeIdentityUsageResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'GetBulkPublishDetails' => [
            'httpMethod' => 'POST',
            'uri' => '/identitypools/{IdentityPoolId}/getBulkPublishDetails',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetBulkPublishDetailsResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'GetCognitoEvents' => [
            'httpMethod' => 'GET',
            'uri' => '/identitypools/{IdentityPoolId}/events',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetCognitoEventsResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'GetIdentityPoolConfiguration' => [
            'httpMethod' => 'GET',
            'uri' => '/identitypools/{IdentityPoolId}/configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetIdentityPoolConfigurationResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListDatasets' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListDatasetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'nextToken',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'maxResults',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListIdentityPoolUsage' => [
            'httpMethod' => 'GET',
            'uri' => '/identitypools',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListIdentityPoolUsageResponse',
            'responseType' => 'model',
            'parameters' => [
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'nextToken',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'maxResults',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'ListRecords' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/records',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListRecordsResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'LastSyncCount' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'lastSyncCount',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'nextToken',
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'maxResults',
                ],
                'SyncSessionToken' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'syncSessionToken',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'RegisterDevice' => [
            'httpMethod' => 'POST',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identity/{IdentityId}/device',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'RegisterDeviceResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Platform' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'class' => 'InvalidConfigurationException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'SetCognitoEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/identitypools/{IdentityPoolId}/events',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'Events' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'CognitoEventType',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'SetIdentityPoolConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/identitypools/{IdentityPoolId}/configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'SetIdentityPoolConfigurationResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'PushSync' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ApplicationArns' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ApplicationArn',
                                'type' => 'string',
                            ],
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                            'minLength' => 20,
                        ],
                    ],
                ],
                'CognitoStreams' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StreamName' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                            'minLength' => 20,
                        ],
                        'StreamingStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown if there are parallel requests to modify a resource.',
                    'class' => 'ConcurrentModificationException',
                ],
            ],
        ],
        'SubscribeToDataset' => [
            'httpMethod' => 'POST',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DeviceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'class' => 'InvalidConfigurationException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'UnsubscribeFromDataset' => [
            'httpMethod' => 'DELETE',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DeviceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'class' => 'InvalidConfigurationException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
            ],
        ],
        'UpdateRecords' => [
            'httpMethod' => 'POST',
            'uri' =>
                '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdateRecordsResponse',
            'responseType' => 'model',
            'parameters' => [
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DatasetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                ],
                'DeviceId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'RecordPatches' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RecordPatch',
                        'type' => 'object',
                        'properties' => [
                            'Op' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'SyncCount' => [
                                'required' => true,
                                'type' => 'numeric',
                            ],
                            'DeviceLastModifiedDate' => [
                                'type' => ['object', 'string', 'integer'],
                                'format' => 'date-time',
                            ],
                        ],
                    ],
                ],
                'SyncSessionToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ClientContext' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-Client-Context',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Thrown when a request parameter does not comply with the associated constraints.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the limit on the number of objects or operations has been exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown if the resource doesn\'t exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown if an update can\'t be applied because the resource was changed by another call and this would result in a conflict.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' =>
                        'The AWS Lambda function returned invalid output or an exception.',
                    'class' => 'InvalidLambdaFunctionOutputException',
                ],
                [
                    'reason' =>
                        'AWS Lambda throttled your account, please contact AWS Support',
                    'class' => 'LambdaThrottledException',
                ],
                [
                    'reason' => 'Thrown if the request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' => 'Indicates an internal service error.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
    ],
    'models' => [
        'BulkPublishResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteDatasetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Dataset' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'IdentityId' => [
                            'type' => 'string',
                        ],
                        'DatasetName' => [
                            'type' => 'string',
                        ],
                        'CreationDate' => [
                            'type' => 'string',
                        ],
                        'LastModifiedDate' => [
                            'type' => 'string',
                        ],
                        'LastModifiedBy' => [
                            'type' => 'string',
                        ],
                        'DataStorage' => [
                            'type' => 'numeric',
                        ],
                        'NumRecords' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDatasetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Dataset' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'IdentityId' => [
                            'type' => 'string',
                        ],
                        'DatasetName' => [
                            'type' => 'string',
                        ],
                        'CreationDate' => [
                            'type' => 'string',
                        ],
                        'LastModifiedDate' => [
                            'type' => 'string',
                        ],
                        'LastModifiedBy' => [
                            'type' => 'string',
                        ],
                        'DataStorage' => [
                            'type' => 'numeric',
                        ],
                        'NumRecords' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeIdentityPoolUsageResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolUsage' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'IdentityPoolId' => [
                            'type' => 'string',
                        ],
                        'SyncSessionsCount' => [
                            'type' => 'numeric',
                        ],
                        'DataStorage' => [
                            'type' => 'numeric',
                        ],
                        'LastModifiedDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeIdentityUsageResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityUsage' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'IdentityId' => [
                            'type' => 'string',
                        ],
                        'IdentityPoolId' => [
                            'type' => 'string',
                        ],
                        'LastModifiedDate' => [
                            'type' => 'string',
                        ],
                        'DatasetCount' => [
                            'type' => 'numeric',
                        ],
                        'DataStorage' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'GetBulkPublishDetailsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BulkPublishStartTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BulkPublishCompleteTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'BulkPublishStatus' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FailureMessage' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetCognitoEventsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Events' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetIdentityPoolConfigurationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PushSync' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ApplicationArns' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ApplicationArn',
                                'type' => 'string',
                            ],
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'CognitoStreams' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StreamName' => [
                            'type' => 'string',
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                        ],
                        'StreamingStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ListDatasetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Datasets' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Dataset',
                        'type' => 'object',
                        'properties' => [
                            'IdentityId' => [
                                'type' => 'string',
                            ],
                            'DatasetName' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'LastModifiedDate' => [
                                'type' => 'string',
                            ],
                            'LastModifiedBy' => [
                                'type' => 'string',
                            ],
                            'DataStorage' => [
                                'type' => 'numeric',
                            ],
                            'NumRecords' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListIdentityPoolUsageResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolUsages' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'IdentityPoolUsage',
                        'type' => 'object',
                        'properties' => [
                            'IdentityPoolId' => [
                                'type' => 'string',
                            ],
                            'SyncSessionsCount' => [
                                'type' => 'numeric',
                            ],
                            'DataStorage' => [
                                'type' => 'numeric',
                            ],
                            'LastModifiedDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'Count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListRecordsResponse' => [
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
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'SyncCount' => [
                                'type' => 'numeric',
                            ],
                            'LastModifiedDate' => [
                                'type' => 'string',
                            ],
                            'LastModifiedBy' => [
                                'type' => 'string',
                            ],
                            'DeviceLastModifiedDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Count' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'DatasetSyncCount' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'LastModifiedBy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MergedDatasetNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'DatasetExists' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'DatasetDeletedAfterRequestedSyncCount' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'SyncSessionToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'RegisterDeviceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeviceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'SetIdentityPoolConfigurationResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PushSync' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'ApplicationArns' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ApplicationArn',
                                'type' => 'string',
                            ],
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'CognitoStreams' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StreamName' => [
                            'type' => 'string',
                        ],
                        'RoleArn' => [
                            'type' => 'string',
                        ],
                        'StreamingStatus' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRecordsResponse' => [
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
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'SyncCount' => [
                                'type' => 'numeric',
                            ],
                            'LastModifiedDate' => [
                                'type' => 'string',
                            ],
                            'LastModifiedBy' => [
                                'type' => 'string',
                            ],
                            'DeviceLastModifiedDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
