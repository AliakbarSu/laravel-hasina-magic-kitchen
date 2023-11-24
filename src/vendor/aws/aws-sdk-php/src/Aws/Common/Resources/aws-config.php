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
    'class' => 'Aws\Common\Aws',
    'services' => [
        'default_settings' => [
            'params' => [],
        ],

        'autoscaling' => [
            'alias' => 'AutoScaling',
            'extends' => 'default_settings',
            'class' => 'Aws\AutoScaling\AutoScalingClient',
        ],

        'cloudformation' => [
            'alias' => 'CloudFormation',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudFormation\CloudFormationClient',
        ],

        'cloudfront' => [
            'alias' => 'CloudFront',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudFront\CloudFrontClient',
        ],

        'cloudfront_20120505' => [
            'extends' => 'cloudfront',
            'params' => [
                'version' => '2012-05-05',
            ],
        ],

        'cloudhsm' => [
            'alias' => 'CloudHsm',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudHsm\CloudHsmClient',
        ],

        'cloudsearch' => [
            'alias' => 'CloudSearch',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudSearch\CloudSearchClient',
        ],

        'cloudsearch_20110201' => [
            'extends' => 'cloudsearch',
            'params' => [
                'version' => '2011-02-01',
            ],
        ],

        'cloudsearchdomain' => [
            'alias' => 'CloudSearchDomain',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudSearchDomain\CloudSearchDomainClient',
        ],

        'cloudtrail' => [
            'alias' => 'CloudTrail',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudTrail\CloudTrailClient',
        ],

        'cloudwatch' => [
            'alias' => 'CloudWatch',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudWatch\CloudWatchClient',
        ],

        'cloudwatchlogs' => [
            'alias' => 'CloudWatchLogs',
            'extends' => 'default_settings',
            'class' => 'Aws\CloudWatchLogs\CloudWatchLogsClient',
        ],

        'cognito-identity' => [
            'alias' => 'CognitoIdentity',
            'extends' => 'default_settings',
            'class' => 'Aws\CognitoIdentity\CognitoIdentityClient',
        ],

        'cognitoidentity' => ['extends' => 'cognito-identity'],

        'cognito-sync' => [
            'alias' => 'CognitoSync',
            'extends' => 'default_settings',
            'class' => 'Aws\CognitoSync\CognitoSyncClient',
        ],

        'cognitosync' => ['extends' => 'cognito-sync'],

        'codecommit' => [
            'alias' => 'CodeCommit',
            'extends' => 'default_settings',
            'class' => 'Aws\CodeCommit\CodeCommitClient',
        ],

        'codedeploy' => [
            'alias' => 'CodeDeploy',
            'extends' => 'default_settings',
            'class' => 'Aws\CodeDeploy\CodeDeployClient',
        ],

        'codepipeline' => [
            'alias' => 'CodePipeline',
            'extends' => 'default_settings',
            'class' => 'Aws\CodePipeline\CodePipelineClient',
        ],

        'config' => [
            'alias' => 'ConfigService',
            'extends' => 'default_settings',
            'class' => 'Aws\ConfigService\ConfigServiceClient',
        ],

        'datapipeline' => [
            'alias' => 'DataPipeline',
            'extends' => 'default_settings',
            'class' => 'Aws\DataPipeline\DataPipelineClient',
        ],

        'devicefarm' => [
            'alias' => 'DeviceFarm',
            'extends' => 'default_settings',
            'class' => 'Aws\DeviceFarm\DeviceFarmClient',
        ],

        'directconnect' => [
            'alias' => 'DirectConnect',
            'extends' => 'default_settings',
            'class' => 'Aws\DirectConnect\DirectConnectClient',
        ],

        'ds' => [
            'alias' => 'DirectoryService',
            'extends' => 'default_settings',
            'class' => 'Aws\DirectoryService\DirectoryServiceClient',
        ],

        'dynamodb' => [
            'alias' => 'DynamoDb',
            'extends' => 'default_settings',
            'class' => 'Aws\DynamoDb\DynamoDbClient',
        ],

        'dynamodb_20111205' => [
            'extends' => 'dynamodb',
            'params' => [
                'version' => '2011-12-05',
            ],
        ],

        'dynamodbstreams' => [
            'alias' => 'DynamoDbStreams',
            'extends' => 'default_settings',
            'class' => 'Aws\DynamoDbStreams\DynamoDbStreamsClient',
        ],

        'ec2' => [
            'alias' => 'Ec2',
            'extends' => 'default_settings',
            'class' => 'Aws\Ec2\Ec2Client',
        ],

        'ecs' => [
            'alias' => 'Ecs',
            'extends' => 'default_settings',
            'class' => 'Aws\Ecs\EcsClient',
        ],

        'elasticache' => [
            'alias' => 'ElastiCache',
            'extends' => 'default_settings',
            'class' => 'Aws\ElastiCache\ElastiCacheClient',
        ],

        'elasticbeanstalk' => [
            'alias' => 'ElasticBeanstalk',
            'extends' => 'default_settings',
            'class' => 'Aws\ElasticBeanstalk\ElasticBeanstalkClient',
        ],

        'efs' => [
            'alias' => 'Efs',
            'extends' => 'default_settings',
            'class' => 'Aws\Efs\EfsClient',
        ],

        'elasticloadbalancing' => [
            'alias' => 'ElasticLoadBalancing',
            'extends' => 'default_settings',
            'class' => 'Aws\ElasticLoadBalancing\ElasticLoadBalancingClient',
        ],

        'elastictranscoder' => [
            'alias' => 'ElasticTranscoder',
            'extends' => 'default_settings',
            'class' => 'Aws\ElasticTranscoder\ElasticTranscoderClient',
        ],

        'emr' => [
            'alias' => 'Emr',
            'extends' => 'default_settings',
            'class' => 'Aws\Emr\EmrClient',
        ],

        'glacier' => [
            'alias' => 'Glacier',
            'extends' => 'default_settings',
            'class' => 'Aws\Glacier\GlacierClient',
        ],

        'kinesis' => [
            'alias' => 'Kinesis',
            'extends' => 'default_settings',
            'class' => 'Aws\Kinesis\KinesisClient',
        ],

        'kms' => [
            'alias' => 'Kms',
            'extends' => 'default_settings',
            'class' => 'Aws\Kms\KmsClient',
        ],

        'lambda' => [
            'alias' => 'Lambda',
            'extends' => 'default_settings',
            'class' => 'Aws\Lambda\LambdaClient',
        ],

        'iam' => [
            'alias' => 'Iam',
            'extends' => 'default_settings',
            'class' => 'Aws\Iam\IamClient',
        ],

        'importexport' => [
            'alias' => 'ImportExport',
            'extends' => 'default_settings',
            'class' => 'Aws\ImportExport\ImportExportClient',
        ],

        'machinelearning' => [
            'alias' => 'MachineLearning',
            'extends' => 'default_settings',
            'class' => 'Aws\MachineLearning\MachineLearningClient',
        ],

        'opsworks' => [
            'alias' => 'OpsWorks',
            'extends' => 'default_settings',
            'class' => 'Aws\OpsWorks\OpsWorksClient',
        ],

        'rds' => [
            'alias' => 'Rds',
            'extends' => 'default_settings',
            'class' => 'Aws\Rds\RdsClient',
        ],

        'redshift' => [
            'alias' => 'Redshift',
            'extends' => 'default_settings',
            'class' => 'Aws\Redshift\RedshiftClient',
        ],

        'route53' => [
            'alias' => 'Route53',
            'extends' => 'default_settings',
            'class' => 'Aws\Route53\Route53Client',
        ],

        'route53domains' => [
            'alias' => 'Route53Domains',
            'extends' => 'default_settings',
            'class' => 'Aws\Route53Domains\Route53DomainsClient',
        ],

        's3' => [
            'alias' => 'S3',
            'extends' => 'default_settings',
            'class' => 'Aws\S3\S3Client',
        ],

        'sdb' => [
            'alias' => 'SimpleDb',
            'extends' => 'default_settings',
            'class' => 'Aws\SimpleDb\SimpleDbClient',
        ],

        'ses' => [
            'alias' => 'Ses',
            'extends' => 'default_settings',
            'class' => 'Aws\Ses\SesClient',
        ],

        'sns' => [
            'alias' => 'Sns',
            'extends' => 'default_settings',
            'class' => 'Aws\Sns\SnsClient',
        ],

        'sqs' => [
            'alias' => 'Sqs',
            'extends' => 'default_settings',
            'class' => 'Aws\Sqs\SqsClient',
        ],

        'ssm' => [
            'alias' => 'Ssm',
            'extends' => 'default_settings',
            'class' => 'Aws\Ssm\SsmClient',
        ],

        'storagegateway' => [
            'alias' => 'StorageGateway',
            'extends' => 'default_settings',
            'class' => 'Aws\StorageGateway\StorageGatewayClient',
        ],

        'sts' => [
            'alias' => 'Sts',
            'extends' => 'default_settings',
            'class' => 'Aws\Sts\StsClient',
        ],

        'support' => [
            'alias' => 'Support',
            'extends' => 'default_settings',
            'class' => 'Aws\Support\SupportClient',
        ],

        'swf' => [
            'alias' => 'Swf',
            'extends' => 'default_settings',
            'class' => 'Aws\Swf\SwfClient',
        ],

        'workspaces' => [
            'alias' => 'WorkSpaces',
            'extends' => 'default_settings',
            'class' => 'Aws\WorkSpaces\WorkSpacesClient',
        ],
    ],
];
