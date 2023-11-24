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
    'apiVersion' => '2012-09-25',
    'endpointPrefix' => 'elastictranscoder',
    'serviceFullName' => 'Amazon Elastic Transcoder',
    'serviceType' => 'rest-json',
    'signatureVersion' => 'v4',
    'namespace' => 'ElasticTranscoder',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'elastictranscoder.ap-southeast-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'CancelJob' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-09-25/jobs/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'CreateJob' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/jobs',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateJobResponse',
            'responseType' => 'model',
            'parameters' => [
                'PipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Input' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Key' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'FrameRate' => [
                            'type' => 'string',
                        ],
                        'Resolution' => [
                            'type' => 'string',
                        ],
                        'AspectRatio' => [
                            'type' => 'string',
                        ],
                        'Interlaced' => [
                            'type' => 'string',
                        ],
                        'Container' => [
                            'type' => 'string',
                        ],
                        'Encryption' => [
                            'type' => 'object',
                            'properties' => [
                                'Mode' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'KeyMd5' => [
                                    'type' => 'string',
                                ],
                                'InitializationVector' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'DetectedProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'Width' => [
                                    'type' => 'numeric',
                                ],
                                'Height' => [
                                    'type' => 'numeric',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'FileSize' => [
                                    'type' => 'numeric',
                                ],
                                'DurationMillis' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
                'Output' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Key' => [
                            'type' => 'string',
                            'minLength' => 1,
                        ],
                        'ThumbnailPattern' => [
                            'type' => 'string',
                        ],
                        'ThumbnailEncryption' => [
                            'type' => 'object',
                            'properties' => [
                                'Mode' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'KeyMd5' => [
                                    'type' => 'string',
                                ],
                                'InitializationVector' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Rotate' => [
                            'type' => 'string',
                        ],
                        'PresetId' => [
                            'type' => 'string',
                        ],
                        'SegmentDuration' => [
                            'type' => 'string',
                        ],
                        'Watermarks' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'JobWatermark',
                                'type' => 'object',
                                'properties' => [
                                    'PresetWatermarkId' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'InputKey' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'AlbumArt' => [
                            'type' => 'object',
                            'properties' => [
                                'MergePolicy' => [
                                    'type' => 'string',
                                ],
                                'Artwork' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Artwork',
                                        'type' => 'object',
                                        'properties' => [
                                            'InputKey' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'MaxWidth' => [
                                                'type' => 'string',
                                            ],
                                            'MaxHeight' => [
                                                'type' => 'string',
                                            ],
                                            'SizingPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'PaddingPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'AlbumArtFormat' => [
                                                'type' => 'string',
                                            ],
                                            'Encryption' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'KeyMd5' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InitializationVector' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Composition' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Clip',
                                'type' => 'object',
                                'properties' => [
                                    'TimeSpan' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'StartTime' => [
                                                'type' => 'string',
                                            ],
                                            'Duration' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Captions' => [
                            'type' => 'object',
                            'properties' => [
                                'MergePolicy' => [
                                    'type' => 'string',
                                ],
                                'CaptionSources' => [
                                    'type' => 'array',
                                    'maxItems' => 20,
                                    'items' => [
                                        'name' => 'CaptionSource',
                                        'type' => 'object',
                                        'properties' => [
                                            'Key' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'Language' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'TimeOffset' => [
                                                'type' => 'string',
                                            ],
                                            'Label' => [
                                                'type' => 'string',
                                                'minLength' => 1,
                                            ],
                                            'Encryption' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'KeyMd5' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InitializationVector' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'CaptionFormats' => [
                                    'type' => 'array',
                                    'maxItems' => 4,
                                    'items' => [
                                        'name' => 'CaptionFormat',
                                        'type' => 'object',
                                        'properties' => [
                                            'Format' => [
                                                'type' => 'string',
                                            ],
                                            'Pattern' => [
                                                'type' => 'string',
                                            ],
                                            'Encryption' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'KeyMd5' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InitializationVector' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Encryption' => [
                            'type' => 'object',
                            'properties' => [
                                'Mode' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'KeyMd5' => [
                                    'type' => 'string',
                                ],
                                'InitializationVector' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'Outputs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 30,
                    'items' => [
                        'name' => 'CreateJobOutput',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'ThumbnailPattern' => [
                                'type' => 'string',
                            ],
                            'ThumbnailEncryption' => [
                                'type' => 'object',
                                'properties' => [
                                    'Mode' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMd5' => [
                                        'type' => 'string',
                                    ],
                                    'InitializationVector' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Rotate' => [
                                'type' => 'string',
                            ],
                            'PresetId' => [
                                'type' => 'string',
                            ],
                            'SegmentDuration' => [
                                'type' => 'string',
                            ],
                            'Watermarks' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'JobWatermark',
                                    'type' => 'object',
                                    'properties' => [
                                        'PresetWatermarkId' => [
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'InputKey' => [
                                            'type' => 'string',
                                            'minLength' => 1,
                                        ],
                                        'Encryption' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AlbumArt' => [
                                'type' => 'object',
                                'properties' => [
                                    'MergePolicy' => [
                                        'type' => 'string',
                                    ],
                                    'Artwork' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Artwork',
                                            'type' => 'object',
                                            'properties' => [
                                                'InputKey' => [
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'MaxWidth' => [
                                                    'type' => 'string',
                                                ],
                                                'MaxHeight' => [
                                                    'type' => 'string',
                                                ],
                                                'SizingPolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'PaddingPolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'AlbumArtFormat' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Composition' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Clip',
                                    'type' => 'object',
                                    'properties' => [
                                        'TimeSpan' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'StartTime' => [
                                                    'type' => 'string',
                                                ],
                                                'Duration' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Captions' => [
                                'type' => 'object',
                                'properties' => [
                                    'MergePolicy' => [
                                        'type' => 'string',
                                    ],
                                    'CaptionSources' => [
                                        'type' => 'array',
                                        'maxItems' => 20,
                                        'items' => [
                                            'name' => 'CaptionSource',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'Language' => [
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'TimeOffset' => [
                                                    'type' => 'string',
                                                ],
                                                'Label' => [
                                                    'type' => 'string',
                                                    'minLength' => 1,
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CaptionFormats' => [
                                        'type' => 'array',
                                        'maxItems' => 4,
                                        'items' => [
                                            'name' => 'CaptionFormat',
                                            'type' => 'object',
                                            'properties' => [
                                                'Format' => [
                                                    'type' => 'string',
                                                ],
                                                'Pattern' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Encryption' => [
                                'type' => 'object',
                                'properties' => [
                                    'Mode' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMd5' => [
                                        'type' => 'string',
                                    ],
                                    'InitializationVector' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'OutputKeyPrefix' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Playlists' => [
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 30,
                    'items' => [
                        'name' => 'CreateJobPlaylist',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'minLength' => 1,
                            ],
                            'Format' => [
                                'type' => 'string',
                            ],
                            'OutputKeys' => [
                                'type' => 'array',
                                'maxItems' => 30,
                                'items' => [
                                    'name' => 'Key',
                                    'type' => 'string',
                                    'minLength' => 1,
                                ],
                            ],
                            'HlsContentProtection' => [
                                'type' => 'object',
                                'properties' => [
                                    'Method' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMd5' => [
                                        'type' => 'string',
                                    ],
                                    'InitializationVector' => [
                                        'type' => 'string',
                                    ],
                                    'LicenseAcquisitionUrl' => [
                                        'type' => 'string',
                                    ],
                                    'KeyStoragePolicy' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'PlayReadyDrm' => [
                                'type' => 'object',
                                'properties' => [
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMd5' => [
                                        'type' => 'string',
                                    ],
                                    'KeyId' => [
                                        'type' => 'string',
                                    ],
                                    'InitializationVector' => [
                                        'type' => 'string',
                                    ],
                                    'LicenseAcquisitionUrl' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'UserMetadata' => [
                    'type' => 'object',
                    'location' => 'json',
                    'additionalProperties' => [
                        'type' => 'string',
                        'data' => [
                            'shape_name' => 'String',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Too many operations for a given AWS account. For example, the number of pipelines exceeds the maximum allowed.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'CreatePipeline' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/pipelines',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreatePipelineResponse',
            'responseType' => 'model',
            'parameters' => [
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'InputBucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'OutputBucket' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AwsKmsKeyArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Notifications' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Progressing' => [
                            'type' => 'string',
                        ],
                        'Completed' => [
                            'type' => 'string',
                        ],
                        'Warning' => [
                            'type' => 'string',
                        ],
                        'Error' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ContentConfig' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'StorageClass' => [
                            'type' => 'string',
                        ],
                        'Permissions' => [
                            'type' => 'array',
                            'maxItems' => 30,
                            'items' => [
                                'name' => 'Permission',
                                'type' => 'object',
                                'properties' => [
                                    'GranteeType' => [
                                        'type' => 'string',
                                    ],
                                    'Grantee' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'Access' => [
                                        'type' => 'array',
                                        'maxItems' => 30,
                                        'items' => [
                                            'name' => 'AccessControl',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ThumbnailConfig' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'StorageClass' => [
                            'type' => 'string',
                        ],
                        'Permissions' => [
                            'type' => 'array',
                            'maxItems' => 30,
                            'items' => [
                                'name' => 'Permission',
                                'type' => 'object',
                                'properties' => [
                                    'GranteeType' => [
                                        'type' => 'string',
                                    ],
                                    'Grantee' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'Access' => [
                                        'type' => 'array',
                                        'maxItems' => 30,
                                        'items' => [
                                            'name' => 'AccessControl',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Too many operations for a given AWS account. For example, the number of pipelines exceeds the maximum allowed.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'CreatePreset' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/presets',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreatePresetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Name' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Container' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Video' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Codec' => [
                            'type' => 'string',
                        ],
                        'CodecOptions' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                                'minLength' => 1,
                                'data' => [
                                    'shape_name' => 'CodecOption',
                                ],
                            ],
                        ],
                        'KeyframesMaxDist' => [
                            'type' => 'string',
                        ],
                        'FixedGOP' => [
                            'type' => 'string',
                        ],
                        'BitRate' => [
                            'type' => 'string',
                        ],
                        'FrameRate' => [
                            'type' => 'string',
                        ],
                        'MaxFrameRate' => [
                            'type' => 'string',
                        ],
                        'Resolution' => [
                            'type' => 'string',
                        ],
                        'AspectRatio' => [
                            'type' => 'string',
                        ],
                        'MaxWidth' => [
                            'type' => 'string',
                        ],
                        'MaxHeight' => [
                            'type' => 'string',
                        ],
                        'DisplayAspectRatio' => [
                            'type' => 'string',
                        ],
                        'SizingPolicy' => [
                            'type' => 'string',
                        ],
                        'PaddingPolicy' => [
                            'type' => 'string',
                        ],
                        'Watermarks' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'PresetWatermark',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'MaxWidth' => [
                                        'type' => 'string',
                                    ],
                                    'MaxHeight' => [
                                        'type' => 'string',
                                    ],
                                    'SizingPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'HorizontalAlign' => [
                                        'type' => 'string',
                                    ],
                                    'HorizontalOffset' => [
                                        'type' => 'string',
                                    ],
                                    'VerticalAlign' => [
                                        'type' => 'string',
                                    ],
                                    'VerticalOffset' => [
                                        'type' => 'string',
                                    ],
                                    'Opacity' => [
                                        'type' => 'string',
                                    ],
                                    'Target' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Audio' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Codec' => [
                            'type' => 'string',
                        ],
                        'SampleRate' => [
                            'type' => 'string',
                        ],
                        'BitRate' => [
                            'type' => 'string',
                        ],
                        'Channels' => [
                            'type' => 'string',
                        ],
                        'AudioPackingMode' => [
                            'type' => 'string',
                        ],
                        'CodecOptions' => [
                            'type' => 'object',
                            'properties' => [
                                'Profile' => [
                                    'type' => 'string',
                                ],
                                'BitDepth' => [
                                    'type' => 'string',
                                ],
                                'BitOrder' => [
                                    'type' => 'string',
                                ],
                                'Signed' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                'Thumbnails' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Format' => [
                            'type' => 'string',
                        ],
                        'Interval' => [
                            'type' => 'string',
                        ],
                        'Resolution' => [
                            'type' => 'string',
                        ],
                        'AspectRatio' => [
                            'type' => 'string',
                        ],
                        'MaxWidth' => [
                            'type' => 'string',
                        ],
                        'MaxHeight' => [
                            'type' => 'string',
                        ],
                        'SizingPolicy' => [
                            'type' => 'string',
                        ],
                        'PaddingPolicy' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Too many operations for a given AWS account. For example, the number of pipelines exceeds the maximum allowed.',
                    'class' => 'LimitExceededException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'DeletePipeline' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-09-25/pipelines/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'DeletePreset' => [
            'httpMethod' => 'DELETE',
            'uri' => '/2012-09-25/presets/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'EmptyOutput',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ListJobsByPipeline' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/jobsByPipeline/{PipelineId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListJobsByPipelineResponse',
            'responseType' => 'model',
            'parameters' => [
                'PipelineId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Ascending' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'PageToken' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ListJobsByStatus' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/jobsByStatus/{Status}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListJobsByStatusResponse',
            'responseType' => 'model',
            'parameters' => [
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Ascending' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'PageToken' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ListPipelines' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/pipelines',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListPipelinesResponse',
            'responseType' => 'model',
            'parameters' => [
                'Ascending' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'PageToken' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ListPresets' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/presets',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListPresetsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Ascending' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'PageToken' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ReadJob' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/jobs/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ReadJobResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ReadPipeline' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/pipelines/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ReadPipelineResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'ReadPreset' => [
            'httpMethod' => 'GET',
            'uri' => '/2012-09-25/presets/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ReadPresetResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'TestRole' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/roleTests',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'TestRoleResponse',
            'responseType' => 'model',
            'parameters' => [
                'Role' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'InputBucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'OutputBucket' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Topics' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'maxItems' => 30,
                    'items' => [
                        'name' => 'SnsTopic',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'UpdatePipeline' => [
            'httpMethod' => 'PUT',
            'uri' => '/2012-09-25/pipelines/{Id}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdatePipelineResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Name' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'InputBucket' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Role' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AwsKmsKeyArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Notifications' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Progressing' => [
                            'type' => 'string',
                        ],
                        'Completed' => [
                            'type' => 'string',
                        ],
                        'Warning' => [
                            'type' => 'string',
                        ],
                        'Error' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'ContentConfig' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'StorageClass' => [
                            'type' => 'string',
                        ],
                        'Permissions' => [
                            'type' => 'array',
                            'maxItems' => 30,
                            'items' => [
                                'name' => 'Permission',
                                'type' => 'object',
                                'properties' => [
                                    'GranteeType' => [
                                        'type' => 'string',
                                    ],
                                    'Grantee' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'Access' => [
                                        'type' => 'array',
                                        'maxItems' => 30,
                                        'items' => [
                                            'name' => 'AccessControl',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ThumbnailConfig' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Bucket' => [
                            'type' => 'string',
                        ],
                        'StorageClass' => [
                            'type' => 'string',
                        ],
                        'Permissions' => [
                            'type' => 'array',
                            'maxItems' => 30,
                            'items' => [
                                'name' => 'Permission',
                                'type' => 'object',
                                'properties' => [
                                    'GranteeType' => [
                                        'type' => 'string',
                                    ],
                                    'Grantee' => [
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ],
                                    'Access' => [
                                        'type' => 'array',
                                        'maxItems' => 30,
                                        'items' => [
                                            'name' => 'AccessControl',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'UpdatePipelineNotifications' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/pipelines/{Id}/notifications',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdatePipelineNotificationsResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Notifications' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Progressing' => [
                            'type' => 'string',
                        ],
                        'Completed' => [
                            'type' => 'string',
                        ],
                        'Warning' => [
                            'type' => 'string',
                        ],
                        'Error' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
        'UpdatePipelineStatus' => [
            'httpMethod' => 'POST',
            'uri' => '/2012-09-25/pipelines/{Id}/status',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UpdatePipelineStatusResponse',
            'responseType' => 'model',
            'parameters' => [
                'Id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'Status' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'One or more required parameter values were not provided in the request.',
                    'class' => 'ValidationException',
                ],
                [
                    'class' => 'IncompatibleVersionException',
                ],
                [
                    'reason' =>
                        'The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created.',
                    'class' => 'ResourceNotFoundException',
                ],
                [
                    'reason' =>
                        'The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use.',
                    'class' => 'ResourceInUseException',
                ],
                [
                    'reason' =>
                        'General authentication failure. The request was not signed correctly.',
                    'class' => 'AccessDeniedException',
                ],
                [
                    'reason' =>
                        'Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.',
                    'class' => 'InternalServiceException',
                ],
            ],
        ],
    ],
    'models' => [
        'EmptyOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
        ],
        'CreateJobResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Job' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'PipelineId' => [
                            'type' => 'string',
                        ],
                        'Input' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'Interlaced' => [
                                    'type' => 'string',
                                ],
                                'Container' => [
                                    'type' => 'string',
                                ],
                                'Encryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DetectedProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Width' => [
                                            'type' => 'numeric',
                                        ],
                                        'Height' => [
                                            'type' => 'numeric',
                                        ],
                                        'FrameRate' => [
                                            'type' => 'string',
                                        ],
                                        'FileSize' => [
                                            'type' => 'numeric',
                                        ],
                                        'DurationMillis' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Output' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'ThumbnailPattern' => [
                                    'type' => 'string',
                                ],
                                'ThumbnailEncryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'Rotate' => [
                                    'type' => 'string',
                                ],
                                'PresetId' => [
                                    'type' => 'string',
                                ],
                                'SegmentDuration' => [
                                    'type' => 'string',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                                'StatusDetail' => [
                                    'type' => 'string',
                                ],
                                'Duration' => [
                                    'type' => 'numeric',
                                ],
                                'Width' => [
                                    'type' => 'numeric',
                                ],
                                'Height' => [
                                    'type' => 'numeric',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'FileSize' => [
                                    'type' => 'numeric',
                                ],
                                'DurationMillis' => [
                                    'type' => 'numeric',
                                ],
                                'Watermarks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'JobWatermark',
                                        'type' => 'object',
                                        'properties' => [
                                            'PresetWatermarkId' => [
                                                'type' => 'string',
                                            ],
                                            'InputKey' => [
                                                'type' => 'string',
                                            ],
                                            'Encryption' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'KeyMd5' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InitializationVector' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'AlbumArt' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MergePolicy' => [
                                            'type' => 'string',
                                        ],
                                        'Artwork' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Artwork',
                                                'type' => 'object',
                                                'properties' => [
                                                    'InputKey' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MaxWidth' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MaxHeight' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SizingPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                    'PaddingPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                    'AlbumArtFormat' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Composition' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Clip',
                                        'type' => 'object',
                                        'properties' => [
                                            'TimeSpan' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'StartTime' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Duration' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Captions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MergePolicy' => [
                                            'type' => 'string',
                                        ],
                                        'CaptionSources' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'CaptionSource',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Language' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TimeOffset' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Label' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CaptionFormats' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'CaptionFormat',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Format' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Pattern' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Encryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'AppliedColorSpaceConversion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Outputs' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'JobOutput',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailPattern' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailEncryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Rotate' => [
                                        'type' => 'string',
                                    ],
                                    'PresetId' => [
                                        'type' => 'string',
                                    ],
                                    'SegmentDuration' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                    'Duration' => [
                                        'type' => 'numeric',
                                    ],
                                    'Width' => [
                                        'type' => 'numeric',
                                    ],
                                    'Height' => [
                                        'type' => 'numeric',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'FileSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DurationMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'Watermarks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'JobWatermark',
                                            'type' => 'object',
                                            'properties' => [
                                                'PresetWatermarkId' => [
                                                    'type' => 'string',
                                                ],
                                                'InputKey' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AlbumArt' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'Artwork' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Artwork',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InputKey' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxWidth' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxHeight' => [
                                                            'type' => 'string',
                                                        ],
                                                        'SizingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'PaddingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AlbumArtFormat' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Composition' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Clip',
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeSpan' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'StartTime' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Duration' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Captions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'CaptionSources' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionSource',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Language' => [
                                                            'type' => 'string',
                                                        ],
                                                        'TimeOffset' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Label' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'CaptionFormats' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionFormat',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Format' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Pattern' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AppliedColorSpaceConversion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'OutputKeyPrefix' => [
                            'type' => 'string',
                        ],
                        'Playlists' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Playlist',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                    'OutputKeys' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Key',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'HlsContentProtection' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Method' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                            'LicenseAcquisitionUrl' => [
                                                'type' => 'string',
                                            ],
                                            'KeyStoragePolicy' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'PlayReadyDrm' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Format' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'KeyId' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                            'LicenseAcquisitionUrl' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'UserMetadata' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                        'Timing' => [
                            'type' => 'object',
                            'properties' => [
                                'SubmitTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                                'StartTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                                'FinishTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePipelineResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'InputBucket' => [
                            'type' => 'string',
                        ],
                        'OutputBucket' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'AwsKmsKeyArn' => [
                            'type' => 'string',
                        ],
                        'Notifications' => [
                            'type' => 'object',
                            'properties' => [
                                'Progressing' => [
                                    'type' => 'string',
                                ],
                                'Completed' => [
                                    'type' => 'string',
                                ],
                                'Warning' => [
                                    'type' => 'string',
                                ],
                                'Error' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ContentConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ThumbnailConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
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
                'Warnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Warning',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
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
        'CreatePresetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Preset' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Container' => [
                            'type' => 'string',
                        ],
                        'Audio' => [
                            'type' => 'object',
                            'properties' => [
                                'Codec' => [
                                    'type' => 'string',
                                ],
                                'SampleRate' => [
                                    'type' => 'string',
                                ],
                                'BitRate' => [
                                    'type' => 'string',
                                ],
                                'Channels' => [
                                    'type' => 'string',
                                ],
                                'AudioPackingMode' => [
                                    'type' => 'string',
                                ],
                                'CodecOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Profile' => [
                                            'type' => 'string',
                                        ],
                                        'BitDepth' => [
                                            'type' => 'string',
                                        ],
                                        'BitOrder' => [
                                            'type' => 'string',
                                        ],
                                        'Signed' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Video' => [
                            'type' => 'object',
                            'properties' => [
                                'Codec' => [
                                    'type' => 'string',
                                ],
                                'CodecOptions' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'KeyframesMaxDist' => [
                                    'type' => 'string',
                                ],
                                'FixedGOP' => [
                                    'type' => 'string',
                                ],
                                'BitRate' => [
                                    'type' => 'string',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'MaxFrameRate' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'MaxWidth' => [
                                    'type' => 'string',
                                ],
                                'MaxHeight' => [
                                    'type' => 'string',
                                ],
                                'DisplayAspectRatio' => [
                                    'type' => 'string',
                                ],
                                'SizingPolicy' => [
                                    'type' => 'string',
                                ],
                                'PaddingPolicy' => [
                                    'type' => 'string',
                                ],
                                'Watermarks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'PresetWatermark',
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'MaxWidth' => [
                                                'type' => 'string',
                                            ],
                                            'MaxHeight' => [
                                                'type' => 'string',
                                            ],
                                            'SizingPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'HorizontalAlign' => [
                                                'type' => 'string',
                                            ],
                                            'HorizontalOffset' => [
                                                'type' => 'string',
                                            ],
                                            'VerticalAlign' => [
                                                'type' => 'string',
                                            ],
                                            'VerticalOffset' => [
                                                'type' => 'string',
                                            ],
                                            'Opacity' => [
                                                'type' => 'string',
                                            ],
                                            'Target' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Thumbnails' => [
                            'type' => 'object',
                            'properties' => [
                                'Format' => [
                                    'type' => 'string',
                                ],
                                'Interval' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'MaxWidth' => [
                                    'type' => 'string',
                                ],
                                'MaxHeight' => [
                                    'type' => 'string',
                                ],
                                'SizingPolicy' => [
                                    'type' => 'string',
                                ],
                                'PaddingPolicy' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Type' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                'Warning' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListJobsByPipelineResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Jobs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Job',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'PipelineId' => [
                                'type' => 'string',
                            ],
                            'Input' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'Resolution' => [
                                        'type' => 'string',
                                    ],
                                    'AspectRatio' => [
                                        'type' => 'string',
                                    ],
                                    'Interlaced' => [
                                        'type' => 'string',
                                    ],
                                    'Container' => [
                                        'type' => 'string',
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DetectedProperties' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'numeric',
                                            ],
                                            'Height' => [
                                                'type' => 'numeric',
                                            ],
                                            'FrameRate' => [
                                                'type' => 'string',
                                            ],
                                            'FileSize' => [
                                                'type' => 'numeric',
                                            ],
                                            'DurationMillis' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Output' => [
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailPattern' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailEncryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Rotate' => [
                                        'type' => 'string',
                                    ],
                                    'PresetId' => [
                                        'type' => 'string',
                                    ],
                                    'SegmentDuration' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                    'Duration' => [
                                        'type' => 'numeric',
                                    ],
                                    'Width' => [
                                        'type' => 'numeric',
                                    ],
                                    'Height' => [
                                        'type' => 'numeric',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'FileSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DurationMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'Watermarks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'JobWatermark',
                                            'type' => 'object',
                                            'properties' => [
                                                'PresetWatermarkId' => [
                                                    'type' => 'string',
                                                ],
                                                'InputKey' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AlbumArt' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'Artwork' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Artwork',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InputKey' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxWidth' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxHeight' => [
                                                            'type' => 'string',
                                                        ],
                                                        'SizingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'PaddingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AlbumArtFormat' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Composition' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Clip',
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeSpan' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'StartTime' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Duration' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Captions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'CaptionSources' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionSource',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Language' => [
                                                            'type' => 'string',
                                                        ],
                                                        'TimeOffset' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Label' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'CaptionFormats' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionFormat',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Format' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Pattern' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AppliedColorSpaceConversion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Outputs' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'JobOutput',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'ThumbnailPattern' => [
                                            'type' => 'string',
                                        ],
                                        'ThumbnailEncryption' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'Rotate' => [
                                            'type' => 'string',
                                        ],
                                        'PresetId' => [
                                            'type' => 'string',
                                        ],
                                        'SegmentDuration' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'StatusDetail' => [
                                            'type' => 'string',
                                        ],
                                        'Duration' => [
                                            'type' => 'numeric',
                                        ],
                                        'Width' => [
                                            'type' => 'numeric',
                                        ],
                                        'Height' => [
                                            'type' => 'numeric',
                                        ],
                                        'FrameRate' => [
                                            'type' => 'string',
                                        ],
                                        'FileSize' => [
                                            'type' => 'numeric',
                                        ],
                                        'DurationMillis' => [
                                            'type' => 'numeric',
                                        ],
                                        'Watermarks' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'JobWatermark',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PresetWatermarkId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InputKey' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AlbumArt' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MergePolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'Artwork' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Artwork',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'InputKey' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'MaxWidth' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'MaxHeight' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'SizingPolicy' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'PaddingPolicy' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'AlbumArtFormat' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Composition' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Clip',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TimeSpan' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'StartTime' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Duration' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Captions' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MergePolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'CaptionSources' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'CaptionSource',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Language' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'TimeOffset' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Label' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'CaptionFormats' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'CaptionFormat',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Format' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Pattern' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Encryption' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'AppliedColorSpaceConversion' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'OutputKeyPrefix' => [
                                'type' => 'string',
                            ],
                            'Playlists' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Playlist',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Format' => [
                                            'type' => 'string',
                                        ],
                                        'OutputKeys' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Key',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'HlsContentProtection' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Method' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                                'LicenseAcquisitionUrl' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyStoragePolicy' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'PlayReadyDrm' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Format' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyId' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                                'LicenseAcquisitionUrl' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'StatusDetail' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'UserMetadata' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Timing' => [
                                'type' => 'object',
                                'properties' => [
                                    'SubmitTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'StartTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'FinishTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListJobsByStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Jobs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Job',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'PipelineId' => [
                                'type' => 'string',
                            ],
                            'Input' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'Resolution' => [
                                        'type' => 'string',
                                    ],
                                    'AspectRatio' => [
                                        'type' => 'string',
                                    ],
                                    'Interlaced' => [
                                        'type' => 'string',
                                    ],
                                    'Container' => [
                                        'type' => 'string',
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'DetectedProperties' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'numeric',
                                            ],
                                            'Height' => [
                                                'type' => 'numeric',
                                            ],
                                            'FrameRate' => [
                                                'type' => 'string',
                                            ],
                                            'FileSize' => [
                                                'type' => 'numeric',
                                            ],
                                            'DurationMillis' => [
                                                'type' => 'numeric',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Output' => [
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailPattern' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailEncryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Rotate' => [
                                        'type' => 'string',
                                    ],
                                    'PresetId' => [
                                        'type' => 'string',
                                    ],
                                    'SegmentDuration' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                    'Duration' => [
                                        'type' => 'numeric',
                                    ],
                                    'Width' => [
                                        'type' => 'numeric',
                                    ],
                                    'Height' => [
                                        'type' => 'numeric',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'FileSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DurationMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'Watermarks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'JobWatermark',
                                            'type' => 'object',
                                            'properties' => [
                                                'PresetWatermarkId' => [
                                                    'type' => 'string',
                                                ],
                                                'InputKey' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AlbumArt' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'Artwork' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Artwork',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InputKey' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxWidth' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxHeight' => [
                                                            'type' => 'string',
                                                        ],
                                                        'SizingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'PaddingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AlbumArtFormat' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Composition' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Clip',
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeSpan' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'StartTime' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Duration' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Captions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'CaptionSources' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionSource',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Language' => [
                                                            'type' => 'string',
                                                        ],
                                                        'TimeOffset' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Label' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'CaptionFormats' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionFormat',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Format' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Pattern' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AppliedColorSpaceConversion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Outputs' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'JobOutput',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'ThumbnailPattern' => [
                                            'type' => 'string',
                                        ],
                                        'ThumbnailEncryption' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'Rotate' => [
                                            'type' => 'string',
                                        ],
                                        'PresetId' => [
                                            'type' => 'string',
                                        ],
                                        'SegmentDuration' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'StatusDetail' => [
                                            'type' => 'string',
                                        ],
                                        'Duration' => [
                                            'type' => 'numeric',
                                        ],
                                        'Width' => [
                                            'type' => 'numeric',
                                        ],
                                        'Height' => [
                                            'type' => 'numeric',
                                        ],
                                        'FrameRate' => [
                                            'type' => 'string',
                                        ],
                                        'FileSize' => [
                                            'type' => 'numeric',
                                        ],
                                        'DurationMillis' => [
                                            'type' => 'numeric',
                                        ],
                                        'Watermarks' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'JobWatermark',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PresetWatermarkId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InputKey' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AlbumArt' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MergePolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'Artwork' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' => 'Artwork',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'InputKey' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'MaxWidth' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'MaxHeight' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'SizingPolicy' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'PaddingPolicy' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'AlbumArtFormat' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Composition' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Clip',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TimeSpan' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'StartTime' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Duration' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Captions' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MergePolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'CaptionSources' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'CaptionSource',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Language' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'TimeOffset' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Label' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'CaptionFormats' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'CaptionFormat',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Format' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Pattern' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Encryption' => [
                                                                'type' =>
                                                                    'object',
                                                                'properties' => [
                                                                    'Mode' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'Key' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'KeyMd5' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                    'InitializationVector' => [
                                                                        'type' =>
                                                                            'string',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Encryption' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'AppliedColorSpaceConversion' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'OutputKeyPrefix' => [
                                'type' => 'string',
                            ],
                            'Playlists' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'Playlist',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Format' => [
                                            'type' => 'string',
                                        ],
                                        'OutputKeys' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Key',
                                                'type' => 'string',
                                            ],
                                        ],
                                        'HlsContentProtection' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Method' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                                'LicenseAcquisitionUrl' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyStoragePolicy' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'PlayReadyDrm' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Format' => [
                                                    'type' => 'string',
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyMd5' => [
                                                    'type' => 'string',
                                                ],
                                                'KeyId' => [
                                                    'type' => 'string',
                                                ],
                                                'InitializationVector' => [
                                                    'type' => 'string',
                                                ],
                                                'LicenseAcquisitionUrl' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                        'StatusDetail' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'UserMetadata' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Timing' => [
                                'type' => 'object',
                                'properties' => [
                                    'SubmitTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'StartTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'FinishTimeMillis' => [
                                        'type' => 'numeric',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'NextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListPipelinesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipelines' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Pipeline',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'InputBucket' => [
                                'type' => 'string',
                            ],
                            'OutputBucket' => [
                                'type' => 'string',
                            ],
                            'Role' => [
                                'type' => 'string',
                            ],
                            'AwsKmsKeyArn' => [
                                'type' => 'string',
                            ],
                            'Notifications' => [
                                'type' => 'object',
                                'properties' => [
                                    'Progressing' => [
                                        'type' => 'string',
                                    ],
                                    'Completed' => [
                                        'type' => 'string',
                                    ],
                                    'Warning' => [
                                        'type' => 'string',
                                    ],
                                    'Error' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ContentConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                    'Permissions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Permission',
                                            'type' => 'object',
                                            'properties' => [
                                                'GranteeType' => [
                                                    'type' => 'string',
                                                ],
                                                'Grantee' => [
                                                    'type' => 'string',
                                                ],
                                                'Access' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'AccessControl',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ThumbnailConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'StorageClass' => [
                                        'type' => 'string',
                                    ],
                                    'Permissions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Permission',
                                            'type' => 'object',
                                            'properties' => [
                                                'GranteeType' => [
                                                    'type' => 'string',
                                                ],
                                                'Grantee' => [
                                                    'type' => 'string',
                                                ],
                                                'Access' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'name' =>
                                                            'AccessControl',
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
                'NextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListPresetsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Presets' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Preset',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'Container' => [
                                'type' => 'string',
                            ],
                            'Audio' => [
                                'type' => 'object',
                                'properties' => [
                                    'Codec' => [
                                        'type' => 'string',
                                    ],
                                    'SampleRate' => [
                                        'type' => 'string',
                                    ],
                                    'BitRate' => [
                                        'type' => 'string',
                                    ],
                                    'Channels' => [
                                        'type' => 'string',
                                    ],
                                    'AudioPackingMode' => [
                                        'type' => 'string',
                                    ],
                                    'CodecOptions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Profile' => [
                                                'type' => 'string',
                                            ],
                                            'BitDepth' => [
                                                'type' => 'string',
                                            ],
                                            'BitOrder' => [
                                                'type' => 'string',
                                            ],
                                            'Signed' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Video' => [
                                'type' => 'object',
                                'properties' => [
                                    'Codec' => [
                                        'type' => 'string',
                                    ],
                                    'CodecOptions' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'KeyframesMaxDist' => [
                                        'type' => 'string',
                                    ],
                                    'FixedGOP' => [
                                        'type' => 'string',
                                    ],
                                    'BitRate' => [
                                        'type' => 'string',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'MaxFrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'Resolution' => [
                                        'type' => 'string',
                                    ],
                                    'AspectRatio' => [
                                        'type' => 'string',
                                    ],
                                    'MaxWidth' => [
                                        'type' => 'string',
                                    ],
                                    'MaxHeight' => [
                                        'type' => 'string',
                                    ],
                                    'DisplayAspectRatio' => [
                                        'type' => 'string',
                                    ],
                                    'SizingPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'PaddingPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'Watermarks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'PresetWatermark',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'type' => 'string',
                                                ],
                                                'MaxWidth' => [
                                                    'type' => 'string',
                                                ],
                                                'MaxHeight' => [
                                                    'type' => 'string',
                                                ],
                                                'SizingPolicy' => [
                                                    'type' => 'string',
                                                ],
                                                'HorizontalAlign' => [
                                                    'type' => 'string',
                                                ],
                                                'HorizontalOffset' => [
                                                    'type' => 'string',
                                                ],
                                                'VerticalAlign' => [
                                                    'type' => 'string',
                                                ],
                                                'VerticalOffset' => [
                                                    'type' => 'string',
                                                ],
                                                'Opacity' => [
                                                    'type' => 'string',
                                                ],
                                                'Target' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Thumbnails' => [
                                'type' => 'object',
                                'properties' => [
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                    'Interval' => [
                                        'type' => 'string',
                                    ],
                                    'Resolution' => [
                                        'type' => 'string',
                                    ],
                                    'AspectRatio' => [
                                        'type' => 'string',
                                    ],
                                    'MaxWidth' => [
                                        'type' => 'string',
                                    ],
                                    'MaxHeight' => [
                                        'type' => 'string',
                                    ],
                                    'SizingPolicy' => [
                                        'type' => 'string',
                                    ],
                                    'PaddingPolicy' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'NextPageToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ReadJobResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Job' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'PipelineId' => [
                            'type' => 'string',
                        ],
                        'Input' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'Interlaced' => [
                                    'type' => 'string',
                                ],
                                'Container' => [
                                    'type' => 'string',
                                ],
                                'Encryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'DetectedProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Width' => [
                                            'type' => 'numeric',
                                        ],
                                        'Height' => [
                                            'type' => 'numeric',
                                        ],
                                        'FrameRate' => [
                                            'type' => 'string',
                                        ],
                                        'FileSize' => [
                                            'type' => 'numeric',
                                        ],
                                        'DurationMillis' => [
                                            'type' => 'numeric',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Output' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'ThumbnailPattern' => [
                                    'type' => 'string',
                                ],
                                'ThumbnailEncryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'Rotate' => [
                                    'type' => 'string',
                                ],
                                'PresetId' => [
                                    'type' => 'string',
                                ],
                                'SegmentDuration' => [
                                    'type' => 'string',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                                'StatusDetail' => [
                                    'type' => 'string',
                                ],
                                'Duration' => [
                                    'type' => 'numeric',
                                ],
                                'Width' => [
                                    'type' => 'numeric',
                                ],
                                'Height' => [
                                    'type' => 'numeric',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'FileSize' => [
                                    'type' => 'numeric',
                                ],
                                'DurationMillis' => [
                                    'type' => 'numeric',
                                ],
                                'Watermarks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'JobWatermark',
                                        'type' => 'object',
                                        'properties' => [
                                            'PresetWatermarkId' => [
                                                'type' => 'string',
                                            ],
                                            'InputKey' => [
                                                'type' => 'string',
                                            ],
                                            'Encryption' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'KeyMd5' => [
                                                        'type' => 'string',
                                                    ],
                                                    'InitializationVector' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'AlbumArt' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MergePolicy' => [
                                            'type' => 'string',
                                        ],
                                        'Artwork' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'Artwork',
                                                'type' => 'object',
                                                'properties' => [
                                                    'InputKey' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MaxWidth' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MaxHeight' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SizingPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                    'PaddingPolicy' => [
                                                        'type' => 'string',
                                                    ],
                                                    'AlbumArtFormat' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Composition' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Clip',
                                        'type' => 'object',
                                        'properties' => [
                                            'TimeSpan' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'StartTime' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Duration' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Captions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MergePolicy' => [
                                            'type' => 'string',
                                        ],
                                        'CaptionSources' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'CaptionSource',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Language' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TimeOffset' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Label' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CaptionFormats' => [
                                            'type' => 'array',
                                            'items' => [
                                                'name' => 'CaptionFormat',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Format' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Pattern' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Encryption' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Mode' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'Key' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'KeyMd5' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                            'InitializationVector' => [
                                                                'type' =>
                                                                    'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Encryption' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mode' => [
                                            'type' => 'string',
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'KeyMd5' => [
                                            'type' => 'string',
                                        ],
                                        'InitializationVector' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'AppliedColorSpaceConversion' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Outputs' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'JobOutput',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailPattern' => [
                                        'type' => 'string',
                                    ],
                                    'ThumbnailEncryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Rotate' => [
                                        'type' => 'string',
                                    ],
                                    'PresetId' => [
                                        'type' => 'string',
                                    ],
                                    'SegmentDuration' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                    'Duration' => [
                                        'type' => 'numeric',
                                    ],
                                    'Width' => [
                                        'type' => 'numeric',
                                    ],
                                    'Height' => [
                                        'type' => 'numeric',
                                    ],
                                    'FrameRate' => [
                                        'type' => 'string',
                                    ],
                                    'FileSize' => [
                                        'type' => 'numeric',
                                    ],
                                    'DurationMillis' => [
                                        'type' => 'numeric',
                                    ],
                                    'Watermarks' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'JobWatermark',
                                            'type' => 'object',
                                            'properties' => [
                                                'PresetWatermarkId' => [
                                                    'type' => 'string',
                                                ],
                                                'InputKey' => [
                                                    'type' => 'string',
                                                ],
                                                'Encryption' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'KeyMd5' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitializationVector' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AlbumArt' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'Artwork' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'Artwork',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InputKey' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxWidth' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MaxHeight' => [
                                                            'type' => 'string',
                                                        ],
                                                        'SizingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'PaddingPolicy' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AlbumArtFormat' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Composition' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Clip',
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeSpan' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'StartTime' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Duration' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Captions' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'MergePolicy' => [
                                                'type' => 'string',
                                            ],
                                            'CaptionSources' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionSource',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Language' => [
                                                            'type' => 'string',
                                                        ],
                                                        'TimeOffset' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Label' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'CaptionFormats' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'CaptionFormat',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Format' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Pattern' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Encryption' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mode' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'Key' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'KeyMd5' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                                'InitializationVector' => [
                                                                    'type' =>
                                                                        'string',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Encryption' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Mode' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AppliedColorSpaceConversion' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'OutputKeyPrefix' => [
                            'type' => 'string',
                        ],
                        'Playlists' => [
                            'type' => 'array',
                            'items' => [
                                'name' => 'Playlist',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                    'OutputKeys' => [
                                        'type' => 'array',
                                        'items' => [
                                            'name' => 'Key',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'HlsContentProtection' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Method' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                            'LicenseAcquisitionUrl' => [
                                                'type' => 'string',
                                            ],
                                            'KeyStoragePolicy' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'PlayReadyDrm' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Format' => [
                                                'type' => 'string',
                                            ],
                                            'Key' => [
                                                'type' => 'string',
                                            ],
                                            'KeyMd5' => [
                                                'type' => 'string',
                                            ],
                                            'KeyId' => [
                                                'type' => 'string',
                                            ],
                                            'InitializationVector' => [
                                                'type' => 'string',
                                            ],
                                            'LicenseAcquisitionUrl' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'StatusDetail' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'UserMetadata' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                        'Timing' => [
                            'type' => 'object',
                            'properties' => [
                                'SubmitTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                                'StartTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                                'FinishTimeMillis' => [
                                    'type' => 'numeric',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReadPipelineResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'InputBucket' => [
                            'type' => 'string',
                        ],
                        'OutputBucket' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'AwsKmsKeyArn' => [
                            'type' => 'string',
                        ],
                        'Notifications' => [
                            'type' => 'object',
                            'properties' => [
                                'Progressing' => [
                                    'type' => 'string',
                                ],
                                'Completed' => [
                                    'type' => 'string',
                                ],
                                'Warning' => [
                                    'type' => 'string',
                                ],
                                'Error' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ContentConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ThumbnailConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
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
                'Warnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Warning',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
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
        'ReadPresetResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Preset' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Description' => [
                            'type' => 'string',
                        ],
                        'Container' => [
                            'type' => 'string',
                        ],
                        'Audio' => [
                            'type' => 'object',
                            'properties' => [
                                'Codec' => [
                                    'type' => 'string',
                                ],
                                'SampleRate' => [
                                    'type' => 'string',
                                ],
                                'BitRate' => [
                                    'type' => 'string',
                                ],
                                'Channels' => [
                                    'type' => 'string',
                                ],
                                'AudioPackingMode' => [
                                    'type' => 'string',
                                ],
                                'CodecOptions' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Profile' => [
                                            'type' => 'string',
                                        ],
                                        'BitDepth' => [
                                            'type' => 'string',
                                        ],
                                        'BitOrder' => [
                                            'type' => 'string',
                                        ],
                                        'Signed' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Video' => [
                            'type' => 'object',
                            'properties' => [
                                'Codec' => [
                                    'type' => 'string',
                                ],
                                'CodecOptions' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'KeyframesMaxDist' => [
                                    'type' => 'string',
                                ],
                                'FixedGOP' => [
                                    'type' => 'string',
                                ],
                                'BitRate' => [
                                    'type' => 'string',
                                ],
                                'FrameRate' => [
                                    'type' => 'string',
                                ],
                                'MaxFrameRate' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'MaxWidth' => [
                                    'type' => 'string',
                                ],
                                'MaxHeight' => [
                                    'type' => 'string',
                                ],
                                'DisplayAspectRatio' => [
                                    'type' => 'string',
                                ],
                                'SizingPolicy' => [
                                    'type' => 'string',
                                ],
                                'PaddingPolicy' => [
                                    'type' => 'string',
                                ],
                                'Watermarks' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'PresetWatermark',
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'MaxWidth' => [
                                                'type' => 'string',
                                            ],
                                            'MaxHeight' => [
                                                'type' => 'string',
                                            ],
                                            'SizingPolicy' => [
                                                'type' => 'string',
                                            ],
                                            'HorizontalAlign' => [
                                                'type' => 'string',
                                            ],
                                            'HorizontalOffset' => [
                                                'type' => 'string',
                                            ],
                                            'VerticalAlign' => [
                                                'type' => 'string',
                                            ],
                                            'VerticalOffset' => [
                                                'type' => 'string',
                                            ],
                                            'Opacity' => [
                                                'type' => 'string',
                                            ],
                                            'Target' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'Thumbnails' => [
                            'type' => 'object',
                            'properties' => [
                                'Format' => [
                                    'type' => 'string',
                                ],
                                'Interval' => [
                                    'type' => 'string',
                                ],
                                'Resolution' => [
                                    'type' => 'string',
                                ],
                                'AspectRatio' => [
                                    'type' => 'string',
                                ],
                                'MaxWidth' => [
                                    'type' => 'string',
                                ],
                                'MaxHeight' => [
                                    'type' => 'string',
                                ],
                                'SizingPolicy' => [
                                    'type' => 'string',
                                ],
                                'PaddingPolicy' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'Type' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'TestRoleResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Success' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Messages' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'String',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'UpdatePipelineResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'InputBucket' => [
                            'type' => 'string',
                        ],
                        'OutputBucket' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'AwsKmsKeyArn' => [
                            'type' => 'string',
                        ],
                        'Notifications' => [
                            'type' => 'object',
                            'properties' => [
                                'Progressing' => [
                                    'type' => 'string',
                                ],
                                'Completed' => [
                                    'type' => 'string',
                                ],
                                'Warning' => [
                                    'type' => 'string',
                                ],
                                'Error' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ContentConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ThumbnailConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
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
                'Warnings' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Warning',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
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
        'UpdatePipelineNotificationsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'InputBucket' => [
                            'type' => 'string',
                        ],
                        'OutputBucket' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'AwsKmsKeyArn' => [
                            'type' => 'string',
                        ],
                        'Notifications' => [
                            'type' => 'object',
                            'properties' => [
                                'Progressing' => [
                                    'type' => 'string',
                                ],
                                'Completed' => [
                                    'type' => 'string',
                                ],
                                'Warning' => [
                                    'type' => 'string',
                                ],
                                'Error' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ContentConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ThumbnailConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
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
        'UpdatePipelineStatusResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Pipeline' => [
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'Id' => [
                            'type' => 'string',
                        ],
                        'Arn' => [
                            'type' => 'string',
                        ],
                        'Name' => [
                            'type' => 'string',
                        ],
                        'Status' => [
                            'type' => 'string',
                        ],
                        'InputBucket' => [
                            'type' => 'string',
                        ],
                        'OutputBucket' => [
                            'type' => 'string',
                        ],
                        'Role' => [
                            'type' => 'string',
                        ],
                        'AwsKmsKeyArn' => [
                            'type' => 'string',
                        ],
                        'Notifications' => [
                            'type' => 'object',
                            'properties' => [
                                'Progressing' => [
                                    'type' => 'string',
                                ],
                                'Completed' => [
                                    'type' => 'string',
                                ],
                                'Warning' => [
                                    'type' => 'string',
                                ],
                                'Error' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'ContentConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'ThumbnailConfig' => [
                            'type' => 'object',
                            'properties' => [
                                'Bucket' => [
                                    'type' => 'string',
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                                'Permissions' => [
                                    'type' => 'array',
                                    'items' => [
                                        'name' => 'Permission',
                                        'type' => 'object',
                                        'properties' => [
                                            'GranteeType' => [
                                                'type' => 'string',
                                            ],
                                            'Grantee' => [
                                                'type' => 'string',
                                            ],
                                            'Access' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'name' => 'AccessControl',
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
    'iterators' => [
        'ListJobsByPipeline' => [
            'input_token' => 'PageToken',
            'output_token' => 'NextPageToken',
            'result_key' => 'Jobs',
        ],
        'ListJobsByStatus' => [
            'input_token' => 'PageToken',
            'output_token' => 'NextPageToken',
            'result_key' => 'Jobs',
        ],
        'ListPipelines' => [
            'input_token' => 'PageToken',
            'output_token' => 'NextPageToken',
            'result_key' => 'Pipelines',
        ],
        'ListPresets' => [
            'input_token' => 'PageToken',
            'output_token' => 'NextPageToken',
            'result_key' => 'Presets',
        ],
    ],
];
