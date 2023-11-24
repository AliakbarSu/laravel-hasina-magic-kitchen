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
    'apiVersion' => '2011-06-15',
    'endpointPrefix' => 'sts',
    'serviceFullName' => 'AWS Security Token Service',
    'serviceAbbreviation' => 'AWS STS',
    'serviceType' => 'query',
    'globalEndpoint' => 'sts.amazonaws.com',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Sts',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'sts.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AssumeRole' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AssumeRoleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssumeRole',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'RoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'RoleSessionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 2,
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DurationSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 900,
                    'maximum' => 3600,
                ],
                'ExternalId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 2,
                ],
                'SerialNumber' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
                'TokenCode' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was too large. The error message describes how big the policy document is, in packed form, as a percentage of what the API allows.',
                    'class' => 'PackedPolicyTooLargeException',
                ],
            ],
        ],
        'AssumeRoleWithSAML' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AssumeRoleWithSAMLResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssumeRoleWithSAML',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'RoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'PrincipalArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'SAMLAssertion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DurationSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 900,
                    'maximum' => 3600,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was too large. The error message describes how big the policy document is, in packed form, as a percentage of what the API allows.',
                    'class' => 'PackedPolicyTooLargeException',
                ],
                [
                    'reason' =>
                        'The identity provider (IdP) reported that authentication failed. This might be because the claim is invalid. If this error is returned for the AssumeRoleWithWebIdentity operation, it can also mean that the claim has expired or has been explicitly revoked.',
                    'class' => 'IDPRejectedClaimException',
                ],
                [
                    'reason' =>
                        'The web identity token that was passed could not be validated by AWS. Get a new identity token from the identity provider and then retry the request.',
                    'class' => 'InvalidIdentityTokenException',
                ],
                [
                    'reason' =>
                        'The web identity token that was passed is expired or is not valid. Get a new identity token from the identity provider and then retry the request.',
                    'class' => 'ExpiredTokenException',
                ],
            ],
        ],
        'AssumeRoleWithWebIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AssumeRoleWithWebIdentityResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AssumeRoleWithWebIdentity',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'RoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'RoleSessionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 2,
                ],
                'WebIdentityToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'ProviderId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DurationSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 900,
                    'maximum' => 3600,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was too large. The error message describes how big the policy document is, in packed form, as a percentage of what the API allows.',
                    'class' => 'PackedPolicyTooLargeException',
                ],
                [
                    'reason' =>
                        'The identity provider (IdP) reported that authentication failed. This might be because the claim is invalid. If this error is returned for the AssumeRoleWithWebIdentity operation, it can also mean that the claim has expired or has been explicitly revoked.',
                    'class' => 'IDPRejectedClaimException',
                ],
                [
                    'reason' =>
                        'The request could not be fulfilled because the non-AWS identity provider (IDP) that was asked to verify the incoming identity token could not be reached. This is often a transient error caused by network conditions. Retry the request a limited number of times so that you don\'t exceed the request rate. If the error persists, the non-AWS identity provider might be down or not responding.',
                    'class' => 'IDPCommunicationErrorException',
                ],
                [
                    'reason' =>
                        'The web identity token that was passed could not be validated by AWS. Get a new identity token from the identity provider and then retry the request.',
                    'class' => 'InvalidIdentityTokenException',
                ],
                [
                    'reason' =>
                        'The web identity token that was passed is expired or is not valid. Get a new identity token from the identity provider and then retry the request.',
                    'class' => 'ExpiredTokenException',
                ],
            ],
        ],
        'DecodeAuthorizationMessage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DecodeAuthorizationMessageResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DecodeAuthorizationMessage',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'EncodedMessage' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The error returned if the message passed to DecodeAuthorizationMessage was invalid. This can happen if the token contains invalid characters, such as linebreaks.',
                    'class' => 'InvalidAuthorizationMessageException',
                ],
            ],
        ],
        'GetFederationToken' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetFederationTokenResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetFederationToken',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 2,
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DurationSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 900,
                    'maximum' => 129600,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was too large. The error message describes how big the policy document is, in packed form, as a percentage of what the API allows.',
                    'class' => 'PackedPolicyTooLargeException',
                ],
            ],
        ],
        'GetSessionToken' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSessionTokenResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSessionToken',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2011-06-15',
                ],
                'DurationSeconds' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 900,
                    'maximum' => 129600,
                ],
                'SerialNumber' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
                'TokenCode' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
            ],
        ],
    ],
    'models' => [
        'AssumeRoleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
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
                'AssumedRoleUser' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AssumedRoleId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'PackedPolicySize' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'AssumeRoleWithSAMLResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
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
                'AssumedRoleUser' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AssumedRoleId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'PackedPolicySize' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Subject' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SubjectType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Issuer' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Audience' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NameQualifier' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'AssumeRoleWithWebIdentityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
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
                'SubjectFromWebIdentityToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'AssumedRoleUser' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AssumedRoleId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'PackedPolicySize' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Provider' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Audience' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DecodeAuthorizationMessageResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DecodedMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetFederationTokenResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
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
                'FederatedUser' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'FederatedUserId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'PackedPolicySize' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetSessionTokenResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Credentials' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
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
    ],
];
