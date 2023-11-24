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
    'apiVersion' => '2015-02-02',
    'endpointPrefix' => 'elasticache',
    'serviceFullName' => 'Amazon ElastiCache',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'ElastiCache',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticache.cn-north-1.amazonaws.com.cn',
        ],
    ],
    'operations' => [
        'AddTagsToResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TagListMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddTagsToResource',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ResourceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Tags' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would cause the resource to have more than the allowed number of tags. The maximum number of tags permitted on a resource is 10.',
                    'class' => 'TagQuotaPerResourceExceededException',
                ],
                [
                    'reason' =>
                        'The requested Amazon Resource Name (ARN) does not refer to an existing resource.',
                    'class' => 'InvalidARNException',
                ],
            ],
        ],
        'AuthorizeCacheSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeCacheSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupOwnerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The current state of the cache security group does not allow deletion.',
                    'class' => 'InvalidCacheSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The specified Amazon EC2 security group is already authorized for the specified cache security group.',
                    'class' => 'AuthorizationAlreadyExistsException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CopySnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopySnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'SourceSnapshotName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetSnapshotName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a snapshot with the given name.',
                    'class' => 'SnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the maximum number of snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The current state of the snapshot does not allow the requested action to occur.',
                    'class' => 'InvalidSnapshotStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CreateCacheCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCacheCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReplicationGroupId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AZMode' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredAvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredAvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PreferredAvailabilityZones.member',
                    'items' => [
                        'name' => 'PreferredAvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'NumCacheNodes' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CacheNodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSecurityGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheSecurityGroupNames.member',
                    'items' => [
                        'name' => 'CacheSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupIds.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
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
                'SnapshotArns' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SnapshotArns.member',
                    'items' => [
                        'name' => 'SnapshotArn',
                        'type' => 'string',
                    ],
                ],
                'SnapshotName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NotificationTopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotRetentionLimit' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified replication group does not exist.',
                    'class' => 'ReplicationGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested replication group is not in the available state.',
                    'class' => 'InvalidReplicationGroupStateException',
                ],
                [
                    'reason' =>
                        'You already have a cache cluster with the given identifier.',
                    'class' => 'CacheClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The requested cache node type is not available in the specified Availability Zone.',
                    'class' => 'InsufficientCacheClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache subnet group name does not refer to an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache clusters per customer.',
                    'class' => 'ClusterQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes in a single cache cluster.',
                    'class' => 'NodeQuotaForClusterExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes per customer.',
                    'class' => 'NodeQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The VPC network is in an invalid state.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would cause the resource to have more than the allowed number of tags. The maximum number of tags permitted on a resource is 10.',
                    'class' => 'TagQuotaPerResourceExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CreateCacheParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheParameterGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCacheParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupFamily' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the maximum number of cache security groups.',
                    'class' => 'CacheParameterGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A cache parameter group with the requested name already exists.',
                    'class' => 'CacheParameterGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The current state of the cache parameter group does not allow the requested action to occur.',
                    'class' => 'InvalidCacheParameterGroupStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CreateCacheSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCacheSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A cache security group with the specified name already exists.',
                    'class' => 'CacheSecurityGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache security groups.',
                    'class' => 'CacheSecurityGroupQuotaExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CreateCacheSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCacheSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSubnetGroupDescription' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SubnetIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SubnetIds.member',
                    'items' => [
                        'name' => 'SubnetIdentifier',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache subnet group name is already in use by an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache subnet groups.',
                    'class' => 'CacheSubnetGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of subnets in a cache subnet group.',
                    'class' => 'CacheSubnetQuotaExceededException',
                ],
                [
                    'reason' => 'An invalid subnet identifier was specified.',
                    'class' => 'InvalidSubnetException',
                ],
            ],
        ],
        'CreateReplicationGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplicationGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateReplicationGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReplicationGroupId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReplicationGroupDescription' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrimaryClusterId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutomaticFailoverEnabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NumCacheClusters' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PreferredCacheClusterAZs' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'PreferredCacheClusterAZs.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'CacheNodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSecurityGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheSecurityGroupNames.member',
                    'items' => [
                        'name' => 'CacheSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupIds.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'Tags' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Tags.member',
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
                'SnapshotArns' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SnapshotArns.member',
                    'items' => [
                        'name' => 'SnapshotArn',
                        'type' => 'string',
                    ],
                ],
                'SnapshotName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'NotificationTopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotRetentionLimit' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'The specified replication group already exists.',
                    'class' => 'ReplicationGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The requested cache node type is not available in the specified Availability Zone.',
                    'class' => 'InsufficientCacheClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache subnet group name does not refer to an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache clusters per customer.',
                    'class' => 'ClusterQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes in a single cache cluster.',
                    'class' => 'NodeQuotaForClusterExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes per customer.',
                    'class' => 'NodeQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The VPC network is in an invalid state.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would cause the resource to have more than the allowed number of tags. The maximum number of tags permitted on a resource is 10.',
                    'class' => 'TagQuotaPerResourceExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'CreateSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'You already have a snapshot with the given name.',
                    'class' => 'SnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the maximum number of snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
                [
                    'reason' =>
                        'You attempted one of the following actions:     Creating a snapshot of a Redis cache cluster running on a t1.micro cache node.     Creating a snapshot of a cache cluster that is running Memcached rather than Redis.     Neither of these are supported by ElastiCache.',
                    'class' => 'SnapshotFeatureNotSupportedException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
            ],
        ],
        'DeleteCacheCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCacheCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FinalSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'You already have a snapshot with the given name.',
                    'class' => 'SnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You attempted one of the following actions:     Creating a snapshot of a Redis cache cluster running on a t1.micro cache node.     Creating a snapshot of a cache cluster that is running Memcached rather than Redis.     Neither of these are supported by ElastiCache.',
                    'class' => 'SnapshotFeatureNotSupportedException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the maximum number of snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DeleteCacheParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCacheParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The current state of the cache parameter group does not allow the requested action to occur.',
                    'class' => 'InvalidCacheParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DeleteCacheSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCacheSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The current state of the cache security group does not allow deletion.',
                    'class' => 'InvalidCacheSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DeleteCacheSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCacheSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache subnet group is currently in use.',
                    'class' => 'CacheSubnetGroupInUseException',
                ],
                [
                    'reason' =>
                        'The requested cache subnet group name does not refer to an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupNotFoundException',
                ],
            ],
        ],
        'DeleteReplicationGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplicationGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteReplicationGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReplicationGroupId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RetainPrimaryCluster' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'FinalSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified replication group does not exist.',
                    'class' => 'ReplicationGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested replication group is not in the available state.',
                    'class' => 'InvalidReplicationGroupStateException',
                ],
                [
                    'reason' =>
                        'You already have a snapshot with the given name.',
                    'class' => 'SnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'You attempted one of the following actions:     Creating a snapshot of a Redis cache cluster running on a t1.micro cache node.     Creating a snapshot of a cache cluster that is running Memcached rather than Redis.     Neither of these are supported by ElastiCache.',
                    'class' => 'SnapshotFeatureNotSupportedException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the maximum number of snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DeleteSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'SnapshotName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The current state of the snapshot does not allow the requested action to occur.',
                    'class' => 'InvalidSnapshotStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeCacheClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheClusterMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheClusters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ShowCacheNodeInfo' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeCacheEngineVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheEngineVersionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheEngineVersions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupFamily' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DefaultOnly' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeCacheParameterGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheParameterGroupsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheParameterGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeCacheParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheParameterGroupDetails',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Source' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeCacheSecurityGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSecurityGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheSecurityGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeCacheSubnetGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSubnetGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCacheSubnetGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache subnet group name does not refer to an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupNotFoundException',
                ],
            ],
        ],
        'DescribeEngineDefaultParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EngineDefaultsWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEngineDefaultParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupFamily' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEvents',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'SourceIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StartTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'EndTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'Duration' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeReplicationGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplicationGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReplicationGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReplicationGroupId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified replication group does not exist.',
                    'class' => 'ReplicationGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeReservedCacheNodes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedCacheNodeMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedCacheNodes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReservedCacheNodeId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedCacheNodesOfferingId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheNodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Duration' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ProductDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OfferingType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested reserved cache node was not found.',
                    'class' => 'ReservedCacheNodeNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeReservedCacheNodesOfferings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedCacheNodesOfferingMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedCacheNodesOfferings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReservedCacheNodesOfferingId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheNodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Duration' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ProductDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OfferingType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache node offering does not exist.',
                    'class' => 'ReservedCacheNodesOfferingNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'DescribeSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeSnapshotsListMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSnapshots',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotSource' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'ListTagsForResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TagListMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListTagsForResource',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ResourceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested Amazon Resource Name (ARN) does not refer to an existing resource.',
                    'class' => 'InvalidARNException',
                ],
            ],
        ],
        'ModifyCacheCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyCacheCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NumCacheNodes' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CacheNodeIdsToRemove' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheNodeIdsToRemove.member',
                    'items' => [
                        'name' => 'CacheNodeId',
                        'type' => 'string',
                    ],
                ],
                'AZMode' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NewAvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'NewAvailabilityZones.member',
                    'items' => [
                        'name' => 'PreferredAvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'CacheSecurityGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheSecurityGroupNames.member',
                    'items' => [
                        'name' => 'CacheSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupIds.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NotificationTopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NotificationTopicStatus' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ApplyImmediately' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotRetentionLimit' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'The current state of the cache security group does not allow deletion.',
                    'class' => 'InvalidCacheSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache node type is not available in the specified Availability Zone.',
                    'class' => 'InsufficientCacheClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes in a single cache cluster.',
                    'class' => 'NodeQuotaForClusterExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes per customer.',
                    'class' => 'NodeQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The VPC network is in an invalid state.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'ModifyCacheParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyCacheParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ParameterNameValues' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ParameterNameValues.member',
                    'items' => [
                        'name' => 'ParameterNameValue',
                        'type' => 'object',
                        'properties' => [
                            'ParameterName' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The current state of the cache parameter group does not allow the requested action to occur.',
                    'class' => 'InvalidCacheParameterGroupStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'ModifyCacheSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyCacheSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheSubnetGroupDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SubnetIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SubnetIds.member',
                    'items' => [
                        'name' => 'SubnetIdentifier',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache subnet group name does not refer to an existing cache subnet group.',
                    'class' => 'CacheSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of subnets in a cache subnet group.',
                    'class' => 'CacheSubnetQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The requested subnet is being used by another cache subnet group.',
                    'class' => 'SubnetInUseException',
                ],
                [
                    'reason' => 'An invalid subnet identifier was specified.',
                    'class' => 'InvalidSubnetException',
                ],
            ],
        ],
        'ModifyReplicationGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReplicationGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyReplicationGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReplicationGroupId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReplicationGroupDescription' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PrimaryClusterId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshottingClusterId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutomaticFailoverEnabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'CacheSecurityGroupNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheSecurityGroupNames.member',
                    'items' => [
                        'name' => 'CacheSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'SecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SecurityGroupIds.member',
                    'items' => [
                        'name' => 'SecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NotificationTopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NotificationTopicStatus' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ApplyImmediately' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'SnapshotRetentionLimit' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified replication group does not exist.',
                    'class' => 'ReplicationGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested replication group is not in the available state.',
                    'class' => 'InvalidReplicationGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'The current state of the cache security group does not allow deletion.',
                    'class' => 'InvalidCacheSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache node type is not available in the specified Availability Zone.',
                    'class' => 'InsufficientCacheClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes in a single cache cluster.',
                    'class' => 'NodeQuotaForClusterExceededException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the allowed number of cache nodes per customer.',
                    'class' => 'NodeQuotaForCustomerExceededException',
                ],
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The VPC network is in an invalid state.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'PurchaseReservedCacheNodesOffering' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedCacheNodeWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PurchaseReservedCacheNodesOffering',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ReservedCacheNodesOfferingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedCacheNodeId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheNodeCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache node offering does not exist.',
                    'class' => 'ReservedCacheNodesOfferingNotFoundException',
                ],
                [
                    'reason' =>
                        'You already have a reservation with the given identifier.',
                    'class' => 'ReservedCacheNodeAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request cannot be processed because it would exceed the user\'s cache node quota.',
                    'class' => 'ReservedCacheNodeQuotaExceededException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'RebootCacheCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RebootCacheCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheClusterId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CacheNodeIdsToReboot' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'CacheNodeIdsToReboot.member',
                    'items' => [
                        'name' => 'CacheNodeId',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster is not in the available state.',
                    'class' => 'InvalidCacheClusterStateException',
                ],
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
            ],
        ],
        'RemoveTagsFromResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TagListMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveTagsFromResource',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'ResourceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TagKeys' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache cluster ID does not refer to an existing cache cluster.',
                    'class' => 'CacheClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested snapshot name does not refer to an existing snapshot.',
                    'class' => 'SnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested Amazon Resource Name (ARN) does not refer to an existing resource.',
                    'class' => 'InvalidARNException',
                ],
                [
                    'reason' =>
                        'The requested tag was not found on this resource.',
                    'class' => 'TagNotFoundException',
                ],
            ],
        ],
        'ResetCacheParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetCacheParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ResetAllParameters' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ParameterNameValues' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ParameterNameValues.member',
                    'items' => [
                        'name' => 'ParameterNameValue',
                        'type' => 'object',
                        'properties' => [
                            'ParameterName' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The current state of the cache parameter group does not allow the requested action to occur.',
                    'class' => 'InvalidCacheParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested cache parameter group name does not refer to an existing cache parameter group.',
                    'class' => 'CacheParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
        'RevokeCacheSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CacheSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeCacheSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2015-02-02',
                ],
                'CacheSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupOwnerId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested cache security group name does not refer to an existing cache security group.',
                    'class' => 'CacheSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified Amazon EC2 security group is not authorized for the specified cache security group.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' =>
                        'The current state of the cache security group does not allow deletion.',
                    'class' => 'InvalidCacheSecurityGroupStateException',
                ],
                [
                    'reason' => 'The value for a parameter is invalid.',
                    'class' => 'InvalidParameterValueException',
                ],
                [
                    'reason' =>
                        'Two or more incompatible parameters were specified.',
                    'class' => 'InvalidParameterCombinationException',
                ],
            ],
        ],
    ],
    'models' => [
        'TagListMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TagList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Tag',
                        'type' => 'object',
                        'sentAs' => 'Tag',
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
            ],
        ],
        'CacheSecurityGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CacheSecurityGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'OwnerId' => [
                            'type' => 'string',
                        ],
                        'CacheSecurityGroupName' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'EC2SecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'EC2SecurityGroup',
                                'type' => 'object',
                                'sentAs' => 'EC2SecurityGroup',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'EC2SecurityGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'EC2SecurityGroupOwnerId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SnapshotWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Snapshot' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'SnapshotName' => [
                            'type' => 'string',
                        ],
                        'CacheClusterId' => [
                            'type' => 'string',
                        ],
                        'SnapshotStatus' => [
                            'type' => 'string',
                        ],
                        'SnapshotSource' => [
                            'type' => 'string',
                        ],
                        'CacheNodeType' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'NumCacheNodes' => [
                            'type' => 'numeric',
                        ],
                        'PreferredAvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'CacheClusterCreateTime' => [
                            'type' => 'string',
                        ],
                        'PreferredMaintenanceWindow' => [
                            'type' => 'string',
                        ],
                        'TopicArn' => [
                            'type' => 'string',
                        ],
                        'Port' => [
                            'type' => 'numeric',
                        ],
                        'CacheParameterGroupName' => [
                            'type' => 'string',
                        ],
                        'CacheSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'AutoMinorVersionUpgrade' => [
                            'type' => 'boolean',
                        ],
                        'SnapshotRetentionLimit' => [
                            'type' => 'numeric',
                        ],
                        'SnapshotWindow' => [
                            'type' => 'string',
                        ],
                        'NodeSnapshots' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NodeSnapshot',
                                'type' => 'object',
                                'sentAs' => 'NodeSnapshot',
                                'properties' => [
                                    'CacheNodeId' => [
                                        'type' => 'string',
                                    ],
                                    'CacheSize' => [
                                        'type' => 'string',
                                    ],
                                    'CacheNodeCreateTime' => [
                                        'type' => 'string',
                                    ],
                                    'SnapshotCreateTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CacheClusterWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CacheCluster' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'CacheClusterId' => [
                            'type' => 'string',
                        ],
                        'ConfigurationEndpoint' => [
                            'type' => 'object',
                            'properties' => [
                                'Address' => [
                                    'type' => 'string',
                                ],
                                'Port' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'ClientDownloadLandingPage' => [
                            'type' => 'string',
                        ],
                        'CacheNodeType' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'CacheClusterStatus' => [
                            'type' => 'string',
                        ],
                        'NumCacheNodes' => [
                            'type' => 'numeric',
                        ],
                        'PreferredAvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'CacheClusterCreateTime' => [
                            'type' => 'string',
                        ],
                        'PreferredMaintenanceWindow' => [
                            'type' => 'string',
                        ],
                        'PendingModifiedValues' => [
                            'type' => 'object',
                            'properties' => [
                                'NumCacheNodes' => [
                                    'type' => 'numeric',
                                ],
                                'CacheNodeIdsToRemove' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheNodeId',
                                        'type' => 'string',
                                        'sentAs' => 'CacheNodeId',
                                    ],
                                ],
                                'EngineVersion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'NotificationConfiguration' => [
                            'type' => 'object',
                            'properties' => [
                                'TopicArn' => [
                                    'type' => 'string',
                                ],
                                'TopicStatus' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'CacheSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheSecurityGroup',
                                'type' => 'object',
                                'sentAs' => 'CacheSecurityGroup',
                                'properties' => [
                                    'CacheSecurityGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'CacheParameterGroup' => [
                            'type' => 'object',
                            'properties' => [
                                'CacheParameterGroupName' => [
                                    'type' => 'string',
                                ],
                                'ParameterApplyStatus' => [
                                    'type' => 'string',
                                ],
                                'CacheNodeIdsToReboot' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'CacheNodeId',
                                        'type' => 'string',
                                        'sentAs' => 'CacheNodeId',
                                    ],
                                ],
                            ],
                        ],
                        'CacheSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'CacheNodes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheNode',
                                'type' => 'object',
                                'sentAs' => 'CacheNode',
                                'properties' => [
                                    'CacheNodeId' => [
                                        'type' => 'string',
                                    ],
                                    'CacheNodeStatus' => [
                                        'type' => 'string',
                                    ],
                                    'CacheNodeCreateTime' => [
                                        'type' => 'string',
                                    ],
                                    'Endpoint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Address' => [
                                                'type' => 'string',
                                            ],
                                            'Port' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'ParameterGroupStatus' => [
                                        'type' => 'string',
                                    ],
                                    'SourceCacheNodeId' => [
                                        'type' => 'string',
                                    ],
                                    'CustomerAvailabilityZone' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'AutoMinorVersionUpgrade' => [
                            'type' => 'boolean',
                        ],
                        'SecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'SecurityGroupMembership',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ReplicationGroupId' => [
                            'type' => 'string',
                        ],
                        'SnapshotRetentionLimit' => [
                            'type' => 'numeric',
                        ],
                        'SnapshotWindow' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CacheParameterGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CacheParameterGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'CacheParameterGroupName' => [
                            'type' => 'string',
                        ],
                        'CacheParameterGroupFamily' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CacheSubnetGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CacheSubnetGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'CacheSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'CacheSubnetGroupDescription' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'Subnets' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Subnet',
                                'type' => 'object',
                                'sentAs' => 'Subnet',
                                'properties' => [
                                    'SubnetIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'SubnetAvailabilityZone' => [
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
                    ],
                ],
            ],
        ],
        'ReplicationGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReplicationGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ReplicationGroupId' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'PendingModifiedValues' => [
                            'type' => 'object',
                            'properties' => [
                                'PrimaryClusterId' => [
                                    'type' => 'string',
                                ],
                                'AutomaticFailoverStatus' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'MemberClusters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ClusterId',
                                'type' => 'string',
                                'sentAs' => 'ClusterId',
                            ],
                        ],
                        'NodeGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NodeGroup',
                                'type' => 'object',
                                'sentAs' => 'NodeGroup',
                                'properties' => [
                                    'NodeGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'PrimaryEndpoint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Address' => [
                                                'type' => 'string',
                                            ],
                                            'Port' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'NodeGroupMembers' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'NodeGroupMember',
                                            'type' => 'object',
                                            'sentAs' => 'NodeGroupMember',
                                            'properties' => [
                                                'CacheClusterId' => [
                                                    'type' => 'string',
                                                ],
                                                'CacheNodeId' => [
                                                    'type' => 'string',
                                                ],
                                                'ReadEndpoint' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Address' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Port' => [
                                                            'type' => 'numeric',
                                                        ],
                                                    ],
                                                ],
                                                'PreferredAvailabilityZone' => [
                                                    'type' => 'string',
                                                ],
                                                'CurrentRole' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'SnapshottingClusterId' => [
                            'type' => 'string',
                        ],
                        'AutomaticFailover' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CacheClusterMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CacheClusters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheCluster',
                        'type' => 'object',
                        'sentAs' => 'CacheCluster',
                        'properties' => [
                            'CacheClusterId' => [
                                'type' => 'string',
                            ],
                            'ConfigurationEndpoint' => [
                                'type' => 'object',
                                'properties' => [
                                    'Address' => [
                                        'type' => 'string',
                                    ],
                                    'Port' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'ClientDownloadLandingPage' => [
                                'type' => 'string',
                            ],
                            'CacheNodeType' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'CacheClusterStatus' => [
                                'type' => 'string',
                            ],
                            'NumCacheNodes' => [
                                'type' => 'numeric',
                            ],
                            'PreferredAvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'CacheClusterCreateTime' => [
                                'type' => 'string',
                            ],
                            'PreferredMaintenanceWindow' => [
                                'type' => 'string',
                            ],
                            'PendingModifiedValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'NumCacheNodes' => [
                                        'type' => 'numeric',
                                    ],
                                    'CacheNodeIdsToRemove' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CacheNodeId',
                                            'type' => 'string',
                                            'sentAs' => 'CacheNodeId',
                                        ],
                                    ],
                                    'EngineVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'NotificationConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'TopicArn' => [
                                        'type' => 'string',
                                    ],
                                    'TopicStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'CacheSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CacheSecurityGroup',
                                    'type' => 'object',
                                    'sentAs' => 'CacheSecurityGroup',
                                    'properties' => [
                                        'CacheSecurityGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'CacheParameterGroup' => [
                                'type' => 'object',
                                'properties' => [
                                    'CacheParameterGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'ParameterApplyStatus' => [
                                        'type' => 'string',
                                    ],
                                    'CacheNodeIdsToReboot' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'CacheNodeId',
                                            'type' => 'string',
                                            'sentAs' => 'CacheNodeId',
                                        ],
                                    ],
                                ],
                            ],
                            'CacheSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'CacheNodes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CacheNode',
                                    'type' => 'object',
                                    'sentAs' => 'CacheNode',
                                    'properties' => [
                                        'CacheNodeId' => [
                                            'type' => 'string',
                                        ],
                                        'CacheNodeStatus' => [
                                            'type' => 'string',
                                        ],
                                        'CacheNodeCreateTime' => [
                                            'type' => 'string',
                                        ],
                                        'Endpoint' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Address' => [
                                                    'type' => 'string',
                                                ],
                                                'Port' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                        'ParameterGroupStatus' => [
                                            'type' => 'string',
                                        ],
                                        'SourceCacheNodeId' => [
                                            'type' => 'string',
                                        ],
                                        'CustomerAvailabilityZone' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'AutoMinorVersionUpgrade' => [
                                'type' => 'boolean',
                            ],
                            'SecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SecurityGroupMembership',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'SecurityGroupId' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ReplicationGroupId' => [
                                'type' => 'string',
                            ],
                            'SnapshotRetentionLimit' => [
                                'type' => 'numeric',
                            ],
                            'SnapshotWindow' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CacheEngineVersionMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CacheEngineVersions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheEngineVersion',
                        'type' => 'object',
                        'sentAs' => 'CacheEngineVersion',
                        'properties' => [
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'CacheParameterGroupFamily' => [
                                'type' => 'string',
                            ],
                            'CacheEngineDescription' => [
                                'type' => 'string',
                            ],
                            'CacheEngineVersionDescription' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CacheParameterGroupsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CacheParameterGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheParameterGroup',
                        'type' => 'object',
                        'sentAs' => 'CacheParameterGroup',
                        'properties' => [
                            'CacheParameterGroupName' => [
                                'type' => 'string',
                            ],
                            'CacheParameterGroupFamily' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CacheParameterGroupDetails' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
                        'sentAs' => 'Parameter',
                        'properties' => [
                            'ParameterName' => [
                                'type' => 'string',
                            ],
                            'ParameterValue' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Source' => [
                                'type' => 'string',
                            ],
                            'DataType' => [
                                'type' => 'string',
                            ],
                            'AllowedValues' => [
                                'type' => 'string',
                            ],
                            'IsModifiable' => [
                                'type' => 'boolean',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'CacheNodeTypeSpecificParameters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheNodeTypeSpecificParameter',
                        'type' => 'object',
                        'sentAs' => 'CacheNodeTypeSpecificParameter',
                        'properties' => [
                            'ParameterName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Source' => [
                                'type' => 'string',
                            ],
                            'DataType' => [
                                'type' => 'string',
                            ],
                            'AllowedValues' => [
                                'type' => 'string',
                            ],
                            'IsModifiable' => [
                                'type' => 'boolean',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                            'CacheNodeTypeSpecificValues' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CacheNodeTypeSpecificValue',
                                    'type' => 'object',
                                    'sentAs' => 'CacheNodeTypeSpecificValue',
                                    'properties' => [
                                        'CacheNodeType' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
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
        'CacheSecurityGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CacheSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheSecurityGroup',
                        'type' => 'object',
                        'sentAs' => 'CacheSecurityGroup',
                        'properties' => [
                            'OwnerId' => [
                                'type' => 'string',
                            ],
                            'CacheSecurityGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'EC2SecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EC2SecurityGroup',
                                    'type' => 'object',
                                    'sentAs' => 'EC2SecurityGroup',
                                    'properties' => [
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'EC2SecurityGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'EC2SecurityGroupOwnerId' => [
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
        'CacheSubnetGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CacheSubnetGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'CacheSubnetGroup',
                        'type' => 'object',
                        'sentAs' => 'CacheSubnetGroup',
                        'properties' => [
                            'CacheSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'CacheSubnetGroupDescription' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'Subnets' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Subnet',
                                    'type' => 'object',
                                    'sentAs' => 'Subnet',
                                    'properties' => [
                                        'SubnetIdentifier' => [
                                            'type' => 'string',
                                        ],
                                        'SubnetAvailabilityZone' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'EngineDefaultsWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EngineDefaults' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'CacheParameterGroupFamily' => [
                            'type' => 'string',
                        ],
                        'Marker' => [
                            'type' => 'string',
                        ],
                        'Parameters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Parameter',
                                'type' => 'object',
                                'sentAs' => 'Parameter',
                                'properties' => [
                                    'ParameterName' => [
                                        'type' => 'string',
                                    ],
                                    'ParameterValue' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Source' => [
                                        'type' => 'string',
                                    ],
                                    'DataType' => [
                                        'type' => 'string',
                                    ],
                                    'AllowedValues' => [
                                        'type' => 'string',
                                    ],
                                    'IsModifiable' => [
                                        'type' => 'boolean',
                                    ],
                                    'MinimumEngineVersion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'CacheNodeTypeSpecificParameters' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'CacheNodeTypeSpecificParameter',
                                'type' => 'object',
                                'sentAs' => 'CacheNodeTypeSpecificParameter',
                                'properties' => [
                                    'ParameterName' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Source' => [
                                        'type' => 'string',
                                    ],
                                    'DataType' => [
                                        'type' => 'string',
                                    ],
                                    'AllowedValues' => [
                                        'type' => 'string',
                                    ],
                                    'IsModifiable' => [
                                        'type' => 'boolean',
                                    ],
                                    'MinimumEngineVersion' => [
                                        'type' => 'string',
                                    ],
                                    'CacheNodeTypeSpecificValues' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' =>
                                                'CacheNodeTypeSpecificValue',
                                            'type' => 'object',
                                            'sentAs' =>
                                                'CacheNodeTypeSpecificValue',
                                            'properties' => [
                                                'CacheNodeType' => [
                                                    'type' => 'string',
                                                ],
                                                'Value' => [
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
            ],
        ],
        'EventsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Events' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Event',
                        'type' => 'object',
                        'sentAs' => 'Event',
                        'properties' => [
                            'SourceIdentifier' => [
                                'type' => 'string',
                            ],
                            'SourceType' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Date' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReplicationGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReplicationGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReplicationGroup',
                        'type' => 'object',
                        'sentAs' => 'ReplicationGroup',
                        'properties' => [
                            'ReplicationGroupId' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'PendingModifiedValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'PrimaryClusterId' => [
                                        'type' => 'string',
                                    ],
                                    'AutomaticFailoverStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'MemberClusters' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ClusterId',
                                    'type' => 'string',
                                    'sentAs' => 'ClusterId',
                                ],
                            ],
                            'NodeGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NodeGroup',
                                    'type' => 'object',
                                    'sentAs' => 'NodeGroup',
                                    'properties' => [
                                        'NodeGroupId' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'PrimaryEndpoint' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Address' => [
                                                    'type' => 'string',
                                                ],
                                                'Port' => [
                                                    'type' => 'numeric',
                                                ],
                                            ],
                                        ],
                                        'NodeGroupMembers' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'NodeGroupMember',
                                                'type' => 'object',
                                                'sentAs' => 'NodeGroupMember',
                                                'properties' => [
                                                    'CacheClusterId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'CacheNodeId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ReadEndpoint' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Address' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Port' => [
                                                                'type' =>
                                                                    'numeric',
                                                            ],
                                                        ],
                                                    ],
                                                    'PreferredAvailabilityZone' => [
                                                        'type' => 'string',
                                                    ],
                                                    'CurrentRole' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SnapshottingClusterId' => [
                                'type' => 'string',
                            ],
                            'AutomaticFailover' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReservedCacheNodeMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedCacheNodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedCacheNode',
                        'type' => 'object',
                        'sentAs' => 'ReservedCacheNode',
                        'properties' => [
                            'ReservedCacheNodeId' => [
                                'type' => 'string',
                            ],
                            'ReservedCacheNodesOfferingId' => [
                                'type' => 'string',
                            ],
                            'CacheNodeType' => [
                                'type' => 'string',
                            ],
                            'StartTime' => [
                                'type' => 'string',
                            ],
                            'Duration' => [
                                'type' => 'numeric',
                            ],
                            'FixedPrice' => [
                                'type' => 'numeric',
                            ],
                            'UsagePrice' => [
                                'type' => 'numeric',
                            ],
                            'CacheNodeCount' => [
                                'type' => 'numeric',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                            ],
                            'State' => [
                                'type' => 'string',
                            ],
                            'RecurringCharges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'RecurringCharge',
                                    'type' => 'object',
                                    'sentAs' => 'RecurringCharge',
                                    'properties' => [
                                        'RecurringChargeAmount' => [
                                            'type' => 'numeric',
                                        ],
                                        'RecurringChargeFrequency' => [
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
        'ReservedCacheNodesOfferingMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedCacheNodesOfferings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedCacheNodesOffering',
                        'type' => 'object',
                        'sentAs' => 'ReservedCacheNodesOffering',
                        'properties' => [
                            'ReservedCacheNodesOfferingId' => [
                                'type' => 'string',
                            ],
                            'CacheNodeType' => [
                                'type' => 'string',
                            ],
                            'Duration' => [
                                'type' => 'numeric',
                            ],
                            'FixedPrice' => [
                                'type' => 'numeric',
                            ],
                            'UsagePrice' => [
                                'type' => 'numeric',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                            ],
                            'RecurringCharges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'RecurringCharge',
                                    'type' => 'object',
                                    'sentAs' => 'RecurringCharge',
                                    'properties' => [
                                        'RecurringChargeAmount' => [
                                            'type' => 'numeric',
                                        ],
                                        'RecurringChargeFrequency' => [
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
        'DescribeSnapshotsListMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Snapshots' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Snapshot',
                        'type' => 'object',
                        'sentAs' => 'Snapshot',
                        'properties' => [
                            'SnapshotName' => [
                                'type' => 'string',
                            ],
                            'CacheClusterId' => [
                                'type' => 'string',
                            ],
                            'SnapshotStatus' => [
                                'type' => 'string',
                            ],
                            'SnapshotSource' => [
                                'type' => 'string',
                            ],
                            'CacheNodeType' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'NumCacheNodes' => [
                                'type' => 'numeric',
                            ],
                            'PreferredAvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'CacheClusterCreateTime' => [
                                'type' => 'string',
                            ],
                            'PreferredMaintenanceWindow' => [
                                'type' => 'string',
                            ],
                            'TopicArn' => [
                                'type' => 'string',
                            ],
                            'Port' => [
                                'type' => 'numeric',
                            ],
                            'CacheParameterGroupName' => [
                                'type' => 'string',
                            ],
                            'CacheSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'AutoMinorVersionUpgrade' => [
                                'type' => 'boolean',
                            ],
                            'SnapshotRetentionLimit' => [
                                'type' => 'numeric',
                            ],
                            'SnapshotWindow' => [
                                'type' => 'string',
                            ],
                            'NodeSnapshots' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NodeSnapshot',
                                    'type' => 'object',
                                    'sentAs' => 'NodeSnapshot',
                                    'properties' => [
                                        'CacheNodeId' => [
                                            'type' => 'string',
                                        ],
                                        'CacheSize' => [
                                            'type' => 'string',
                                        ],
                                        'CacheNodeCreateTime' => [
                                            'type' => 'string',
                                        ],
                                        'SnapshotCreateTime' => [
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
        'CacheParameterGroupNameMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CacheParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ReservedCacheNodeWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedCacheNode' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ReservedCacheNodeId' => [
                            'type' => 'string',
                        ],
                        'ReservedCacheNodesOfferingId' => [
                            'type' => 'string',
                        ],
                        'CacheNodeType' => [
                            'type' => 'string',
                        ],
                        'StartTime' => [
                            'type' => 'string',
                        ],
                        'Duration' => [
                            'type' => 'numeric',
                        ],
                        'FixedPrice' => [
                            'type' => 'numeric',
                        ],
                        'UsagePrice' => [
                            'type' => 'numeric',
                        ],
                        'CacheNodeCount' => [
                            'type' => 'numeric',
                        ],
                        'ProductDescription' => [
                            'type' => 'string',
                        ],
                        'OfferingType' => [
                            'type' => 'string',
                        ],
                        'State' => [
                            'type' => 'string',
                        ],
                        'RecurringCharges' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'RecurringCharge',
                                'type' => 'object',
                                'sentAs' => 'RecurringCharge',
                                'properties' => [
                                    'RecurringChargeAmount' => [
                                        'type' => 'numeric',
                                    ],
                                    'RecurringChargeFrequency' => [
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
    'iterators' => [
        'DescribeCacheClusters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'CacheClusters',
        ],
        'DescribeCacheEngineVersions' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'CacheEngineVersions',
        ],
        'DescribeCacheParameterGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'CacheParameterGroups',
        ],
        'DescribeCacheParameters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Parameters',
        ],
        'DescribeCacheSecurityGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'CacheSecurityGroups',
        ],
        'DescribeCacheSubnetGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'CacheSubnetGroups',
        ],
        'DescribeEngineDefaultParameters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Parameters',
        ],
        'DescribeEvents' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Events',
        ],
        'DescribeReservedCacheNodes' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ReservedCacheNodes',
        ],
        'DescribeReservedCacheNodesOfferings' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ReservedCacheNodesOfferings',
        ],
        'DescribeReplicationGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ReplicationGroups',
        ],
        'DescribeSnapshots' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Snapshots',
        ],
    ],
];
