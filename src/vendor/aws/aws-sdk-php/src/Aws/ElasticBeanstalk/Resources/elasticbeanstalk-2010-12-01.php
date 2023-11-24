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
    'endpointPrefix' => 'elasticbeanstalk',
    'serviceFullName' => 'AWS Elastic Beanstalk',
    'serviceAbbreviation' => 'Elastic Beanstalk',
    'serviceType' => 'query',
    'resultWrapped' => true,
    'signatureVersion' => 'v4',
    'namespace' => 'ElasticBeanstalk',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elasticbeanstalk.sa-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AbortEnvironmentUpdate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'AbortEnvironmentUpdate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'CheckDNSAvailability' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CheckDNSAvailabilityResultMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CheckDNSAvailability',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'CNAMEPrefix' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
        ],
        'CreateApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationDescriptionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The caller has exceeded the limit on the number of applications associated with their account.',
                    'class' => 'TooManyApplicationsException',
                ],
            ],
        ],
        'CreateApplicationVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationVersionDescriptionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateApplicationVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabel' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceBundle' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'S3Bucket' => [
                            'type' => 'string',
                        ],
                        'S3Key' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'AutoCreateApplication' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The caller has exceeded the limit on the number of applications associated with their account.',
                    'class' => 'TooManyApplicationsException',
                ],
                [
                    'reason' =>
                        'The caller has exceeded the limit on the number of application versions associated with their account.',
                    'class' => 'TooManyApplicationVersionsException',
                ],
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
                [
                    'reason' =>
                        'The specified S3 bucket does not belong to the S3 region in which the service is running.',
                    'class' => 'S3LocationNotInServiceRegionException',
                ],
            ],
        ],
        'CreateConfigurationTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigurationSettingsDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateConfigurationTemplate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceConfiguration' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'ApplicationName' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'TemplateName' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionSettings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionSettings.member',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
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
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
                [
                    'reason' =>
                        'The caller has exceeded the limit on the number of configuration templates associated with their account.',
                    'class' => 'TooManyConfigurationTemplatesException',
                ],
            ],
        ],
        'CreateEnvironment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnvironmentDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateEnvironment',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'CNAMEPrefix' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'Tier' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
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
                                'minLength' => 1,
                            ],
                            'Value' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                'VersionLabel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionSettings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionSettings.member',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'OptionsToRemove' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionsToRemove.member',
                    'items' => [
                        'name' => 'OptionSpecification',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The caller has exceeded the limit of allowed environments associated with the account.',
                    'class' => 'TooManyEnvironmentsException',
                ],
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'CreateStorageLocation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateStorageLocationResultMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateStorageLocation',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The web service attempted to create a bucket in an Amazon S3 account that already has 100 buckets.',
                    'class' => 'TooManyBucketsException',
                ],
                [
                    'reason' =>
                        'The caller does not have a subscription to Amazon S3.',
                    'class' => 'S3SubscriptionRequiredException',
                ],
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'DeleteApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TerminateEnvByForce' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because another operation is already in progress affecting an element in this activity.',
                    'class' => 'OperationInProgressException',
                ],
            ],
        ],
        'DeleteApplicationVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteApplicationVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabel' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'DeleteSourceBundle' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to delete the Amazon S3 source bundle associated with the application version, although the application version deleted successfully.',
                    'class' => 'SourceBundleDeletionException',
                ],
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
                [
                    'reason' =>
                        'Unable to perform the specified operation because another operation is already in progress affecting an element in this activity.',
                    'class' => 'OperationInProgressException',
                ],
                [
                    'reason' =>
                        'The specified S3 bucket does not belong to the S3 region in which the service is running.',
                    'class' => 'S3LocationNotInServiceRegionException',
                ],
            ],
        ],
        'DeleteConfigurationTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteConfigurationTemplate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because another operation is already in progress affecting an element in this activity.',
                    'class' => 'OperationInProgressException',
                ],
            ],
        ],
        'DeleteEnvironmentConfiguration' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DeleteEnvironmentConfiguration',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
        ],
        'DescribeApplicationVersions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationVersionDescriptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeApplicationVersions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabels' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'VersionLabels.member',
                    'items' => [
                        'name' => 'VersionLabel',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
        ],
        'DescribeApplications' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationDescriptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeApplications',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'ApplicationNames.member',
                    'items' => [
                        'name' => 'ApplicationName',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
        ],
        'DescribeConfigurationOptions' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigurationOptionsDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeConfigurationOptions',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Options' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'Options.member',
                    'items' => [
                        'name' => 'OptionSpecification',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeConfigurationSettings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigurationSettingsDescriptions',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeConfigurationSettings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
        ],
        'DescribeEnvironmentHealth' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeEnvironmentHealthResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEnvironmentHealth',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeNames.member',
                    'items' => [
                        'name' => 'EnvironmentHealthAttribute',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request is invalid, please check parameters and their values',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'class' => 'ElasticBeanstalkServiceException',
                ],
            ],
        ],
        'DescribeEnvironmentResources' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnvironmentResourceDescriptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEnvironmentResources',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'DescribeEnvironments' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnvironmentDescriptionsMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeEnvironments',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentIds' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EnvironmentIds.member',
                    'items' => [
                        'name' => 'EnvironmentId',
                        'type' => 'string',
                    ],
                ],
                'EnvironmentNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'EnvironmentNames.member',
                    'items' => [
                        'name' => 'EnvironmentName',
                        'type' => 'string',
                        'minLength' => 4,
                    ],
                ],
                'IncludeDeleted' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'IncludedDeletedBackTo' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeEvents' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EventDescriptionsMessage',
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
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'RequestId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Severity' => [
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
                    'minimum' => 1,
                    'maximum' => 1000,
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'DescribeInstancesHealth' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'DescribeInstancesHealthResult',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'DescribeInstancesHealth',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'AttributeNames' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'AttributeNames.member',
                    'items' => [
                        'name' => 'InstancesHealthAttribute',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The request is invalid, please check parameters and their values',
                    'class' => 'InvalidRequestException',
                ],
                [
                    'class' => 'ElasticBeanstalkServiceException',
                ],
            ],
        ],
        'ListAvailableSolutionStacks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListAvailableSolutionStacksResultMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListAvailableSolutionStacks',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
            ],
        ],
        'RebuildEnvironment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RebuildEnvironment',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'RequestEnvironmentInfo' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RequestEnvironmentInfo',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'InfoType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'RestartAppServer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RestartAppServer',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
        ],
        'RetrieveEnvironmentInfo' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'RetrieveEnvironmentInfoResultMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'RetrieveEnvironmentInfo',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'InfoType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'SwapEnvironmentCNAMEs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'SwapEnvironmentCNAMEs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'SourceEnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'SourceEnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'DestinationEnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'DestinationEnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
            ],
        ],
        'TerminateEnvironment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnvironmentDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'TerminateEnvironment',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'TerminateResources' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'UpdateApplication' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationDescriptionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateApplication',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'UpdateApplicationVersion' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ApplicationVersionDescriptionMessage',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateApplicationVersion',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'VersionLabel' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
        ],
        'UpdateConfigurationTemplate' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigurationSettingsDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateConfigurationTemplate',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionSettings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionSettings.member',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'OptionsToRemove' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionsToRemove.member',
                    'items' => [
                        'name' => 'OptionSpecification',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'UpdateEnvironment' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'EnvironmentDescription',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateEnvironment',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Tier' => [
                    'type' => 'object',
                    'location' => 'aws.query',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'VersionLabel' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'OptionSettings' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionSettings.member',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'OptionsToRemove' => [
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionsToRemove.member',
                    'items' => [
                        'name' => 'OptionSpecification',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
        'ValidateConfigurationSettings' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ConfigurationSettingsValidationMessages',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ValidateConfigurationSettings',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-12-01',
                ],
                'ApplicationName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 1,
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                    'minLength' => 4,
                ],
                'OptionSettings' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'OptionSettings.member',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
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
                        'Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services',
                    'class' => 'InsufficientPrivilegesException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CheckDNSAvailabilityResultMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Available' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'FullyQualifiedCNAME' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ApplicationDescriptionMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Application' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ApplicationName' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'DateCreated' => [
                            'type' => 'string',
                        ],
                        'DateUpdated' => [
                            'type' => 'string',
                        ],
                        'Versions' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'VersionLabel',
                                'type' => 'string',
                                'sentAs' => 'member',
                            ],
                        ],
                        'ConfigurationTemplates' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'ConfigurationTemplateName',
                                'type' => 'string',
                                'sentAs' => 'member',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ApplicationVersionDescriptionMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ApplicationVersion' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ApplicationName' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'VersionLabel' => [
                            'type' => 'string',
                        ],
                        'SourceBundle' => [
                            'type' => 'object',
                            'properties' => [
                                'S3Bucket' => [
                                    'type' => 'string',
                                ],
                                'S3Key' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DateCreated' => [
                            'type' => 'string',
                        ],
                        'DateUpdated' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ConfigurationSettingsDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DeploymentStatus' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DateCreated' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DateUpdated' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'OptionSettings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ConfigurationOptionSetting',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ResourceName' => [
                                'type' => 'string',
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
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
        'EnvironmentDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'EnvironmentId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ApplicationName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'VersionLabel' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'TemplateName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'EndpointURL' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CNAME' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DateCreated' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'DateUpdated' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'AbortableOperationInProgress' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Health' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'HealthStatus' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Resources' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'LoadBalancer' => [
                            'type' => 'object',
                            'properties' => [
                                'LoadBalancerName' => [
                                    'type' => 'string',
                                ],
                                'Domain' => [
                                    'type' => 'string',
                                ],
                                'Listeners' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Listener',
                                        'type' => 'object',
                                        'sentAs' => 'member',
                                        'properties' => [
                                            'Protocol' => [
                                                'type' => 'string',
                                            ],
                                            'Port' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Tier' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Type' => [
                            'type' => 'string',
                        ],
                        'Version' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateStorageLocationResultMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'S3Bucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ApplicationVersionDescriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ApplicationVersions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ApplicationVersionDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ApplicationName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'VersionLabel' => [
                                'type' => 'string',
                            ],
                            'SourceBundle' => [
                                'type' => 'object',
                                'properties' => [
                                    'S3Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'S3Key' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'DateCreated' => [
                                'type' => 'string',
                            ],
                            'DateUpdated' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ApplicationDescriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Applications' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ApplicationDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'ApplicationName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'DateCreated' => [
                                'type' => 'string',
                            ],
                            'DateUpdated' => [
                                'type' => 'string',
                            ],
                            'Versions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'VersionLabel',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'ConfigurationTemplates' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ConfigurationTemplateName',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfigurationOptionsDescription' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SolutionStackName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Options' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ConfigurationOptionDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'DefaultValue' => [
                                'type' => 'string',
                            ],
                            'ChangeSeverity' => [
                                'type' => 'string',
                            ],
                            'UserDefined' => [
                                'type' => 'boolean',
                            ],
                            'ValueType' => [
                                'type' => 'string',
                            ],
                            'ValueOptions' => [
                                'type' => 'array',
                                'items' => [
                                    'name' =>
                                        'ConfigurationOptionPossibleValue',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'MinValue' => [
                                'type' => 'numeric',
                            ],
                            'MaxValue' => [
                                'type' => 'numeric',
                            ],
                            'MaxLength' => [
                                'type' => 'numeric',
                            ],
                            'Regex' => [
                                'type' => 'object',
                                'properties' => [
                                    'Pattern' => [
                                        'type' => 'string',
                                    ],
                                    'Label' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfigurationSettingsDescriptions' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigurationSettings' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ConfigurationSettingsDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'SolutionStackName' => [
                                'type' => 'string',
                            ],
                            'ApplicationName' => [
                                'type' => 'string',
                            ],
                            'TemplateName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'EnvironmentName' => [
                                'type' => 'string',
                            ],
                            'DeploymentStatus' => [
                                'type' => 'string',
                            ],
                            'DateCreated' => [
                                'type' => 'string',
                            ],
                            'DateUpdated' => [
                                'type' => 'string',
                            ],
                            'OptionSettings' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'ConfigurationOptionSetting',
                                    'type' => 'object',
                                    'sentAs' => 'member',
                                    'properties' => [
                                        'ResourceName' => [
                                            'type' => 'string',
                                        ],
                                        'Namespace' => [
                                            'type' => 'string',
                                        ],
                                        'OptionName' => [
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
        'DescribeEnvironmentHealthResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EnvironmentName' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'HealthStatus' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Color' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Causes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Cause',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'ApplicationMetrics' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Duration' => [
                            'type' => 'numeric',
                        ],
                        'RequestCount' => [
                            'type' => 'numeric',
                        ],
                        'StatusCodes' => [
                            'type' => 'object',
                            'properties' => [
                                'Status2xx' => [
                                    'type' => 'numeric',
                                ],
                                'Status3xx' => [
                                    'type' => 'numeric',
                                ],
                                'Status4xx' => [
                                    'type' => 'numeric',
                                ],
                                'Status5xx' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                        'Latency' => [
                            'type' => 'object',
                            'properties' => [
                                'P999' => [
                                    'type' => 'numeric',
                                ],
                                'P99' => [
                                    'type' => 'numeric',
                                ],
                                'P95' => [
                                    'type' => 'numeric',
                                ],
                                'P90' => [
                                    'type' => 'numeric',
                                ],
                                'P85' => [
                                    'type' => 'numeric',
                                ],
                                'P75' => [
                                    'type' => 'numeric',
                                ],
                                'P50' => [
                                    'type' => 'numeric',
                                ],
                                'P10' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
                'InstancesHealth' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'NoData' => [
                            'type' => 'numeric',
                        ],
                        'Unknown' => [
                            'type' => 'numeric',
                        ],
                        'Pending' => [
                            'type' => 'numeric',
                        ],
                        'Ok' => [
                            'type' => 'numeric',
                        ],
                        'Info' => [
                            'type' => 'numeric',
                        ],
                        'Warning' => [
                            'type' => 'numeric',
                        ],
                        'Degraded' => [
                            'type' => 'numeric',
                        ],
                        'Severe' => [
                            'type' => 'numeric',
                        ],
                    ],
                ],
                'RefreshedAt' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'EnvironmentResourceDescriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EnvironmentResources' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'EnvironmentName' => [
                            'type' => 'string',
                        ],
                        'AutoScalingGroups' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'AutoScalingGroup',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Instances' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Instance',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'LaunchConfigurations' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LaunchConfiguration',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'LoadBalancers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Triggers' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Trigger',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Queues' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Queue',
                                'type' => 'object',
                                'sentAs' => 'member',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'URL' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnvironmentDescriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Environments' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EnvironmentDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'EnvironmentName' => [
                                'type' => 'string',
                            ],
                            'EnvironmentId' => [
                                'type' => 'string',
                            ],
                            'ApplicationName' => [
                                'type' => 'string',
                            ],
                            'VersionLabel' => [
                                'type' => 'string',
                            ],
                            'SolutionStackName' => [
                                'type' => 'string',
                            ],
                            'TemplateName' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'EndpointURL' => [
                                'type' => 'string',
                            ],
                            'CNAME' => [
                                'type' => 'string',
                            ],
                            'DateCreated' => [
                                'type' => 'string',
                            ],
                            'DateUpdated' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'AbortableOperationInProgress' => [
                                'type' => 'boolean',
                            ],
                            'Health' => [
                                'type' => 'string',
                            ],
                            'HealthStatus' => [
                                'type' => 'string',
                            ],
                            'Resources' => [
                                'type' => 'object',
                                'properties' => [
                                    'LoadBalancer' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'LoadBalancerName' => [
                                                'type' => 'string',
                                            ],
                                            'Domain' => [
                                                'type' => 'string',
                                            ],
                                            'Listeners' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Listener',
                                                    'type' => 'object',
                                                    'sentAs' => 'member',
                                                    'properties' => [
                                                        'Protocol' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Port' => [
                                                            'type' => 'numeric',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Tier' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EventDescriptionsMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Events' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EventDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'EventDate' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'ApplicationName' => [
                                'type' => 'string',
                            ],
                            'VersionLabel' => [
                                'type' => 'string',
                            ],
                            'TemplateName' => [
                                'type' => 'string',
                            ],
                            'EnvironmentName' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Severity' => [
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
        'DescribeInstancesHealthResult' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'InstanceHealthList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SingleInstanceHealth',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                            'HealthStatus' => [
                                'type' => 'string',
                            ],
                            'Color' => [
                                'type' => 'string',
                            ],
                            'Causes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Cause',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                            'LaunchedAt' => [
                                'type' => 'string',
                            ],
                            'ApplicationMetrics' => [
                                'type' => 'object',
                                'properties' => [
                                    'Duration' => [
                                        'type' => 'numeric',
                                    ],
                                    'RequestCount' => [
                                        'type' => 'numeric',
                                    ],
                                    'StatusCodes' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Status2xx' => [
                                                'type' => 'numeric',
                                            ],
                                            'Status3xx' => [
                                                'type' => 'numeric',
                                            ],
                                            'Status4xx' => [
                                                'type' => 'numeric',
                                            ],
                                            'Status5xx' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'Latency' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'P999' => [
                                                'type' => 'numeric',
                                            ],
                                            'P99' => [
                                                'type' => 'numeric',
                                            ],
                                            'P95' => [
                                                'type' => 'numeric',
                                            ],
                                            'P90' => [
                                                'type' => 'numeric',
                                            ],
                                            'P85' => [
                                                'type' => 'numeric',
                                            ],
                                            'P75' => [
                                                'type' => 'numeric',
                                            ],
                                            'P50' => [
                                                'type' => 'numeric',
                                            ],
                                            'P10' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'System' => [
                                'type' => 'object',
                                'properties' => [
                                    'CPUUtilization' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'User' => [
                                                'type' => 'numeric',
                                            ],
                                            'Nice' => [
                                                'type' => 'numeric',
                                            ],
                                            'System' => [
                                                'type' => 'numeric',
                                            ],
                                            'Idle' => [
                                                'type' => 'numeric',
                                            ],
                                            'IOWait' => [
                                                'type' => 'numeric',
                                            ],
                                            'IRQ' => [
                                                'type' => 'numeric',
                                            ],
                                            'SoftIRQ' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                    'LoadAverage' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'LoadAverageValue',
                                            'type' => 'numeric',
                                            'sentAs' => 'member',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RefreshedAt' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'ListAvailableSolutionStacksResultMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SolutionStacks' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SolutionStackName',
                        'type' => 'string',
                        'sentAs' => 'member',
                    ],
                ],
                'SolutionStackDetails' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'SolutionStackDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'SolutionStackName' => [
                                'type' => 'string',
                            ],
                            'PermittedFileTypes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'FileTypeExtension',
                                    'type' => 'string',
                                    'sentAs' => 'member',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RetrieveEnvironmentInfoResultMessage' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'EnvironmentInfo' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'EnvironmentInfoDescription',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'InfoType' => [
                                'type' => 'string',
                            ],
                            'Ec2InstanceId' => [
                                'type' => 'string',
                            ],
                            'SampleTimestamp' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfigurationSettingsValidationMessages' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Messages' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'ValidationMessage',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Severity' => [
                                'type' => 'string',
                            ],
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'OptionName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeApplicationVersions' => [
            'result_key' => 'ApplicationVersions',
        ],
        'DescribeApplications' => [
            'result_key' => 'Applications',
        ],
        'DescribeConfigurationOptions' => [
            'result_key' => 'Options',
        ],
        'DescribeEnvironments' => [
            'result_key' => 'Environments',
        ],
        'DescribeEvents' => [
            'input_token' => 'NextToken',
            'output_token' => 'NextToken',
            'limit_key' => 'MaxRecords',
            'result_key' => 'Events',
        ],
        'ListAvailableSolutionStacks' => [
            'result_key' => 'SolutionStacks',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 20,
            'max_attempts' => 40,
            'acceptor.type' => 'output',
        ],
        '__EnvironmentState' => [
            'operation' => 'DescribeEnvironments',
            'acceptor.path' => 'Environments/*/Status',
        ],
        'EnvironmentReady' => [
            'extends' => '__EnvironmentState',
            'success.value' => 'Ready',
            'failure.value' => ['Terminated', 'Terminating'],
        ],
        'EnvironmentTerminated' => [
            'extends' => '__EnvironmentState',
            'success.value' => 'Terminated',
            'failure.value' => ['Launching', 'Updating'],
        ],
    ],
];
