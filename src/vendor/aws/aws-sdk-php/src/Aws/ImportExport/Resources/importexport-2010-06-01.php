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
    'apiVersion' => '2010-06-01',
    'endpointPrefix' => 'importexport',
    'serviceFullName' => 'AWS Import/Export',
    'serviceType' => 'query',
    'globalEndpoint' => 'importexport.amazonaws.com',
    'resultWrapped' => true,
    'signatureVersion' => 'v2',
    'namespace' => 'ImportExport',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'importexport.amazonaws.com',
        ],
    ],
    'operations' => [
        'CancelJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CancelJobOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CancelJob',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'JobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The JOBID was missing, not found, or not associated with the AWS account.',
                    'class' => 'InvalidJobIdException',
                ],
                [
                    'reason' =>
                        'Indicates that the specified job has expired out of the system.',
                    'class' => 'ExpiredJobIdException',
                ],
                [
                    'reason' =>
                        'The specified job ID has been canceled and is no longer valid.',
                    'class' => 'CanceledJobIdException',
                ],
                [
                    'reason' => 'AWS Import/Export cannot cancel the job',
                    'class' => 'UnableToCancelJobIdException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
            ],
        ],
        'CreateJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'CreateJobOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'CreateJob',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'JobType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Manifest' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ManifestAddendum' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ValidateOnly' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameters was missing from the request.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'One or more parameters had an invalid value.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' =>
                        'The address specified in the manifest is invalid.',
                    'class' => 'InvalidAddressException',
                ],
                [
                    'reason' =>
                        'One or more manifest fields was invalid. Please correct and resubmit.',
                    'class' => 'InvalidManifestFieldException',
                ],
                [
                    'reason' =>
                        'One or more required fields were missing from the manifest file. Please correct and resubmit.',
                    'class' => 'MissingManifestFieldException',
                ],
                [
                    'reason' =>
                        'The specified bucket does not exist. Create the specified bucket or change the manifest\'s bucket, exportBucket, or logBucket field to a bucket that the account, as specified by the manifest\'s Access Key ID, has write permissions to.',
                    'class' => 'NoSuchBucketException',
                ],
                [
                    'reason' =>
                        'One or more required customs parameters was missing from the manifest.',
                    'class' => 'MissingCustomsException',
                ],
                [
                    'reason' =>
                        'One or more customs parameters was invalid. Please correct and resubmit.',
                    'class' => 'InvalidCustomsException',
                ],
                [
                    'reason' =>
                        'File system specified in export manifest is invalid.',
                    'class' => 'InvalidFileSystemException',
                ],
                [
                    'reason' =>
                        'Your manifest file contained buckets from multiple regions. A job is restricted to buckets from one region. Please correct and resubmit.',
                    'class' => 'MultipleRegionsException',
                ],
                [
                    'reason' =>
                        'The account specified does not have the appropriate bucket permissions.',
                    'class' => 'BucketPermissionException',
                ],
                [
                    'reason' => 'Your manifest is not well-formed.',
                    'class' => 'MalformedManifestException',
                ],
                [
                    'reason' =>
                        'Each account can create only a certain number of jobs per day. If you need to create more than this, please contact awsimportexport@amazon.com to explain your particular use case.',
                    'class' => 'CreateJobQuotaExceededException',
                ],
                [
                    'reason' =>
                        'The JOBID was missing, not found, or not associated with the AWS account.',
                    'class' => 'InvalidJobIdException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
            ],
        ],
        'GetShippingLabel' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetShippingLabelOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetShippingLabel',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'jobIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'aws.query',
                    'sentAs' => 'jobIds.member',
                    'items' => [
                        'name' => 'GenericString',
                        'type' => 'string',
                    ],
                ],
                'name' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'company' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'phoneNumber' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'country' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'stateOrProvince' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'city' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'postalCode' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'street1' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'street2' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'street3' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The JOBID was missing, not found, or not associated with the AWS account.',
                    'class' => 'InvalidJobIdException',
                ],
                [
                    'reason' =>
                        'Indicates that the specified job has expired out of the system.',
                    'class' => 'ExpiredJobIdException',
                ],
                [
                    'reason' =>
                        'The specified job ID has been canceled and is no longer valid.',
                    'class' => 'CanceledJobIdException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' =>
                        'The address specified in the manifest is invalid.',
                    'class' => 'InvalidAddressException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
                [
                    'reason' => 'One or more parameters had an invalid value.',
                    'class' => 'InvalidParameterException',
                ],
            ],
        ],
        'GetStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'GetStatusOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'GetStatus',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'JobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The JOBID was missing, not found, or not associated with the AWS account.',
                    'class' => 'InvalidJobIdException',
                ],
                [
                    'reason' =>
                        'Indicates that the specified job has expired out of the system.',
                    'class' => 'ExpiredJobIdException',
                ],
                [
                    'reason' =>
                        'The specified job ID has been canceled and is no longer valid.',
                    'class' => 'CanceledJobIdException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
            ],
        ],
        'ListJobs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'ListJobsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'ListJobs',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'MaxJobs' => [
                    'type' => 'numeric',
                    'location' => 'aws.query',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'One or more parameters had an invalid value.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
            ],
        ],
        'UpdateJob' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\QueryCommand',
            'responseClass' => 'UpdateJobOutput',
            'responseType' => 'model',
            'parameters' => [
                'Action' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => 'UpdateJob',
                ],
                'Version' => [
                    'static' => true,
                    'location' => 'aws.query',
                    'default' => '2010-06-01',
                ],
                'JobId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'Manifest' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'JobType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
                'ValidateOnly' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'aws.query',
                ],
                'APIVersion' => [
                    'type' => 'string',
                    'location' => 'aws.query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameters was missing from the request.',
                    'class' => 'MissingParameterException',
                ],
                [
                    'reason' => 'One or more parameters had an invalid value.',
                    'class' => 'InvalidParameterException',
                ],
                [
                    'reason' =>
                        'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
                    'class' => 'InvalidAccessKeyIdException',
                ],
                [
                    'reason' =>
                        'The address specified in the manifest is invalid.',
                    'class' => 'InvalidAddressException',
                ],
                [
                    'reason' =>
                        'One or more manifest fields was invalid. Please correct and resubmit.',
                    'class' => 'InvalidManifestFieldException',
                ],
                [
                    'reason' =>
                        'The JOBID was missing, not found, or not associated with the AWS account.',
                    'class' => 'InvalidJobIdException',
                ],
                [
                    'reason' =>
                        'One or more required fields were missing from the manifest file. Please correct and resubmit.',
                    'class' => 'MissingManifestFieldException',
                ],
                [
                    'reason' =>
                        'The specified bucket does not exist. Create the specified bucket or change the manifest\'s bucket, exportBucket, or logBucket field to a bucket that the account, as specified by the manifest\'s Access Key ID, has write permissions to.',
                    'class' => 'NoSuchBucketException',
                ],
                [
                    'reason' =>
                        'Indicates that the specified job has expired out of the system.',
                    'class' => 'ExpiredJobIdException',
                ],
                [
                    'reason' =>
                        'The specified job ID has been canceled and is no longer valid.',
                    'class' => 'CanceledJobIdException',
                ],
                [
                    'reason' =>
                        'One or more required customs parameters was missing from the manifest.',
                    'class' => 'MissingCustomsException',
                ],
                [
                    'reason' =>
                        'One or more customs parameters was invalid. Please correct and resubmit.',
                    'class' => 'InvalidCustomsException',
                ],
                [
                    'reason' =>
                        'File system specified in export manifest is invalid.',
                    'class' => 'InvalidFileSystemException',
                ],
                [
                    'reason' =>
                        'Your manifest file contained buckets from multiple regions. A job is restricted to buckets from one region. Please correct and resubmit.',
                    'class' => 'MultipleRegionsException',
                ],
                [
                    'reason' =>
                        'The account specified does not have the appropriate bucket permissions.',
                    'class' => 'BucketPermissionException',
                ],
                [
                    'reason' => 'Your manifest is not well-formed.',
                    'class' => 'MalformedManifestException',
                ],
                [
                    'reason' => 'AWS Import/Export cannot update the job',
                    'class' => 'UnableToUpdateJobIdException',
                ],
                [
                    'reason' => 'The client tool version is invalid.',
                    'class' => 'InvalidVersionException',
                ],
            ],
        ],
    ],
    'models' => [
        'CancelJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Success' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
            ],
        ],
        'CreateJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'JobType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Signature' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SignatureFileContents' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'WarningMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ArtifactList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Artifact',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Description' => [
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
        'GetShippingLabelOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ShippingLabelURL' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Warning' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'GetStatusOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'JobId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'JobType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LocationCode' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LocationMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ProgressCode' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ProgressMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Carrier' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'TrackingNumber' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LogBucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LogKey' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ErrorCount' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'Signature' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'SignatureFileContents' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CurrentManifest' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'CreationDate' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ArtifactList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Artifact',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Description' => [
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
        'ListJobsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Jobs' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Job',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'JobId' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                            'IsCanceled' => [
                                'type' => 'boolean',
                            ],
                            'JobType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
            ],
        ],
        'UpdateJobOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Success' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'WarningMessage' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ArtifactList' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Artifact',
                        'type' => 'object',
                        'sentAs' => 'member',
                        'properties' => [
                            'Description' => [
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
    'iterators' => [
        'ListJobs' => [
            'input_token' => 'Marker',
            'output_token' => 'Jobs/#/JobId',
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxJobs',
            'result_key' => 'Jobs',
        ],
    ],
];
