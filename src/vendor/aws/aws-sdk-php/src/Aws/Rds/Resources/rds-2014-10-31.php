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
    'apiVersion' => '2014-10-31',
    'endpointPrefix' => 'rds',
    'serviceFullName' => 'Amazon Relational Database Service',
    'serviceAbbreviation' => 'Amazon RDS',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'Rds',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'rds.us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AddSourceIdentifierToSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AddSourceIdentifierToSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The subscription name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' => 'The requested source could not be found.',
                    'class' => 'SourceNotFoundException',
                ],
            ],
        ],
        'AddTagsToResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => '2014-10-31',
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
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
            ],
        ],
        'ApplyPendingMaintenanceAction' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ResourcePendingMaintenanceActionsWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ApplyPendingMaintenanceAction',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'ResourceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ApplyAction' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptInType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified resource ID was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'AuthorizeDBSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AuthorizeDBSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSecurityGroupName' => [
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
                'EC2SecurityGroupId' => [
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
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the DB security group does not allow deletion.',
                    'class' => 'InvalidDBSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The specified CIDRIP or EC2 security group is already authorized for the specified DB security group.',
                    'class' => 'AuthorizationAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DB security group authorization quota has been reached.',
                    'class' => 'AuthorizationQuotaExceededException',
                ],
            ],
        ],
        'CopyDBClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyDBClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SourceDBClusterSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetDBClusterSnapshotIdentifier' => [
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
                        'User already has a DB cluster snapshot with the given identifier.',
                    'class' => 'DBClusterSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DBClusterSnapshotIdentifier does not refer to an existing DB cluster snapshot.',
                    'class' => 'DBClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
            ],
        ],
        'CopyDBParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyDBParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SourceDBParameterGroupIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetDBParameterGroupIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetDBParameterGroupDescription' => [
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
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'A DB parameter group with the same name exists.',
                    'class' => 'DBParameterGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB parameter groups.',
                    'class' => 'DBParameterGroupQuotaExceededException',
                ],
            ],
        ],
        'CopyDBSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyDBSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SourceDBSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetDBSnapshotIdentifier' => [
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
                'CopyTags' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBSnapshotIdentifier is already used by an existing snapshot.',
                    'class' => 'DBSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the DB snapshot does not allow deletion.',
                    'class' => 'InvalidDBSnapshotStateException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
            ],
        ],
        'CopyOptionGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OptionGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CopyOptionGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SourceOptionGroupIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetOptionGroupIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetOptionGroupDescription' => [
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
                        'The option group you are trying to create already exists.',
                    'class' => 'OptionGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The quota of 20 option groups was exceeded for this AWS account.',
                    'class' => 'OptionGroupQuotaExceededException',
                ],
            ],
        ],
        'CreateDBCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'BackupRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'CharacterSetName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DatabaseName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
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
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredBackupWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
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
                        'User already has a DB cluster with the given identifier.',
                    'class' => 'DBClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'There is insufficient storage available for the current action. You may be able to resolve this error by updating your subnet group to use different Availability Zones that have more storage available.',
                    'class' => 'InsufficientStorageClusterCapacityException',
                ],
                [
                    'reason' =>
                        'User attempted to create a new DB cluster and the user has already reached the maximum allowed DB cluster quota.',
                    'class' => 'DBClusterQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
                [
                    'reason' =>
                        'The DB subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBSubnetGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'DBClusterParameterGroupName does not refer to an existing DB Cluster parameter group.',
                    'class' => 'DBClusterParameterGroupNotFoundException',
                ],
            ],
        ],
        'CreateDBClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterParameterGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBParameterGroupFamily' => [
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
                        'Request would result in user exceeding the allowed number of DB parameter groups.',
                    'class' => 'DBParameterGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A DB parameter group with the same name exists.',
                    'class' => 'DBParameterGroupAlreadyExistsException',
                ],
            ],
        ],
        'CreateDBClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBClusterIdentifier' => [
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
                        'User already has a DB cluster snapshot with the given identifier.',
                    'class' => 'DBClusterSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
            ],
        ],
        'CreateDBInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllocatedStorage' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MasterUsername' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MasterUserPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DBSecurityGroups.member',
                    'items' => [
                        'name' => 'DBSecurityGroupName',
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
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BackupRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PreferredBackupWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MultiAZ' => [
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
                'LicenseModel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CharacterSetName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
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
                'DBClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StorageType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StorageEncrypted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'KmsKeyId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CopyTagsToSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'User already has a DB instance with the given identifier.',
                    'class' => 'DBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Specified DB instance class is not available in the specified Availability Zone.',
                    'class' => 'InsufficientDBInstanceCapacityException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB instances.',
                    'class' => 'InstanceQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Provisioned IOPS not available in the specified Availability Zone.',
                    'class' => 'ProvisionedIopsNotAvailableInAZException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'StorageType specified cannot be associated with the DB Instance.',
                    'class' => 'StorageTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'Specified CIDRIP or EC2 security group is not authorized for the specified DB security group.    RDS may not also be authorized via IAM to perform necessary actions on your behalf.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' => 'Error accessing KMS key.',
                    'class' => 'KMSKeyNotAccessibleException',
                ],
            ],
        ],
        'CreateDBInstanceReadReplica' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBInstanceReadReplica',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceDBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
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
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StorageType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CopyTagsToSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'User already has a DB instance with the given identifier.',
                    'class' => 'DBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Specified DB instance class is not available in the specified Availability Zone.',
                    'class' => 'InsufficientDBInstanceCapacityException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB instances.',
                    'class' => 'InstanceQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Provisioned IOPS not available in the specified Availability Zone.',
                    'class' => 'ProvisionedIopsNotAvailableInAZException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Indicates that the DBSubnetGroup should not be specified while creating read replicas that lie in the same region as the source instance.',
                    'class' => 'DBSubnetGroupNotAllowedException',
                ],
                [
                    'reason' =>
                        'Indicates the DBSubnetGroup does not belong to the same VPC as that of an existing cross region read replica of the same source instance.',
                    'class' => 'InvalidDBSubnetGroupException',
                ],
                [
                    'reason' =>
                        'StorageType specified cannot be associated with the DB Instance.',
                    'class' => 'StorageTypeNotSupportedException',
                ],
                [
                    'reason' => 'Error accessing KMS key.',
                    'class' => 'KMSKeyNotAccessibleException',
                ],
            ],
        ],
        'CreateDBParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBParameterGroupFamily' => [
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
                        'Request would result in user exceeding the allowed number of DB parameter groups.',
                    'class' => 'DBParameterGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A DB parameter group with the same name exists.',
                    'class' => 'DBParameterGroupAlreadyExistsException',
                ],
            ],
        ],
        'CreateDBSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSecurityGroupDescription' => [
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
                        'A DB security group with the name specified in DBSecurityGroupName already exists.',
                    'class' => 'DBSecurityGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB security groups.',
                    'class' => 'DBSecurityGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'A DB security group is not allowed for this action.',
                    'class' => 'DBSecurityGroupNotSupportedException',
                ],
            ],
        ],
        'CreateDBSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceIdentifier' => [
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
                        'DBSnapshotIdentifier is already used by an existing snapshot.',
                    'class' => 'DBSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
            ],
        ],
        'CreateDBSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateDBSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSubnetGroupDescription' => [
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
                        'DBSubnetGroupName is already used by an existing DB subnet group.',
                    'class' => 'DBSubnetGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB subnet groups.',
                    'class' => 'DBSubnetGroupQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of subnets in a DB subnet groups.',
                    'class' => 'DBSubnetQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
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
                    'default' => '2014-10-31',
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
                'EventCategories' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EventCategories.member',
                    'items' => [
                        'name' => 'EventCategory',
                        'type' => 'string',
                    ],
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
                        'You have reached the maximum number of event subscriptions.',
                    'class' => 'EventSubscriptionQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The supplied subscription name already exists.',
                    'class' => 'SubscriptionAlreadyExistException',
                ],
                [
                    'reason' =>
                        'SNS has responded that there is a problem with the SND topic specified.',
                    'class' => 'SNSInvalidTopicException',
                ],
                [
                    'reason' =>
                        'You do not have permission to publish to the SNS topic ARN.',
                    'class' => 'SNSNoAuthorizationException',
                ],
                [
                    'reason' => 'The SNS topic ARN does not exist.',
                    'class' => 'SNSTopicArnNotFoundException',
                ],
                [
                    'reason' => 'The supplied category does not exist.',
                    'class' => 'SubscriptionCategoryNotFoundException',
                ],
                [
                    'reason' => 'The requested source could not be found.',
                    'class' => 'SourceNotFoundException',
                ],
            ],
        ],
        'CreateOptionGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OptionGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateOptionGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'OptionGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MajorEngineVersion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionGroupDescription' => [
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
                        'The option group you are trying to create already exists.',
                    'class' => 'OptionGroupAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'The quota of 20 option groups was exceeded for this AWS account.',
                    'class' => 'OptionGroupQuotaExceededException',
                ],
            ],
        ],
        'DeleteDBCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SkipFinalSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'FinalDBSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
            ],
        ],
        'DeleteDBClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DeleteDBClusterSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBClusterSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster snapshot state.',
                    'class' => 'InvalidDBClusterSnapshotStateException',
                ],
                [
                    'reason' =>
                        'DBClusterSnapshotIdentifier does not refer to an existing DB cluster snapshot.',
                    'class' => 'DBClusterSnapshotNotFoundException',
                ],
            ],
        ],
        'DeleteDBInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SkipFinalSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'FinalDBSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier is already used by an existing snapshot.',
                    'class' => 'DBSnapshotAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB snapshots.',
                    'class' => 'SnapshotQuotaExceededException',
                ],
            ],
        ],
        'DeleteDBParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DeleteDBSecurityGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBSecurityGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSecurityGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The state of the DB security group does not allow deletion.',
                    'class' => 'InvalidDBSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
            ],
        ],
        'DeleteDBSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSnapshotWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The state of the DB snapshot does not allow deletion.',
                    'class' => 'InvalidDBSnapshotStateException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
            ],
        ],
        'DeleteDBSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteDBSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The DB subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBSubnetGroupStateException',
                ],
                [
                    'reason' => 'The DB subnet is not in the available state.',
                    'class' => 'InvalidDBSubnetStateException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
            ],
        ],
        'DeleteEventSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionWrapper',
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
                    'default' => '2014-10-31',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The subscription name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' =>
                        'This error can occur if someone else is modifying a subscription. You should retry the action.',
                    'class' => 'InvalidEventSubscriptionStateException',
                ],
            ],
        ],
        'DeleteOptionGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteOptionGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'OptionGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The option group is not in the available state.',
                    'class' => 'InvalidOptionGroupStateException',
                ],
            ],
        ],
        'DescribeAccountAttributes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'AccountAttributesMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeAccountAttributes',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
            ],
        ],
        'DescribeCertificates' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CertificateMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeCertificates',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'CertificateIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'CertificateIdentifier does not refer to an existing certificate.',
                    'class' => 'CertificateNotFoundException',
                ],
            ],
        ],
        'DescribeDBClusterParameterGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterParameterGroupsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBClusterParameterGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DescribeDBClusterParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterParameterGroupDetails',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBClusterParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Source' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DescribeDBClusterSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterSnapshotMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBClusterSnapshots',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBClusterSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBClusterSnapshotIdentifier does not refer to an existing DB cluster snapshot.',
                    'class' => 'DBClusterSnapshotNotFoundException',
                ],
            ],
        ],
        'DescribeDBClusters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBClusters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
            ],
        ],
        'DescribeDBEngineVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBEngineVersionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBEngineVersions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBParameterGroupFamily' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                'ListSupportedCharacterSets' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeDBInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
            ],
        ],
        'DescribeDBLogFiles' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeDBLogFilesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBLogFiles',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FilenameContains' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'FileLastWritten' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'FileSize' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
            ],
        ],
        'DescribeDBParameterGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBParameterGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DescribeDBParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupDetails',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Source' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'DescribeDBSecurityGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSecurityGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBSecurityGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSecurityGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
            ],
        ],
        'DescribeDBSnapshots' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSnapshotMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBSnapshots',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSnapshotIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
            ],
        ],
        'DescribeDBSubnetGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSubnetGroupMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeDBSubnetGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
            ],
        ],
        'DescribeEngineDefaultClusterParameters' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EngineDefaultsWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEngineDefaultClusterParameters',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupFamily' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupFamily' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'default' => '2014-10-31',
                ],
                'SourceType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'default' => '2014-10-31',
                ],
                'SubscriptionName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'reason' => 'The subscription name does not exist.',
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
                    'default' => '2014-10-31',
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
                'EventCategories' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EventCategories.member',
                    'items' => [
                        'name' => 'EventCategory',
                        'type' => 'string',
                    ],
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
        'DescribeOptionGroupOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OptionGroupOptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeOptionGroupOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'EngineName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MajorEngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
        'DescribeOptionGroups' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OptionGroups',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeOptionGroups',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MaxRecords' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'EngineName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MajorEngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
            ],
        ],
        'DescribeOrderableDBInstanceOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OrderableDBInstanceOptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeOrderableDBInstanceOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'Engine' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LicenseModel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Vpc' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
        'DescribePendingMaintenanceActions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'PendingMaintenanceActionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribePendingMaintenanceActions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'ResourceIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'reason' => 'The specified resource ID was not found.',
                    'class' => 'ResourceNotFoundException',
                ],
            ],
        ],
        'DescribeReservedDBInstances' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedDBInstanceMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedDBInstances',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'ReservedDBInstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedDBInstancesOfferingId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
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
                'MultiAZ' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'reason' => 'The specified reserved DB Instance not found.',
                    'class' => 'ReservedDBInstanceNotFoundException',
                ],
            ],
        ],
        'DescribeReservedDBInstancesOfferings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedDBInstancesOfferingMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeReservedDBInstancesOfferings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'ReservedDBInstancesOfferingId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
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
                'MultiAZ' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
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
                    'class' => 'ReservedDBInstancesOfferingNotFoundException',
                ],
            ],
        ],
        'DownloadDBLogFilePortion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DownloadDBLogFilePortionDetails',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DownloadDBLogFilePortion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'LogFileName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NumberOfLines' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'LogFileName does not refer to an existing DB log file.',
                    'class' => 'DBLogFileNotFoundException',
                ],
            ],
        ],
        'FailoverDBCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'FailoverDBCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
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
                    'default' => '2014-10-31',
                ],
                'ResourceName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Filters' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Filters.member',
                    'items' => [
                        'name' => 'Filter',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Values' => [
                                'required' => true,
                                'type' => 'array',
                                'sentAs' => 'Values.member',
                                'items' => [
                                    'name' => 'Value',
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
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
            ],
        ],
        'ModifyDBCluster' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyDBCluster',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NewDBClusterIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ApplyImmediately' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'BackupRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DBClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'MasterUserPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredBackupWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster state.',
                    'class' => 'InvalidDBClusterStateException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'The DB subnet group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBSubnetGroupStateException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'DBClusterParameterGroupName does not refer to an existing DB Cluster parameter group.',
                    'class' => 'DBClusterParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the DB security group does not allow deletion.',
                    'class' => 'InvalidDBSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
            ],
        ],
        'ModifyDBClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyDBClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
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
                            'ApplyType' => [
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
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                            'ApplyMethod' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
            ],
        ],
        'ModifyDBInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyDBInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllocatedStorage' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'DBSecurityGroups.member',
                    'items' => [
                        'name' => 'DBSecurityGroupName',
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
                'ApplyImmediately' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'MasterUserPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BackupRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PreferredBackupWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'PreferredMaintenanceWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MultiAZ' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AllowMajorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'NewDBInstanceIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'StorageType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CACertificateIdentifier' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CopyTagsToSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'The state of the DB security group does not allow deletion.',
                    'class' => 'InvalidDBSecurityGroupStateException',
                ],
                [
                    'reason' =>
                        'User already has a DB instance with the given identifier.',
                    'class' => 'DBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Specified DB instance class is not available in the specified Availability Zone.',
                    'class' => 'InsufficientDBInstanceCapacityException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Provisioned IOPS not available in the specified Availability Zone.',
                    'class' => 'ProvisionedIopsNotAvailableInAZException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The DB upgrade failed because a resource the DB depends on could not be modified.',
                    'class' => 'DBUpgradeDependencyFailureException',
                ],
                [
                    'reason' =>
                        'StorageType specified cannot be associated with the DB Instance.',
                    'class' => 'StorageTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'Specified CIDRIP or EC2 security group is not authorized for the specified DB security group.    RDS may not also be authorized via IAM to perform necessary actions on your behalf.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' =>
                        'CertificateIdentifier does not refer to an existing certificate.',
                    'class' => 'CertificateNotFoundException',
                ],
            ],
        ],
        'ModifyDBParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyDBParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
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
                            'ApplyType' => [
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
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                            'ApplyMethod' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
            ],
        ],
        'ModifyDBSubnetGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSubnetGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyDBSubnetGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSubnetGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSubnetGroupDescription' => [
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
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of subnets in a DB subnet groups.',
                    'class' => 'DBSubnetQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The DB subnet is already in use in the Availability Zone.',
                    'class' => 'SubnetAlreadyInUseException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
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
                    'default' => '2014-10-31',
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
                'EventCategories' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EventCategories.member',
                    'items' => [
                        'name' => 'EventCategory',
                        'type' => 'string',
                    ],
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
                        'You have reached the maximum number of event subscriptions.',
                    'class' => 'EventSubscriptionQuotaExceededException',
                ],
                [
                    'reason' => 'The subscription name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' =>
                        'SNS has responded that there is a problem with the SND topic specified.',
                    'class' => 'SNSInvalidTopicException',
                ],
                [
                    'reason' =>
                        'You do not have permission to publish to the SNS topic ARN.',
                    'class' => 'SNSNoAuthorizationException',
                ],
                [
                    'reason' => 'The SNS topic ARN does not exist.',
                    'class' => 'SNSTopicArnNotFoundException',
                ],
                [
                    'reason' => 'The supplied category does not exist.',
                    'class' => 'SubscriptionCategoryNotFoundException',
                ],
            ],
        ],
        'ModifyOptionGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'OptionGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ModifyOptionGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'OptionGroupName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionsToInclude' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionsToInclude.member',
                    'items' => [
                        'name' => 'OptionConfiguration',
                        'type' => 'object',
                        'properties' => [
                            'OptionName' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Port' => [
                                'type' => 'numeric',
                            ],
                            'DBSecurityGroupMemberships' => [
                                'type' => 'array',
                                'sentAs' => 'DBSecurityGroupMemberships.member',
                                'items' => [
                                    'name' => 'DBSecurityGroupName',
                                    'type' => 'string',
                                ],
                            ],
                            'VpcSecurityGroupMemberships' => [
                                'type' => 'array',
                                'sentAs' =>
                                    'VpcSecurityGroupMemberships.member',
                                'items' => [
                                    'name' => 'VpcSecurityGroupId',
                                    'type' => 'string',
                                ],
                            ],
                            'OptionSettings' => [
                                'type' => 'array',
                                'sentAs' => 'OptionSettings.member',
                                'items' => [
                                    'name' => 'OptionSetting',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                        ],
                                        'ApplyType' => [
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
                                            'format' => 'boolean-string',
                                        ],
                                        'IsCollection' => [
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'OptionsToRemove' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionsToRemove.member',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
                'ApplyImmediately' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The option group is not in the available state.',
                    'class' => 'InvalidOptionGroupStateException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
            ],
        ],
        'PromoteReadReplica' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PromoteReadReplica',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'BackupRetentionPeriod' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'PreferredBackupWindow' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
            ],
        ],
        'PurchaseReservedDBInstancesOffering' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ReservedDBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'PurchaseReservedDBInstancesOffering',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'ReservedDBInstancesOfferingId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ReservedDBInstanceId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceCount' => [
                    'type' => 'numeric',
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
                    'reason' => 'Specified offering does not exist.',
                    'class' => 'ReservedDBInstancesOfferingNotFoundException',
                ],
                [
                    'reason' =>
                        'User already has a reservation with the given identifier.',
                    'class' => 'ReservedDBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'Request would exceed the user\'s DB Instance quota.',
                    'class' => 'ReservedDBInstanceQuotaExceededException',
                ],
            ],
        ],
        'RebootDBInstance' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RebootDBInstance',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ForceFailover' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
            ],
        ],
        'RemoveSourceIdentifierFromSubscription' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventSubscriptionWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RemoveSourceIdentifierFromSubscription',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SubscriptionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The subscription name does not exist.',
                    'class' => 'SubscriptionNotFoundException',
                ],
                [
                    'reason' => 'The requested source could not be found.',
                    'class' => 'SourceNotFoundException',
                ],
            ],
        ],
        'RemoveTagsFromResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
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
                    'default' => '2014-10-31',
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
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
            ],
        ],
        'ResetDBClusterParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetDBClusterParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterParameterGroupName' => [
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
                            'ApplyType' => [
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
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                            'ApplyMethod' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'ResetDBParameterGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBParameterGroupNameMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ResetDBParameterGroup',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBParameterGroupName' => [
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
                            'ApplyType' => [
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
                                'format' => 'boolean-string',
                            ],
                            'MinimumEngineVersion' => [
                                'type' => 'string',
                            ],
                            'ApplyMethod' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The DB parameter group cannot be deleted because it is in use.',
                    'class' => 'InvalidDBParameterGroupStateException',
                ],
                [
                    'reason' =>
                        'DBParameterGroupName does not refer to an existing DB parameter group.',
                    'class' => 'DBParameterGroupNotFoundException',
                ],
            ],
        ],
        'RestoreDBClusterFromSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreDBClusterFromSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'AvailabilityZones' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AvailabilityZones.member',
                    'items' => [
                        'name' => 'AvailabilityZone',
                        'type' => 'string',
                    ],
                ],
                'DBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EngineVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DatabaseName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
                        'User already has a DB cluster with the given identifier.',
                    'class' => 'DBClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'User attempted to create a new DB cluster and the user has already reached the maximum allowed DB cluster quota.',
                    'class' => 'DBClusterQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'DBClusterSnapshotIdentifier does not refer to an existing DB cluster snapshot.',
                    'class' => 'DBClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The DB cluster does not have enough capacity for the current operation.',
                    'class' => 'InsufficientDBClusterCapacityException',
                ],
                [
                    'reason' =>
                        'There is insufficient storage available for the current action. You may be able to resolve this error by updating your subnet group to use different Availability Zones that have more storage available.',
                    'class' => 'InsufficientStorageClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The state of the DB snapshot does not allow deletion.',
                    'class' => 'InvalidDBSnapshotStateException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster snapshot state.',
                    'class' => 'InvalidDBClusterSnapshotStateException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Cannot restore from vpc backup to non-vpc DB instance.',
                    'class' => 'InvalidRestoreException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
            ],
        ],
        'RestoreDBClusterToPointInTime' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBClusterWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreDBClusterToPointInTime',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceDBClusterIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RestoreToTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'UseLatestRestorableTime' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'Port' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
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
                        'User already has a DB cluster with the given identifier.',
                    'class' => 'DBClusterAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'User attempted to create a new DB cluster and the user has already reached the maximum allowed DB cluster quota.',
                    'class' => 'DBClusterQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'DBClusterIdentifier does not refer to an existing DB cluster.',
                    'class' => 'DBClusterNotFoundException',
                ],
                [
                    'reason' =>
                        'DBClusterSnapshotIdentifier does not refer to an existing DB cluster snapshot.',
                    'class' => 'DBClusterSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'The DB cluster does not have enough capacity for the current operation.',
                    'class' => 'InsufficientDBClusterCapacityException',
                ],
                [
                    'reason' =>
                        'The state of the DB snapshot does not allow deletion.',
                    'class' => 'InvalidDBSnapshotStateException',
                ],
                [
                    'reason' =>
                        'The supplied value is not a valid DB cluster snapshot state.',
                    'class' => 'InvalidDBClusterSnapshotStateException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Cannot restore from vpc backup to non-vpc DB instance.',
                    'class' => 'InvalidRestoreException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
            ],
        ],
        'RestoreDBInstanceFromDBSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreDBInstanceFromDBSnapshot',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBSnapshotIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
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
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MultiAZ' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'LicenseModel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
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
                'StorageType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CopyTagsToSnapshot' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'User already has a DB instance with the given identifier.',
                    'class' => 'DBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DBSnapshotIdentifier does not refer to an existing DB snapshot.',
                    'class' => 'DBSnapshotNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB instances.',
                    'class' => 'InstanceQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Specified DB instance class is not available in the specified Availability Zone.',
                    'class' => 'InsufficientDBInstanceCapacityException',
                ],
                [
                    'reason' =>
                        'The state of the DB snapshot does not allow deletion.',
                    'class' => 'InvalidDBSnapshotStateException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Cannot restore from vpc backup to non-vpc DB instance.',
                    'class' => 'InvalidRestoreException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'Provisioned IOPS not available in the specified Availability Zone.',
                    'class' => 'ProvisionedIopsNotAvailableInAZException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'StorageType specified cannot be associated with the DB Instance.',
                    'class' => 'StorageTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'Specified CIDRIP or EC2 security group is not authorized for the specified DB security group.    RDS may not also be authorized via IAM to perform necessary actions on your behalf.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' => 'Error accessing KMS key.',
                    'class' => 'KMSKeyNotAccessibleException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
            ],
        ],
        'RestoreDBInstanceToPointInTime' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBInstanceWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestoreDBInstanceToPointInTime',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'SourceDBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TargetDBInstanceIdentifier' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'RestoreTime' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
                'UseLatestRestorableTime' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'DBInstanceClass' => [
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
                'DBSubnetGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'MultiAZ' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'PubliclyAccessible' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'AutoMinorVersionUpgrade' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'LicenseModel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DBName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Engine' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Iops' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'OptionGroupName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CopyTagsToSnapshot' => [
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
                'StorageType' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialArn' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'TdeCredentialPassword' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'User already has a DB instance with the given identifier.',
                    'class' => 'DBInstanceAlreadyExistsException',
                ],
                [
                    'reason' =>
                        'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'class' => 'DBInstanceNotFoundException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed number of DB instances.',
                    'class' => 'InstanceQuotaExceededException',
                ],
                [
                    'reason' =>
                        'Specified DB instance class is not available in the specified Availability Zone.',
                    'class' => 'InsufficientDBInstanceCapacityException',
                ],
                [
                    'reason' =>
                        'The specified DB instance is not in the available state.',
                    'class' => 'InvalidDBInstanceStateException',
                ],
                [
                    'reason' =>
                        'SourceDBInstanceIdentifier refers to a DB instance with BackupRetentionPeriod equal to 0.',
                    'class' => 'PointInTimeRestoreNotEnabledException',
                ],
                [
                    'reason' =>
                        'Request would result in user exceeding the allowed amount of storage available across all DB instances.',
                    'class' => 'StorageQuotaExceededException',
                ],
                [
                    'reason' =>
                        'DB subnet group does not cover all Availability Zones after it is created because users\' change.',
                    'class' => 'InvalidVPCNetworkStateException',
                ],
                [
                    'reason' =>
                        'Cannot restore from vpc backup to non-vpc DB instance.',
                    'class' => 'InvalidRestoreException',
                ],
                [
                    'reason' =>
                        'DBSubnetGroupName does not refer to an existing DB subnet group.',
                    'class' => 'DBSubnetGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Subnets in the DB subnet group should cover at least two Availability Zones unless there is only one Availability Zone.',
                    'class' => 'DBSubnetGroupDoesNotCoverEnoughAZsException',
                ],
                [
                    'reason' =>
                        'The requested subnet is invalid, or multiple subnets were requested that are not all in a common VPC.',
                    'class' => 'InvalidSubnetException',
                ],
                [
                    'reason' =>
                        'Provisioned IOPS not available in the specified Availability Zone.',
                    'class' => 'ProvisionedIopsNotAvailableInAZException',
                ],
                [
                    'reason' =>
                        'The specified option group could not be found.',
                    'class' => 'OptionGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'StorageType specified cannot be associated with the DB Instance.',
                    'class' => 'StorageTypeNotSupportedException',
                ],
                [
                    'reason' =>
                        'Specified CIDRIP or EC2 security group is not authorized for the specified DB security group.    RDS may not also be authorized via IAM to perform necessary actions on your behalf.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' => 'Error accessing KMS key.',
                    'class' => 'KMSKeyNotAccessibleException',
                ],
                [
                    'reason' =>
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
            ],
        ],
        'RevokeDBSecurityGroupIngress' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DBSecurityGroupWrapper',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RevokeDBSecurityGroupIngress',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2014-10-31',
                ],
                'DBSecurityGroupName' => [
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
                'EC2SecurityGroupId' => [
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
                        'DBSecurityGroupName does not refer to an existing DB security group.',
                    'class' => 'DBSecurityGroupNotFoundException',
                ],
                [
                    'reason' =>
                        'Specified CIDRIP or EC2 security group is not authorized for the specified DB security group.    RDS may not also be authorized via IAM to perform necessary actions on your behalf.',
                    'class' => 'AuthorizationNotFoundException',
                ],
                [
                    'reason' =>
                        'The state of the DB security group does not allow deletion.',
                    'class' => 'InvalidDBSecurityGroupStateException',
                ],
            ],
        ],
    ],
    'models' => [
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
                        'Enabled' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'ResourcePendingMaintenanceActionsWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourcePendingMaintenanceActions' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ResourceIdentifier' => [
                            'type' => 'string',
                        ],
                        'PendingMaintenanceActionDetails' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'PendingMaintenanceAction',
                                'type' => 'object',
                                'sentAs' => 'PendingMaintenanceAction',
                                'properties' => [
                                    'Action' => [
                                        'type' => 'string',
                                    ],
                                    'AutoAppliedAfterDate' => [
                                        'type' => 'string',
                                    ],
                                    'ForcedApplyDate' => [
                                        'type' => 'string',
                                    ],
                                    'OptInStatus' => [
                                        'type' => 'string',
                                    ],
                                    'CurrentApplyDate' => [
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
            ],
        ],
        'DBSecurityGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBSecurityGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'OwnerId' => [
                            'type' => 'string',
                        ],
                        'DBSecurityGroupName' => [
                            'type' => 'string',
                        ],
                        'DBSecurityGroupDescription' => [
                            'type' => 'string',
                        ],
                        'VpcId' => [
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
                                    'EC2SecurityGroupId' => [
                                        'type' => 'string',
                                    ],
                                    'EC2SecurityGroupOwnerId' => [
                                        'type' => 'string',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBClusterSnapshotWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBClusterSnapshot' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'AvailabilityZones' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AvailabilityZone',
                                'type' => 'string',
                                'sentAs' => 'AvailabilityZone',
                            ],
                        ],
                        'DBClusterSnapshotIdentifier' => [
                            'type' => 'string',
                        ],
                        'DBClusterIdentifier' => [
                            'type' => 'string',
                        ],
                        'SnapshotCreateTime' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'AllocatedStorage' => [
                            'type' => 'numeric',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'Port' => [
                            'type' => 'numeric',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'ClusterCreateTime' => [
                            'type' => 'string',
                        ],
                        'MasterUsername' => [
                            'type' => 'string',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'LicenseModel' => [
                            'type' => 'string',
                        ],
                        'SnapshotType' => [
                            'type' => 'string',
                        ],
                        'PercentProgress' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
            ],
        ],
        'DBParameterGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBParameterGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'DBParameterGroupName' => [
                            'type' => 'string',
                        ],
                        'DBParameterGroupFamily' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DBSnapshotWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBSnapshot' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'DBSnapshotIdentifier' => [
                            'type' => 'string',
                        ],
                        'DBInstanceIdentifier' => [
                            'type' => 'string',
                        ],
                        'SnapshotCreateTime' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'AllocatedStorage' => [
                            'type' => 'numeric',
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
                        'VpcId' => [
                            'type' => 'string',
                        ],
                        'InstanceCreateTime' => [
                            'type' => 'string',
                        ],
                        'MasterUsername' => [
                            'type' => 'string',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'LicenseModel' => [
                            'type' => 'string',
                        ],
                        'SnapshotType' => [
                            'type' => 'string',
                        ],
                        'Iops' => [
                            'type' => 'numeric',
                        ],
                        'OptionGroupName' => [
                            'type' => 'string',
                        ],
                        'PercentProgress' => [
                            'type' => 'numeric',
                        ],
                        'SourceRegion' => [
                            'type' => 'string',
                        ],
                        'SourceDBSnapshotIdentifier' => [
                            'type' => 'string',
                        ],
                        'StorageType' => [
                            'type' => 'string',
                        ],
                        'TdeCredentialArn' => [
                            'type' => 'string',
                        ],
                        'Encrypted' => [
                            'type' => 'boolean',
                        ],
                        'KmsKeyId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'OptionGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OptionGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'OptionGroupName' => [
                            'type' => 'string',
                        ],
                        'OptionGroupDescription' => [
                            'type' => 'string',
                        ],
                        'EngineName' => [
                            'type' => 'string',
                        ],
                        'MajorEngineVersion' => [
                            'type' => 'string',
                        ],
                        'Options' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Option',
                                'type' => 'object',
                                'sentAs' => 'Option',
                                'properties' => [
                                    'OptionName' => [
                                        'type' => 'string',
                                    ],
                                    'OptionDescription' => [
                                        'type' => 'string',
                                    ],
                                    'Persistent' => [
                                        'type' => 'boolean',
                                    ],
                                    'Permanent' => [
                                        'type' => 'boolean',
                                    ],
                                    'Port' => [
                                        'type' => 'numeric',
                                    ],
                                    'OptionSettings' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'OptionSetting',
                                            'type' => 'object',
                                            'sentAs' => 'OptionSetting',
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'Value' => [
                                                    'type' => 'string',
                                                ],
                                                'DefaultValue' => [
                                                    'type' => 'string',
                                                ],
                                                'Description' => [
                                                    'type' => 'string',
                                                ],
                                                'ApplyType' => [
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
                                                'IsCollection' => [
                                                    'type' => 'boolean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DBSecurityGroupMemberships' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'DBSecurityGroup',
                                            'type' => 'object',
                                            'sentAs' => 'DBSecurityGroup',
                                            'properties' => [
                                                'DBSecurityGroupName' => [
                                                    'type' => 'string',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'VpcSecurityGroupMemberships' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' =>
                                                'VpcSecurityGroupMembership',
                                            'type' => 'object',
                                            'sentAs' =>
                                                'VpcSecurityGroupMembership',
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
                                ],
                            ],
                        ],
                        'AllowsVpcAndNonVpcInstanceMemberships' => [
                            'type' => 'boolean',
                        ],
                        'VpcId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DBClusterWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBCluster' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'AllocatedStorage' => [
                            'type' => 'numeric',
                        ],
                        'AvailabilityZones' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AvailabilityZone',
                                'type' => 'string',
                                'sentAs' => 'AvailabilityZone',
                            ],
                        ],
                        'BackupRetentionPeriod' => [
                            'type' => 'numeric',
                        ],
                        'CharacterSetName' => [
                            'type' => 'string',
                        ],
                        'DatabaseName' => [
                            'type' => 'string',
                        ],
                        'DBClusterIdentifier' => [
                            'type' => 'string',
                        ],
                        'DBClusterParameterGroup' => [
                            'type' => 'string',
                        ],
                        'DBSubnetGroup' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'PercentProgress' => [
                            'type' => 'string',
                        ],
                        'EarliestRestorableTime' => [
                            'type' => 'string',
                        ],
                        'Endpoint' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'LatestRestorableTime' => [
                            'type' => 'string',
                        ],
                        'Port' => [
                            'type' => 'numeric',
                        ],
                        'MasterUsername' => [
                            'type' => 'string',
                        ],
                        'DBClusterOptionGroupMemberships' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DBClusterOptionGroup',
                                'type' => 'object',
                                'sentAs' => 'DBClusterOptionGroup',
                                'properties' => [
                                    'DBClusterOptionGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'PreferredBackupWindow' => [
                            'type' => 'string',
                        ],
                        'PreferredMaintenanceWindow' => [
                            'type' => 'string',
                        ],
                        'DBClusterMembers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DBClusterMember',
                                'type' => 'object',
                                'sentAs' => 'DBClusterMember',
                                'properties' => [
                                    'DBInstanceIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'IsClusterWriter' => [
                                        'type' => 'boolean',
                                    ],
                                    'DBClusterParameterGroupStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'VpcSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'VpcSecurityGroupMembership',
                                'type' => 'object',
                                'sentAs' => 'VpcSecurityGroupMembership',
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
                        'HostedZoneId' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DBClusterParameterGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBClusterParameterGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'DBClusterParameterGroupName' => [
                            'type' => 'string',
                        ],
                        'DBParameterGroupFamily' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'DBInstanceWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBInstance' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'DBInstanceIdentifier' => [
                            'type' => 'string',
                        ],
                        'DBInstanceClass' => [
                            'type' => 'string',
                        ],
                        'Engine' => [
                            'type' => 'string',
                        ],
                        'DBInstanceStatus' => [
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
                                'HostedZoneId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'AllocatedStorage' => [
                            'type' => 'numeric',
                        ],
                        'InstanceCreateTime' => [
                            'type' => 'string',
                        ],
                        'PreferredBackupWindow' => [
                            'type' => 'string',
                        ],
                        'BackupRetentionPeriod' => [
                            'type' => 'numeric',
                        ],
                        'DBSecurityGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DBSecurityGroup',
                                'type' => 'object',
                                'sentAs' => 'DBSecurityGroup',
                                'properties' => [
                                    'DBSecurityGroupName' => [
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
                                'name' => 'VpcSecurityGroupMembership',
                                'type' => 'object',
                                'sentAs' => 'VpcSecurityGroupMembership',
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
                        'DBParameterGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DBParameterGroup',
                                'type' => 'object',
                                'sentAs' => 'DBParameterGroup',
                                'properties' => [
                                    'DBParameterGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'ParameterApplyStatus' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'AvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'DBSubnetGroup' => [
                            'type' => 'object',
                            'properties' => [
                                'DBSubnetGroupName' => [
                                    'type' => 'string',
                                ],
                                'DBSubnetGroupDescription' => [
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
                            ],
                        ],
                        'PreferredMaintenanceWindow' => [
                            'type' => 'string',
                        ],
                        'PendingModifiedValues' => [
                            'type' => 'object',
                            'properties' => [
                                'DBInstanceClass' => [
                                    'type' => 'string',
                                ],
                                'AllocatedStorage' => [
                                    'type' => 'numeric',
                                ],
                                'MasterUserPassword' => [
                                    'type' => 'string',
                                ],
                                'Port' => [
                                    'type' => 'numeric',
                                ],
                                'BackupRetentionPeriod' => [
                                    'type' => 'numeric',
                                ],
                                'MultiAZ' => [
                                    'type' => 'boolean',
                                ],
                                'EngineVersion' => [
                                    'type' => 'string',
                                ],
                                'Iops' => [
                                    'type' => 'numeric',
                                ],
                                'DBInstanceIdentifier' => [
                                    'type' => 'string',
                                ],
                                'StorageType' => [
                                    'type' => 'string',
                                ],
                                'CACertificateIdentifier' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'LatestRestorableTime' => [
                            'type' => 'string',
                        ],
                        'MultiAZ' => [
                            'type' => 'boolean',
                        ],
                        'EngineVersion' => [
                            'type' => 'string',
                        ],
                        'AutoMinorVersionUpgrade' => [
                            'type' => 'boolean',
                        ],
                        'ReadReplicaSourceDBInstanceIdentifier' => [
                            'type' => 'string',
                        ],
                        'ReadReplicaDBInstanceIdentifiers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ReadReplicaDBInstanceIdentifier',
                                'type' => 'string',
                                'sentAs' => 'ReadReplicaDBInstanceIdentifier',
                            ],
                        ],
                        'LicenseModel' => [
                            'type' => 'string',
                        ],
                        'Iops' => [
                            'type' => 'numeric',
                        ],
                        'OptionGroupMemberships' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'OptionGroupMembership',
                                'type' => 'object',
                                'sentAs' => 'OptionGroupMembership',
                                'properties' => [
                                    'OptionGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'CharacterSetName' => [
                            'type' => 'string',
                        ],
                        'SecondaryAvailabilityZone' => [
                            'type' => 'string',
                        ],
                        'PubliclyAccessible' => [
                            'type' => 'boolean',
                        ],
                        'StatusInfos' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'DBInstanceStatusInfo',
                                'type' => 'object',
                                'sentAs' => 'DBInstanceStatusInfo',
                                'properties' => [
                                    'StatusType' => [
                                        'type' => 'string',
                                    ],
                                    'Normal' => [
                                        'type' => 'boolean',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'Message' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'StorageType' => [
                            'type' => 'string',
                        ],
                        'TdeCredentialArn' => [
                            'type' => 'string',
                        ],
                        'DbInstancePort' => [
                            'type' => 'numeric',
                        ],
                        'DBClusterIdentifier' => [
                            'type' => 'string',
                        ],
                        'StorageEncrypted' => [
                            'type' => 'boolean',
                        ],
                        'KmsKeyId' => [
                            'type' => 'string',
                        ],
                        'DbiResourceId' => [
                            'type' => 'string',
                        ],
                        'CACertificateIdentifier' => [
                            'type' => 'string',
                        ],
                        'CopyTagsToSnapshot' => [
                            'type' => 'boolean',
                        ],
                    ],
                ],
            ],
        ],
        'DBSubnetGroupWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBSubnetGroup' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'DBSubnetGroupName' => [
                            'type' => 'string',
                        ],
                        'DBSubnetGroupDescription' => [
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
                    ],
                ],
            ],
        ],
        'AccountAttributesMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AccountQuotas' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'AccountQuota',
                        'type' => 'object',
                        'sentAs' => 'AccountQuota',
                        'properties' => [
                            'AccountQuotaName' => [
                                'type' => 'string',
                            ],
                            'Used' => [
                                'type' => 'numeric',
                            ],
                            'Max' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CertificateMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Certificates' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Certificate',
                        'type' => 'object',
                        'sentAs' => 'Certificate',
                        'properties' => [
                            'CertificateIdentifier' => [
                                'type' => 'string',
                            ],
                            'CertificateType' => [
                                'type' => 'string',
                            ],
                            'Thumbprint' => [
                                'type' => 'string',
                            ],
                            'ValidFrom' => [
                                'type' => 'string',
                            ],
                            'ValidTill' => [
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
        'DBClusterParameterGroupsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBClusterParameterGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBClusterParameterGroup',
                        'type' => 'object',
                        'sentAs' => 'DBClusterParameterGroup',
                        'properties' => [
                            'DBClusterParameterGroupName' => [
                                'type' => 'string',
                            ],
                            'DBParameterGroupFamily' => [
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
        'DBClusterParameterGroupDetails' => [
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
                            'ApplyType' => [
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
                            'ApplyMethod' => [
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
        'DBClusterSnapshotMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBClusterSnapshots' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBClusterSnapshot',
                        'type' => 'object',
                        'sentAs' => 'DBClusterSnapshot',
                        'properties' => [
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AvailabilityZone',
                                    'type' => 'string',
                                    'sentAs' => 'AvailabilityZone',
                                ],
                            ],
                            'DBClusterSnapshotIdentifier' => [
                                'type' => 'string',
                            ],
                            'DBClusterIdentifier' => [
                                'type' => 'string',
                            ],
                            'SnapshotCreateTime' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'AllocatedStorage' => [
                                'type' => 'numeric',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Port' => [
                                'type' => 'numeric',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'ClusterCreateTime' => [
                                'type' => 'string',
                            ],
                            'MasterUsername' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'LicenseModel' => [
                                'type' => 'string',
                            ],
                            'SnapshotType' => [
                                'type' => 'string',
                            ],
                            'PercentProgress' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBClusterMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBClusters' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBCluster',
                        'type' => 'object',
                        'sentAs' => 'DBCluster',
                        'properties' => [
                            'AllocatedStorage' => [
                                'type' => 'numeric',
                            ],
                            'AvailabilityZones' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'AvailabilityZone',
                                    'type' => 'string',
                                    'sentAs' => 'AvailabilityZone',
                                ],
                            ],
                            'BackupRetentionPeriod' => [
                                'type' => 'numeric',
                            ],
                            'CharacterSetName' => [
                                'type' => 'string',
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                            ],
                            'DBClusterIdentifier' => [
                                'type' => 'string',
                            ],
                            'DBClusterParameterGroup' => [
                                'type' => 'string',
                            ],
                            'DBSubnetGroup' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'PercentProgress' => [
                                'type' => 'string',
                            ],
                            'EarliestRestorableTime' => [
                                'type' => 'string',
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'LatestRestorableTime' => [
                                'type' => 'string',
                            ],
                            'Port' => [
                                'type' => 'numeric',
                            ],
                            'MasterUsername' => [
                                'type' => 'string',
                            ],
                            'DBClusterOptionGroupMemberships' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DBClusterOptionGroup',
                                    'type' => 'object',
                                    'sentAs' => 'DBClusterOptionGroup',
                                    'properties' => [
                                        'DBClusterOptionGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PreferredBackupWindow' => [
                                'type' => 'string',
                            ],
                            'PreferredMaintenanceWindow' => [
                                'type' => 'string',
                            ],
                            'DBClusterMembers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DBClusterMember',
                                    'type' => 'object',
                                    'sentAs' => 'DBClusterMember',
                                    'properties' => [
                                        'DBInstanceIdentifier' => [
                                            'type' => 'string',
                                        ],
                                        'IsClusterWriter' => [
                                            'type' => 'boolean',
                                        ],
                                        'DBClusterParameterGroupStatus' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'VpcSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'VpcSecurityGroupMembership',
                                    'type' => 'object',
                                    'sentAs' => 'VpcSecurityGroupMembership',
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
                            'HostedZoneId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBEngineVersionMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBEngineVersions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBEngineVersion',
                        'type' => 'object',
                        'sentAs' => 'DBEngineVersion',
                        'properties' => [
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'DBParameterGroupFamily' => [
                                'type' => 'string',
                            ],
                            'DBEngineDescription' => [
                                'type' => 'string',
                            ],
                            'DBEngineVersionDescription' => [
                                'type' => 'string',
                            ],
                            'DefaultCharacterSet' => [
                                'type' => 'object',
                                'properties' => [
                                    'CharacterSetName' => [
                                        'type' => 'string',
                                    ],
                                    'CharacterSetDescription' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SupportedCharacterSets' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'CharacterSet',
                                    'type' => 'object',
                                    'sentAs' => 'CharacterSet',
                                    'properties' => [
                                        'CharacterSetName' => [
                                            'type' => 'string',
                                        ],
                                        'CharacterSetDescription' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ValidUpgradeTarget' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'UpgradeTarget',
                                    'type' => 'object',
                                    'sentAs' => 'UpgradeTarget',
                                    'properties' => [
                                        'Engine' => [
                                            'type' => 'string',
                                        ],
                                        'EngineVersion' => [
                                            'type' => 'string',
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                        ],
                                        'AutoUpgrade' => [
                                            'type' => 'boolean',
                                        ],
                                        'IsMajorVersionUpgrade' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBInstanceMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBInstance',
                        'type' => 'object',
                        'sentAs' => 'DBInstance',
                        'properties' => [
                            'DBInstanceIdentifier' => [
                                'type' => 'string',
                            ],
                            'DBInstanceClass' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'DBInstanceStatus' => [
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
                                    'HostedZoneId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'AllocatedStorage' => [
                                'type' => 'numeric',
                            ],
                            'InstanceCreateTime' => [
                                'type' => 'string',
                            ],
                            'PreferredBackupWindow' => [
                                'type' => 'string',
                            ],
                            'BackupRetentionPeriod' => [
                                'type' => 'numeric',
                            ],
                            'DBSecurityGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DBSecurityGroup',
                                    'type' => 'object',
                                    'sentAs' => 'DBSecurityGroup',
                                    'properties' => [
                                        'DBSecurityGroupName' => [
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
                                    'name' => 'VpcSecurityGroupMembership',
                                    'type' => 'object',
                                    'sentAs' => 'VpcSecurityGroupMembership',
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
                            'DBParameterGroups' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DBParameterGroup',
                                    'type' => 'object',
                                    'sentAs' => 'DBParameterGroup',
                                    'properties' => [
                                        'DBParameterGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'ParameterApplyStatus' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'AvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'DBSubnetGroup' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBSubnetGroupName' => [
                                        'type' => 'string',
                                    ],
                                    'DBSubnetGroupDescription' => [
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
                                ],
                            ],
                            'PreferredMaintenanceWindow' => [
                                'type' => 'string',
                            ],
                            'PendingModifiedValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceClass' => [
                                        'type' => 'string',
                                    ],
                                    'AllocatedStorage' => [
                                        'type' => 'numeric',
                                    ],
                                    'MasterUserPassword' => [
                                        'type' => 'string',
                                    ],
                                    'Port' => [
                                        'type' => 'numeric',
                                    ],
                                    'BackupRetentionPeriod' => [
                                        'type' => 'numeric',
                                    ],
                                    'MultiAZ' => [
                                        'type' => 'boolean',
                                    ],
                                    'EngineVersion' => [
                                        'type' => 'string',
                                    ],
                                    'Iops' => [
                                        'type' => 'numeric',
                                    ],
                                    'DBInstanceIdentifier' => [
                                        'type' => 'string',
                                    ],
                                    'StorageType' => [
                                        'type' => 'string',
                                    ],
                                    'CACertificateIdentifier' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'LatestRestorableTime' => [
                                'type' => 'string',
                            ],
                            'MultiAZ' => [
                                'type' => 'boolean',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'AutoMinorVersionUpgrade' => [
                                'type' => 'boolean',
                            ],
                            'ReadReplicaSourceDBInstanceIdentifier' => [
                                'type' => 'string',
                            ],
                            'ReadReplicaDBInstanceIdentifiers' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ReadReplicaDBInstanceIdentifier',
                                    'type' => 'string',
                                    'sentAs' =>
                                        'ReadReplicaDBInstanceIdentifier',
                                ],
                            ],
                            'LicenseModel' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                            'OptionGroupMemberships' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'OptionGroupMembership',
                                    'type' => 'object',
                                    'sentAs' => 'OptionGroupMembership',
                                    'properties' => [
                                        'OptionGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'CharacterSetName' => [
                                'type' => 'string',
                            ],
                            'SecondaryAvailabilityZone' => [
                                'type' => 'string',
                            ],
                            'PubliclyAccessible' => [
                                'type' => 'boolean',
                            ],
                            'StatusInfos' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'DBInstanceStatusInfo',
                                    'type' => 'object',
                                    'sentAs' => 'DBInstanceStatusInfo',
                                    'properties' => [
                                        'StatusType' => [
                                            'type' => 'string',
                                        ],
                                        'Normal' => [
                                            'type' => 'boolean',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'StorageType' => [
                                'type' => 'string',
                            ],
                            'TdeCredentialArn' => [
                                'type' => 'string',
                            ],
                            'DbInstancePort' => [
                                'type' => 'numeric',
                            ],
                            'DBClusterIdentifier' => [
                                'type' => 'string',
                            ],
                            'StorageEncrypted' => [
                                'type' => 'boolean',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                            'DbiResourceId' => [
                                'type' => 'string',
                            ],
                            'CACertificateIdentifier' => [
                                'type' => 'string',
                            ],
                            'CopyTagsToSnapshot' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeDBLogFilesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DescribeDBLogFiles' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DescribeDBLogFilesDetails',
                        'type' => 'object',
                        'sentAs' => 'DescribeDBLogFilesDetails',
                        'properties' => [
                            'LogFileName' => [
                                'type' => 'string',
                            ],
                            'LastWritten' => [
                                'type' => 'numeric',
                            ],
                            'Size' => [
                                'type' => 'numeric',
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
        'DBParameterGroupsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBParameterGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBParameterGroup',
                        'type' => 'object',
                        'sentAs' => 'DBParameterGroup',
                        'properties' => [
                            'DBParameterGroupName' => [
                                'type' => 'string',
                            ],
                            'DBParameterGroupFamily' => [
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
        'DBParameterGroupDetails' => [
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
                            'ApplyType' => [
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
                            'ApplyMethod' => [
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
        'DBSecurityGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBSecurityGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBSecurityGroup',
                        'type' => 'object',
                        'sentAs' => 'DBSecurityGroup',
                        'properties' => [
                            'OwnerId' => [
                                'type' => 'string',
                            ],
                            'DBSecurityGroupName' => [
                                'type' => 'string',
                            ],
                            'DBSecurityGroupDescription' => [
                                'type' => 'string',
                            ],
                            'VpcId' => [
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
                                        'EC2SecurityGroupId' => [
                                            'type' => 'string',
                                        ],
                                        'EC2SecurityGroupOwnerId' => [
                                            'type' => 'string',
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
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBSnapshotMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBSnapshots' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBSnapshot',
                        'type' => 'object',
                        'sentAs' => 'DBSnapshot',
                        'properties' => [
                            'DBSnapshotIdentifier' => [
                                'type' => 'string',
                            ],
                            'DBInstanceIdentifier' => [
                                'type' => 'string',
                            ],
                            'SnapshotCreateTime' => [
                                'type' => 'string',
                            ],
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'AllocatedStorage' => [
                                'type' => 'numeric',
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
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'InstanceCreateTime' => [
                                'type' => 'string',
                            ],
                            'MasterUsername' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'LicenseModel' => [
                                'type' => 'string',
                            ],
                            'SnapshotType' => [
                                'type' => 'string',
                            ],
                            'Iops' => [
                                'type' => 'numeric',
                            ],
                            'OptionGroupName' => [
                                'type' => 'string',
                            ],
                            'PercentProgress' => [
                                'type' => 'numeric',
                            ],
                            'SourceRegion' => [
                                'type' => 'string',
                            ],
                            'SourceDBSnapshotIdentifier' => [
                                'type' => 'string',
                            ],
                            'StorageType' => [
                                'type' => 'string',
                            ],
                            'TdeCredentialArn' => [
                                'type' => 'string',
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DBSubnetGroupMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DBSubnetGroups' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'DBSubnetGroup',
                        'type' => 'object',
                        'sentAs' => 'DBSubnetGroup',
                        'properties' => [
                            'DBSubnetGroupName' => [
                                'type' => 'string',
                            ],
                            'DBSubnetGroupDescription' => [
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
                        'DBParameterGroupFamily' => [
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
                                    'ApplyType' => [
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
                                    'ApplyMethod' => [
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
                            'EventCategories' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'EventCategory',
                                    'type' => 'string',
                                    'sentAs' => 'EventCategory',
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
                            'Enabled' => [
                                'type' => 'boolean',
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
                            'Date' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OptionGroupOptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OptionGroupOptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'OptionGroupOption',
                        'type' => 'object',
                        'sentAs' => 'OptionGroupOption',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'EngineName' => [
                                'type' => 'string',
                            ],
                            'MajorEngineVersion' => [
                                'type' => 'string',
                            ],
                            'MinimumRequiredMinorEngineVersion' => [
                                'type' => 'string',
                            ],
                            'PortRequired' => [
                                'type' => 'boolean',
                            ],
                            'DefaultPort' => [
                                'type' => 'numeric',
                            ],
                            'OptionsDependedOn' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'OptionName',
                                    'type' => 'string',
                                    'sentAs' => 'OptionName',
                                ],
                            ],
                            'Persistent' => [
                                'type' => 'boolean',
                            ],
                            'Permanent' => [
                                'type' => 'boolean',
                            ],
                            'OptionGroupOptionSettings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'OptionGroupOptionSetting',
                                    'type' => 'object',
                                    'sentAs' => 'OptionGroupOptionSetting',
                                    'properties' => [
                                        'SettingName' => [
                                            'type' => 'string',
                                        ],
                                        'SettingDescription' => [
                                            'type' => 'string',
                                        ],
                                        'DefaultValue' => [
                                            'type' => 'string',
                                        ],
                                        'ApplyType' => [
                                            'type' => 'string',
                                        ],
                                        'AllowedValues' => [
                                            'type' => 'string',
                                        ],
                                        'IsModifiable' => [
                                            'type' => 'boolean',
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
        'OptionGroups' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OptionGroupsList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'OptionGroup',
                        'type' => 'object',
                        'sentAs' => 'OptionGroup',
                        'properties' => [
                            'OptionGroupName' => [
                                'type' => 'string',
                            ],
                            'OptionGroupDescription' => [
                                'type' => 'string',
                            ],
                            'EngineName' => [
                                'type' => 'string',
                            ],
                            'MajorEngineVersion' => [
                                'type' => 'string',
                            ],
                            'Options' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Option',
                                    'type' => 'object',
                                    'sentAs' => 'Option',
                                    'properties' => [
                                        'OptionName' => [
                                            'type' => 'string',
                                        ],
                                        'OptionDescription' => [
                                            'type' => 'string',
                                        ],
                                        'Persistent' => [
                                            'type' => 'boolean',
                                        ],
                                        'Permanent' => [
                                            'type' => 'boolean',
                                        ],
                                        'Port' => [
                                            'type' => 'numeric',
                                        ],
                                        'OptionSettings' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'OptionSetting',
                                                'type' => 'object',
                                                'sentAs' => 'OptionSetting',
                                                'properties' => [
                                                    'Name' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Value' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DefaultValue' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Description' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ApplyType' => [
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
                                                    'IsCollection' => [
                                                        'type' => 'boolean',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'DBSecurityGroupMemberships' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'DBSecurityGroup',
                                                'type' => 'object',
                                                'sentAs' => 'DBSecurityGroup',
                                                'properties' => [
                                                    'DBSecurityGroupName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Status' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'VpcSecurityGroupMemberships' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' =>
                                                    'VpcSecurityGroupMembership',
                                                'type' => 'object',
                                                'sentAs' =>
                                                    'VpcSecurityGroupMembership',
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
                                    ],
                                ],
                            ],
                            'AllowsVpcAndNonVpcInstanceMemberships' => [
                                'type' => 'boolean',
                            ],
                            'VpcId' => [
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
        'OrderableDBInstanceOptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'OrderableDBInstanceOptions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'OrderableDBInstanceOption',
                        'type' => 'object',
                        'sentAs' => 'OrderableDBInstanceOption',
                        'properties' => [
                            'Engine' => [
                                'type' => 'string',
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                            ],
                            'DBInstanceClass' => [
                                'type' => 'string',
                            ],
                            'LicenseModel' => [
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
                            'MultiAZCapable' => [
                                'type' => 'boolean',
                            ],
                            'ReadReplicaCapable' => [
                                'type' => 'boolean',
                            ],
                            'Vpc' => [
                                'type' => 'boolean',
                            ],
                            'SupportsStorageEncryption' => [
                                'type' => 'boolean',
                            ],
                            'StorageType' => [
                                'type' => 'string',
                            ],
                            'SupportsIops' => [
                                'type' => 'boolean',
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
        'PendingMaintenanceActionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'PendingMaintenanceActions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ResourcePendingMaintenanceActions',
                        'type' => 'object',
                        'sentAs' => 'ResourcePendingMaintenanceActions',
                        'properties' => [
                            'ResourceIdentifier' => [
                                'type' => 'string',
                            ],
                            'PendingMaintenanceActionDetails' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'PendingMaintenanceAction',
                                    'type' => 'object',
                                    'sentAs' => 'PendingMaintenanceAction',
                                    'properties' => [
                                        'Action' => [
                                            'type' => 'string',
                                        ],
                                        'AutoAppliedAfterDate' => [
                                            'type' => 'string',
                                        ],
                                        'ForcedApplyDate' => [
                                            'type' => 'string',
                                        ],
                                        'OptInStatus' => [
                                            'type' => 'string',
                                        ],
                                        'CurrentApplyDate' => [
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
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ReservedDBInstanceMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedDBInstances' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedDBInstance',
                        'type' => 'object',
                        'sentAs' => 'ReservedDBInstance',
                        'properties' => [
                            'ReservedDBInstanceId' => [
                                'type' => 'string',
                            ],
                            'ReservedDBInstancesOfferingId' => [
                                'type' => 'string',
                            ],
                            'DBInstanceClass' => [
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
                            'DBInstanceCount' => [
                                'type' => 'numeric',
                            ],
                            'ProductDescription' => [
                                'type' => 'string',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                            ],
                            'MultiAZ' => [
                                'type' => 'boolean',
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
        'ReservedDBInstancesOfferingMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ReservedDBInstancesOfferings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ReservedDBInstancesOffering',
                        'type' => 'object',
                        'sentAs' => 'ReservedDBInstancesOffering',
                        'properties' => [
                            'ReservedDBInstancesOfferingId' => [
                                'type' => 'string',
                            ],
                            'DBInstanceClass' => [
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
                            'ProductDescription' => [
                                'type' => 'string',
                            ],
                            'OfferingType' => [
                                'type' => 'string',
                            ],
                            'MultiAZ' => [
                                'type' => 'boolean',
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
        'DownloadDBLogFilePortionDetails' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LogFileData' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'AdditionalDataPending' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
            ],
        ],
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
        'DBClusterParameterGroupNameMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBClusterParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'DBParameterGroupNameMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DBParameterGroupName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ReservedDBInstanceWrapper' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ReservedDBInstance' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'data' => [
                        'wrapper' => true,
                    ],
                    'properties' => [
                        'ReservedDBInstanceId' => [
                            'type' => 'string',
                        ],
                        'ReservedDBInstancesOfferingId' => [
                            'type' => 'string',
                        ],
                        'DBInstanceClass' => [
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
                        'DBInstanceCount' => [
                            'type' => 'numeric',
                        ],
                        'ProductDescription' => [
                            'type' => 'string',
                        ],
                        'OfferingType' => [
                            'type' => 'string',
                        ],
                        'MultiAZ' => [
                            'type' => 'boolean',
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
        'DescribeEngineDefaultParameters' => [
            'output_token' => 'Marker',
            'result_key' => 'Parameters',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 30,
            'max_attempts' => 60,
        ],
        '__DBInstanceState' => [
            'operation' => 'DescribeDBInstances',
            'acceptor.path' => 'DBInstances/*/DBInstanceStatus',
            'acceptor.type' => 'output',
        ],
        'DBInstanceAvailable' => [
            'extends' => '__DBInstanceState',
            'success.value' => 'available',
            'failure.value' => [
                'deleted',
                'deleting',
                'failed',
                'incompatible-restore',
                'incompatible-parameters',
                'incompatible-parameters',
                'incompatible-restore',
            ],
        ],
        'DBInstanceDeleted' => [
            'extends' => '__DBInstanceState',
            'success.value' => 'deleted',
            'failure.value' => [
                'creating',
                'modifying',
                'rebooting',
                'resetting-master-credentials',
            ],
        ],
    ],
];
