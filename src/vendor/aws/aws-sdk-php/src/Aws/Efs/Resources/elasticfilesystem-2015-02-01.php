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
    'apiVersion' => '2015-02-01',
    'endpointPrefix' => 'elasticfilesystem',
    'serviceFullName' => 'Amazon Elastic File System',
    'serviceAbbreviation' => 'efs',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'namespace' => 'ElasticFileSystem',
    'operations' => [
        'CreateFileSystem' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-02-01/file-systems',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'FileSystemDescription',
            'responseType' => 'model',
            'parameters' => [
                'CreationToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the file system you are trying to create already exists, with the creation token you provided.',
                    'class' => 'FileSystemAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Returned if the AWS account has already created maximum number of file systems allowed per account.',
                    'class' => 'FileSystemLimitExceededException',
                ],
            ],
        ],
        'CreateMountTarget' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-02-01/mount-targets',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'MountTargetDescription',
            'responseType' => 'model',
            'parameters' => [
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IpAddress' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'SecurityGroup',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the file system\'s life cycle state is not "created".',
                    'class' => 'IncorrectFileSystemLifeCycleStateException',
                ],
                [
                    'reason' =>
                        'Returned if the mount target would violate one of the specified restrictions based on the file system\'s existing mount targets.',
                    'class' => 'MountTargetConflictException',
                ],
                [
                    'reason' =>
                        'Returned if there is no subnet with ID SubnetId provided in the request.',
                    'class' => 'SubnetNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if IpAddress was not specified in the request and there are no free IP addresses in the subnet.',
                    'class' => 'NoFreeAddressesInSubnetException',
                ],
                [
                    'reason' =>
                        'Returned if the request specified an IpAddress that is already in use in the subnet.',
                    'class' => 'IpAddressInUseException',
                ],
                [
                    'reason' =>
                        'The calling account has reached the ENI limit for the specific AWS region. Client should try to delete some ENIs or get its account limit raised. For more information, go to Amazon VPC Limits in the Amazon Virtual Private Cloud User Guide (see the Network interfaces per VPC entry in the table).',
                    'class' => 'NetworkInterfaceLimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if the size of SecurityGroups specified in the request is greater than five.',
                    'class' => 'SecurityGroupLimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if one of the specified security groups does not exist in the subnet\'s VPC.',
                    'class' => 'SecurityGroupNotFoundException',
                ],
                [
                    'class' => 'UnsupportedAvailabilityZoneException',
                ],
            ],
        ],
        'CreateTags' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-02-01/create-tags/{FileSystemId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
            ],
        ],
        'DeleteFileSystem' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-02-01/file-systems/{FileSystemId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
                [
                    'reason' => 'Returned if a file system has mount targets.',
                    'class' => 'FileSystemInUseException',
                ],
            ],
        ],
        'DeleteMountTarget' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2015-02-01/mount-targets/{MountTargetId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'MountTargetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'The service timed out trying to fulfill the request, and the client should try the call again.',
                    'class' => 'DependencyTimeoutException',
                ],
                [
                    'reason' =>
                        'Returned if there is no mount target with the specified ID is found in the caller\'s account.',
                    'class' => 'MountTargetNotFoundException',
                ],
            ],
        ],
        'DeleteTags' => [
            'httpMethod' => 'POST',
            'uri' => '/2015-02-01/delete-tags/{FileSystemId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'TagKeys' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
            ],
        ],
        'DescribeFileSystems' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-02-01/file-systems',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeFileSystemsResponse',
            'responseType' => 'model',
            'parameters' => [
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'CreationToken' => [
                    'type' => 'string',
                    'location' => 'query',
                    'minLength' => 1,
                ],
                'FileSystemId' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
            ],
        ],
        'DescribeMountTargetSecurityGroups' => [
            'httpMethod' => 'GET',
            'uri' =>
                '/2015-02-01/mount-targets/{MountTargetId}/security-groups',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeMountTargetSecurityGroupsResponse',
            'responseType' => 'model',
            'parameters' => [
                'MountTargetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if there is no mount target with the specified ID is found in the caller\'s account.',
                    'class' => 'MountTargetNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the mount target is not in the correct state for the operation.',
                    'class' => 'IncorrectMountTargetStateException',
                ],
            ],
        ],
        'DescribeMountTargets' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-02-01/mount-targets',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeMountTargetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
            ],
        ],
        'DescribeTags' => [
            'httpMethod' => 'GET',
            'uri' => '/2015-02-01/tags/{FileSystemId}/',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeTagsResponse',
            'responseType' => 'model',
            'parameters' => [
                'MaxItems' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'minimum' => 1,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'FileSystemId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if the specified FileSystemId does not exist in the requester\'s AWS account.',
                    'class' => 'FileSystemNotFoundException',
                ],
            ],
        ],
        'ModifyMountTargetSecurityGroups' => [
            'httpMethod' => 'PUT',
            'uri' =>
                '/2015-02-01/mount-targets/{MountTargetId}/security-groups',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'MountTargetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 5,
                    'items' => [
                        'name' => 'SecurityGroup',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Returned if the request is malformed or contains an error such as an invalid parameter value or a missing required parameter.',
                    'class' => 'BadRequestException',
                ],
                [
                    'reason' =>
                        'Returned if an error occurred on the server side.',
                    'class' => 'InternalServerErrorException',
                ],
                [
                    'reason' =>
                        'Returned if there is no mount target with the specified ID is found in the caller\'s account.',
                    'class' => 'MountTargetNotFoundException',
                ],
                [
                    'reason' =>
                        'Returned if the mount target is not in the correct state for the operation.',
                    'class' => 'IncorrectMountTargetStateException',
                ],
                [
                    'reason' =>
                        'Returned if the size of SecurityGroups specified in the request is greater than five.',
                    'class' => 'SecurityGroupLimitExceededException',
                ],
                [
                    'reason' =>
                        'Returned if one of the specified security groups does not exist in the subnet\'s VPC.',
                    'class' => 'SecurityGroupNotFoundException',
                ],
            ],
        ],
    ],
    'models' => [
        'FileSystemDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OwnerId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FileSystemId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CreationTime' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LifeCycleState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NumberOfMountTargets' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'SizeInBytes' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Value' => [
                            'type' => 'numeric',
                        ],
                        'Timestamp' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'MountTargetDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OwnerId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MountTargetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FileSystemId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LifeCycleState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IpAddress' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'NetworkInterfaceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'DescribeFileSystemsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'FileSystems' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'FileSystemDescription',
                        'type' => 'object',
                        'properties' => [
                            'OwnerId' => [
                                'type' => 'string',
                            ],
                            'CreationToken' => [
                                'type' => 'string',
                            ],
                            'FileSystemId' => [
                                'type' => 'string',
                            ],
                            'CreationTime' => [
                                'type' => 'string',
                            ],
                            'LifeCycleState' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'NumberOfMountTargets' => [
                                'type' => 'numeric',
                            ],
                            'SizeInBytes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Value' => [
                                        'type' => 'numeric',
                                    ],
                                    'Timestamp' => [
                                        'type' => 'string',
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
            ],
        ],
        'DescribeMountTargetSecurityGroupsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SecurityGroups' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'SecurityGroup',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeMountTargetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'MountTargets' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'MountTargetDescription',
                        'type' => 'object',
                        'properties' => [
                            'OwnerId' => [
                                'type' => 'string',
                            ],
                            'MountTargetId' => [
                                'type' => 'string',
                            ],
                            'FileSystemId' => [
                                'type' => 'string',
                            ],
                            'SubnetId' => [
                                'type' => 'string',
                            ],
                            'LifeCycleState' => [
                                'type' => 'string',
                            ],
                            'IpAddress' => [
                                'type' => 'string',
                            ],
                            'NetworkInterfaceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeTagsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'json',
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
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
];
