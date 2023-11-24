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
    'apiVersion' => '2012-06-01',
    'endpointPrefix' => 'glacier',
    'serviceFullName' => 'Amazon Glacier',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'namespace' => 'Glacier',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.eu-west-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.ap-southeast-2.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.ap-northeast-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 'glacier.cn-north-1.amazonaws.com.cn',
        ],
    ],
    'operations' => [
        'AbortMultipartUpload' => [
            'httpMethod' => 'DELETE',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'uploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'AbortVaultLock' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/lock-policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'AddTagsToVault' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/tags?operation=add',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Tags' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'TagKey',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the request results in a vault or account limit being exceeded.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'CompleteMultipartUpload' => [
            'httpMethod' => 'POST',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ArchiveCreationOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'uploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'archiveSize' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-archive-size',
                ],
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'CompleteVaultLock' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/lock-policy/{lockId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'lockId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'CreateVault' => [
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateVaultOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
                [
                    'reason' =>
                        'Returned if the request results in a vault or account limit being exceeded.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'DeleteArchive' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/archives/{archiveId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'archiveId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteVault' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteVaultAccessPolicy' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/access-policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DeleteVaultNotifications' => [
            'httpMethod' => 'DELETE',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeJob' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GlacierJobDescription',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'DescribeVault' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeVaultOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetDataRetrievalPolicy' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/policies/data-retrieval',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetDataRetrievalPolicyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetJobOutput' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}/output',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetJobOutputOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'jobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'range' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Range',
                ],
                'saveAs' => [
                    'location' => 'response_body',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetVaultAccessPolicy' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/access-policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetVaultAccessPolicyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetVaultLock' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/lock-policy',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetVaultLockOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'GetVaultNotifications' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetVaultNotificationsOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'InitiateJob' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'InitiateJobOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Format' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Type' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ArchiveId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SNSTopic' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RetrievalByteRange' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InventoryRetrievalParameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'StartDate' => [
                            'type' => 'string',
                        ],
                        'EndDate' => [
                            'type' => 'string',
                        ],
                        'Limit' => [
                            'type' => 'string',
                        ],
                        'Marker' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a retrieval job would exceed the current data policy\'s retrieval rate limit. For more information about data retrieval policies,',
                    'class' => 'PolicyEnforcedException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'InitiateMultipartUpload' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'InitiateMultipartUploadOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'archiveDescription' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-archive-description',
                ],
                'partSize' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-part-size',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'InitiateVaultLock' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/lock-policy',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'InitiateVaultLockOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'ListJobs' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListJobsOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'limit' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'statuscode' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'completed' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'ListMultipartUploads' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListMultipartUploadsOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'limit' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'ListParts' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListPartsOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'uploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'limit' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'ListTagsForVault' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/tags',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListTagsForVaultOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'ListVaults' => [
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListVaultsOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'limit' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'RemoveTagsFromVault' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/tags?operation=remove',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'string',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'SetDataRetrievalPolicy' => [
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/policies/data-retrieval',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Policy' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Rules' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DataRetrievalRule',
                                'type' => 'object',
                                'properties' => [
                                    'Strategy' => [
                                        'type' => 'string',
                                    ],
                                    'BytesPerHour' => [
                                        'type' => 'numeric',
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
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'SetVaultAccessPolicy' => [
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/vaults/{vaultName}/access-policy',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'SetVaultNotifications' => [
            'httpMethod' => 'PUT',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'SNSTopic' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'string',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'UploadArchive' => [
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/archives',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ArchiveCreationOutput',
            'responseType' => 'model',
            'parameters' => [
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'archiveDescription' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-archive-description',
                ],
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
                'body' => [
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'ContentSHA256' => [
                    'default' => true,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if, when uploading an archive, Amazon Glacier times out while receiving the upload.',
                    'class' => 'RequestTimeoutException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
        'UploadMultipartPart' => [
            'httpMethod' => 'PUT',
            'uri' =>
                '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UploadMultipartPartOutput',
            'responseType' => 'model',
            'parameters' => [
                'accountId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'vaultName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'uploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
                'range' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Range',
                ],
                'body' => [
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'ContentSHA256' => [
                    'default' => true,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the specified resource, such as a vault, upload ID, or job ID, does not exist.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if a parameter of the request is incorrectly specified.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if a required header or parameter is missing from the request.',
                    'class' => 'MissingParameterValueException',
                ],
                [
                    'reason' =>
                        'Returned if, when uploading an archive, Amazon Glacier times out while receiving the upload.',
                    'class' => 'RequestTimeoutException',
                ],
                [
                    'reason' =>
                        'Returned if the service cannot complete the request.',
                    'class' => 'ServiceUnavailableException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ArchiveCreationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'location' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Location',
                ],
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
                'archiveId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-archive-id',
                ],
            ],
        ],
        'CreateVaultOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'location' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Location',
                ],
            ],
        ],
        'GlacierJobDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'JobDescription' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Action' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ArchiveId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VaultARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Completed' => [
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'StatusCode' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StatusMessage' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ArchiveSizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'InventorySizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'SNSTopic' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CompletionDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SHA256TreeHash' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ArchiveSHA256TreeHash' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'RetrievalByteRange' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InventoryRetrievalParameters' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Format' => [
                            'type' => 'string',
                        ],
                        'StartDate' => [
                            'type' => 'string',
                        ],
                        'EndDate' => [
                            'type' => 'string',
                        ],
                        'Limit' => [
                            'type' => 'string',
                        ],
                        'Marker' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeVaultOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VaultARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VaultName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastInventoryDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NumberOfArchives' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'SizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
        ],
        'GetDataRetrievalPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Rules' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DataRetrievalRule',
                                'type' => 'object',
                                'properties' => [
                                    'Strategy' => [
                                        'type' => 'string',
                                    ],
                                    'BytesPerHour' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetJobOutputOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'body' => [
                    'type' => 'string',
                    'instanceOf' => 'Guzzle\\Http\\EntityBody',
                    'location' => 'body',
                ],
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
                'status' => [
                    'type' => 'numeric',
                    'location' => 'statusCode',
                ],
                'contentRange' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Range',
                ],
                'acceptRanges' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Accept-Ranges',
                ],
                'contentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'archiveDescription' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-archive-description',
                ],
            ],
        ],
        'GetVaultAccessPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetVaultLockOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ExpirationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetVaultNotificationsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SNSTopic' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Events' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'string',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'InitiateJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'location' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Location',
                ],
                'jobId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-job-id',
                ],
            ],
        ],
        'InitiateMultipartUploadOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'location' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Location',
                ],
                'uploadId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-multipart-upload-id',
                ],
            ],
        ],
        'InitiateVaultLockOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'lockId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-lock-id',
                ],
            ],
        ],
        'ListJobsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'GlacierJobDescription',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'type' => 'string',
                            ],
                            'JobDescription' => [
                                'type' => 'string',
                            ],
                            'Action' => [
                                'type' => 'string',
                            ],
                            'ArchiveId' => [
                                'type' => 'string',
                            ],
                            'VaultARN' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'Completed' => [
                                'type' => 'boolean',
                            ],
                            'StatusCode' => [
                                'type' => 'string',
                            ],
                            'StatusMessage' => [
                                'type' => 'string',
                            ],
                            'ArchiveSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'InventorySizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'SNSTopic' => [
                                'type' => 'string',
                            ],
                            'CompletionDate' => [
                                'type' => 'string',
                            ],
                            'SHA256TreeHash' => [
                                'type' => 'string',
                            ],
                            'ArchiveSHA256TreeHash' => [
                                'type' => 'string',
                            ],
                            'RetrievalByteRange' => [
                                'type' => 'string',
                            ],
                            'InventoryRetrievalParameters' => [
                                'type' => 'object',
                                'properties' => [
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                    'StartDate' => [
                                        'type' => 'string',
                                    ],
                                    'EndDate' => [
                                        'type' => 'string',
                                    ],
                                    'Limit' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListMultipartUploadsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'UploadsList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'UploadListElement',
                        'type' => 'object',
                        'properties' => [
                            'MultipartUploadId' => [
                                'type' => 'string',
                            ],
                            'VaultARN' => [
                                'type' => 'string',
                            ],
                            'ArchiveDescription' => [
                                'type' => 'string',
                            ],
                            'PartSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListPartsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'MultipartUploadId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VaultARN' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ArchiveDescription' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PartSizeInBytes' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Parts' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PartListElement',
                        'type' => 'object',
                        'properties' => [
                            'RangeInBytes' => [
                                'type' => 'string',
                            ],
                            'SHA256TreeHash' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListTagsForVaultOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Tags' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'ListVaultsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VaultList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DescribeVaultOutput',
                        'type' => 'object',
                        'properties' => [
                            'VaultARN' => [
                                'type' => 'string',
                            ],
                            'VaultName' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'LastInventoryDate' => [
                                'type' => 'string',
                            ],
                            'NumberOfArchives' => [
                                'type' => 'numeric',
                            ],
                            'SizeInBytes' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'UploadMultipartPartOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'checksum' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-sha256-tree-hash',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListJobs' => [
            'input_token' => 'marker',
            'output_token' => 'Marker',
            'limit_key' => 'limit',
            'result_key' => 'JobList',
        ],
        'ListMultipartUploads' => [
            'input_token' => 'marker',
            'output_token' => 'Marker',
            'limit_key' => 'limit',
            'result_key' => 'UploadsList',
        ],
        'ListParts' => [
            'input_token' => 'marker',
            'output_token' => 'Marker',
            'limit_key' => 'limit',
            'result_key' => 'Parts',
        ],
        'ListVaults' => [
            'input_token' => 'marker',
            'output_token' => 'Marker',
            'limit_key' => 'limit',
            'result_key' => 'VaultList',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 3,
            'max_attempts' => 15,
        ],
        '__VaultState' => [
            'operation' => 'DescribeVault',
        ],
        'VaultExists' => [
            'extends' => '__VaultState',
            'success.type' => 'output',
            'ignore_errors' => ['ResourceNotFoundException'],
        ],
        'VaultNotExists' => [
            'extends' => '__VaultState',
            'success.type' => 'error',
            'success.value' => 'ResourceNotFoundException',
        ],
    ],
];
