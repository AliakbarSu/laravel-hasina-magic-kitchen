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
    'apiVersion' => '2014-11-01',
    'endpointPrefix' => 'kms',
    'serviceFullName' => 'AWS Key Management Service',
    'serviceAbbreviation' => 'KMS',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'TrentService.',
    'signatureVersion' => 'v4',
    'namespace' => 'Kms',
    'operations' => [
        'CancelKeyDeletion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CancelKeyDeletionResponse',
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
                    'default' => 'TrentService.CancelKeyDeletion',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'CreateAlias' => [
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
                    'default' => 'TrentService.CreateAlias',
                ],
                'AliasName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'TargetKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because it attempted to create a resource that already exists.',
                    'class' => 'AlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified alias name is not valid.',
                    'class' => 'InvalidAliasNameException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a limit was exceeded. For more information, see Limits in the AWS Key Management Service Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'CreateGrant' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateGrantResponse',
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
                    'default' => 'TrentService.CreateGrant',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GranteePrincipal' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'RetiringPrincipal' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Operations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'GrantOperation',
                        'type' => 'string',
                    ],
                ],
                'Constraints' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'EncryptionContextSubset' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'EncryptionContextKey',
                                ],
                            ],
                        ],
                        'EncryptionContextEquals' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'data' => [
                                    'shape_name' => 'EncryptionContextKey',
                                ],
                            ],
                        ],
                    ],
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a limit was exceeded. For more information, see Limits in the AWS Key Management Service Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'CreateKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateKeyResponse',
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
                    'default' => 'TrentService.CreateKey',
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KeyUsage' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified policy is not syntactically or semantically correct.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified parameter is not supported.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a limit was exceeded. For more information, see Limits in the AWS Key Management Service Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'Decrypt' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DecryptResponse',
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
                    'default' => 'TrentService.Decrypt',
                ],
                'CiphertextBlob' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_encode'],
                ],
                'EncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified ciphertext has been corrupted or is otherwise invalid.',
                    'class' => 'InvalidCiphertextException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the key was not available. The request can be retried.',
                    'class' => 'KeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'DeleteAlias' => [
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
                    'default' => 'TrentService.DeleteAlias',
                ],
                'AliasName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'DescribeKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeKeyResponse',
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
                    'default' => 'TrentService.DescribeKey',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
            ],
        ],
        'DisableKey' => [
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
                    'default' => 'TrentService.DisableKey',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'DisableKeyRotation' => [
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
                    'default' => 'TrentService.DisableKeyRotation',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'EnableKey' => [
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
                    'default' => 'TrentService.EnableKey',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a limit was exceeded. For more information, see Limits in the AWS Key Management Service Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'EnableKeyRotation' => [
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
                    'default' => 'TrentService.EnableKeyRotation',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'Encrypt' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EncryptResponse',
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
                    'default' => 'TrentService.Encrypt',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Plaintext' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_encode'],
                ],
                'EncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the key was not available. The request can be retried.',
                    'class' => 'KeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified KeySpec parameter is not valid. The currently supported value is ENCRYPT/DECRYPT.',
                    'class' => 'InvalidKeyUsageException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'GenerateDataKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GenerateDataKeyResponse',
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
                    'default' => 'TrentService.GenerateDataKey',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'EncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'NumberOfBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1024,
                ],
                'KeySpec' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the key was not available. The request can be retried.',
                    'class' => 'KeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified KeySpec parameter is not valid. The currently supported value is ENCRYPT/DECRYPT.',
                    'class' => 'InvalidKeyUsageException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'GenerateDataKeyWithoutPlaintext' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GenerateDataKeyWithoutPlaintextResponse',
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
                    'default' => 'TrentService.GenerateDataKeyWithoutPlaintext',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'EncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'KeySpec' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NumberOfBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1024,
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the key was not available. The request can be retried.',
                    'class' => 'KeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified KeySpec parameter is not valid. The currently supported value is ENCRYPT/DECRYPT.',
                    'class' => 'InvalidKeyUsageException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'GenerateRandom' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GenerateRandomResponse',
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
                    'default' => 'TrentService.GenerateRandom',
                ],
                'NumberOfBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1024,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
            ],
        ],
        'GetKeyPolicy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetKeyPolicyResponse',
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
                    'default' => 'TrentService.GetKeyPolicy',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'GetKeyRotationStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetKeyRotationStatusResponse',
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
                    'default' => 'TrentService.GetKeyRotationStatus',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'ListAliases' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListAliasesResponse',
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
                    'default' => 'TrentService.ListAliases',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the marker that specifies where pagination should next begin is not valid.',
                    'class' => 'InvalidMarkerException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
            ],
        ],
        'ListGrants' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListGrantsResponse',
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
                    'default' => 'TrentService.ListGrants',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the marker that specifies where pagination should next begin is not valid.',
                    'class' => 'InvalidMarkerException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'ListKeyPolicies' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListKeyPoliciesResponse',
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
                    'default' => 'TrentService.ListKeyPolicies',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'ListKeys' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListKeysResponse',
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
                    'default' => 'TrentService.ListKeys',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
            ],
        ],
        'ListRetirableGrants' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListGrantsResponse',
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
                    'default' => 'TrentService.ListRetirableGrants',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'RetiringPrincipal' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the marker that specifies where pagination should next begin is not valid.',
                    'class' => 'InvalidMarkerException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
            ],
        ],
        'PutKeyPolicy' => [
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
                    'default' => 'TrentService.PutKeyPolicy',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'PolicyName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Policy' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified policy is not syntactically or semantically correct.',
                    'class' => 'MalformedPolicyDocumentException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified parameter is not supported.',
                    'class' => 'UnsupportedOperationException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a limit was exceeded. For more information, see Limits in the AWS Key Management Service Developer Guide.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'ReEncrypt' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ReEncryptResponse',
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
                    'default' => 'TrentService.ReEncrypt',
                ],
                'CiphertextBlob' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_encode'],
                ],
                'SourceEncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'DestinationKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'DestinationEncryptionContext' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'EncryptionContextKey',
                        ],
                    ],
                ],
                'GrantTokens' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 10,
                    'items' => [
                        'name' => 'GrantTokenType',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified key was marked as disabled.',
                    'class' => 'DisabledException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified ciphertext has been corrupted or is otherwise invalid.',
                    'class' => 'InvalidCiphertextException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the key was not available. The request can be retried.',
                    'class' => 'KeyUnavailableException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified KeySpec parameter is not valid. The currently supported value is ENCRYPT/DECRYPT.',
                    'class' => 'InvalidKeyUsageException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'RetireGrant' => [
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
                    'default' => 'TrentService.RetireGrant',
                ],
                'GrantToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GrantId' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because a grant token provided as part of the request is invalid.',
                    'class' => 'InvalidGrantTokenException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified GrantId is not valid.',
                    'class' => 'InvalidGrantIdException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'RevokeGrant' => [
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
                    'default' => 'TrentService.RevokeGrant',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GrantId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified GrantId is not valid.',
                    'class' => 'InvalidGrantIdException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'ScheduleKeyDeletion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ScheduleKeyDeletionResponse',
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
                    'default' => 'TrentService.ScheduleKeyDeletion',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'PendingWindowInDays' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 365,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'UpdateAlias' => [
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
                    'default' => 'TrentService.UpdateAlias',
                ],
                'AliasName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'TargetKeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
        'UpdateKeyDescription' => [
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
                    'default' => 'TrentService.UpdateKeyDescription',
                ],
                'KeyId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request was rejected because the specified entity or resource could not be found.',
                    'class' => 'NotFoundException',
                ],
                [
                    'reason' =>
                        'The request was rejected because a specified ARN was not valid.',
                    'class' => 'InvalidArnException',
                ],
                [
                    'reason' =>
                        'The system timed out while trying to fulfill the request. The request can be retried.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'The request was rejected because an internal exception occurred. The request can be retried.',
                    'class' => 'KMSInternalException',
                ],
                [
                    'reason' =>
                        'The request was rejected because the state of the specified resource is not valid for this request. For more information about how key state affects the use of a customer master key (CMK), go to How Key State Affects the Use of a Customer Master Key in the AWS Key Management Service Developer Guide.',
                    'class' => 'KMSInvalidStateException',
                ],
            ],
        ],
    ],
    'models' => [
        'CancelKeyDeletionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateGrantResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GrantToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'GrantId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'AWSAccountId' => [
                            'type' => 'string',
                        ],
                        'KeyId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreationDate' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'KeyUsage' => [
                            'type' => 'string',
                        ],
                        'KeyState' => [
                            'type' => 'string',
                        ],
                        'DeletionDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DecryptResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Plaintext' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
            ],
        ],
        'DescribeKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'AWSAccountId' => [
                            'type' => 'string',
                        ],
                        'KeyId' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'CreationDate' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'KeyUsage' => [
                            'type' => 'string',
                        ],
                        'KeyState' => [
                            'type' => 'string',
                        ],
                        'DeletionDate' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'EncryptResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CiphertextBlob' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GenerateDataKeyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CiphertextBlob' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
                'Plaintext' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GenerateDataKeyWithoutPlaintextResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CiphertextBlob' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GenerateRandomResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Plaintext' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
            ],
        ],
        'GetKeyPolicyResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetKeyRotationStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyRotationEnabled' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ListAliasesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Aliases' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AliasListEntry',
                        'type' => 'object',
                        'properties' => [
                            'AliasName' => [
                                'type' => 'string',
                            ],
                            'AliasArn' => [
                                'type' => 'string',
                            ],
                            'TargetKeyId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ListGrantsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Grants' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'GrantListEntry',
                        'type' => 'object',
                        'properties' => [
                            'KeyId' => [
                                'type' => 'string',
                            ],
                            'GrantId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'GranteePrincipal' => [
                                'type' => 'string',
                            ],
                            'RetiringPrincipal' => [
                                'type' => 'string',
                            ],
                            'IssuingAccount' => [
                                'type' => 'string',
                            ],
                            'Operations' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'GrantOperation',
                                    'type' => 'string',
                                ],
                            ],
                            'Constraints' => [
                                'type' => 'object',
                                'properties' => [
                                    'EncryptionContextSubset' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'EncryptionContextEquals' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ListKeyPoliciesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PolicyNames' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PolicyNameType',
                        'type' => 'string',
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ListKeysResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Keys' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'KeyListEntry',
                        'type' => 'object',
                        'properties' => [
                            'KeyId' => [
                                'type' => 'string',
                            ],
                            'KeyArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Truncated' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
            ],
        ],
        'ReEncryptResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CiphertextBlob' => [
                    'type' => 'string',
                    'location' => 'json',
                    'filters' => ['base64_decode'],
                ],
                'SourceKeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ScheduleKeyDeletionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'KeyId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'DeletionDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListAliases' => [
            'limit_key' => 'Limit',
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'Truncated',
            'result_key' => 'Aliases',
        ],
        'ListGrants' => [
            'limit_key' => 'Limit',
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'Truncated',
            'result_key' => 'Grants',
        ],
        'ListKeyPolicies' => [
            'limit_key' => 'Limit',
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'Truncated',
            'result_key' => 'PolicyNames',
        ],
        'ListKeys' => [
            'limit_key' => 'Limit',
            'input_token' => 'Marker',
            'output_token' => 'NextMarker',
            'more_results' => 'Truncated',
            'result_key' => 'Keys',
        ],
    ],
];
