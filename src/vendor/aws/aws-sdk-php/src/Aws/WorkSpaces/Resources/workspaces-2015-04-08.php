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
    'apiVersion' => '2015-04-08',
    'endpointPrefix' => 'workspaces',
    'serviceFullName' => 'Amazon WorkSpaces',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'WorkspacesService.',
    'signatureVersion' => 'v4',
    'namespace' => 'WorkSpaces',
    'operations' => [
        'CreateWorkspaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateWorkspacesResult',
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
                    'default' => 'WorkspacesService.CreateWorkspaces',
                ],
                'Workspaces' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'WorkspaceRequest',
                        'type' => 'object',
                        'properties' => [
                            'DirectoryId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'BundleId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'VolumeEncryptionKey' => [
                                'type' => 'string',
                            ],
                            'UserVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'RootVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Your resource limits have been exceeded.',
                    'class' => 'ResourceLimitExceededException',
                ],
            ],
        ],
        'DescribeWorkspaceBundles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeWorkspaceBundlesResult',
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
                    'default' => 'WorkspacesService.DescribeWorkspaceBundles',
                ],
                'BundleIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'BundleId',
                        'type' => 'string',
                    ],
                ],
                'Owner' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameter values are not valid.',
                    'class' => 'InvalidParameterValuesException',
                ],
            ],
        ],
        'DescribeWorkspaceDirectories' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeWorkspaceDirectoriesResult',
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
                        'WorkspacesService.DescribeWorkspaceDirectories',
                ],
                'DirectoryIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'DirectoryId',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameter values are not valid.',
                    'class' => 'InvalidParameterValuesException',
                ],
            ],
        ],
        'DescribeWorkspaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeWorkspacesResult',
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
                    'default' => 'WorkspacesService.DescribeWorkspaces',
                ],
                'WorkspaceIds' => [
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'WorkspaceId',
                        'type' => 'string',
                    ],
                ],
                'DirectoryId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'UserName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'BundleId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 25,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameter values are not valid.',
                    'class' => 'InvalidParameterValuesException',
                ],
                [
                    'reason' => 'The specified resource is not available.',
                    'class' => 'ResourceUnavailableException',
                ],
            ],
        ],
        'RebootWorkspaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RebootWorkspacesResult',
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
                    'default' => 'WorkspacesService.RebootWorkspaces',
                ],
                'RebootWorkspaceRequests' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'RebootRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RebuildWorkspaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RebuildWorkspacesResult',
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
                    'default' => 'WorkspacesService.RebuildWorkspaces',
                ],
                'RebuildWorkspaceRequests' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 1,
                    'items' => [
                        'name' => 'RebuildRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TerminateWorkspaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'TerminateWorkspacesResult',
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
                    'default' => 'WorkspacesService.TerminateWorkspaces',
                ],
                'TerminateWorkspaceRequests' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'minItems' => 1,
                    'maxItems' => 25,
                    'items' => [
                        'name' => 'TerminateRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'models' => [
        'CreateWorkspacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedRequests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FailedCreateWorkspaceRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceRequest' => [
                                'type' => 'object',
                                'properties' => [
                                    'DirectoryId' => [
                                        'type' => 'string',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'BundleId' => [
                                        'type' => 'string',
                                    ],
                                    'VolumeEncryptionKey' => [
                                        'type' => 'string',
                                    ],
                                    'UserVolumeEncryptionEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'RootVolumeEncryptionEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'PendingRequests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Workspace',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                            ],
                            'DirectoryId' => [
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'IpAddress' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'BundleId' => [
                                'type' => 'string',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ComputerName' => [
                                'type' => 'string',
                            ],
                            'VolumeEncryptionKey' => [
                                'type' => 'string',
                            ],
                            'UserVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
                            ],
                            'RootVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeWorkspaceBundlesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Bundles' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'WorkspaceBundle',
                        'type' => 'object',
                        'properties' => [
                            'BundleId' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'UserStorage' => [
                                'type' => 'object',
                                'properties' => [
                                    'Capacity' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ComputeType' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
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
        'DescribeWorkspaceDirectoriesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Directories' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'WorkspaceDirectory',
                        'type' => 'object',
                        'properties' => [
                            'DirectoryId' => [
                                'type' => 'string',
                            ],
                            'Alias' => [
                                'type' => 'string',
                            ],
                            'DirectoryName' => [
                                'type' => 'string',
                            ],
                            'RegistrationCode' => [
                                'type' => 'string',
                            ],
                            'SubnetIds' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SubnetId',
                                    'type' => 'string',
                                ],
                            ],
                            'DnsIpAddresses' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IpAddress',
                                    'type' => 'string',
                                ],
                            ],
                            'CustomerUserName' => [
                                'type' => 'string',
                            ],
                            'IamRoleId' => [
                                'type' => 'string',
                            ],
                            'DirectoryType' => [
                                'type' => 'string',
                            ],
                            'WorkspaceSecurityGroupId' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'WorkspaceCreationProperties' => [
                                'type' => 'object',
                                'properties' => [
                                    'EnableWorkDocs' => [
                                        'type' => 'boolean',
                                    ],
                                    'EnableInternetAccess' => [
                                        'type' => 'boolean',
                                    ],
                                    'DefaultOu' => [
                                        'type' => 'string',
                                    ],
                                    'CustomSecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'UserEnabledAsLocalAdministrator' => [
                                        'type' => 'boolean',
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
        'DescribeWorkspacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Workspaces' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Workspace',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                            ],
                            'DirectoryId' => [
                                'type' => 'string',
                            ],
                            'UserName' => [
                                'type' => 'string',
                            ],
                            'IpAddress' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'BundleId' => [
                                'type' => 'string',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ComputerName' => [
                                'type' => 'string',
                            ],
                            'VolumeEncryptionKey' => [
                                'type' => 'string',
                            ],
                            'UserVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
                            ],
                            'RootVolumeEncryptionEnabled' => [
                                'type' => 'boolean',
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
        'RebootWorkspacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedRequests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FailedWorkspaceChangeRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RebuildWorkspacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedRequests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FailedWorkspaceChangeRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TerminateWorkspacesResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'FailedRequests' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FailedWorkspaceChangeRequest',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeWorkspaceBundles' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Bundles',
        ],
        'DescribeWorkspaceDirectories' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Directories',
        ],
        'DescribeWorkspaces' => [
            'limit_key' => 'Limit',
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'result_key' => 'Workspaces',
        ],
    ],
];
