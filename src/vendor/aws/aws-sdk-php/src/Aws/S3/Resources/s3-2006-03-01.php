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
    'apiVersion' => '2006-03-01',
    'endpointPrefix' => 's3',
    'serviceFullName' => 'Amazon Simple Storage Service',
    'serviceAbbreviation' => 'Amazon S3',
    'serviceType' => 'rest-xml',
    'timestampFormat' => 'rfc822',
    'globalEndpoint' => 's3.amazonaws.com',
    'signatureVersion' => 's3',
    'namespace' => 'S3',
    'regions' => [
        'us-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-eu-west-1.amazonaws.com',
        ],
        'eu-central-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-eu-central-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3.cn-north-1.amazonaws.com.cn',
        ],
        'us-gov-west-1' => [
            'http' => true,
            'https' => true,
            'hostname' => 's3-us-gov-west-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AbortMultipartUpload' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'AbortMultipartUploadOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadAbort.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'UploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'uploadId',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The specified multipart upload does not exist.',
                    'class' => 'NoSuchUploadException',
                ],
            ],
        ],
        'CompleteMultipartUpload' => [
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'CompleteMultipartUploadOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadComplete.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CompleteMultipartUpload',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Parts' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CompletedPart',
                        'type' => 'object',
                        'sentAs' => 'Part',
                        'properties' => [
                            'ETag' => [
                                'type' => 'string',
                            ],
                            'PartNumber' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'UploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'uploadId',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'CopyObject' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'CopyObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectCOPY.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CopyObjectRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'CacheControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Cache-Control',
                ],
                'ContentDisposition' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Disposition',
                ],
                'ContentEncoding' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Encoding',
                ],
                'ContentLanguage' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Language',
                ],
                'ContentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'CopySource' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source',
                ],
                'CopySourceIfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-match',
                ],
                'CopySourceIfModifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-modified-since',
                ],
                'CopySourceIfNoneMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-none-match',
                ],
                'CopySourceIfUnmodifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-unmodified-since',
                ],
                'Expires' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'header',
                    'sentAs' => 'x-amz-meta-',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'MetadataDirective' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-metadata-directive',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-storage-class',
                ],
                'WebsiteRedirectLocation' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-website-redirect-location',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'CopySourceSSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-algorithm',
                ],
                'CopySourceSSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-key',
                ],
                'CopySourceSSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-key-MD5',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The source object of the COPY operation is not in the active tier and is only stored in Amazon Glacier.',
                    'class' => 'ObjectNotInActiveTierErrorException',
                ],
            ],
        ],
        'CreateBucket' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'CreateBucketOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUT.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CreateBucketConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'LocationConstraint' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWrite' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'The requested bucket name is not available. The bucket namespace is shared by all users of the system. Please select a different name and try again.',
                    'class' => 'BucketAlreadyExistsException',
                ],
            ],
        ],
        'CreateMultipartUpload' => [
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}{/Key*}?uploads',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'CreateMultipartUploadOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CreateMultipartUploadRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'CacheControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Cache-Control',
                ],
                'ContentDisposition' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Disposition',
                ],
                'ContentEncoding' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Encoding',
                ],
                'ContentLanguage' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Language',
                ],
                'ContentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'Expires' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'header',
                    'sentAs' => 'x-amz-meta-',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-storage-class',
                ],
                'WebsiteRedirectLocation' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-website-redirect-location',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'DeleteBucket' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETE.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketCors' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?cors',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketCorsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETEcors.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketLifecycle' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?lifecycle',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketLifecycleOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETElifecycle.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketPolicy' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?policy',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketPolicyOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETEpolicy.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketReplication' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?replication',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketReplicationOutput',
            'responseType' => 'model',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketTagging' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?tagging',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketTaggingOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETEtagging.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteBucketWebsite' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?website',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteBucketWebsiteOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketDELETEwebsite.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'DeleteObject' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectDELETE.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'MFA' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-mfa',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'versionId',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
        ],
        'DeleteObjects' => [
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}?delete',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'DeleteObjectsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/multiobjectdeleteapi.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'Delete',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'contentMd5' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Objects' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'ObjectIdentifier',
                        'type' => 'object',
                        'sentAs' => 'Object',
                        'properties' => [
                            'Key' => [
                                'required' => true,
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Quiet' => [
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'xml',
                ],
                'MFA' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-mfa',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketAcl' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?acl',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketAclOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETacl.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketCors' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?cors',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketCorsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETcors.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketLifecycle' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?lifecycle',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketLifecycleOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETlifecycle.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketLifecycleConfiguration' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?lifecycle',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketLifecycleConfigurationOutput',
            'responseType' => 'model',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketLocation' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?location',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketLocationOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETlocation.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'GetBucketLogging' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?logging',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketLoggingOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETlogging.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketNotification' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?notification',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'NotificationConfigurationDeprecated',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETnotification.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketNotificationConfiguration' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?notification',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'NotificationConfiguration',
            'responseType' => 'model',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketPolicy' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?policy',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketPolicyOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETpolicy.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'GetBucketReplication' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?replication',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketReplicationOutput',
            'responseType' => 'model',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketRequestPayment' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?requestPayment',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketRequestPaymentOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTrequestPaymentGET.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketTagging' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?tagging',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketTaggingOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETtagging.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketVersioning' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?versioning',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketVersioningOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETversioningStatus.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetBucketWebsite' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?website',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetBucketWebsiteOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETwebsite.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'GetObject' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectGET.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
                'IfModifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'If-Modified-Since',
                ],
                'IfNoneMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-None-Match',
                ],
                'IfUnmodifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'If-Unmodified-Since',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Range' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ResponseCacheControl' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'response-cache-control',
                ],
                'ResponseContentDisposition' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'response-content-disposition',
                ],
                'ResponseContentEncoding' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'response-content-encoding',
                ],
                'ResponseContentLanguage' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'response-content-language',
                ],
                'ResponseContentType' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'response-content-type',
                ],
                'ResponseExpires' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'query',
                    'sentAs' => 'response-expires',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'versionId',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'SaveAs' => [
                    'location' => 'response_body',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified key does not exist.',
                    'class' => 'NoSuchKeyException',
                ],
            ],
        ],
        'GetObjectAcl' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?acl',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetObjectAclOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectGETacl.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'versionId',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified key does not exist.',
                    'class' => 'NoSuchKeyException',
                ],
            ],
        ],
        'GetObjectTorrent' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?torrent',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'GetObjectTorrentOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectGETtorrent.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
        ],
        'HeadBucket' => [
            'httpMethod' => 'HEAD',
            'uri' => '/{Bucket}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'HeadBucketOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketHEAD.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified bucket does not exist.',
                    'class' => 'NoSuchBucketException',
                ],
            ],
        ],
        'HeadObject' => [
            'httpMethod' => 'HEAD',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'HeadObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectHEAD.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'IfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-Match',
                ],
                'IfModifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'If-Modified-Since',
                ],
                'IfNoneMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'If-None-Match',
                ],
                'IfUnmodifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'If-Unmodified-Since',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Range' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'versionId',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified key does not exist.',
                    'class' => 'NoSuchKeyException',
                ],
            ],
        ],
        'ListBuckets' => [
            'httpMethod' => 'GET',
            'uri' => '/',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'ListBucketsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTServiceGET.html',
            'parameters' => [
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'ListMultipartUploads' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?uploads',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'ListMultipartUploadsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadListMPUpload.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'delimiter',
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'encoding-type',
                ],
                'KeyMarker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'key-marker',
                ],
                'MaxUploads' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'max-uploads',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'prefix',
                ],
                'UploadIdMarker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'upload-id-marker',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'ListObjectVersions' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?versions',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'ListObjectVersionsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGETVersion.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'delimiter',
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'encoding-type',
                ],
                'KeyMarker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'key-marker',
                ],
                'MaxKeys' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'max-keys',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'prefix',
                ],
                'VersionIdMarker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'version-id-marker',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'ListObjects' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'ListObjectsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketGET.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'delimiter',
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'encoding-type',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'marker',
                ],
                'MaxKeys' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'max-keys',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'prefix',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified bucket does not exist.',
                    'class' => 'NoSuchBucketException',
                ],
            ],
        ],
        'ListParts' => [
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'ListPartsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadListParts.html',
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'MaxParts' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'max-parts',
                ],
                'PartNumberMarker' => [
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'part-number-marker',
                ],
                'UploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'uploadId',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
        'PutBucketAcl' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?acl',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketAclOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTacl.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'AccessControlPolicy',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Grants' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'AccessControlList',
                    'items' => [
                        'name' => 'Grant',
                        'type' => 'object',
                        'properties' => [
                            'Grantee' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'EmailAddress' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'sentAs' => 'xsi:type',
                                        'data' => [
                                            'xmlAttribute' => true,
                                            'xmlNamespace' =>
                                                'http://www.w3.org/2001/XMLSchema-instance',
                                        ],
                                    ],
                                    'URI' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Permission' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWrite' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
            ],
        ],
        'PutBucketCors' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?cors',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketCorsOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTcors.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'CORSConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'contentMd5' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'CORSRules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CORSRule',
                        'type' => 'object',
                        'sentAs' => 'CORSRule',
                        'properties' => [
                            'AllowedHeaders' => [
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedHeader',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedHeader',
                                ],
                            ],
                            'AllowedMethods' => [
                                'required' => true,
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedMethod',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedMethod',
                                ],
                            ],
                            'AllowedOrigins' => [
                                'required' => true,
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedOrigin',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedOrigin',
                                ],
                            ],
                            'ExposeHeaders' => [
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'ExposeHeader',
                                    'type' => 'string',
                                    'sentAs' => 'ExposeHeader',
                                ],
                            ],
                            'MaxAgeSeconds' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketLifecycle' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?lifecycle',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketLifecycleOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTlifecycle.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'LifecycleConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'contentMd5' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Rules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Rule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'Expiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => [
                                            'object',
                                            'string',
                                            'integer',
                                        ],
                                        'format' => 'date-time',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Status' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Transition' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => [
                                            'object',
                                            'string',
                                            'integer',
                                        ],
                                        'format' => 'date-time',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'NoncurrentVersionTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'NoncurrentVersionExpiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketLifecycleConfiguration' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?lifecycle',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketLifecycleConfigurationOutput',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'LifecycleConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Rules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'LifecycleRule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'Expiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => [
                                            'object',
                                            'string',
                                            'integer',
                                        ],
                                        'format' => 'date-time-http',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Status' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Transitions' => [
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Transition',
                                    'type' => 'object',
                                    'sentAs' => 'Transition',
                                    'properties' => [
                                        'Date' => [
                                            'type' => [
                                                'object',
                                                'string',
                                                'integer',
                                            ],
                                            'format' => 'date-time-http',
                                        ],
                                        'Days' => [
                                            'type' => 'numeric',
                                        ],
                                        'StorageClass' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NoncurrentVersionTransitions' => [
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'NoncurrentVersionTransition',
                                    'type' => 'object',
                                    'sentAs' => 'NoncurrentVersionTransition',
                                    'properties' => [
                                        'NoncurrentDays' => [
                                            'type' => 'numeric',
                                        ],
                                        'StorageClass' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NoncurrentVersionExpiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketLogging' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?logging',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketLoggingOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTlogging.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'BucketLoggingStatus',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'xmlAllowEmpty' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'LoggingEnabled' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetBucket' => [
                            'type' => 'string',
                        ],
                        'TargetGrants' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Grant',
                                'type' => 'object',
                                'properties' => [
                                    'Grantee' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DisplayName' => [
                                                'type' => 'string',
                                            ],
                                            'EmailAddress' => [
                                                'type' => 'string',
                                            ],
                                            'ID' => [
                                                'type' => 'string',
                                            ],
                                            'Type' => [
                                                'required' => true,
                                                'type' => 'string',
                                                'sentAs' => 'xsi:type',
                                                'data' => [
                                                    'xmlAttribute' => true,
                                                    'xmlNamespace' =>
                                                        'http://www.w3.org/2001/XMLSchema-instance',
                                                ],
                                            ],
                                            'URI' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Permission' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'TargetPrefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketNotification' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?notification',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketNotificationOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTnotification.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'NotificationConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'xmlAllowEmpty' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'TopicConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                            ],
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Topic' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'QueueConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                            ],
                        ],
                        'Queue' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'CloudFunctionConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                            ],
                        ],
                        'CloudFunction' => [
                            'type' => 'string',
                        ],
                        'InvocationRole' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketNotificationConfiguration' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?notification',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketNotificationConfigurationOutput',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'NotificationConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'TopicConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'TopicConfiguration',
                        'type' => 'object',
                        'sentAs' => 'TopicConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'TopicArn' => [
                                'required' => true,
                                'type' => 'string',
                                'sentAs' => 'Topic',
                            ],
                            'Events' => [
                                'required' => true,
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
                'QueueConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'QueueConfiguration',
                        'type' => 'object',
                        'sentAs' => 'QueueConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'QueueArn' => [
                                'required' => true,
                                'type' => 'string',
                                'sentAs' => 'Queue',
                            ],
                            'Events' => [
                                'required' => true,
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
                'LambdaFunctionConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'LambdaFunctionConfiguration',
                        'type' => 'object',
                        'sentAs' => 'CloudFunctionConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'LambdaFunctionArn' => [
                                'required' => true,
                                'type' => 'string',
                                'sentAs' => 'CloudFunction',
                            ],
                            'Events' => [
                                'required' => true,
                                'type' => 'array',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
            ],
        ],
        'PutBucketPolicy' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?policy',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketPolicyOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTpolicy.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'PutBucketPolicyRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Policy' => [
                    'required' => true,
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
            ],
        ],
        'PutBucketReplication' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?replication',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketReplicationOutput',
            'responseType' => 'model',
            'data' => [
                'xmlRoot' => [
                    'name' => 'ReplicationConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Rules' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'ReplicationRule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Status' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Destination' => [
                                'required' => true,
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'required' => true,
                                        'type' => 'string',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketRequestPayment' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?requestPayment',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketRequestPaymentOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTrequestPaymentPUT.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'RequestPaymentConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Payer' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'PutBucketTagging' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?tagging',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketTaggingOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTtagging.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'Tagging',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'contentMd5' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'TagSet' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
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
        ],
        'PutBucketVersioning' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?versioning',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketVersioningOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTVersioningStatus.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'VersioningConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'MFA' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-mfa',
                ],
                'MFADelete' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'MfaDelete',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
            ],
        ],
        'PutBucketWebsite' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?website',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutBucketWebsiteOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTBucketPUTwebsite.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'WebsiteConfiguration',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
                'xmlAllowEmpty' => true,
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'ErrorDocument' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Key' => [
                            'required' => true,
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                    ],
                ],
                'IndexDocument' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Suffix' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
                'RedirectAllRequestsTo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'HostName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'Protocol' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RoutingRules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'RoutingRule',
                        'type' => 'object',
                        'properties' => [
                            'Condition' => [
                                'type' => 'object',
                                'properties' => [
                                    'HttpErrorCodeReturnedEquals' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPrefixEquals' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Redirect' => [
                                'required' => true,
                                'type' => 'object',
                                'properties' => [
                                    'HostName' => [
                                        'type' => 'string',
                                    ],
                                    'HttpRedirectCode' => [
                                        'type' => 'string',
                                    ],
                                    'Protocol' => [
                                        'type' => 'string',
                                    ],
                                    'ReplaceKeyPrefixWith' => [
                                        'type' => 'string',
                                    ],
                                    'ReplaceKeyWith' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutObject' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectPUT.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'PutObjectRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Body' => [
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'CacheControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Cache-Control',
                ],
                'ContentDisposition' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Disposition',
                ],
                'ContentEncoding' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Encoding',
                ],
                'ContentLanguage' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Language',
                ],
                'ContentLength' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ],
                'ContentMD5' => [
                    'type' => ['string', 'boolean'],
                    'location' => 'header',
                    'sentAs' => 'Content-MD5',
                ],
                'ContentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'Expires' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'header',
                    'sentAs' => 'x-amz-meta-',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-storage-class',
                ],
                'WebsiteRedirectLocation' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-website-redirect-location',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
            ],
        ],
        'PutObjectAcl' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}?acl',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'PutObjectAclOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectPUTacl.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'AccessControlPolicy',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'ACL' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-acl',
                ],
                'Grants' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'AccessControlList',
                    'items' => [
                        'name' => 'Grant',
                        'type' => 'object',
                        'properties' => [
                            'Grantee' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'EmailAddress' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'required' => true,
                                        'type' => 'string',
                                        'sentAs' => 'xsi:type',
                                        'data' => [
                                            'xmlAttribute' => true,
                                            'xmlNamespace' =>
                                                'http://www.w3.org/2001/XMLSchema-instance',
                                        ],
                                    ],
                                    'URI' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Permission' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'GrantFullControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-full-control',
                ],
                'GrantRead' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read',
                ],
                'GrantReadACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-read-acp',
                ],
                'GrantWrite' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write',
                ],
                'GrantWriteACP' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-grant-write-acp',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'ACP' => [
                    'type' => 'object',
                    'additionalProperties' => true,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' => 'The specified key does not exist.',
                    'class' => 'NoSuchKeyException',
                ],
            ],
        ],
        'RestoreObject' => [
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}{/Key*}?restore',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'RestoreObjectOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/RESTObjectRestore.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'RestoreRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'versionId',
                ],
                'Days' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'This operation is not allowed against this storage tier',
                    'class' => 'ObjectAlreadyInActiveTierErrorException',
                ],
            ],
        ],
        'UploadPart' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'UploadPartOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadUploadPart.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'UploadPartRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Body' => [
                    'type' => ['string', 'object'],
                    'location' => 'body',
                ],
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'ContentLength' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ],
                'ContentMD5' => [
                    'type' => ['string', 'boolean'],
                    'location' => 'header',
                    'sentAs' => 'Content-MD5',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'PartNumber' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'partNumber',
                ],
                'UploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'uploadId',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
            ],
        ],
        'UploadPartCopy' => [
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Aws\\S3\\Command\\S3Command',
            'responseClass' => 'UploadPartCopyOutput',
            'responseType' => 'model',
            'documentationUrl' =>
                'http://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadUploadPartCopy.html',
            'data' => [
                'xmlRoot' => [
                    'name' => 'UploadPartCopyRequest',
                    'namespaces' => ['http://s3.amazonaws.com/doc/2006-03-01/'],
                ],
            ],
            'parameters' => [
                'Bucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'CopySource' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source',
                ],
                'CopySourceIfMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-match',
                ],
                'CopySourceIfModifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-modified-since',
                ],
                'CopySourceIfNoneMatch' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-none-match',
                ],
                'CopySourceIfUnmodifiedSince' => [
                    'type' => ['object', 'string', 'integer'],
                    'format' => 'date-time-http',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-if-unmodified-since',
                ],
                'CopySourceRange' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-range',
                ],
                'Key' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => ['Aws\\S3\\S3Client::explodeKey'],
                ],
                'PartNumber' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'query',
                    'sentAs' => 'partNumber',
                ],
                'UploadId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'uploadId',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'CopySourceSSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-algorithm',
                ],
                'CopySourceSSECustomerKey' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-key',
                ],
                'CopySourceSSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-copy-source-server-side-encryption-customer-key-MD5',
                ],
                'RequestPayer' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-payer',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/xml',
                ],
            ],
        ],
    ],
    'models' => [
        'AbortMultipartUploadOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CompleteMultipartUploadOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Location' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Bucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Key' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Expiration' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-expiration',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CopyObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ETag' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Expiration' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-expiration',
                ],
                'CopySourceVersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-version-id',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateBucketOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Location' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'CreateMultipartUploadOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Bucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'Bucket',
                ],
                'Key' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'UploadId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketCorsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketLifecycleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketReplicationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketTaggingOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteBucketWebsiteOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeleteMarker' => [
                    'type' => 'boolean',
                    'location' => 'header',
                    'sentAs' => 'x-amz-delete-marker',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'DeleteObjectsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Deleted' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'DeletedObject',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                            'DeleteMarker' => [
                                'type' => 'boolean',
                            ],
                            'DeleteMarkerVersionId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'Errors' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Error',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Error',
                        'type' => 'object',
                        'sentAs' => 'Error',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketAclOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Grants' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'AccessControlList',
                    'items' => [
                        'name' => 'Grant',
                        'type' => 'object',
                        'sentAs' => 'Grant',
                        'properties' => [
                            'Grantee' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'EmailAddress' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'sentAs' => 'xsi:type',
                                        'data' => [
                                            'xmlAttribute' => true,
                                            'xmlNamespace' =>
                                                'http://www.w3.org/2001/XMLSchema-instance',
                                        ],
                                    ],
                                    'URI' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Permission' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketCorsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CORSRules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'CORSRule',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CORSRule',
                        'type' => 'object',
                        'sentAs' => 'CORSRule',
                        'properties' => [
                            'AllowedHeaders' => [
                                'type' => 'array',
                                'sentAs' => 'AllowedHeader',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedHeader',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedHeader',
                                ],
                            ],
                            'AllowedMethods' => [
                                'type' => 'array',
                                'sentAs' => 'AllowedMethod',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedMethod',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedMethod',
                                ],
                            ],
                            'AllowedOrigins' => [
                                'type' => 'array',
                                'sentAs' => 'AllowedOrigin',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'AllowedOrigin',
                                    'type' => 'string',
                                    'sentAs' => 'AllowedOrigin',
                                ],
                            ],
                            'ExposeHeaders' => [
                                'type' => 'array',
                                'sentAs' => 'ExposeHeader',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'ExposeHeader',
                                    'type' => 'string',
                                    'sentAs' => 'ExposeHeader',
                                ],
                            ],
                            'MaxAgeSeconds' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketLifecycleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Rules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Rule',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Rule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'Expiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => 'string',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Transition' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => 'string',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'NoncurrentVersionTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'NoncurrentVersionExpiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketLifecycleConfigurationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Rules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Rule',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'LifecycleRule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'Expiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Date' => [
                                        'type' => 'string',
                                    ],
                                    'Days' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Transitions' => [
                                'type' => 'array',
                                'sentAs' => 'Transition',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Transition',
                                    'type' => 'object',
                                    'sentAs' => 'Transition',
                                    'properties' => [
                                        'Date' => [
                                            'type' => 'string',
                                        ],
                                        'Days' => [
                                            'type' => 'numeric',
                                        ],
                                        'StorageClass' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NoncurrentVersionTransitions' => [
                                'type' => 'array',
                                'sentAs' => 'NoncurrentVersionTransition',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'NoncurrentVersionTransition',
                                    'type' => 'object',
                                    'sentAs' => 'NoncurrentVersionTransition',
                                    'properties' => [
                                        'NoncurrentDays' => [
                                            'type' => 'numeric',
                                        ],
                                        'StorageClass' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NoncurrentVersionExpiration' => [
                                'type' => 'object',
                                'properties' => [
                                    'NoncurrentDays' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketLocationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Location' => [
                    'type' => 'string',
                    'location' => 'body',
                    'filters' => ['strval', 'strip_tags', 'trim'],
                ],
            ],
        ],
        'GetBucketLoggingOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'LoggingEnabled' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'TargetBucket' => [
                            'type' => 'string',
                        ],
                        'TargetGrants' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Grant',
                                'type' => 'object',
                                'sentAs' => 'Grant',
                                'properties' => [
                                    'Grantee' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DisplayName' => [
                                                'type' => 'string',
                                            ],
                                            'EmailAddress' => [
                                                'type' => 'string',
                                            ],
                                            'ID' => [
                                                'type' => 'string',
                                            ],
                                            'Type' => [
                                                'type' => 'string',
                                                'sentAs' => 'xsi:type',
                                                'data' => [
                                                    'xmlAttribute' => true,
                                                    'xmlNamespace' =>
                                                        'http://www.w3.org/2001/XMLSchema-instance',
                                                ],
                                            ],
                                            'URI' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Permission' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'TargetPrefix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'NotificationConfigurationDeprecated' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TopicConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'sentAs' => 'Event',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                                'sentAs' => 'Event',
                            ],
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Topic' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'QueueConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'sentAs' => 'Event',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                                'sentAs' => 'Event',
                            ],
                        ],
                        'Queue' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'CloudFunctionConfiguration' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Event' => [
                            'type' => 'string',
                        ],
                        'Events' => [
                            'type' => 'array',
                            'sentAs' => 'Event',
                            'data' => [
                                'xmlFlattened' => true,
                            ],
                            'items' => [
                                'name' => 'Event',
                                'type' => 'string',
                                'sentAs' => 'Event',
                            ],
                        ],
                        'CloudFunction' => [
                            'type' => 'string',
                        ],
                        'InvocationRole' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'NotificationConfiguration' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TopicConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'TopicConfiguration',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'TopicConfiguration',
                        'type' => 'object',
                        'sentAs' => 'TopicConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'TopicArn' => [
                                'type' => 'string',
                                'sentAs' => 'Topic',
                            ],
                            'Events' => [
                                'type' => 'array',
                                'sentAs' => 'Event',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'sentAs' => 'FilterRule',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
                'QueueConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'QueueConfiguration',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'QueueConfiguration',
                        'type' => 'object',
                        'sentAs' => 'QueueConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'QueueArn' => [
                                'type' => 'string',
                                'sentAs' => 'Queue',
                            ],
                            'Events' => [
                                'type' => 'array',
                                'sentAs' => 'Event',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'sentAs' => 'FilterRule',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
                'LambdaFunctionConfigurations' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'CloudFunctionConfiguration',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'LambdaFunctionConfiguration',
                        'type' => 'object',
                        'sentAs' => 'CloudFunctionConfiguration',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'LambdaFunctionArn' => [
                                'type' => 'string',
                                'sentAs' => 'CloudFunction',
                            ],
                            'Events' => [
                                'type' => 'array',
                                'sentAs' => 'Event',
                                'data' => [
                                    'xmlFlattened' => true,
                                ],
                                'items' => [
                                    'name' => 'Event',
                                    'type' => 'string',
                                    'sentAs' => 'Event',
                                ],
                            ],
                            'Filter' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'object',
                                        'sentAs' => 'S3Key',
                                        'properties' => [
                                            'FilterRules' => [
                                                'type' => 'array',
                                                'sentAs' => 'FilterRule',
                                                'data' => [
                                                    'xmlFlattened' => true,
                                                ],
                                                'items' => [
                                                    'name' => 'FilterRule',
                                                    'type' => 'object',
                                                    'sentAs' => 'FilterRule',
                                                    'properties' => [
                                                        'Name' => [
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
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Policy' => [
                    'type' => 'string',
                    'instanceOf' => 'Guzzle\\Http\\EntityBody',
                    'location' => 'body',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketReplicationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Role' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Rules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Rule',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'ReplicationRule',
                        'type' => 'object',
                        'sentAs' => 'Rule',
                        'properties' => [
                            'ID' => [
                                'type' => 'string',
                            ],
                            'Prefix' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Destination' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketRequestPaymentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Payer' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketTaggingOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TagSet' => [
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
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketVersioningOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MFADelete' => [
                    'type' => 'string',
                    'location' => 'xml',
                    'sentAs' => 'MfaDelete',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetBucketWebsiteOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RedirectAllRequestsTo' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'HostName' => [
                            'type' => 'string',
                        ],
                        'Protocol' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'IndexDocument' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Suffix' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ErrorDocument' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'Key' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RoutingRules' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'RoutingRule',
                        'type' => 'object',
                        'sentAs' => 'RoutingRule',
                        'properties' => [
                            'Condition' => [
                                'type' => 'object',
                                'properties' => [
                                    'HttpErrorCodeReturnedEquals' => [
                                        'type' => 'string',
                                    ],
                                    'KeyPrefixEquals' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Redirect' => [
                                'type' => 'object',
                                'properties' => [
                                    'HostName' => [
                                        'type' => 'string',
                                    ],
                                    'HttpRedirectCode' => [
                                        'type' => 'string',
                                    ],
                                    'Protocol' => [
                                        'type' => 'string',
                                    ],
                                    'ReplaceKeyPrefixWith' => [
                                        'type' => 'string',
                                    ],
                                    'ReplaceKeyWith' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Body' => [
                    'type' => 'string',
                    'instanceOf' => 'Guzzle\\Http\\EntityBody',
                    'location' => 'body',
                ],
                'DeleteMarker' => [
                    'type' => 'boolean',
                    'location' => 'header',
                    'sentAs' => 'x-amz-delete-marker',
                ],
                'AcceptRanges' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'accept-ranges',
                ],
                'Expiration' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-expiration',
                ],
                'Restore' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-restore',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Last-Modified',
                ],
                'ContentLength' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'MissingMeta' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'x-amz-missing-meta',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'CacheControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Cache-Control',
                ],
                'ContentDisposition' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Disposition',
                ],
                'ContentEncoding' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Encoding',
                ],
                'ContentLanguage' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Language',
                ],
                'ContentRange' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Range',
                ],
                'ContentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'Expires' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'WebsiteRedirectLocation' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-website-redirect-location',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'header',
                    'sentAs' => 'x-amz-meta-',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-storage-class',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'ReplicationStatus' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-replication-status',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetObjectAclOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Grants' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'AccessControlList',
                    'items' => [
                        'name' => 'Grant',
                        'type' => 'object',
                        'sentAs' => 'Grant',
                        'properties' => [
                            'Grantee' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'EmailAddress' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'sentAs' => 'xsi:type',
                                        'data' => [
                                            'xmlAttribute' => true,
                                            'xmlNamespace' =>
                                                'http://www.w3.org/2001/XMLSchema-instance',
                                        ],
                                    ],
                                    'URI' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Permission' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'GetObjectTorrentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Body' => [
                    'type' => 'string',
                    'instanceOf' => 'Guzzle\\Http\\EntityBody',
                    'location' => 'body',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'HeadBucketOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'HeadObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'DeleteMarker' => [
                    'type' => 'boolean',
                    'location' => 'header',
                    'sentAs' => 'x-amz-delete-marker',
                ],
                'AcceptRanges' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'accept-ranges',
                ],
                'Expiration' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-expiration',
                ],
                'Restore' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-restore',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Last-Modified',
                ],
                'ContentLength' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'MissingMeta' => [
                    'type' => 'numeric',
                    'location' => 'header',
                    'sentAs' => 'x-amz-missing-meta',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'CacheControl' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Cache-Control',
                ],
                'ContentDisposition' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Disposition',
                ],
                'ContentEncoding' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Encoding',
                ],
                'ContentLanguage' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Language',
                ],
                'ContentType' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ],
                'Expires' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'WebsiteRedirectLocation' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-website-redirect-location',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'Metadata' => [
                    'type' => 'object',
                    'location' => 'header',
                    'sentAs' => 'x-amz-meta-',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-storage-class',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'ReplicationStatus' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-replication-status',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListBucketsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Buckets' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => [
                        'name' => 'Bucket',
                        'type' => 'object',
                        'sentAs' => 'Bucket',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListMultipartUploadsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Bucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'KeyMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'UploadIdMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextKeyMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextUploadIdMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxUploads' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Uploads' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Upload',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'MultipartUpload',
                        'type' => 'object',
                        'sentAs' => 'Upload',
                        'properties' => [
                            'UploadId' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'type' => 'string',
                            ],
                            'Initiated' => [
                                'type' => 'string',
                            ],
                            'StorageClass' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Initiator' => [
                                'type' => 'object',
                                'properties' => [
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'CommonPrefixes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CommonPrefix',
                        'type' => 'object',
                        'properties' => [
                            'Prefix' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListObjectVersionsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'KeyMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'VersionIdMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextKeyMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextVersionIdMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Versions' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Version',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'ObjectVersion',
                        'type' => 'object',
                        'sentAs' => 'Version',
                        'properties' => [
                            'ETag' => [
                                'type' => 'string',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                            ],
                            'StorageClass' => [
                                'type' => 'string',
                            ],
                            'Key' => [
                                'type' => 'string',
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                            'IsLatest' => [
                                'type' => 'boolean',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'DeleteMarkers' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'DeleteMarker',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'DeleteMarkerEntry',
                        'type' => 'object',
                        'sentAs' => 'DeleteMarker',
                        'properties' => [
                            'Owner' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Key' => [
                                'type' => 'string',
                            ],
                            'VersionId' => [
                                'type' => 'string',
                            ],
                            'IsLatest' => [
                                'type' => 'boolean',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxKeys' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'CommonPrefixes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CommonPrefix',
                        'type' => 'object',
                        'properties' => [
                            'Prefix' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListObjectsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'NextMarker' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Contents' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Object',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                            'ETag' => [
                                'type' => 'string',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                            ],
                            'StorageClass' => [
                                'type' => 'string',
                            ],
                            'Owner' => [
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'type' => 'string',
                                    ],
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Prefix' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Delimiter' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'MaxKeys' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'CommonPrefixes' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'CommonPrefix',
                        'type' => 'object',
                        'properties' => [
                            'Prefix' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'EncodingType' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'ListPartsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Bucket' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'Key' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'UploadId' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'PartNumberMarker' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'NextPartNumberMarker' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'MaxParts' => [
                    'type' => 'numeric',
                    'location' => 'xml',
                ],
                'IsTruncated' => [
                    'type' => 'boolean',
                    'location' => 'xml',
                ],
                'Parts' => [
                    'type' => 'array',
                    'location' => 'xml',
                    'sentAs' => 'Part',
                    'data' => [
                        'xmlFlattened' => true,
                    ],
                    'items' => [
                        'name' => 'Part',
                        'type' => 'object',
                        'sentAs' => 'Part',
                        'properties' => [
                            'PartNumber' => [
                                'type' => 'numeric',
                            ],
                            'LastModified' => [
                                'type' => 'string',
                            ],
                            'ETag' => [
                                'type' => 'string',
                            ],
                            'Size' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Initiator' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'ID' => [
                            'type' => 'string',
                        ],
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Owner' => [
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => [
                        'DisplayName' => [
                            'type' => 'string',
                        ],
                        'ID' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'StorageClass' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketAclOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketCorsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketLifecycleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketLifecycleConfigurationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketLoggingOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketNotificationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketNotificationConfigurationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketPolicyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketReplicationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketRequestPaymentOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketTaggingOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketVersioningOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutBucketWebsiteOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'PutObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Expiration' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-expiration',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'VersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-version-id',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
                'ObjectURL' => [],
            ],
        ],
        'PutObjectAclOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'RestoreObjectOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UploadPartOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'header',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
        'UploadPartCopyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CopySourceVersionId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-copy-source-version-id',
                ],
                'ETag' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'LastModified' => [
                    'type' => 'string',
                    'location' => 'xml',
                ],
                'ServerSideEncryption' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption',
                ],
                'SSECustomerAlgorithm' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' =>
                        'x-amz-server-side-encryption-customer-algorithm',
                ],
                'SSECustomerKeyMD5' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-customer-key-MD5',
                ],
                'SSEKMSKeyId' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-server-side-encryption-aws-kms-key-id',
                ],
                'RequestCharged' => [
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-charged',
                ],
                'RequestId' => [
                    'location' => 'header',
                    'sentAs' => 'x-amz-request-id',
                ],
            ],
        ],
    ],
    'iterators' => [
        'ListBuckets' => [
            'result_key' => 'Buckets',
        ],
        'ListMultipartUploads' => [
            'limit_key' => 'MaxUploads',
            'more_results' => 'IsTruncated',
            'output_token' => ['NextKeyMarker', 'NextUploadIdMarker'],
            'input_token' => ['KeyMarker', 'UploadIdMarker'],
            'result_key' => ['Uploads', 'CommonPrefixes'],
        ],
        'ListObjectVersions' => [
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxKeys',
            'output_token' => ['NextKeyMarker', 'NextVersionIdMarker'],
            'input_token' => ['KeyMarker', 'VersionIdMarker'],
            'result_key' => ['Versions', 'DeleteMarkers', 'CommonPrefixes'],
        ],
        'ListObjects' => [
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxKeys',
            'output_token' => 'NextMarker',
            'input_token' => 'Marker',
            'result_key' => ['Contents', 'CommonPrefixes'],
        ],
        'ListParts' => [
            'more_results' => 'IsTruncated',
            'limit_key' => 'MaxParts',
            'output_token' => 'NextPartNumberMarker',
            'input_token' => 'PartNumberMarker',
            'result_key' => 'Parts',
        ],
    ],
    'waiters' => [
        '__default__' => [
            'interval' => 5,
            'max_attempts' => 20,
        ],
        'BucketExists' => [
            'operation' => 'HeadBucket',
            'success.type' => 'output',
            'ignore_errors' => ['NoSuchBucket'],
        ],
        'BucketNotExists' => [
            'operation' => 'HeadBucket',
            'success.type' => 'error',
            'success.value' => 'NoSuchBucket',
        ],
        'ObjectExists' => [
            'operation' => 'HeadObject',
            'success.type' => 'output',
            'ignore_errors' => ['NoSuchKey'],
        ],
        'ObjectNotExists' => [
            'operation' => 'HeadObject',
            'success.type' => 'error',
            'success.value' => 'NoSuchKey',
        ],
    ],
];
