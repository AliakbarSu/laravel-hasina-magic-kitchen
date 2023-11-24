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
    'includes' => ['_aws'],
    'services' => [
        'sdk1_settings' => [
            'extends' => 'default_settings',
            'params' => [
                'certificate_authority' => false,
            ],
        ],

        'v1.autoscaling' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonAS',
        ],

        'v1.cloudformation' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonCloudFormation',
        ],

        'v1.cloudfront' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonCloudFront',
        ],

        'v1.cloudsearch' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonCloudSearch',
        ],

        'v1.cloudwatch' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonCloudWatch',
        ],

        'v1.dynamodb' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonDynamoDB',
        ],

        'v1.ec2' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonEC2',
        ],

        'v1.elasticache' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonElastiCache',
        ],

        'v1.elasticbeanstalk' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonElasticBeanstalk',
        ],

        'v1.elb' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonELB',
        ],

        'v1.emr' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonEMR',
        ],

        'v1.iam' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonIAM',
        ],

        'v1.importexport' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonImportExport',
        ],

        'v1.rds' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonRDS',
        ],

        'v1.s3' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonS3',
        ],

        'v1.sdb' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSDB',
        ],

        'v1.ses' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSES',
        ],

        'v1.sns' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSNS',
        ],

        'v1.sqs' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSQS',
        ],

        'v1.storagegateway' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonStorageGateway',
        ],

        'v1.sts' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSTS',
        ],

        'v1.swf' => [
            'extends' => 'sdk1_settings',
            'class' => 'AmazonSWF',
        ],
    ],
];
