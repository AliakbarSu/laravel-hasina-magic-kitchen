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
    'apiVersion' => '2012-12-01',
    'endpointPrefix' => 'redshift',
    'serviceFullName' => 'Amazon Redshift',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Redshift',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.us-east-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.eu-west-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.ap-southeast-2.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'redshift.ap-northeast-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AuthorizeClusterSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeClusterSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CIDRIP' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the cluster security group is not available.',
                    'class' => 'InvalidClusterSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The specified CIDR block or EC2 security group is already authorized for the specified cluster security group.',
                    'class' => 'AuthorizationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The authorization quota for the cluster security group has been reached.',
                    'class' => 'AuthorizationQuotaExceededException',
                ],
            ],
        ],
        'AuthorizeSnapshotAccess' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeSnapshotAccess',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AccountWithRestoreAccess' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified CIDR block or EC2 security group is already authorized for the specified cluster security group.',
                    'class' => 'AuthorizationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The authorization quota for the cluster security group has been reached.',
                    'class' => 'AuthorizationQuotaExceededException',
                ],
            ],
        ],
        'CopyClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SourceSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceSnapshotClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The value specified as a snapshot identifier is already used by an existing snapshot.',
                    'class' => 'ClusterSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the cluster snapshot is not available, or other accounts are authorized to access the snapshot.',
                    'class' => 'InvalidClusterSnapshotStateException',
                ],
                [
                    'reason' =>
                        'The request would result in the user exceeding the allowed number of cluster snapshots.',
                    'class' => 'ClusterSnapshotQuotaExceededException',
                ],
            ],
        ],
        'CreateCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'DBName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NodeType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MasterUsername' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MasterUserPassword' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ClusterSecurityGroups.member',
                    'items' => [
                        'name' => 'ClusterSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'VpcSecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcSecurityGroupIds.member',
                    'items' => [
                        'name' => 'VpcSecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'ClusterSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutomatedSnapshotRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ClusterVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllowVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'NumberOfNodes' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Encrypted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'HsmClientCertificateIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmConfigurationIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ElasticIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The account already has a cluster with the given identifier.',
                    'class' => 'ClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The number of nodes specified exceeds the allotted capacity of the cluster.',
                    'class' => 'InsufficientClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The request would exceed the allowed number of cluster instances for this account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The operation would exceed the number of nodes allotted to the account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'NumberOfNodesQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The operation would exceed the number of nodes allowed for a cluster.',
                    'class' => 'NumberOfNodesPerClusterLimitExceededException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group name does not refer to an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group does not cover all Availability Zones.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidClusterSubnetGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested subnet is not valid, or not all of the subnets are in the same VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateNotFoundException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationNotFoundException',
                ],
                [
                    'reason' =>
                        'The Elastic IP (EIP) is invalid or cannot be found.',
                    'class' => 'InvalidElasticIpException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
                [
                    'reason' =>
                        'The encryption key has exceeded its grant limit in AWS KMS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'CreateClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterParameterGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ParameterGroupFamily' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request would result in the user exceeding the allowed number of cluster parameter groups. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterParameterGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A cluster parameter group with the same name already exists.',
                    'class' => 'ClusterParameterGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateClusterSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateClusterSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A cluster security group with the same name already exists.',
                    'class' => 'ClusterSecurityGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request would result in the user exceeding the allowed number of cluster security groups. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterSecurityGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The value specified as a snapshot identifier is already used by an existing snapshot.',
                    'class' => 'ClusterSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The request would result in the user exceeding the allowed number of cluster snapshots.',
                    'class' => 'ClusterSnapshotQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateClusterSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateClusterSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A ClusterSubnetGroupName is already used by an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request would result in user exceeding the allowed number of cluster subnet groups. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterSubnetGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request would result in user exceeding the allowed number of subnets in a cluster subnet groups. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterSubnetQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The requested subnet is not valid, or not all of the subnets are in the same VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateEventSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateEventSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnsTopicArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SourceIds.member',
                    'items' => [
                        'name' => 'SourceId',
                        'type' => 'string',
                    ],
                ],
                'EventCategories' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EventCategories.member',
                    'items' => [
                        'name' => 'EventCategory',
                        'type' => 'string',
                    ],
                ],
                'Severity' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Enabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request would exceed the allowed number of event subscriptions for this account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'EventSubscriptionQuotaExceededException',
                ],
                [
                    'reason' =>
                        'There is already an existing event notification subscription with the specified name.',
                    'class' => 'SubscriptionAlreadyExistException',
                ],
                [
                    'reason' =>
                        'Amazon SNS has responded that there is a problem with the specified Amazon SNS topic.',
                    'class' => 'SNSInvalidTopicException',
                ],
                [
                    'reason' =>
                        'You do not have permission to publish to the specified Amazon SNS topic.',
                    'class' => 'SNSNoAuthorizationException',
                ],
                [
                    'reason' =>
                        'An Amazon SNS topic with the specified Amazon Resource Name (ARN) does not exist.',
                    'class' => 'SNSTopicArnNotFoundException',
                ],
                [
                    'reason' =>
                        'An Amazon Redshift event with the specified event ID does not exist.',
                    'class' => 'SubscriptionEventIdNotFoundException',
                ],
                [
                    'reason' =>
                        'The value specified for the event category was not one of the allowed values, or it specified a category that does not apply to the specified source type. The allowed values are Configuration, Management, Monitoring, and Security.',
                    'class' => 'SubscriptionCategoryNotFoundException',
                ],
                [
                    'reason' =>
                        'The value specified for the event severity was not one of the allowed values, or it specified a severity that does not apply to the specified source type. The allowed values are ERROR and INFO.',
                    'class' => 'SubscriptionSeverityNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified Amazon Redshift event source could not be found.',
                    'class' => 'SourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateHsmClientCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'HsmClientCertificateWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateHsmClientCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmClientCertificateIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'There is already an existing Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The quota for HSM client certificates has been reached. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'HsmClientCertificateQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateHsmConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'HsmConfigurationWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateHsmConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmConfigurationIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmIpAddress' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmPartitionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmPartitionPassword' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmServerPublicCertificate' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'There is already an existing Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The quota for HSM configurations has been reached. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'HsmConfigurationQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateSnapshotCopyGrant' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotCopyGrantWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateSnapshotCopyGrant',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotCopyGrantName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The snapshot copy grant can\'t be created because a grant with the same name already exists.',
                    'class' => 'SnapshotCopyGrantAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The AWS account has exceeded the maximum number of snapshot copy grants in this region.',
                    'class' => 'SnapshotCopyGrantQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The encryption key has exceeded its grant limit in AWS KMS.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'CreateTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
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
                        'The request exceeds the limit of 10 tags for the resource.',
                    'class' => 'TagLimitExceededException',
                ],
                [
                    'reason' => 'The resource could not be found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DeleteCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SkipFinalClusterSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'FinalClusterSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'The value specified as a snapshot identifier is already used by an existing snapshot.',
                    'class' => 'ClusterSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The request would result in the user exceeding the allowed number of cluster snapshots.',
                    'class' => 'ClusterSnapshotQuotaExceededException',
                ],
            ],
        ],
        'DeleteClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster parameter group action can not be completed because another task is in progress that involves the parameter group. Wait a few moments and try the operation again.',
                    'class' => 'InvalidClusterParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
            ],
        ],
        'DeleteClusterSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteClusterSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The state of the cluster security group is not available.',
                    'class' => 'InvalidClusterSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
            ],
        ],
        'DeleteClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The state of the cluster snapshot is not available, or other accounts are authorized to access the snapshot.',
                    'class' => 'InvalidClusterSnapshotStateException',
                ],
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
            ],
        ],
        'DeleteClusterSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteClusterSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidClusterSubnetGroupStateException',
                ],
                [
                    'reason' => 'The state of the subnet is invalid.',
                    'class' => 'InvalidClusterSubnetStateException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group name does not refer to an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupNotFoundException',
                ],
            ],
        ],
        'DeleteEventSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteEventSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An Amazon Redshift event notification subscription with the specified name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' =>
                        'The subscription request is invalid because it is a duplicate request. This subscription request is already in progress.',
                    'class' => 'InvalidSubscriptionStateException',
                ],
            ],
        ],
        'DeleteHsmClientCertificate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteHsmClientCertificate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmClientCertificateIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified HSM client certificate is not in the available state, or it is still in use by one or more Amazon Redshift clusters.',
                    'class' => 'InvalidHsmClientCertificateStateException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateNotFoundException',
                ],
            ],
        ],
        'DeleteHsmConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteHsmConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmConfigurationIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified HSM configuration is not in the available state, or it is still in use by one or more Amazon Redshift clusters.',
                    'class' => 'InvalidHsmConfigurationStateException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationNotFoundException',
                ],
            ],
        ],
        'DeleteSnapshotCopyGrant' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteSnapshotCopyGrant',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotCopyGrantName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The snapshot copy grant can\'t be deleted because it is used by one or more clusters.',
                    'class' => 'InvalidSnapshotCopyGrantStateException',
                ],
                [
                    'reason' =>
                        'The specified snapshot copy grant can\'t be found. Make sure that the name is typed correctly and that the grant exists in the destination region.',
                    'class' => 'SnapshotCopyGrantNotFoundException',
                ],
            ],
        ],
        'DeleteTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
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
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The resource could not be found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeClusterParameterGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterParameterGroupsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterParameterGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeClusterParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterParameterGroupDetails',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
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
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
            ],
        ],
        'DescribeClusterSecurityGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSecurityGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterSecurityGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSecurityGroupName' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeClusterSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterSnapshots',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotType' => [
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
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OwnerAccount' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeClusterSubnetGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSubnetGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterSubnetGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSubnetGroupName' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster subnet group name does not refer to an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeClusterVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterVersionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusterVersions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterParameterGroupFamily' => [
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
        ],
        'DescribeClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClustersMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeClusters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeDefaultClusterParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DefaultClusterParametersWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDefaultClusterParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupFamily' => [
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
        ],
        'DescribeEventCategories' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventCategoriesMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEventCategories',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SourceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeEventSubscriptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEventSubscriptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SubscriptionName' => [
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
                        'An Amazon Redshift event notification subscription with the specified name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
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
                    'default' => '2012-12-01',
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
        ],
        'DescribeHsmClientCertificates' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'HsmClientCertificateMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeHsmClientCertificates',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmClientCertificateIdentifier' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeHsmConfigurations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'HsmConfigurationMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeHsmConfigurations',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'HsmConfigurationIdentifier' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeLoggingStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'LoggingStatus',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeLoggingStatus',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DescribeOrderableClusterOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OrderableClusterOptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeOrderableClusterOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NodeType' => [
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
        ],
        'DescribeReservedNodeOfferings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedNodeOfferingsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedNodeOfferings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ReservedNodeOfferingId' => [
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
                    'reason' => 'Specified offering does not exist.',
                    'class' => 'ReservedNodeOfferingNotFoundException',
                ],
                [
                    'reason' => 'The requested operation isn\'t supported.',
                    'class' => 'UnsupportedOperationException',
                ],
            ],
        ],
        'DescribeReservedNodes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedNodesMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedNodes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ReservedNodeId' => [
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
                        'The specified reserved compute node not found.',
                    'class' => 'ReservedNodeNotFoundException',
                ],
            ],
        ],
        'DescribeResize' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ResizeProgressMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeResize',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'A resize operation for the specified cluster is not found.',
                    'class' => 'ResizeNotFoundException',
                ],
            ],
        ],
        'DescribeSnapshotCopyGrants' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotCopyGrantMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeSnapshotCopyGrants',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotCopyGrantName' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified snapshot copy grant can\'t be found. Make sure that the name is typed correctly and that the grant exists in the destination region.',
                    'class' => 'SnapshotCopyGrantNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DescribeTags' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'TaggedResourceListMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeTags',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ResourceName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ResourceType' => [
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
                'TagKeys' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagKeys.member',
                    'items' => [
                        'name' => 'TagKey',
                        'type' => 'string',
                    ],
                ],
                'TagValues' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'TagValues.member',
                    'items' => [
                        'name' => 'TagValue',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The resource could not be found.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' => 'The tag is invalid.',
                    'class' => 'InvalidTagException',
                ],
            ],
        ],
        'DisableLogging' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'LoggingStatus',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableLogging',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'DisableSnapshotCopy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DisableSnapshotCopy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster already has cross-region snapshot copy disabled.',
                    'class' => 'SnapshotCopyAlreadyDisabledException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
            ],
        ],
        'EnableLogging' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'LoggingStatus',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableLogging',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BucketName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' => 'Could not find the specified S3 bucket.',
                    'class' => 'BucketNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster does not have read bucket or put object permissions on the S3 bucket specified when enabling logging.',
                    'class' => 'InsufficientS3BucketPolicyFaultException',
                ],
                [
                    'reason' =>
                        'The string specified for the logging S3 key prefix does not comply with the documented constraints.',
                    'class' => 'InvalidS3KeyPrefixFaultException',
                ],
                [
                    'reason' =>
                        'The S3 bucket name is invalid. For more information about naming rules, go to Bucket Restrictions and Limitations in the Amazon Simple Storage Service (S3) Developer Guide.',
                    'class' => 'InvalidS3BucketNameFaultException',
                ],
            ],
        ],
        'EnableSnapshotCopy' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'EnableSnapshotCopy',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationRegion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'SnapshotCopyGrantName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified options are incompatible.',
                    'class' => 'IncompatibleOrderableOptionsException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'Cross-region snapshot copy was temporarily disabled. Try your request again.',
                    'class' => 'CopyToRegionDisabledException',
                ],
                [
                    'reason' =>
                        'The cluster already has cross-region snapshot copy enabled.',
                    'class' => 'SnapshotCopyAlreadyEnabledException',
                ],
                [
                    'reason' =>
                        'The specified region is incorrect or does not exist.',
                    'class' => 'UnknownSnapshotCopyRegionException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'The specified snapshot copy grant can\'t be found. Make sure that the name is typed correctly and that the grant exists in the destination region.',
                    'class' => 'SnapshotCopyGrantNotFoundException',
                ],
                [
                    'reason' =>
                        'The encryption key has exceeded its grant limit in AWS KMS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'ModifyCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NumberOfNodes' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'ClusterSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ClusterSecurityGroups.member',
                    'items' => [
                        'name' => 'ClusterSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'VpcSecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcSecurityGroupIds.member',
                    'items' => [
                        'name' => 'VpcSecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'MasterUserPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutomatedSnapshotRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllowVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'HsmClientCertificateIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmConfigurationIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NewClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'The state of the cluster security group is not available.',
                    'class' => 'InvalidClusterSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The operation would exceed the number of nodes allotted to the account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'NumberOfNodesQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The number of nodes specified exceeds the allotted capacity of the cluster.',
                    'class' => 'InsufficientClusterCapacityException',
                ],
                [
                    'reason' =>
                        'A request option was specified that is not supported.',
                    'class' => 'UnsupportedOptionException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateNotFoundException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationNotFoundException',
                ],
                [
                    'reason' =>
                        'The account already has a cluster with the given identifier.',
                    'class' => 'ClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The encryption key has exceeded its grant limit in AWS KMS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'ModifyClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Parameters' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Parameters.member',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
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
                            'ApplyType' => [
                                'type' => 'string',
                            ],
                            'IsModifiable' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster parameter group action can not be completed because another task is in progress that involves the parameter group. Wait a few moments and try the operation again.',
                    'class' => 'InvalidClusterParameterGroupStateException',
                ],
            ],
        ],
        'ModifyClusterSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyClusterSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
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
                        'The cluster subnet group name does not refer to an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The request would result in user exceeding the allowed number of subnets in a cluster subnet groups. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterSubnetQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A specified subnet is already in use by another cluster.',
                    'class' => 'SubnetAlreadyInUseException',
                ],
                [
                    'reason' =>
                        'The requested subnet is not valid, or not all of the subnets are in the same VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
            ],
        ],
        'ModifyEventSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyEventSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnsTopicArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'SourceIds.member',
                    'items' => [
                        'name' => 'SourceId',
                        'type' => 'string',
                    ],
                ],
                'EventCategories' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EventCategories.member',
                    'items' => [
                        'name' => 'EventCategory',
                        'type' => 'string',
                    ],
                ],
                'Severity' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Enabled' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An Amazon Redshift event notification subscription with the specified name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' =>
                        'Amazon SNS has responded that there is a problem with the specified Amazon SNS topic.',
                    'class' => 'SNSInvalidTopicException',
                ],
                [
                    'reason' =>
                        'You do not have permission to publish to the specified Amazon SNS topic.',
                    'class' => 'SNSNoAuthorizationException',
                ],
                [
                    'reason' =>
                        'An Amazon SNS topic with the specified Amazon Resource Name (ARN) does not exist.',
                    'class' => 'SNSTopicArnNotFoundException',
                ],
                [
                    'reason' =>
                        'An Amazon Redshift event with the specified event ID does not exist.',
                    'class' => 'SubscriptionEventIdNotFoundException',
                ],
                [
                    'reason' =>
                        'The value specified for the event category was not one of the allowed values, or it specified a category that does not apply to the specified source type. The allowed values are Configuration, Management, Monitoring, and Security.',
                    'class' => 'SubscriptionCategoryNotFoundException',
                ],
                [
                    'reason' =>
                        'The value specified for the event severity was not one of the allowed values, or it specified a severity that does not apply to the specified source type. The allowed values are ERROR and INFO.',
                    'class' => 'SubscriptionSeverityNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified Amazon Redshift event source could not be found.',
                    'class' => 'SourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The subscription request is invalid because it is a duplicate request. This subscription request is already in progress.',
                    'class' => 'InvalidSubscriptionStateException',
                ],
            ],
        ],
        'ModifySnapshotCopyRetentionPeriod' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifySnapshotCopyRetentionPeriod',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RetentionPeriod' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'Cross-region snapshot copy was temporarily disabled. Try your request again.',
                    'class' => 'SnapshotCopyDisabledException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
            ],
        ],
        'PurchaseReservedNodeOffering' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedNodeWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PurchaseReservedNodeOffering',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ReservedNodeOfferingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NodeCount' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'Specified offering does not exist.',
                    'class' => 'ReservedNodeOfferingNotFoundException',
                ],
                [
                    'reason' =>
                        'User already has a reservation with the given identifier.',
                    'class' => 'ReservedNodeAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would exceed the user\'s compute node quota. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ReservedNodeQuotaExceededException',
                ],
                [
                    'reason' => 'The requested operation isn\'t supported.',
                    'class' => 'UnsupportedOperationException',
                ],
            ],
        ],
        'RebootCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RebootCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
            ],
        ],
        'ResetClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ResetAllParameters' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Parameters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Parameters.member',
                    'items' => [
                        'name' => 'Parameter',
                        'type' => 'object',
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
                            'ApplyType' => [
                                'type' => 'string',
                            ],
                            'IsModifiable' => [
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster parameter group action can not be completed because another task is in progress that involves the parameter group. Wait a few moments and try the operation again.',
                    'class' => 'InvalidClusterParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
            ],
        ],
        'RestoreFromClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreFromClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllowVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'ClusterSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'OwnerAccount' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmClientCertificateIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'HsmConfigurationIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ElasticIp' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ClusterSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ClusterSecurityGroups.member',
                    'items' => [
                        'name' => 'ClusterSecurityGroupName',
                        'type' => 'string',
                    ],
                ],
                'VpcSecurityGroupIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VpcSecurityGroupIds.member',
                    'items' => [
                        'name' => 'VpcSecurityGroupId',
                        'type' => 'string',
                    ],
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AutomatedSnapshotRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NodeType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The owner of the specified snapshot has not authorized your account to access the snapshot.',
                    'class' => 'AccessToSnapshotDeniedException',
                ],
                [
                    'reason' =>
                        'The account already has a cluster with the given identifier.',
                    'class' => 'ClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The request would exceed the allowed number of cluster instances for this account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'ClusterQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The number of nodes specified exceeds the allotted capacity of the cluster.',
                    'class' => 'InsufficientClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The state of the cluster snapshot is not available, or other accounts are authorized to access the snapshot.',
                    'class' => 'InvalidClusterSnapshotStateException',
                ],
                [
                    'reason' => 'The restore is invalid.',
                    'class' => 'InvalidRestoreException',
                ],
                [
                    'reason' =>
                        'The operation would exceed the number of nodes allotted to the account. For information about increasing your quota, go to Limits in Amazon Redshift in the Amazon Redshift Cluster Management Guide.',
                    'class' => 'NumberOfNodesQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The operation would exceed the number of nodes allowed for a cluster.',
                    'class' => 'NumberOfNodesPerClusterLimitExceededException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group does not cover all Availability Zones.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidClusterSubnetGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested subnet is not valid, or not all of the subnets are in the same VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'The cluster subnet group name does not refer to an existing cluster subnet group.',
                    'class' => 'ClusterSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Your account is not authorized to perform the requested operation.',
                    'class' => 'UnauthorizedOperationException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM client certificate with the specified identifier.',
                    'class' => 'HsmClientCertificateNotFoundException',
                ],
                [
                    'reason' =>
                        'There is no Amazon Redshift HSM configuration with the specified identifier.',
                    'class' => 'HsmConfigurationNotFoundException',
                ],
                [
                    'reason' =>
                        'The Elastic IP (EIP) is invalid or cannot be found.',
                    'class' => 'InvalidElasticIpException',
                ],
                [
                    'reason' =>
                        'The parameter group name does not refer to an existing parameter group.',
                    'class' => 'ClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The encryption key has exceeded its grant limit in AWS KMS.',
                    'class' => 'LimitExceededException',
                ],
            ],
        ],
        'RevokeClusterSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeClusterSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CIDRIP' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EC2SecurityGroupOwnerId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The cluster security group name does not refer to an existing cluster security group.',
                    'class' => 'ClusterSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified CIDR IP range or EC2 security group is not authorized for the specified cluster security group.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the cluster security group is not available.',
                    'class' => 'InvalidClusterSecurityGroupStateException',
                ],
            ],
        ],
        'RevokeSnapshotAccess' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'SnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeSnapshotAccess',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AccountWithRestoreAccess' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The owner of the specified snapshot has not authorized your account to access the snapshot.',
                    'class' => 'AccessToSnapshotDeniedException',
                ],
                [
                    'reason' =>
                        'The specified CIDR IP range or EC2 security group is not authorized for the specified cluster security group.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' =>
                        'The snapshot identifier does not refer to an existing cluster snapshot.',
                    'class' => 'ClusterSnapshotNotFoundException',
                ],
            ],
        ],
        'RotateEncryptionKey' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RotateEncryptionKey',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2012-12-01',
                ],
                'ClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The ClusterIdentifier parameter does not refer to an existing cluster.',
                    'class' => 'ClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified cluster is not in the available state.',
                    'class' => 'InvalidClusterStateException',
                ],
            ],
        ],
    ],
    'models' => [
        'ClusterSecurityGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClusterSecurityGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ClusterSecurityGroupName' => [
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
                                    'Tags' => [
                                        'type' => 'array',
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
                        ],
                        'IPRanges' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'IPRange',
                                'type' => 'object',
                                'sentAs' => 'IPRange',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'CIDRIP' => [
                                        'type' => 'string',
                                    ],
                                    'Tags' => [
                                        'type' => 'array',
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
                        ],
                        'Tags' => [
                            'type' => 'array',
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
                        'SnapshotIdentifier' => [
                            'type' => 'string',
                        ],
                        'ClusterIdentifier' => [
                            'type' => 'string',
                        ],
                        'SnapshotCreateTime' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'Port' => [
                            'type' => 'numeric',
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'ClusterCreateTime' => [
                            'type' => 'string',
                        ],
                        'MasterUsername' => [
                            'type' => 'string',
                        ],
                        'ClusterVersion' => [
                            'type' => 'string',
                        ],
                        'SnapshotType' => [
                            'type' => 'string',
                        ],
                        'NodeType' => [
                            'type' => 'string',
                        ],
                        'NumberOfNodes' => [
                            'type' => 'numeric',
                        ],
                        'DBName' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'Encrypted' => [
                            'type' => 'boolean',
                        ],
                        'KmsKeyId' => [
                            'type' => 'string',
                        ],
                        'EncryptedWithHSM' => [
                            'type' => 'boolean',
                        ],
                        'AccountsWithRestoreAccess' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AccountWithRestoreAccess',
                                'type' => 'object',
                                'sentAs' => 'AccountWithRestoreAccess',
                                'properties' => [
                                    'AccountId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'OwnerAccount' => [
                            'type' => 'string',
                        ],
                        'TotalBackupSizeInMegaBytes' => [
                            'type' => 'numeric',
                        ],
                        'ActualIncrementalBackupSizeInMegaBytes' => [
                            'type' => 'numeric',
                        ],
                        'BackupProgressInMegaBytes' => [
                            'type' => 'numeric',
                        ],
                        'CurrentBackupRateInMegaBytesPerSecond' => [
                            'type' => 'numeric',
                        ],
                        'EstimatedSecondsToCompletion' => [
                            'type' => 'numeric',
                        ],
                        'ElapsedTimeInSeconds' => [
                            'type' => 'numeric',
                        ],
                        'SourceRegion' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
                        'RestorableNodeTypes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'NodeType',
                                'type' => 'string',
                                'sentAs' => 'NodeType',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ClusterWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Cluster' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ClusterIdentifier' => [
                            'type' => 'string',
                        ],
                        'NodeType' => [
                            'type' => 'string',
                        ],
                        'ClusterStatus' => [
                            'type' => 'string',
                        ],
                        'ModifyStatus' => [
                            'type' => 'string',
                        ],
                        'MasterUsername' => [
                            'type' => 'string',
                        ],
                        'DBName' => [
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
                        'ClusterCreateTime' => [
                            'type' => 'string',
                        ],
                        'AutomatedSnapshotRetentionPeriod' => [
                            'type' => 'numeric',
                        ],
                        'ClusterSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ClusterSecurityGroup',
                                'type' => 'object',
                                'sentAs' => 'ClusterSecurityGroup',
                                'properties' => [
                                    'ClusterSecurityGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'VpcSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'VpcSecurityGroup',
                                'type' => 'object',
                                'sentAs' => 'VpcSecurityGroup',
                                'properties' => [
                                    'VpcSecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ClusterParameterGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ClusterParameterGroup',
                                'type' => 'object',
                                'sentAs' => 'ClusterParameterGroup',
                                'properties' => [
                                    'ParameterGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'ParameterApplyStatus' => [
                                        'type' => 'string',
                                    ],
                                    'ClusterParameterStatusList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'ClusterParameterStatus',
                                            'type' => 'object',
                                            'sentAs' => 'member',
                                            'properties' => [
                                                'ParameterName' => [
                                                    'type' => 'string',
                                                ],
                                                'ParameterApplyStatus' => [
                                                    'type' => 'string',
                                                ],
                                                'ParameterApplyErrorDescription' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ClusterSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'PreferredMaintenanceWindow' => [
                            'type' => 'string',
                        ],
                        'PendingModifiedValues' => [
                            'type' => 'object',
                            'properties' => [
                                'MasterUserPassword' => [
                                    'type' => 'string',
                                ],
                                'NodeType' => [
                                    'type' => 'string',
                                ],
                                'NumberOfNodes' => [
                                    'type' => 'numeric',
                                ],
                                'ClusterType' => [
                                    'type' => 'string',
                                ],
                                'ClusterVersion' => [
                                    'type' => 'string',
                                ],
                                'AutomatedSnapshotRetentionPeriod' => [
                                    'type' => 'numeric',
                                ],
                                'ClusterIdentifier' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ClusterVersion' => [
                            'type' => 'string',
                        ],
                        'AllowVersionUpgrade' => [
                            'type' => 'boolean',
                        ],
                        'NumberOfNodes' => [
                            'type' => 'numeric',
                        ],
                        'PubliclyAccessible' => [
                            'type' => 'boolean',
                        ],
                        'Encrypted' => [
                            'type' => 'boolean',
                        ],
                        'RestoreStatus' => [
                            'type' => 'object',
                            'properties' => [
                                'Status' => [
                                    'type' => 'string',
                                ],
                                'CurrentRestoreRateInMegaBytesPerSecond' => [
                                    'type' => 'numeric',
                                ],
                                'SnapshotSizeInMegaBytes' => [
                                    'type' => 'numeric',
                                ],
                                'ProgressInMegaBytes' => [
                                    'type' => 'numeric',
                                ],
                                'ElapsedTimeInSeconds' => [
                                    'type' => 'numeric',
                                ],
                                'EstimatedTimeToCompletionInSeconds' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'HsmStatus' => [
                            'type' => 'object',
                            'properties' => [
                                'HsmClientCertificateIdentifier' => [
                                    'type' => 'string',
                                ],
                                'HsmConfigurationIdentifier' => [
                                    'type' => 'string',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ClusterSnapshotCopyStatus' => [
                            'type' => 'object',
                            'properties' => [
                                'DestinationRegion' => [
                                    'type' => 'string',
                                ],
                                'RetentionPeriod' => [
                                    'type' => 'numeric',
                                ],
                                'SnapshotCopyGrantName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ClusterPublicKey' => [
                            'type' => 'string',
                        ],
                        'ClusterNodes' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ClusterNode',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'NodeRole' => [
                                        'type' => 'string',
                                    ],
                                    'PrivateIPAddress' => [
                                        'type' => 'string',
                                    ],
                                    'PublicIPAddress' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'ElasticIpStatus' => [
                            'type' => 'object',
                            'properties' => [
                                'ElasticIp' => [
                                    'type' => 'string',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ClusterRevisionNumber' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
                        'KmsKeyId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ClusterParameterGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClusterParameterGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ParameterGroupName' => [
                            'type' => 'string',
                        ],
                        'ParameterGroupFamily' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'ClusterSubnetGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClusterSubnetGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ClusterSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'SubnetGroupStatus' => [
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
                                    'SubnetStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'EventSubscriptionWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EventSubscription' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'CustomerAwsId' => [
                            'type' => 'string',
                        ],
                        'CustSubscriptionId' => [
                            'type' => 'string',
                        ],
                        'SnsTopicArn' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'SubscriptionCreationTime' => [
                            'type' => 'string',
                        ],
                        'SourceType' => [
                            'type' => 'string',
                        ],
                        'SourceIdsList' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'SourceId',
                                'type' => 'string',
                                'sentAs' => 'SourceId',
                            ],
                        ],
                        'EventCategoriesList' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'EventCategory',
                                'type' => 'string',
                                'sentAs' => 'EventCategory',
                            ],
                        ],
                        'Severity' => [
                            'type' => 'string',
                        ],
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'HsmClientCertificateWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmClientCertificate' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'HsmClientCertificateIdentifier' => [
                            'type' => 'string',
                        ],
                        'HsmClientCertificatePublicKey' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'HsmConfigurationWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'HsmConfigurationIdentifier' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'HsmIpAddress' => [
                            'type' => 'string',
                        ],
                        'HsmPartitionName' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'SnapshotCopyGrantWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotCopyGrant' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'SnapshotCopyGrantName' => [
                            'type' => 'string',
                        ],
                        'KmsKeyId' => [
                            'type' => 'string',
                        ],
                        'Tags' => [
                            'type' => 'array',
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
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ClusterParameterGroupsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ParameterGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ClusterParameterGroup',
                        'type' => 'object',
                        'sentAs' => 'ClusterParameterGroup',
                        'properties' => [
                            'ParameterGroupName' => [
                                'type' => 'string',
                            ],
                            'ParameterGroupFamily' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'ClusterParameterGroupDetails' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
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
                            'ApplyType' => [
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
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ClusterSecurityGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ClusterSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ClusterSecurityGroup',
                        'type' => 'object',
                        'sentAs' => 'ClusterSecurityGroup',
                        'properties' => [
                            'ClusterSecurityGroupName' => [
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
                                        'Tags' => [
                                            'type' => 'array',
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
                            ],
                            'IPRanges' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'IPRange',
                                    'type' => 'object',
                                    'sentAs' => 'IPRange',
                                    'properties' => [
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'CIDRIP' => [
                                            'type' => 'string',
                                        ],
                                        'Tags' => [
                                            'type' => 'array',
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
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'SnapshotMessage' => [
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
                            'SnapshotIdentifier' => [
                                'type' => 'string',
                            ],
                            'ClusterIdentifier' => [
                                'type' => 'string',
                            ],
                            'SnapshotCreateTime' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Port' => [
                                'type' => 'numeric',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'ClusterCreateTime' => [
                                'type' => 'string',
                            ],
                            'MasterUsername' => [
                                'type' => 'string',
                            ],
                            'ClusterVersion' => [
                                'type' => 'string',
                            ],
                            'SnapshotType' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
                                'type' => 'string',
                            ],
                            'NumberOfNodes' => [
                                'type' => 'numeric',
                            ],
                            'DBName' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                            'EncryptedWithHSM' => [
                                'type' => 'boolean',
                            ],
                            'AccountsWithRestoreAccess' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AccountWithRestoreAccess',
                                    'type' => 'object',
                                    'sentAs' => 'AccountWithRestoreAccess',
                                    'properties' => [
                                        'AccountId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'OwnerAccount' => [
                                'type' => 'string',
                            ],
                            'TotalBackupSizeInMegaBytes' => [
                                'type' => 'numeric',
                            ],
                            'ActualIncrementalBackupSizeInMegaBytes' => [
                                'type' => 'numeric',
                            ],
                            'BackupProgressInMegaBytes' => [
                                'type' => 'numeric',
                            ],
                            'CurrentBackupRateInMegaBytesPerSecond' => [
                                'type' => 'numeric',
                            ],
                            'EstimatedSecondsToCompletion' => [
                                'type' => 'numeric',
                            ],
                            'ElapsedTimeInSeconds' => [
                                'type' => 'numeric',
                            ],
                            'SourceRegion' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                            'RestorableNodeTypes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'NodeType',
                                    'type' => 'string',
                                    'sentAs' => 'NodeType',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ClusterSubnetGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ClusterSubnetGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ClusterSubnetGroup',
                        'type' => 'object',
                        'sentAs' => 'ClusterSubnetGroup',
                        'properties' => [
                            'ClusterSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'SubnetGroupStatus' => [
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
                                        'SubnetStatus' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'ClusterVersionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ClusterVersions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ClusterVersion',
                        'type' => 'object',
                        'sentAs' => 'ClusterVersion',
                        'properties' => [
                            'ClusterVersion' => [
                                'type' => 'string',
                            ],
                            'ClusterParameterGroupFamily' => [
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
        'ClustersMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Clusters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Cluster',
                        'type' => 'object',
                        'sentAs' => 'Cluster',
                        'properties' => [
                            'ClusterIdentifier' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
                                'type' => 'string',
                            ],
                            'ClusterStatus' => [
                                'type' => 'string',
                            ],
                            'ModifyStatus' => [
                                'type' => 'string',
                            ],
                            'MasterUsername' => [
                                'type' => 'string',
                            ],
                            'DBName' => [
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
                            'ClusterCreateTime' => [
                                'type' => 'string',
                            ],
                            'AutomatedSnapshotRetentionPeriod' => [
                                'type' => 'numeric',
                            ],
                            'ClusterSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ClusterSecurityGroup',
                                    'type' => 'object',
                                    'sentAs' => 'ClusterSecurityGroup',
                                    'properties' => [
                                        'ClusterSecurityGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'VpcSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'VpcSecurityGroup',
                                    'type' => 'object',
                                    'sentAs' => 'VpcSecurityGroup',
                                    'properties' => [
                                        'VpcSecurityGroupId' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ClusterParameterGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ClusterParameterGroup',
                                    'type' => 'object',
                                    'sentAs' => 'ClusterParameterGroup',
                                    'properties' => [
                                        'ParameterGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'ParameterApplyStatus' => [
                                            'type' => 'string',
                                        ],
                                        'ClusterParameterStatusList' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' =>
                                                    'ClusterParameterStatus',
                                                'type' => 'object',
                                                'sentAs' => 'member',
                                                'properties' => [
                                                    'ParameterName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ParameterApplyStatus' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ParameterApplyErrorDescription' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ClusterSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'PreferredMaintenanceWindow' => [
                                'type' => 'string',
                            ],
                            'PendingModifiedValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'MasterUserPassword' => [
                                        'type' => 'string',
                                    ],
                                    'NodeType' => [
                                        'type' => 'string',
                                    ],
                                    'NumberOfNodes' => [
                                        'type' => 'numeric',
                                    ],
                                    'ClusterType' => [
                                        'type' => 'string',
                                    ],
                                    'ClusterVersion' => [
                                        'type' => 'string',
                                    ],
                                    'AutomatedSnapshotRetentionPeriod' => [
                                        'type' => 'numeric',
                                    ],
                                    'ClusterIdentifier' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ClusterVersion' => [
                                'type' => 'string',
                            ],
                            'AllowVersionUpgrade' => [
                                'type' => 'boolean',
                            ],
                            'NumberOfNodes' => [
                                'type' => 'numeric',
                            ],
                            'PubliclyAccessible' => [
                                'type' => 'boolean',
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                            ],
                            'RestoreStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'CurrentRestoreRateInMegaBytesPerSecond' => [
                                        'type' => 'numeric',
                                    ],
                                    'SnapshotSizeInMegaBytes' => [
                                        'type' => 'numeric',
                                    ],
                                    'ProgressInMegaBytes' => [
                                        'type' => 'numeric',
                                    ],
                                    'ElapsedTimeInSeconds' => [
                                        'type' => 'numeric',
                                    ],
                                    'EstimatedTimeToCompletionInSeconds' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'HsmStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'HsmClientCertificateIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'HsmConfigurationIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ClusterSnapshotCopyStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'DestinationRegion' => [
                                        'type' => 'string',
                                    ],
                                    'RetentionPeriod' => [
                                        'type' => 'numeric',
                                    ],
                                    'SnapshotCopyGrantName' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ClusterPublicKey' => [
                                'type' => 'string',
                            ],
                            'ClusterNodes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ClusterNode',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'NodeRole' => [
                                            'type' => 'string',
                                        ],
                                        'PrivateIPAddress' => [
                                            'type' => 'string',
                                        ],
                                        'PublicIPAddress' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ElasticIpStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'ElasticIp' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ClusterRevisionNumber' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DefaultClusterParametersWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DefaultClusterParameters' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ParameterGroupFamily' => [
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
                                    'ApplyType' => [
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
                    ],
                ],
            ],
        ],
        'EventCategoriesMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EventCategoriesMapList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EventCategoriesMap',
                        'type' => 'object',
                        'sentAs' => 'EventCategoriesMap',
                        'properties' => [
                            'SourceType' => [
                                'type' => 'string',
                            ],
                            'Events' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EventInfoMap',
                                    'type' => 'object',
                                    'sentAs' => 'EventInfoMap',
                                    'properties' => [
                                        'EventId' => [
                                            'type' => 'string',
                                        ],
                                        'EventCategories' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'EventCategory',
                                                'type' => 'string',
                                                'sentAs' => 'EventCategory',
                                            ],
                                        ],
                                        'EventDescription' => [
                                            'type' => 'string',
                                        ],
                                        'Severity' => [
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
        'EventSubscriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'EventSubscriptionsList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EventSubscription',
                        'type' => 'object',
                        'sentAs' => 'EventSubscription',
                        'properties' => [
                            'CustomerAwsId' => [
                                'type' => 'string',
                            ],
                            'CustSubscriptionId' => [
                                'type' => 'string',
                            ],
                            'SnsTopicArn' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'SubscriptionCreationTime' => [
                                'type' => 'string',
                            ],
                            'SourceType' => [
                                'type' => 'string',
                            ],
                            'SourceIdsList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'SourceId',
                                    'type' => 'string',
                                    'sentAs' => 'SourceId',
                                ],
                            ],
                            'EventCategoriesList' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EventCategory',
                                    'type' => 'string',
                                    'sentAs' => 'EventCategory',
                                ],
                            ],
                            'Severity' => [
                                'type' => 'string',
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                            'EventCategories' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EventCategory',
                                    'type' => 'string',
                                    'sentAs' => 'EventCategory',
                                ],
                            ],
                            'Severity' => [
                                'type' => 'string',
                            ],
                            'Date' => [
                                'type' => 'string',
                            ],
                            'EventId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'HsmClientCertificateMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'HsmClientCertificates' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HsmClientCertificate',
                        'type' => 'object',
                        'sentAs' => 'HsmClientCertificate',
                        'properties' => [
                            'HsmClientCertificateIdentifier' => [
                                'type' => 'string',
                            ],
                            'HsmClientCertificatePublicKey' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'HsmConfigurationMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'HsmConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'HsmConfiguration',
                        'type' => 'object',
                        'sentAs' => 'HsmConfiguration',
                        'properties' => [
                            'HsmConfigurationIdentifier' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'HsmIpAddress' => [
                                'type' => 'string',
                            ],
                            'HsmPartitionName' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'LoggingStatus' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoggingEnabled' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'BucketName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'S3KeyPrefix' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastSuccessfulDeliveryTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastFailureTime' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastFailureMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'OrderableClusterOptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OrderableClusterOptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'OrderableClusterOption',
                        'type' => 'object',
                        'sentAs' => 'OrderableClusterOption',
                        'properties' => [
                            'ClusterVersion' => [
                                'type' => 'string',
                            ],
                            'ClusterType' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
                                'type' => 'string',
                            ],
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AvailabilityZone',
                                    'type' => 'object',
                                    'sentAs' => 'AvailabilityZone',
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
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ReservedNodeOfferingsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedNodeOfferings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedNodeOffering',
                        'type' => 'object',
                        'sentAs' => 'ReservedNodeOffering',
                        'properties' => [
                            'ReservedNodeOfferingId' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
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
                            'CurrencyCode' => [
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
        'ReservedNodesMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedNodes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedNode',
                        'type' => 'object',
                        'sentAs' => 'ReservedNode',
                        'properties' => [
                            'ReservedNodeId' => [
                                'type' => 'string',
                            ],
                            'ReservedNodeOfferingId' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
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
                            'CurrencyCode' => [
                                'type' => 'string',
                            ],
                            'NodeCount' => [
                                'type' => 'numeric',
                            ],
                            'State' => [
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
        'ResizeProgressMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TargetNodeType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'TargetNumberOfNodes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'TargetClusterType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ImportTablesCompleted' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'ImportTablesInProgress' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'ImportTablesNotStarted' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'AvgResizeRateInMegaBytesPerSecond' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'TotalResizeDataInMegaBytes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'ProgressInMegaBytes' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'ElapsedTimeInSeconds' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'EstimatedTimeToCompletionInSeconds' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
            ],
        ],
        'SnapshotCopyGrantMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SnapshotCopyGrants' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SnapshotCopyGrant',
                        'type' => 'object',
                        'sentAs' => 'SnapshotCopyGrant',
                        'properties' => [
                            'SnapshotCopyGrantName' => [
                                'type' => 'string',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'type' => 'array',
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
                ],
            ],
        ],
        'TaggedResourceListMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TaggedResources' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'TaggedResource',
                        'type' => 'object',
                        'sentAs' => 'TaggedResource',
                        'properties' => [
                            'Tag' => [
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
                            'ResourceName' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ClusterParameterGroupNameMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ParameterGroupStatus' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ReservedNodeWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedNode' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ReservedNodeId' => [
                            'type' => 'string',
                        ],
                        'ReservedNodeOfferingId' => [
                            'type' => 'string',
                        ],
                        'NodeType' => [
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
                        'CurrencyCode' => [
                            'type' => 'string',
                        ],
                        'NodeCount' => [
                            'type' => 'numeric',
                        ],
                        'State' => [
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
    'iterators' => [
        'DescribeClusterParameterGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ParameterGroups',
        ],
        'DescribeClusterParameters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Parameters',
        ],
        'DescribeClusterSecurityGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ClusterSecurityGroups',
        ],
        'DescribeClusterSnapshots' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Snapshots',
        ],
        'DescribeClusterSubnetGroups' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ClusterSubnetGroups',
        ],
        'DescribeClusterVersions' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ClusterVersions',
        ],
        'DescribeClusters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Clusters',
        ],
        'DescribeDefaultClusterParameters' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Parameters',
        ],
        'DescribeEventSubscriptions' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'EventSubscriptionsList',
        ],
        'DescribeEvents' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Events',
        ],
        'DescribeHsmClientCertificates' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'HsmClientCertificates',
        ],
        'DescribeHsmConfigurations' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'HsmConfigurations',
        ],
        'DescribeOrderableClusterOptions' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'OrderableClusterOptions',
        ],
        'DescribeReservedNodeOfferings' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ReservedNodeOfferings',
        ],
        'DescribeReservedNodes' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'ReservedNodes',
        ],
        'DescribeTags' => [
            'input_token' => 'Marker',
            'output_token' => 'Marker',
            'limit_key' => 'MaxRecords',
            'result_key' => 'TaggedResources',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'acceptor.type' => 'output',
        ],
        '__ClusterState' => [
            'interval' => 60,
            'max_attempts' => 30,
            'operation' => 'DescribeClusters',
            'acceptor.path' => 'Clusters/*/ClusterStatus',
        ],
        'ClusterAvailable' => [
            'extends' => '__ClusterState',
            'success.value' => 'available',
            'failure.value' => ['deleting'],
            'ignore_errors' => ['ClusterNotFound'],
        ],
        'ClusterDeleted' => [
            'extends' => '__ClusterState',
            'success.type' => 'error',
            'success.value' => 'ClusterNotFound',
            'failure.value' => ['creating', 'rebooting'],
        ],
        'SnapshotAvailable' => [
            'interval' => 15,
            'max_attempts' => 20,
            'operation' => 'DescribeClusterSnapshots',
            'acceptor.path' => 'Snapshots/*/Status',
            'success.value' => 'available',
            'failure.value' => ['failed', 'deleted'],
        ],
    ],
];
