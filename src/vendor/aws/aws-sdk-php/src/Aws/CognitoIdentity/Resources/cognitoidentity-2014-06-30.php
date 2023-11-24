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
    'endpointPrefix' => 'cognito-identity',
    'serviceFullName' => 'Amazon Cognito Identity',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AWSCognitoIdentityService.',
    'signatureVersion' => 'v4',
    'namespace' => 'CognitoIdentity',
    'operations' => [
        'CreateIdentityPool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'IdentityPool',
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
                    'default' => 'AWSCognitoIdentityService.CreateIdentityPool',
                ],
                'IdentityPoolName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'AllowUnauthenticatedIdentities' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'SupportedLoginProviders' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
                'DeveloperProviderName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'OpenIdConnectProviderARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ARNString',
                        'type' => 'string',
                        'minLength' => 20,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Thrown when the total number of user pools has exceeded a preset limit.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DeleteIdentities' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteIdentitiesResponse',
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
                    'default' => 'AWSCognitoIdentityService.DeleteIdentities',
                ],
                'IdentityIdsToDelete' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 60,
                    'items' => [
                        'name' => 'IdentityId',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'DeleteIdentityPool' => [
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
                    'default' => 'AWSCognitoIdentityService.DeleteIdentityPool',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'DescribeIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'IdentityDescription',
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
                    'default' => 'AWSCognitoIdentityService.DescribeIdentity',
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'DescribeIdentityPool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'IdentityPool',
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
                        'AWSCognitoIdentityService.DescribeIdentityPool',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'GetCredentialsForIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetCredentialsForIdentityResponse',
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
                        'AWSCognitoIdentityService.GetCredentialsForIdentity',
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Logins' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown if the identity pool has no role associated for the given auth type (auth/unauth) or if the AssumeRole fails.',
                    'class' => 'InvalidIdentityPoolConfigurationException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'An exception thrown when a dependent service such as Facebook or Twitter is not responding',
                    'class' => 'ExternalServiceException',
                ],
            ],
        ],
        'GetId' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetIdResponse',
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
                    'default' => 'AWSCognitoIdentityService.GetId',
                ],
                'AccountId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Logins' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Thrown when the total number of user pools has exceeded a preset limit.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'An exception thrown when a dependent service such as Facebook or Twitter is not responding',
                    'class' => 'ExternalServiceException',
                ],
            ],
        ],
        'GetIdentityPoolRoles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetIdentityPoolRolesResponse',
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
                        'AWSCognitoIdentityService.GetIdentityPoolRoles',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'GetOpenIdToken' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetOpenIdTokenResponse',
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
                    'default' => 'AWSCognitoIdentityService.GetOpenIdToken',
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Logins' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'An exception thrown when a dependent service such as Facebook or Twitter is not responding',
                    'class' => 'ExternalServiceException',
                ],
            ],
        ],
        'GetOpenIdTokenForDeveloperIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetOpenIdTokenForDeveloperIdentityResponse',
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
                        'AWSCognitoIdentityService.GetOpenIdTokenForDeveloperIdentity',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Logins' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
                'TokenDuration' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 86400,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'The provided developer user identifier is already registered with Cognito under a different identity ID.',
                    'class' => 'DeveloperUserAlreadyRegisteredException',
                ],
            ],
        ],
        'ListIdentities' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListIdentitiesResponse',
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
                    'default' => 'AWSCognitoIdentityService.ListIdentities',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'MaxResults' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 60,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'HideDisabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'ListIdentityPools' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListIdentityPoolsResponse',
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
                    'default' => 'AWSCognitoIdentityService.ListIdentityPools',
                ],
                'MaxResults' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 60,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'LookupDeveloperIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'LookupDeveloperIdentityResponse',
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
                        'AWSCognitoIdentityService.LookupDeveloperIdentity',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DeveloperUserIdentifier' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'MaxResults' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 60,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'MergeDeveloperIdentities' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'MergeDeveloperIdentitiesResponse',
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
                        'AWSCognitoIdentityService.MergeDeveloperIdentities',
                ],
                'SourceUserIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DestinationUserIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DeveloperProviderName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'SetIdentityPoolRoles' => [
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
                        'AWSCognitoIdentityService.SetIdentityPoolRoles',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Roles' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 20,
                        'data' => [
                            'shape_name' => 'RoleType',
                            'key_pattern' => '/(un)?authenticated/',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Thrown if there are parallel requests to modify a resource.',
                    'class' => 'ConcurrentModificationException',
                ],
            ],
        ],
        'UnlinkDeveloperIdentity' => [
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
                        'AWSCognitoIdentityService.UnlinkDeveloperIdentity',
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DeveloperProviderName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DeveloperUserIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
            ],
        ],
        'UnlinkIdentity' => [
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
                    'default' => 'AWSCognitoIdentityService.UnlinkIdentity',
                ],
                'IdentityId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Logins' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
                'LoginsToRemove' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'IdentityProviderName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'An exception thrown when a dependent service such as Facebook or Twitter is not responding',
                    'class' => 'ExternalServiceException',
                ],
            ],
        ],
        'UpdateIdentityPool' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'IdentityPool',
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
                    'default' => 'AWSCognitoIdentityService.UpdateIdentityPool',
                ],
                'IdentityPoolId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'IdentityPoolName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'AllowUnauthenticatedIdentities' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'SupportedLoginProviders' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'minLength' => 1,
                        'data' => [
                            'shape_name' => 'IdentityProviderName',
                            'key_pattern' => '/[\\w._/-]+/',
                        ],
                    ],
                ],
                'DeveloperProviderName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'OpenIdConnectProviderARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ARNString',
                        'type' => 'string',
                        'minLength' => 20,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Thrown for missing or bad input parameter(s).',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'Thrown when the requested resource (for example, a dataset or record) does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Thrown when a user is not authorized to access the requested resource.',
                    'class' => 'NotAuthorizedException',
                ],
                [
                    'reason' =>
                        'Thrown when a user tries to use a login which is already linked to another account.',
                    'class' => 'ResourceConflictException',
                ],
                [
                    'reason' => 'Thrown when a request is throttled.',
                    'class' => 'TooManyRequestsException',
                ],
                [
                    'reason' =>
                        'Thrown when the service encounters an error during processing the request.',
                    'class' => 'InternalErrorException',
                ],
                [
                    'reason' =>
                        'Thrown if there are parallel requests to modify a resource.',
                    'class' => 'ConcurrentModificationException',
                ],
            ],
        ],
    ],
    'models' => [
        'IdentityPool' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IdentityPoolName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AllowUnauthenticatedIdentities' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'SupportedLoginProviders' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'DeveloperProviderName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'OpenIdConnectProviderARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ARNString',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DeleteIdentitiesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UnprocessedIdentityIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'UnprocessedIdentityId',
                        'type' => 'object',
                        'properties' => [
                            'IdentityId' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'IdentityDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Logins' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'IdentityProviderName',
                        'type' => 'string',
                    ],
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastModifiedDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetCredentialsForIdentityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretKey' => [
                            'type' => 'string',
                        ],
                        'SessionToken' => [
                            'type' => 'string',
                        ],
                        'Expiration' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetIdResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetIdentityPoolRolesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Roles' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetOpenIdTokenResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Token' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetOpenIdTokenForDeveloperIdentityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Token' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListIdentitiesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPoolId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Identities' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'IdentityDescription',
                        'type' => 'object',
                        'properties' => [
                            'IdentityId' => [
                                'type' => 'string',
                            ],
                            'Logins' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IdentityProviderName',
                                    'type' => 'string',
                                ],
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'LastModifiedDate' => [
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
        'ListIdentityPoolsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityPools' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'IdentityPoolShortDescription',
                        'type' => 'object',
                        'properties' => [
                            'IdentityPoolId' => [
                                'type' => 'string',
                            ],
                            'IdentityPoolName' => [
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
        'LookupDeveloperIdentityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DeveloperUserIdentifierList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DeveloperUserIdentifier',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'MergeDeveloperIdentitiesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IdentityId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
];
