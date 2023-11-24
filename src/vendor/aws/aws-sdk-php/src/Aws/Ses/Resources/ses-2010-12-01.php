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
    'apiVersion' => '2010-12-01',
    'endpointPrefix' => 'email',
    'serviceFullName' => 'Amazon Simple Email Service',
    'serviceAbbreviation' => 'Amazon SES',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Ses',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'email.us-east-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'email.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'email.eu-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CloneReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CloneReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OriginalRuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to a naming conflict.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to service limits. For a list of Amazon SES limits, see the Amazon SES Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'CreateReceiptFilter' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateReceiptFilter',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Filter' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'IpFilter' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Policy' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                                'Cidr' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to service limits. For a list of Amazon SES limits, see the Amazon SES Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to a naming conflict.',
                    'class' => 'AlreadyExistsException',
                ],
            ],
        ],
        'CreateReceiptRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateReceiptRule',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'After' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Rule' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'TlsPolicy' => [
                            'type' => 'string',
                        ],
                        'Recipients' => [
                            'type' => 'array',
                            'sentAs' => 'Recipients.member',
                            'items' => [
                                'name' => 'Recipient',
                                'type' => 'string',
                            ],
                        ],
                        'Actions' => [
                            'type' => 'array',
                            'sentAs' => 'Actions.member',
                            'items' => [
                                'name' => 'ReceiptAction',
                                'type' => 'object',
                                'properties' => [
                                    'S3Action' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'BucketName' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'ObjectKeyPrefix' => [
                                                'type' => 'string',
                                            ],
                                            'KmsKeyArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'BounceAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'SmtpReplyCode' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'StatusCode' => [
                                                'type' => 'string',
                                            ],
                                            'Message' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'Sender' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'WorkmailAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'OrganizationArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'LambdaAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'FunctionArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'InvocationType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'StopAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Scope' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AddHeaderAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HeaderName' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'HeaderValue' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SNSAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ScanEnabled' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided Amazon SNS topic is invalid, or that Amazon SES could not publish to the topic, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidSnsTopicException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided Amazon S3 bucket or AWS KMS encryption key is invalid, or that Amazon SES could not publish to the bucket, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidS3ConfigurationException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided AWS Lambda function is invalid, or that Amazon SES could not execute the provided function, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidLambdaFunctionException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to a naming conflict.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule does not exist.',
                    'class' => 'RuleDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to service limits. For a list of Amazon SES limits, see the Amazon SES Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'CreateReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to a naming conflict.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to service limits. For a list of Amazon SES limits, see the Amazon SES Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DeleteIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteIdentity',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteIdentityPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteIdentityPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
        ],
        'DeleteReceiptFilter' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteReceiptFilter',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'FilterName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DeleteReceiptRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteReceiptRule',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
            ],
        ],
        'DeleteReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the delete operation could not be completed.',
                    'class' => 'CannotDeleteException',
                ],
            ],
        ],
        'DeleteVerifiedEmailAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'deprecated' => true,
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteVerifiedEmailAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EmailAddress' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeActiveReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeActiveReceiptRuleSetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeActiveReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'DescribeReceiptRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReceiptRuleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReceiptRule',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule does not exist.',
                    'class' => 'RuleDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
            ],
        ],
        'DescribeReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeReceiptRuleSetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
            ],
        ],
        'GetIdentityDkimAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetIdentityDkimAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetIdentityDkimAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identities' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Identities.member',
                    'items' => [
                        'name' => 'Identity',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetIdentityNotificationAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetIdentityNotificationAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetIdentityNotificationAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identities' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Identities.member',
                    'items' => [
                        'name' => 'Identity',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetIdentityPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetIdentityPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetIdentityPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PolicyNames.member',
                    'items' => [
                        'name' => 'PolicyName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
        ],
        'GetIdentityVerificationAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetIdentityVerificationAttributesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetIdentityVerificationAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identities' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Identities.member',
                    'items' => [
                        'name' => 'Identity',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetSendQuota' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSendQuotaResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSendQuota',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'GetSendStatistics' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetSendStatisticsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetSendStatistics',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'ListIdentities' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListIdentitiesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListIdentities',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'IdentityType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ListIdentityPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListIdentityPoliciesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListIdentityPolicies',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ListReceiptFilters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListReceiptFiltersResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListReceiptFilters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'ListReceiptRuleSets' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListReceiptRuleSetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListReceiptRuleSets',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'ListVerifiedEmailAddresses' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListVerifiedEmailAddressesResponse',
            'responseType' => 'model',
            'deprecated' => true,
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListVerifiedEmailAddresses',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'PutIdentityPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PutIdentityPolicy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Policy' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided policy is invalid. Check the error stack for more information about what caused the error.',
                    'class' => 'InvalidPolicyException',
                ],
            ],
        ],
        'ReorderReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ReorderReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleNames' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'RuleNames.member',
                    'items' => [
                        'name' => 'ReceiptRuleName',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule does not exist.',
                    'class' => 'RuleDoesNotExistException',
                ],
            ],
        ],
        'SendBounce' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SendBounceResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SendBounce',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'OriginalMessageId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BounceSender' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Explanation' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MessageDsn' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ReportingMta' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'ArrivalDate' => [
                            'type' => ['object', 'string', 'integer'],
                            'format' => 'date-time',
                        ],
                        'ExtensionFields' => [
                            'type' => 'array',
                            'sentAs' => 'ExtensionFields.member',
                            'items' => [
                                'name' => 'ExtensionField',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'Value' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'BouncedRecipientInfoList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'BouncedRecipientInfoList.member',
                    'items' => [
                        'name' => 'BouncedRecipientInfo',
                        'type' => 'object',
                        'properties' => [
                            'Recipient' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'RecipientArn' => [
                                'type' => 'string',
                            ],
                            'BounceType' => [
                                'type' => 'string',
                            ],
                            'RecipientDsnFields' => [
                                'type' => 'object',
                                'properties' => [
                                    'FinalRecipient' => [
                                        'type' => 'string',
                                    ],
                                    'Action' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'RemoteMta' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'DiagnosticCode' => [
                                        'type' => 'string',
                                    ],
                                    'LastAttemptDate' => [
                                        'type' => [
                                            'object',
                                            'string',
                                            'integer',
                                        ],
                                        'format' => 'date-time',
                                    ],
                                    'ExtensionFields' => [
                                        'type' => 'array',
                                        'sentAs' => 'ExtensionFields.member',
                                        'items' => [
                                            'name' => 'ExtensionField',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'required' => true,
                                                    'type' => 'string',
                                                ],
                                                'Value' => [
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
                ],
                'BounceSenderArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the action failed, and the message could not be sent. Check the error stack for more information about what caused the error.',
                    'class' => 'MessageRejectedException',
                ],
            ],
        ],
        'SendEmail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SendEmailResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SendEmail',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Source' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Destination' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ToAddresses' => [
                            'type' => 'array',
                            'sentAs' => 'ToAddresses.member',
                            'items' => [
                                'name' => 'Address',
                                'type' => 'string',
                            ],
                        ],
                        'CcAddresses' => [
                            'type' => 'array',
                            'sentAs' => 'CcAddresses.member',
                            'items' => [
                                'name' => 'Address',
                                'type' => 'string',
                            ],
                        ],
                        'BccAddresses' => [
                            'type' => 'array',
                            'sentAs' => 'BccAddresses.member',
                            'items' => [
                                'name' => 'Address',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Message' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Subject' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Data' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                                'Charset' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Body' => [
                            'required' => true,
                            'type' => 'object',
                            'properties' => [
                                'Text' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Data' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'Charset' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'Html' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Data' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'Charset' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ReplyToAddresses' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ReplyToAddresses.member',
                    'items' => [
                        'name' => 'Address',
                        'type' => 'string',
                    ],
                ],
                'ReturnPath' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReturnPathArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the action failed, and the message could not be sent. Check the error stack for more information about what caused the error.',
                    'class' => 'MessageRejectedException',
                ],
            ],
        ],
        'SendRawEmail' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SendRawEmailResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SendRawEmail',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Source' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Destinations' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Destinations.member',
                    'items' => [
                        'name' => 'Address',
                        'type' => 'string',
                    ],
                ],
                'RawMessage' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Data' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'FromArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReturnPathArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the action failed, and the message could not be sent. Check the error stack for more information about what caused the error.',
                    'class' => 'MessageRejectedException',
                ],
            ],
        ],
        'SetActiveReceiptRuleSet' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetActiveReceiptRuleSet',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
            ],
        ],
        'SetIdentityDkimEnabled' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetIdentityDkimEnabled',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DkimEnabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'SetIdentityFeedbackForwardingEnabled' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetIdentityFeedbackForwardingEnabled',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ForwardingEnabled' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'SetIdentityNotificationTopic' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetIdentityNotificationTopic',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Identity' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NotificationType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnsTopic' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'SetReceiptRulePosition' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SetReceiptRulePosition',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RuleName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'After' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule does not exist.',
                    'class' => 'RuleDoesNotExistException',
                ],
            ],
        ],
        'UpdateReceiptRule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateReceiptRule',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'RuleSetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Rule' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                        'TlsPolicy' => [
                            'type' => 'string',
                        ],
                        'Recipients' => [
                            'type' => 'array',
                            'sentAs' => 'Recipients.member',
                            'items' => [
                                'name' => 'Recipient',
                                'type' => 'string',
                            ],
                        ],
                        'Actions' => [
                            'type' => 'array',
                            'sentAs' => 'Actions.member',
                            'items' => [
                                'name' => 'ReceiptAction',
                                'type' => 'object',
                                'properties' => [
                                    'S3Action' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'BucketName' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'ObjectKeyPrefix' => [
                                                'type' => 'string',
                                            ],
                                            'KmsKeyArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'BounceAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'SmtpReplyCode' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'StatusCode' => [
                                                'type' => 'string',
                                            ],
                                            'Message' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'Sender' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'WorkmailAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'OrganizationArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'LambdaAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'FunctionArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'InvocationType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'StopAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Scope' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AddHeaderAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HeaderName' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                            'HeaderValue' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SNSAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'required' => true,
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ScanEnabled' => [
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that the provided Amazon SNS topic is invalid, or that Amazon SES could not publish to the topic, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidSnsTopicException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided Amazon S3 bucket or AWS KMS encryption key is invalid, or that Amazon SES could not publish to the bucket, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidS3ConfigurationException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided AWS Lambda function is invalid, or that Amazon SES could not execute the provided function, possibly due to permissions issues. For information about giving permissions, see the Amazon SES Developer Guide.',
                    'class' => 'InvalidLambdaFunctionException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule set does not exist.',
                    'class' => 'RuleSetDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that the provided receipt rule does not exist.',
                    'class' => 'RuleDoesNotExistException',
                ],
                [
                    'reason' =>
                        'Indicates that a resource could not be created due to service limits. For a list of Amazon SES limits, see the Amazon SES Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'VerifyDomainDkim' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'VerifyDomainDkimResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'VerifyDomainDkim',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'VerifyDomainIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'VerifyDomainIdentityResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'VerifyDomainIdentity',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'Domain' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'VerifyEmailAddress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'deprecated' => true,
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'VerifyEmailAddress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EmailAddress' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'VerifyEmailIdentity' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'VerifyEmailIdentity',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EmailAddress' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DescribeActiveReceiptRuleSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CreatedTimestamp' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Rules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReceiptRule',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                            ],
                            'TlsPolicy' => [
                                'type' => 'string',
                            ],
                            'Recipients' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'Actions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ReceiptAction',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'S3Action' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'BucketName' => [
                                                    'type' => 'string',
                                                ],
                                                'ObjectKeyPrefix' => [
                                                    'type' => 'string',
                                                ],
                                                'KmsKeyArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'BounceAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'SmtpReplyCode' => [
                                                    'type' => 'string',
                                                ],
                                                'StatusCode' => [
                                                    'type' => 'string',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                ],
                                                'Sender' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'WorkmailAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'OrganizationArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'LambdaAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'FunctionArn' => [
                                                    'type' => 'string',
                                                ],
                                                'InvocationType' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'StopAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Scope' => [
                                                    'type' => 'string',
                                                ],
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'AddHeaderAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'HeaderName' => [
                                                    'type' => 'string',
                                                ],
                                                'HeaderValue' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'SNSAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ScanEnabled' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeReceiptRuleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Rule' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'TlsPolicy' => [
                            'type' => 'string',
                        ],
                        'Recipients' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Recipient',
                                'type' => 'string',
                                'sentAs' => 'member',
                            ],
                        ],
                        'Actions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ReceiptAction',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'S3Action' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'BucketName' => [
                                                'type' => 'string',
                                            ],
                                            'ObjectKeyPrefix' => [
                                                'type' => 'string',
                                            ],
                                            'KmsKeyArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'BounceAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'SmtpReplyCode' => [
                                                'type' => 'string',
                                            ],
                                            'StatusCode' => [
                                                'type' => 'string',
                                            ],
                                            'Message' => [
                                                'type' => 'string',
                                            ],
                                            'Sender' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'WorkmailAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'OrganizationArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'LambdaAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                            'FunctionArn' => [
                                                'type' => 'string',
                                            ],
                                            'InvocationType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'StopAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Scope' => [
                                                'type' => 'string',
                                            ],
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AddHeaderAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HeaderName' => [
                                                'type' => 'string',
                                            ],
                                            'HeaderValue' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'SNSAction' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TopicArn' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ScanEnabled' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeReceiptRuleSetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'CreatedTimestamp' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Rules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReceiptRule',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                            ],
                            'TlsPolicy' => [
                                'type' => 'string',
                            ],
                            'Recipients' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'Actions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ReceiptAction',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'S3Action' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'BucketName' => [
                                                    'type' => 'string',
                                                ],
                                                'ObjectKeyPrefix' => [
                                                    'type' => 'string',
                                                ],
                                                'KmsKeyArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'BounceAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'SmtpReplyCode' => [
                                                    'type' => 'string',
                                                ],
                                                'StatusCode' => [
                                                    'type' => 'string',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                ],
                                                'Sender' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'WorkmailAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'OrganizationArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'LambdaAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                                'FunctionArn' => [
                                                    'type' => 'string',
                                                ],
                                                'InvocationType' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'StopAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Scope' => [
                                                    'type' => 'string',
                                                ],
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'AddHeaderAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'HeaderName' => [
                                                    'type' => 'string',
                                                ],
                                                'HeaderValue' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'SNSAction' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicArn' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ScanEnabled' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIdentityDkimAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DkimAttributes' => [
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
                                'type' => 'object',
                                'properties' => [
                                    'DkimEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'DkimVerificationStatus' => [
                                        'type' => 'string',
                                    ],
                                    'DkimTokens' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'VerificationToken',
                                            'type' => 'string',
                                            'sentAs' => 'member',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetIdentityNotificationAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'NotificationAttributes' => [
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
                                'type' => 'object',
                                'properties' => [
                                    'BounceTopic' => [
                                        'type' => 'string',
                                    ],
                                    'ComplaintTopic' => [
                                        'type' => 'string',
                                    ],
                                    'DeliveryTopic' => [
                                        'type' => 'string',
                                    ],
                                    'ForwardingEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'additionalProperties' => false,
                ],
            ],
        ],
        'GetIdentityPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policies' => [
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
        'GetIdentityVerificationAttributesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VerificationAttributes' => [
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
                                'type' => 'object',
                                'properties' => [
                                    'VerificationStatus' => [
                                        'type' => 'string',
                                    ],
                                    'VerificationToken' => [
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
        'GetSendQuotaResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Max24HourSend' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'MaxSendRate' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'SentLast24Hours' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetSendStatisticsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SendDataPoints' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SendDataPoint',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Timestamp' => [
                                'type' => 'string',
                            ],
                            'DeliveryAttempts' => [
                                'type' => 'numeric',
                            ],
                            'Bounces' => [
                                'type' => 'numeric',
                            ],
                            'Complaints' => [
                                'type' => 'numeric',
                            ],
                            'Rejects' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIdentitiesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Identities' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Identity',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListIdentityPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'PolicyName',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'ListReceiptFiltersResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Filters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReceiptFilter',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'IpFilter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'type' => 'string',
                                    ],
                                    'Cidr' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListReceiptRuleSetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RuleSets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReceiptRuleSetMetadata',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'CreatedTimestamp' => [
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
        'ListVerifiedEmailAddressesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VerifiedEmailAddresses' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Address',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'SendBounceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MessageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SendEmailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MessageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'SendRawEmailResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MessageId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'VerifyDomainDkimResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DkimTokens' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'VerificationToken',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
            ],
        ],
        'VerifyDomainIdentityResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VerificationToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListIdentities' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxItems',
            'result_key' => 'Identities',
        ],
        'ListVerifiedEmailAddresses' => [
            'result_key' => 'VerifiedEmailAddresses',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 3,
            'max_attempts' => 20,
        ],
        'IdentityExists' => [
            'operation' => 'GetIdentityVerificationAttributes',
            'success.type' => 'output',
            'success.path' => 'VerificationAttributes/*/VerificationStatus',
            'success.value' => true,
        ],
    ],
];
