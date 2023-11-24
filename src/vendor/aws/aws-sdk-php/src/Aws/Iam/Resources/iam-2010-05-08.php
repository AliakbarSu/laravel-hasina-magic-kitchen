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
    'apiVersion' => '2010-05-08',
    'endpointPrefix' => 'iam',
    'serviceFullName' => 'AWS Identity and Access Management',
    'serviceAbbreviation' => 'IAM',
    'serviceType' => 'query',
    'globalEndpoint' => 'iam.amazonaws.com',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Iam',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'iam.us-gov.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddClientIDToOpenIDConnectProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddClientIDToOpenIDConnectProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OpenIDConnectProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'ClientID' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'AddRoleToInstanceProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddRoleToInstanceProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'InstanceProfileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'AddUserToGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddUserToGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'AttachGroupPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachGroupPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'AttachRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'AttachUserPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AttachUserPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ChangePassword' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ChangePassword',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OldPassword' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewPassword' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the type of user for the transaction was incorrect.',
                    'class' => 'InvalidUserTypeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the provided password did not meet the requirements imposed by the account password policy.',
                    'class' => 'PasswordPolicyViolationException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateAccessKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateAccessKeyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateAccessKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateAccountAlias' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateAccountAlias',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'AccountAlias' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateGroupResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateInstanceProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateInstanceProfileResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateInstanceProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'InstanceProfileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateLoginProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateLoginProfileResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateLoginProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PasswordResetRequired' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the provided password did not meet the requirements imposed by the account password policy.',
                    'class' => 'PasswordPolicyViolationException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateOpenIDConnectProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateOpenIDConnectProviderResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateOpenIDConnectProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Url' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ClientIDList' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ClientIDList.member',
                    'items' => [
                        'name' => 'clientIDType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ThumbprintList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ThumbprintList.member',
                    'items' => [
                        'name' => 'thumbprintType',
                        'type' => 'string',
                        'minLength' => 40,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreatePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreatePolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreatePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreatePolicyVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreatePolicyVersionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreatePolicyVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SetAsDefault' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateRole' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateRoleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateRole',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AssumeRolePolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateSAMLProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateSAMLProviderResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSAMLProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'SAMLMetadataDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1000,
                ],
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateUser' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateUserResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateUser',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'CreateVirtualMFADevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateVirtualMFADeviceResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateVirtualMFADevice',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VirtualMFADeviceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeactivateMFADevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeactivateMFADevice',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SerialNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteAccessKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAccessKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AccessKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 16,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteAccountAlias' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAccountAlias',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'AccountAlias' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteAccountPasswordPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteAccountPasswordPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteGroupPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteGroupPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteInstanceProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteInstanceProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'InstanceProfileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteLoginProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteLoginProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteOpenIDConnectProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteOpenIDConnectProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OpenIDConnectProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeletePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeletePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeletePolicyVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeletePolicyVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'VersionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteRole' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteRole',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteSAMLProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSAMLProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'SAMLProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteSSHPublicKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSSHPublicKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SSHPublicKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
            ],
        ],
        'DeleteServerCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteServerCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'ServerCertificateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteSigningCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSigningCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CertificateId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 24,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteUser' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteUser',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteUserPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteUserPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DeleteVirtualMFADevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVirtualMFADevice',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'SerialNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to delete a resource that has attached subordinate entities. The error message describes these entities.',
                    'class' => 'DeleteConflictException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DetachGroupPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachGroupPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DetachRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'DetachUserPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DetachUserPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'EnableMFADevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableMFADevice',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SerialNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
                'AuthenticationCode1' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
                'AuthenticationCode2' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the authentication code was not recognized. The error message describes the specific error.',
                    'class' => 'InvalidAuthenticationCodeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GenerateCredentialReport' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GenerateCredentialReportResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GenerateCredentialReport',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetAccessKeyLastUsed' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetAccessKeyLastUsedResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetAccessKeyLastUsed',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'AccessKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 16,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
            ],
        ],
        'GetAccountAuthorizationDetails' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetAccountAuthorizationDetailsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetAccountAuthorizationDetails',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Filter' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filter.member',
                    'items' => [
                        'name' => 'EntityType',
                        'type' => 'string',
                    ],
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetAccountPasswordPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetAccountPasswordPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetAccountPasswordPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetAccountSummary' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetAccountSummaryResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetAccountSummary',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetContextKeysForCustomPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetContextKeysForPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetContextKeysForCustomPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyInputList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyInputList.member',
                    'items' => [
                        'name' => 'policyDocumentType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetContextKeysForPrincipalPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetContextKeysForPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetContextKeysForPrincipalPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicySourceArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'PolicyInputList' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyInputList.member',
                    'items' => [
                        'name' => 'policyDocumentType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
            ],
        ],
        'GetCredentialReport' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetCredentialReportResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetCredentialReport',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the credential report does not exist. To generate a credential report, use GenerateCredentialReport.',
                    'class' => 'CredentialReportNotPresentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the most recent credential report has expired. To generate a new credential report, use GenerateCredentialReport. For more information about credential report expiration, see Getting Credential Reports in the IAM User Guide.',
                    'class' => 'CredentialReportExpiredException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the credential report is still being generated.',
                    'class' => 'CredentialReportNotReadyException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetGroupResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetGroupPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetGroupPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetGroupPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetInstanceProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetInstanceProfileResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetInstanceProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'InstanceProfileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetLoginProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetLoginProfileResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetLoginProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetOpenIDConnectProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetOpenIDConnectProviderResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetOpenIDConnectProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OpenIDConnectProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetPolicyVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetPolicyVersionResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetPolicyVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'VersionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetRole' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetRoleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetRole',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetRolePolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetSAMLProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSAMLProviderResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSAMLProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'SAMLProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetSSHPublicKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSSHPublicKeyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSSHPublicKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SSHPublicKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'Encoding' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the public key encoding format is unsupported or unrecognized.',
                    'class' => 'UnrecognizedPublicKeyEncodingException',
                ],
            ],
        ],
        'GetServerCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetServerCertificateResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetServerCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'ServerCertificateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetUser' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetUserResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetUser',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'GetUserPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetUserPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetUserPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListAccessKeys' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAccessKeysResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAccessKeys',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListAccountAliases' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAccountAliasesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAccountAliases',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListAttachedGroupPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAttachedGroupPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAttachedGroupPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListAttachedRolePolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAttachedRolePoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAttachedRolePolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListAttachedUserPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAttachedUserPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAttachedUserPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListEntitiesForPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListEntitiesForPolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListEntitiesForPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'EntityFilter' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListGroupPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListGroupPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListGroupPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListGroupsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListGroupsForUser' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListGroupsForUserResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListGroupsForUser',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListInstanceProfiles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListInstanceProfilesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListInstanceProfiles',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListInstanceProfilesForRole' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListInstanceProfilesForRoleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListInstanceProfilesForRole',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListMFADevices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListMFADevicesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListMFADevices',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListOpenIDConnectProviders' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListOpenIDConnectProvidersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListOpenIDConnectProviders',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Scope' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OnlyAttached' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListPolicyVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListPolicyVersionsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListPolicyVersions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListRolePolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListRolePoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListRolePolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListRoles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListRolesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListRoles',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListSAMLProviders' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListSAMLProvidersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListSAMLProviders',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListSSHPublicKeys' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListSSHPublicKeysResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListSSHPublicKeys',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
            ],
        ],
        'ListServerCertificates' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListServerCertificatesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListServerCertificates',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListSigningCertificates' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListSigningCertificatesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListSigningCertificates',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListUserPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListUserPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListUserPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListUsers' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListUsersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListUsers',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PathPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ListVirtualMFADevices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListVirtualMFADevicesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListVirtualMFADevices',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'AssignmentStatus' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
            ],
        ],
        'PutGroupPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutGroupPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'PutRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'PutUserPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutUserPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'RemoveClientIDFromOpenIDConnectProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveClientIDFromOpenIDConnectProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OpenIDConnectProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'ClientID' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'RemoveRoleFromInstanceProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveRoleFromInstanceProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'InstanceProfileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'RemoveUserFromGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveUserFromGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'ResyncMFADevice' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResyncMFADevice',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SerialNumber' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 9,
                ],
                'AuthenticationCode1' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
                'AuthenticationCode2' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 6,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the authentication code was not recognized. The error message describes the specific error.',
                    'class' => 'InvalidAuthenticationCodeException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'SetDefaultPolicyVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetDefaultPolicyVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'VersionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'SimulateCustomPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SimulatePolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SimulateCustomPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicyInputList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyInputList.member',
                    'items' => [
                        'name' => 'policyDocumentType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ActionNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ActionNames.member',
                    'items' => [
                        'name' => 'ActionNameType',
                        'type' => 'string',
                        'minLength' => 3,
                    ],
                ],
                'ResourceArns' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceArns.member',
                    'items' => [
                        'name' => 'ResourceNameType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ResourcePolicy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ResourceOwner' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CallerArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ContextEntries' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ContextEntries.member',
                    'items' => [
                        'name' => 'ContextEntry',
                        'type' => 'object',
                        'properties' => [
                            'ContextKeyName' => [
                                'type' => 'string',
                                'minLength' => 5,
                            ],
                            'ContextKeyValues' => [
                                'type' => 'array',
                                'sentAs' => 'ContextKeyValues.member',
                                'items' => [
                                    'name' => 'ContextKeyValueType',
                                    'type' => 'string',
                                ],
                            ],
                            'ContextKeyType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'ResourceHandlingOption' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request failed because a provided policy could not be successfully evaluated. An additional detail message indicates the source of the failure.',
                    'class' => 'PolicyEvaluationException',
                ],
            ],
        ],
        'SimulatePrincipalPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SimulatePolicyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SimulatePrincipalPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'PolicySourceArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'PolicyInputList' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyInputList.member',
                    'items' => [
                        'name' => 'policyDocumentType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ActionNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ActionNames.member',
                    'items' => [
                        'name' => 'ActionNameType',
                        'type' => 'string',
                        'minLength' => 3,
                    ],
                ],
                'ResourceArns' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ResourceArns.member',
                    'items' => [
                        'name' => 'ResourceNameType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'ResourcePolicy' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ResourceOwner' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CallerArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ContextEntries' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ContextEntries.member',
                    'items' => [
                        'name' => 'ContextEntry',
                        'type' => 'object',
                        'properties' => [
                            'ContextKeyName' => [
                                'type' => 'string',
                                'minLength' => 5,
                            ],
                            'ContextKeyValues' => [
                                'type' => 'array',
                                'sentAs' => 'ContextKeyValues.member',
                                'items' => [
                                    'name' => 'ContextKeyValueType',
                                    'type' => 'string',
                                ],
                            ],
                            'ContextKeyType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'ResourceHandlingOption' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request failed because a provided policy could not be successfully evaluated. An additional detail message indicates the source of the failure.',
                    'class' => 'PolicyEvaluationException',
                ],
            ],
        ],
        'UpdateAccessKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateAccessKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'AccessKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 16,
                ],
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateAccountPasswordPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateAccountPasswordPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'MinimumPasswordLength' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 6,
                    'maximum' => 128,
                ],
                'RequireSymbols' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RequireNumbers' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RequireUppercaseCharacters' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'RequireLowercaseCharacters' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AllowUsersToChangePassword' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'MaxPasswordAge' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 1095,
                ],
                'PasswordReusePrevention' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                    'minimum' => 1,
                    'maximum' => 24,
                ],
                'HardExpiry' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateAssumeRolePolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateAssumeRolePolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'RoleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PolicyDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the policy document was malformed. The error message describes the specific error.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'GroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewPath' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateLoginProfile' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateLoginProfile',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Password' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PasswordResetRequired' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the provided password did not meet the requirements imposed by the account password policy.',
                    'class' => 'PasswordPolicyViolationException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateOpenIDConnectProviderThumbprint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateOpenIDConnectProviderThumbprint',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'OpenIDConnectProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'ThumbprintList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ThumbprintList.member',
                    'items' => [
                        'name' => 'thumbprintType',
                        'type' => 'string',
                        'minLength' => 40,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateSAMLProvider' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateSAMLProviderResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateSAMLProvider',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'SAMLMetadataDocument' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1000,
                ],
                'SAMLProviderArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an invalid or out-of-range value was supplied for an input parameter.',
                    'class' => 'InvalidInputException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateSSHPublicKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateSSHPublicKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SSHPublicKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 20,
                ],
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
            ],
        ],
        'UpdateServerCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateServerCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'ServerCertificateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewPath' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewServerCertificateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateSigningCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateSigningCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CertificateId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 24,
                ],
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UpdateUser' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateUser',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewPath' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'NewUserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that is temporarily unmodifiable, such as a user name that was deleted and then recreated. The error indicates that the request is likely to succeed if you try again after waiting several minutes. The error message describes the entity.',
                    'class' => 'EntityTemporarilyUnmodifiableException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UploadSSHPublicKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UploadSSHPublicKeyResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UploadSSHPublicKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SSHPublicKeyBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the public key is malformed or otherwise invalid.',
                    'class' => 'InvalidPublicKeyException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the SSH public key is already associated with the specified IAM user.',
                    'class' => 'DuplicateSSHPublicKeyException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the public key encoding format is unsupported or unrecognized.',
                    'class' => 'UnrecognizedPublicKeyEncodingException',
                ],
            ],
        ],
        'UploadServerCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UploadServerCertificateResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UploadServerCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'Path' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'ServerCertificateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CertificateBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'PrivateKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CertificateChain' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the certificate was malformed or expired. The error message describes the specific error.',
                    'class' => 'MalformedCertificateException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the public key certificate and the private key do not match.',
                    'class' => 'KeyPairMismatchException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
        'UploadSigningCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UploadSigningCertificateResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UploadSigningCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-05-08',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'CertificateBody' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because it attempted to create resources beyond the current AWS account limits. The error message describes the limit exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'EntityAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the certificate was malformed or expired. The error message describes the specific error.',
                    'class' => 'MalformedCertificateException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the certificate is invalid.',
                    'class' => 'InvalidCertificateException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the same certificate is associated with an IAM user in the account.',
                    'class' => 'DuplicateCertificateException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it referenced an entity that does not exist. The error message describes the entity.',
                    'class' => 'NoSuchEntityException',
                ],
                [
                    'reason' =>
                        'The request processing has failed because of an unknown error, exception or failure.',
                    'class' => 'ServiceFailureException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateAccessKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccessKey' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'AccessKeyId' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SecretAccessKey' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateGroupResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Group' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'GroupName' => [
                            'type' => 'string',
                        ],
                        'GroupId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateInstanceProfileResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceProfile' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'InstanceProfileName' => [
                            'type' => 'string',
                        ],
                        'InstanceProfileId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'Roles' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Role',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Path' => [
                                        'type' => 'string',
                                    ],
                                    'RoleName' => [
                                        'type' => 'string',
                                    ],
                                    'RoleId' => [
                                        'type' => 'string',
                                    ],
                                    'Arn' => [
                                        'type' => 'string',
                                    ],
                                    'CreateDate' => [
                                        'type' => 'string',
                                    ],
                                    'AssumeRolePolicyDocument' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateLoginProfileResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoginProfile' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'PasswordResetRequired' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'CreateOpenIDConnectProviderResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OpenIDConnectProviderArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreatePolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'PolicyName' => [
                            'type' => 'string',
                        ],
                        'PolicyId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Path' => [
                            'type' => 'string',
                        ],
                        'DefaultVersionId' => [
                            'type' => 'string',
                        ],
                        'AttachmentCount' => [
                            'type' => 'numeric',
                        ],
                        'IsAttachable' => [
                            'type' => 'boolean',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'UpdateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreatePolicyVersionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyVersion' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Document' => [
                            'type' => 'string',
                        ],
                        'VersionId' => [
                            'type' => 'string',
                        ],
                        'IsDefaultVersion' => [
                            'type' => 'boolean',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateRoleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Role' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'RoleName' => [
                            'type' => 'string',
                        ],
                        'RoleId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'AssumeRolePolicyDocument' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateSAMLProviderResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SAMLProviderArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreateUserResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'User' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'UserId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'PasswordLastUsed' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateVirtualMFADeviceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VirtualMFADevice' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'SerialNumber' => [
                            'type' => 'string',
                        ],
                        'Base32StringSeed' => [
                            'type' => 'string',
                        ],
                        'QRCodePNG' => [
                            'type' => 'string',
                        ],
                        'User' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'type' => 'string',
                                ],
                                'UserName' => [
                                    'type' => 'string',
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                ],
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'CreateDate' => [
                                    'type' => 'string',
                                ],
                                'PasswordLastUsed' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'EnableDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GenerateCredentialReportResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'State' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetAccessKeyLastUsedResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UserName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'AccessKeyLastUsed' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'LastUsedDate' => [
                            'type' => 'string',
                        ],
                        'ServiceName' => [
                            'type' => 'string',
                        ],
                        'Region' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetAccountAuthorizationDetailsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UserDetailList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'UserDetail',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'UserPolicyList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyDetail',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'GroupList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'groupNameType',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'AttachedManagedPolicies' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttachedPolicy',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyArn' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'GroupDetailList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'GroupDetail',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'GroupName' => [
                                'type' => 'string',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'GroupPolicyList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyDetail',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'AttachedManagedPolicies' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttachedPolicy',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyArn' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RoleDetailList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'RoleDetail',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'RoleName' => [
                                'type' => 'string',
                            ],
                            'RoleId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'AssumeRolePolicyDocument' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'InstanceProfile',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Path' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceProfileName' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceProfileId' => [
                                            'type' => 'string',
                                        ],
                                        'Arn' => [
                                            'type' => 'string',
                                        ],
                                        'CreateDate' => [
                                            'type' => 'string',
                                        ],
                                        'Roles' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Role',
                                                'type' => 'object',
                                                'sentAs' => 'member',
                                                'properties' => [
                                                    'Path' => [
                                                        'type' => 'string',
                                                    ],
                                                    'RoleName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'RoleId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Arn' => [
                                                        'type' => 'string',
                                                    ],
                                                    'CreateDate' => [
                                                        'type' => 'string',
                                                    ],
                                                    'AssumeRolePolicyDocument' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RolePolicyList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyDetail',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'AttachedManagedPolicies' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AttachedPolicy',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'PolicyName' => [
                                            'type' => 'string',
                                        ],
                                        'PolicyArn' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Policies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ManagedPolicyDetail',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'Path' => [
                                'type' => 'string',
                            ],
                            'DefaultVersionId' => [
                                'type' => 'string',
                            ],
                            'AttachmentCount' => [
                                'type' => 'numeric',
                            ],
                            'IsAttachable' => [
                                'type' => 'boolean',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                            ],
                            'PolicyVersionList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PolicyVersion',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Document' => [
                                            'type' => 'string',
                                        ],
                                        'VersionId' => [
                                            'type' => 'string',
                                        ],
                                        'IsDefaultVersion' => [
                                            'type' => 'boolean',
                                        ],
                                        'CreateDate' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetAccountPasswordPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PasswordPolicy' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'MinimumPasswordLength' => [
                            'type' => 'numeric',
                        ],
                        'RequireSymbols' => [
                            'type' => 'boolean',
                        ],
                        'RequireNumbers' => [
                            'type' => 'boolean',
                        ],
                        'RequireUppercaseCharacters' => [
                            'type' => 'boolean',
                        ],
                        'RequireLowercaseCharacters' => [
                            'type' => 'boolean',
                        ],
                        'AllowUsersToChangePassword' => [
                            'type' => 'boolean',
                        ],
                        'ExpirePasswords' => [
                            'type' => 'boolean',
                        ],
                        'MaxPasswordAge' => [
                            'type' => 'numeric',
                        ],
                        'PasswordReusePrevention' => [
                            'type' => 'numeric',
                        ],
                        'HardExpiry' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'GetAccountSummaryResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SummaryMap' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlMap' => [
                            'Users',
                            'UsersQuota',
                            'Groups',
                            'GroupsQuota',
                            'ServerCertificates',
                            'ServerCertificatesQuota',
                            'UserPolicySizeQuota',
                            'GroupPolicySizeQuota',
                            'GroupsPerUserQuota',
                            'SigningCertificatesPerUserQuota',
                            'AccessKeysPerUserQuota',
                            'MFADevices',
                            'MFADevicesInUse',
                            'AccountMFAEnabled',
                            'AccountAccessKeysPresent',
                            'AccountSigningCertificatesPresent',
                            'AttachedPoliciesPerGroupQuota',
                            'AttachedPoliciesPerRoleQuota',
                            'AttachedPoliciesPerUserQuota',
                            'Policies',
                            'PoliciesQuota',
                            'PolicySizeQuota',
                            'PolicyVersionsInUse',
                            'PolicyVersionsInUseQuota',
                            'VersionsPerPolicyQuota',
                        ],
                    ],
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
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetContextKeysForPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ContextKeyNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ContextKeyNameType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'GetCredentialReportResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Content' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReportFormat' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'GeneratedTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetGroupResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Group' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'GroupName' => [
                            'type' => 'string',
                        ],
                        'GroupId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Users' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'User',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'PasswordLastUsed' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetGroupPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GroupName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyDocument' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetInstanceProfileResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceProfile' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'InstanceProfileName' => [
                            'type' => 'string',
                        ],
                        'InstanceProfileId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'Roles' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Role',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Path' => [
                                        'type' => 'string',
                                    ],
                                    'RoleName' => [
                                        'type' => 'string',
                                    ],
                                    'RoleId' => [
                                        'type' => 'string',
                                    ],
                                    'Arn' => [
                                        'type' => 'string',
                                    ],
                                    'CreateDate' => [
                                        'type' => 'string',
                                    ],
                                    'AssumeRolePolicyDocument' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLoginProfileResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoginProfile' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'PasswordResetRequired' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'GetOpenIDConnectProviderResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Url' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ClientIDList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'clientIDType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'ThumbprintList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'thumbprintType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'CreateDate' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'PolicyName' => [
                            'type' => 'string',
                        ],
                        'PolicyId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Path' => [
                            'type' => 'string',
                        ],
                        'DefaultVersionId' => [
                            'type' => 'string',
                        ],
                        'AttachmentCount' => [
                            'type' => 'numeric',
                        ],
                        'IsAttachable' => [
                            'type' => 'boolean',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'UpdateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetPolicyVersionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyVersion' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Document' => [
                            'type' => 'string',
                        ],
                        'VersionId' => [
                            'type' => 'string',
                        ],
                        'IsDefaultVersion' => [
                            'type' => 'boolean',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetRoleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Role' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'RoleName' => [
                            'type' => 'string',
                        ],
                        'RoleId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'AssumeRolePolicyDocument' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetRolePolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RoleName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyDocument' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetSAMLProviderResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SAMLMetadataDocument' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreateDate' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ValidUntil' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetSSHPublicKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SSHPublicKey' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'SSHPublicKeyId' => [
                            'type' => 'string',
                        ],
                        'Fingerprint' => [
                            'type' => 'string',
                        ],
                        'SSHPublicKeyBody' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'UploadDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetServerCertificateResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServerCertificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ServerCertificateMetadata' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'type' => 'string',
                                ],
                                'ServerCertificateName' => [
                                    'type' => 'string',
                                ],
                                'ServerCertificateId' => [
                                    'type' => 'string',
                                ],
                                'Arn' => [
                                    'type' => 'string',
                                ],
                                'UploadDate' => [
                                    'type' => 'string',
                                ],
                                'Expiration' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'CertificateBody' => [
                            'type' => 'string',
                        ],
                        'CertificateChain' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetUserResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'User' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'UserId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreateDate' => [
                            'type' => 'string',
                        ],
                        'PasswordLastUsed' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'GetUserPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UserName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PolicyDocument' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAccessKeysResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccessKeyMetadata' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AccessKeyMetadata',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAccountAliasesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccountAliases' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'accountAliasType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAttachedGroupPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AttachedPolicies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AttachedPolicy',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAttachedRolePoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AttachedPolicies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AttachedPolicy',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAttachedUserPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AttachedPolicies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AttachedPolicy',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListEntitiesForPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyGroup',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'GroupName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'PolicyUsers' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyUser',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'UserName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'PolicyRoles' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyRole',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'RoleName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListGroupPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'policyNameType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListGroupsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Groups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Group',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'GroupName' => [
                                'type' => 'string',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListGroupsForUserResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Groups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Group',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'GroupName' => [
                                'type' => 'string',
                            ],
                            'GroupId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListInstanceProfilesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceProfiles' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'InstanceProfile',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileName' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'Roles' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Role',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Path' => [
                                            'type' => 'string',
                                        ],
                                        'RoleName' => [
                                            'type' => 'string',
                                        ],
                                        'RoleId' => [
                                            'type' => 'string',
                                        ],
                                        'Arn' => [
                                            'type' => 'string',
                                        ],
                                        'CreateDate' => [
                                            'type' => 'string',
                                        ],
                                        'AssumeRolePolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListInstanceProfilesForRoleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceProfiles' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'InstanceProfile',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileName' => [
                                'type' => 'string',
                            ],
                            'InstanceProfileId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'Roles' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Role',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'Path' => [
                                            'type' => 'string',
                                        ],
                                        'RoleName' => [
                                            'type' => 'string',
                                        ],
                                        'RoleId' => [
                                            'type' => 'string',
                                        ],
                                        'Arn' => [
                                            'type' => 'string',
                                        ],
                                        'CreateDate' => [
                                            'type' => 'string',
                                        ],
                                        'AssumeRolePolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListMFADevicesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MFADevices' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'MFADevice',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'SerialNumber' => [
                                'type' => 'string',
                            ],
                            'EnableDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListOpenIDConnectProvidersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OpenIDConnectProviderList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'OpenIDConnectProviderListEntry',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Arn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policies' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Policy',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'PolicyName' => [
                                'type' => 'string',
                            ],
                            'PolicyId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'Path' => [
                                'type' => 'string',
                            ],
                            'DefaultVersionId' => [
                                'type' => 'string',
                            ],
                            'AttachmentCount' => [
                                'type' => 'numeric',
                            ],
                            'IsAttachable' => [
                                'type' => 'boolean',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'UpdateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListPolicyVersionsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Versions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyVersion',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Document' => [
                                'type' => 'string',
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                            'IsDefaultVersion' => [
                                'type' => 'boolean',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListRolePoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'policyNameType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListRolesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Roles' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Role',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'RoleName' => [
                                'type' => 'string',
                            ],
                            'RoleId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'AssumeRolePolicyDocument' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListSAMLProvidersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SAMLProviderList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SAMLProviderListEntry',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'ValidUntil' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSSHPublicKeysResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SSHPublicKeys' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SSHPublicKeyMetadata',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'SSHPublicKeyId' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'UploadDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListServerCertificatesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServerCertificateMetadataList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ServerCertificateMetadata',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'ServerCertificateName' => [
                                'type' => 'string',
                            ],
                            'ServerCertificateId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'UploadDate' => [
                                'type' => 'string',
                            ],
                            'Expiration' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListSigningCertificatesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Certificates' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SigningCertificate',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'CertificateId' => [
                                'type' => 'string',
                            ],
                            'CertificateBody' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'UploadDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListUserPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'policyNameType',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListUsersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Users' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'User',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'CreateDate' => [
                                'type' => 'string',
                            ],
                            'PasswordLastUsed' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListVirtualMFADevicesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VirtualMFADevices' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'VirtualMFADevice',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'SerialNumber' => [
                                'type' => 'string',
                            ],
                            'Base32StringSeed' => [
                                'type' => 'string',
                            ],
                            'QRCodePNG' => [
                                'type' => 'string',
                            ],
                            'User' => [
                                'type' => 'object',
                                'properties' => [
                                    'Path' => [
                                        'type' => 'string',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Arn' => [
                                        'type' => 'string',
                                    ],
                                    'CreateDate' => [
                                        'type' => 'string',
                                    ],
                                    'PasswordLastUsed' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'EnableDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SimulatePolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EvaluationResults' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EvaluationResult',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'EvalActionName' => [
                                'type' => 'string',
                            ],
                            'EvalResourceName' => [
                                'type' => 'string',
                            ],
                            'EvalDecision' => [
                                'type' => 'string',
                            ],
                            'MatchedStatements' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Statement',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'SourcePolicyId' => [
                                            'type' => 'string',
                                        ],
                                        'SourcePolicyType' => [
                                            'type' => 'string',
                                        ],
                                        'StartPosition' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Line' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Column' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                        'EndPosition' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Line' => [
                                                    'type' => 'numeric',
                                                ],
                                                'Column' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'MissingContextValues' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ContextKeyNameType',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'EvalDecisionDetails' => [
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
                            'ResourceSpecificResults' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ResourceSpecificResult',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'EvalResourceName' => [
                                            'type' => 'string',
                                        ],
                                        'EvalResourceDecision' => [
                                            'type' => 'string',
                                        ],
                                        'MatchedStatements' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Statement',
                                                'type' => 'object',
                                                'sentAs' => 'member',
                                                'properties' => [
                                                    'SourcePolicyId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SourcePolicyType' => [
                                                        'type' => 'string',
                                                    ],
                                                    'StartPosition' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Line' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Column' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                        ],
                                                    ],
                                                    'EndPosition' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Line' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                            'Column' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'MissingContextValues' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'ContextKeyNameType',
                                                'type' => 'string',
                                                'sentAs' => 'member',
                                            ],
                                        ],
                                        'EvalDecisionDetails' => [
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
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'UpdateSAMLProviderResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SAMLProviderArn' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'UploadSSHPublicKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SSHPublicKey' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'SSHPublicKeyId' => [
                            'type' => 'string',
                        ],
                        'Fingerprint' => [
                            'type' => 'string',
                        ],
                        'SSHPublicKeyBody' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'UploadDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'UploadServerCertificateResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServerCertificateMetadata' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Path' => [
                            'type' => 'string',
                        ],
                        'ServerCertificateName' => [
                            'type' => 'string',
                        ],
                        'ServerCertificateId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'UploadDate' => [
                            'type' => 'string',
                        ],
                        'Expiration' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'UploadSigningCertificateResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Certificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'UserName' => [
                            'type' => 'string',
                        ],
                        'CertificateId' => [
                            'type' => 'string',
                        ],
                        'CertificateBody' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'UploadDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'GetGroup' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Users',
        ],
        'ListAccessKeys' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'AccessKeyMetadata',
        ],
        'ListAccountAliases' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'AccountAliases',
        ],
        'ListAttachedGroupPolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'AttachedPolicies',
        ],
        'ListAttachedRolePolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'AttachedPolicies',
        ],
        'ListAttachedUserPolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'AttachedPolicies',
        ],
        'ListEntitiesForPolicy' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => ['PolicyGroups', 'PolicyUsers', 'PolicyRoles'],
        ],
        'ListGroupPolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'PolicyNames',
        ],
        'ListGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Groups',
        ],
        'ListGroupsForUser' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Groups',
        ],
        'ListInstanceProfiles' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'InstanceProfiles',
        ],
        'ListInstanceProfilesForRole' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'InstanceProfiles',
        ],
        'ListMFADevices' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'MFADevices',
        ],
        'ListPolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Policies',
        ],
        'ListRolePolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'PolicyNames',
        ],
        'ListRoles' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Roles',
        ],
        'ListSAMLProviders' => [
            'result_key' => 'SAMLProviderList',
        ],
        'ListServerCertificates' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'ServerCertificateMetadataList',
        ],
        'ListSigningCertificates' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Certificates',
        ],
        'ListUserPolicies' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'PolicyNames',
        ],
        'ListUsers' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'Users',
        ],
        'ListVirtualMFADevices' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
            'result_key' => 'VirtualMFADevices',
        ],
        'GetAccountAuthorizationDetails' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxItems',
        ],
    ],
];
