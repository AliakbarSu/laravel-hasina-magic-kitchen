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
    'apiVersion' => '2013-06-30',
    'endpointPrefix' => 'storagegateway',
    'serviceFullName' => 'AWS Storage Gateway',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'StorageGateway_20130630.',
    'signatureVersion' => 'v4',
    'namespace' => 'StorageGateway',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.sa-east-1.amazonaws.com',
        ],
        'cn-north-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'storagegateway.cn-north-1.amazonaws.com.cn',
        ],
    ],
    'operations' => [
        'ActivateGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ActivateGatewayOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ActivateGateway',
                ],
                'ActivationKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GatewayName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
                'GatewayTimezone' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
                'GatewayRegion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'GatewayType' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
                'TapeDriveType' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
                'MediumChangerType' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddCache' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddCacheOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.AddCache',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'DiskIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddTagsToResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddTagsToResourceOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.AddTagsToResource',
                ],
                'ResourceARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
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
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddUploadBuffer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddUploadBufferOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.AddUploadBuffer',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'DiskIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'AddWorkingStorage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'AddWorkingStorageOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.AddWorkingStorage',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'DiskIds' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                        'minLength' => 1,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CancelArchival' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CancelArchivalOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.CancelArchival',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CancelRetrieval' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CancelRetrievalOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.CancelRetrieval',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateCachediSCSIVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateCachediSCSIVolumeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.CreateCachediSCSIVolume',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'VolumeSizeInBytes' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'TargetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ClientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 5,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateSnapshot' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateSnapshotOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.CreateSnapshot',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'SnapshotDescription' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateSnapshotFromVolumeRecoveryPoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateSnapshotFromVolumeRecoveryPointOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.CreateSnapshotFromVolumeRecoveryPoint',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'SnapshotDescription' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateStorediSCSIVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateStorediSCSIVolumeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.CreateStorediSCSIVolume',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'DiskId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'SnapshotId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PreserveExistingData' => [
                    'required' => true,
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ],
                'TargetName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'NetworkInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'CreateTapes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateTapesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.CreateTapes',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TapeSizeInBytes' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'ClientToken' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 5,
                ],
                'NumTapesToCreate' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 10,
                ],
                'TapeBarcodePrefix' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteBandwidthRateLimit' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteBandwidthRateLimitOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DeleteBandwidthRateLimit',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'BandwidthType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteChapCredentials' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteChapCredentialsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DeleteChapCredentials',
                ],
                'TargetARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'InitiatorName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteGatewayOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DeleteGateway',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteSnapshotSchedule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteSnapshotScheduleOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DeleteSnapshotSchedule',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteTape' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteTapeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DeleteTape',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteTapeArchive' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteTapeArchiveOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DeleteTapeArchive',
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DeleteVolume' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteVolumeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DeleteVolume',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeBandwidthRateLimit' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeBandwidthRateLimitOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeBandwidthRateLimit',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeCache' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeCacheOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DescribeCache',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeCachediSCSIVolumes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeCachediSCSIVolumesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeCachediSCSIVolumes',
                ],
                'VolumeARNs' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VolumeARN',
                        'type' => 'string',
                        'minLength' => 50,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeChapCredentials' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeChapCredentialsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeChapCredentials',
                ],
                'TargetARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeGatewayInformation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeGatewayInformationOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeGatewayInformation',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeMaintenanceStartTime' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeMaintenanceStartTimeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeMaintenanceStartTime',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeSnapshotSchedule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeSnapshotScheduleOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeSnapshotSchedule',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeStorediSCSIVolumes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeStorediSCSIVolumesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeStorediSCSIVolumes',
                ],
                'VolumeARNs' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VolumeARN',
                        'type' => 'string',
                        'minLength' => 50,
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTapeArchives' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTapeArchivesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DescribeTapeArchives',
                ],
                'TapeARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TapeARN',
                        'type' => 'string',
                        'minLength' => 50,
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTapeRecoveryPoints' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTapeRecoveryPointsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeTapeRecoveryPoints',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeTapes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTapesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DescribeTapes',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TapeARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'TapeARN',
                        'type' => 'string',
                        'minLength' => 50,
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeUploadBuffer' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeUploadBufferOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DescribeUploadBuffer',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeVTLDevices' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeVTLDevicesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DescribeVTLDevices',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'VTLDeviceARNs' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VTLDeviceARN',
                        'type' => 'string',
                        'minLength' => 50,
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DescribeWorkingStorage' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeWorkingStorageOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.DescribeWorkingStorage',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'DisableGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DisableGatewayOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.DisableGateway',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListGateways' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListGatewaysOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ListGateways',
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListLocalDisks' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListLocalDisksOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ListLocalDisks',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListTagsForResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTagsForResourceOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ListTagsForResource',
                ],
                'ResourceARN' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListVolumeInitiators' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListVolumeInitiatorsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ListVolumeInitiators',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListVolumeRecoveryPoints' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListVolumeRecoveryPointsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.ListVolumeRecoveryPoints',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ListVolumes' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListVolumesOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ListVolumes',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'Marker' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'Limit' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'RemoveTagsFromResource' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RemoveTagsFromResourceOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.RemoveTagsFromResource',
                ],
                'ResourceARN' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'TagKeys' => [
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
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ResetCache' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ResetCacheOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ResetCache',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'RetrieveTapeArchive' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RetrieveTapeArchiveOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.RetrieveTapeArchive',
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'RetrieveTapeRecoveryPoint' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RetrieveTapeRecoveryPointOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.RetrieveTapeRecoveryPoint',
                ],
                'TapeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'ShutdownGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ShutdownGatewayOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.ShutdownGateway',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'StartGateway' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StartGatewayOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.StartGateway',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateBandwidthRateLimit' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateBandwidthRateLimitOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateBandwidthRateLimit',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'AverageUploadRateLimitInBitsPerSec' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 51200,
                ],
                'AverageDownloadRateLimitInBitsPerSec' => [
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 102400,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateChapCredentials' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateChapCredentialsOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateChapCredentials',
                ],
                'TargetARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'SecretToAuthenticateInitiator' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'InitiatorName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
                'SecretToAuthenticateTarget' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateGatewayInformation' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateGatewayInformationOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateGatewayInformation',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'GatewayName' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
                'GatewayTimezone' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 3,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateGatewaySoftwareNow' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateGatewaySoftwareNowOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateGatewaySoftwareNow',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateMaintenanceStartTime' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateMaintenanceStartTimeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateMaintenanceStartTime',
                ],
                'GatewayARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'HourOfDay' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 23,
                ],
                'MinuteOfHour' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 59,
                ],
                'DayOfWeek' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 6,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateSnapshotSchedule' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateSnapshotScheduleOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' =>
                        'StorageGateway_20130630.UpdateSnapshotSchedule',
                ],
                'VolumeARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'StartAt' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'maximum' => 23,
                ],
                'RecurrenceInHours' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                    'minimum' => 1,
                    'maximum' => 24,
                ],
                'Description' => [
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 1,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
        'UpdateVTLDeviceType' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateVTLDeviceTypeOutput',
            'responseType' => 'model',
            'parameters' => [
                'Content-Type' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ],
                'command.expects' => [
                    'static' => true,
                    'default' => 'application/json',
                ],
                'X-Amz-Target' => [
                    'static' => true,
                    'location' => 'header',
                    'default' => 'StorageGateway_20130630.UpdateVTLDeviceType',
                ],
                'VTLDeviceARN' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 50,
                ],
                'DeviceType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 2,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.',
                    'class' => 'InvalidGatewayRequestException',
                ],
                [
                    'reason' =>
                        'An internal server error has occurred during the request. See the error and message fields for more information.',
                    'class' => 'InternalServerErrorException',
                ],
            ],
        ],
    ],
    'models' => [
        'ActivateGatewayOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'AddCacheOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'AddTagsToResourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'AddUploadBufferOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'AddWorkingStorageOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CancelArchivalOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CancelRetrievalOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CreateCachediSCSIVolumeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
                'TargetARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CreateSnapshotOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
                'SnapshotId' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CreateSnapshotFromVolumeRecoveryPointOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'SnapshotId' => [
                    'type' => 'string',
                ],
                'VolumeARN' => [
                    'type' => 'string',
                ],
                'VolumeRecoveryPointTime' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CreateStorediSCSIVolumeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
                'VolumeSizeInBytes' => [
                    'type' => 'numeric',
                ],
                'TargetARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'CreateTapesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARNs' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'TapeARN',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DeleteBandwidthRateLimitOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteChapCredentialsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TargetARN' => [
                    'type' => 'string',
                ],
                'InitiatorName' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteGatewayOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteSnapshotScheduleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteTapeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteTapeArchiveOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DeleteVolumeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeBandwidthRateLimitOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'AverageUploadRateLimitInBitsPerSec' => [
                    'type' => 'numeric',
                ],
                'AverageDownloadRateLimitInBitsPerSec' => [
                    'type' => 'numeric',
                ],
            ],
        ],
        'DescribeCacheOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'DiskIds' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                    ],
                ],
                'CacheAllocatedInBytes' => [
                    'type' => 'numeric',
                ],
                'CacheUsedPercentage' => [
                    'type' => 'numeric',
                ],
                'CacheDirtyPercentage' => [
                    'type' => 'numeric',
                ],
                'CacheHitPercentage' => [
                    'type' => 'numeric',
                ],
                'CacheMissPercentage' => [
                    'type' => 'numeric',
                ],
            ],
        ],
        'DescribeCachediSCSIVolumesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'CachediSCSIVolumes' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'CachediSCSIVolume',
                        'type' => 'object',
                        'properties' => [
                            'VolumeARN' => [
                                'type' => 'string',
                            ],
                            'VolumeId' => [
                                'type' => 'string',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'VolumeStatus' => [
                                'type' => 'string',
                            ],
                            'VolumeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'VolumeProgress' => [
                                'type' => 'numeric',
                            ],
                            'SourceSnapshotId' => [
                                'type' => 'string',
                            ],
                            'VolumeiSCSIAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetARN' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfaceId' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfacePort' => [
                                        'type' => 'numeric',
                                    ],
                                    'LunNumber' => [
                                        'type' => 'numeric',
                                    ],
                                    'ChapEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeChapCredentialsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ChapCredentials' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'ChapInfo',
                        'type' => 'object',
                        'properties' => [
                            'TargetARN' => [
                                'type' => 'string',
                            ],
                            'SecretToAuthenticateInitiator' => [
                                'type' => 'string',
                            ],
                            'InitiatorName' => [
                                'type' => 'string',
                            ],
                            'SecretToAuthenticateTarget' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeGatewayInformationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'GatewayId' => [
                    'type' => 'string',
                ],
                'GatewayName' => [
                    'type' => 'string',
                ],
                'GatewayTimezone' => [
                    'type' => 'string',
                ],
                'GatewayState' => [
                    'type' => 'string',
                ],
                'GatewayNetworkInterfaces' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'NetworkInterface',
                        'type' => 'object',
                        'properties' => [
                            'Ipv4Address' => [
                                'type' => 'string',
                            ],
                            'MacAddress' => [
                                'type' => 'string',
                            ],
                            'Ipv6Address' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'GatewayType' => [
                    'type' => 'string',
                ],
                'NextUpdateAvailabilityDate' => [
                    'type' => 'string',
                ],
                'LastSoftwareUpdate' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeMaintenanceStartTimeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'HourOfDay' => [
                    'type' => 'numeric',
                ],
                'MinuteOfHour' => [
                    'type' => 'numeric',
                ],
                'DayOfWeek' => [
                    'type' => 'numeric',
                ],
                'Timezone' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeSnapshotScheduleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
                'StartAt' => [
                    'type' => 'numeric',
                ],
                'RecurrenceInHours' => [
                    'type' => 'numeric',
                ],
                'Description' => [
                    'type' => 'string',
                ],
                'Timezone' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeStorediSCSIVolumesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'StorediSCSIVolumes' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'StorediSCSIVolume',
                        'type' => 'object',
                        'properties' => [
                            'VolumeARN' => [
                                'type' => 'string',
                            ],
                            'VolumeId' => [
                                'type' => 'string',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                            'VolumeStatus' => [
                                'type' => 'string',
                            ],
                            'VolumeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'VolumeProgress' => [
                                'type' => 'numeric',
                            ],
                            'VolumeDiskId' => [
                                'type' => 'string',
                            ],
                            'SourceSnapshotId' => [
                                'type' => 'string',
                            ],
                            'PreservedExistingData' => [
                                'type' => 'boolean',
                            ],
                            'VolumeiSCSIAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetARN' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfaceId' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfacePort' => [
                                        'type' => 'numeric',
                                    ],
                                    'LunNumber' => [
                                        'type' => 'numeric',
                                    ],
                                    'ChapEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTapeArchivesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeArchives' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'TapeArchive',
                        'type' => 'object',
                        'properties' => [
                            'TapeARN' => [
                                'type' => 'string',
                            ],
                            'TapeBarcode' => [
                                'type' => 'string',
                            ],
                            'TapeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'CompletionTime' => [
                                'type' => 'string',
                            ],
                            'RetrievedTo' => [
                                'type' => 'string',
                            ],
                            'TapeStatus' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeTapeRecoveryPointsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'TapeRecoveryPointInfos' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'TapeRecoveryPointInfo',
                        'type' => 'object',
                        'properties' => [
                            'TapeARN' => [
                                'type' => 'string',
                            ],
                            'TapeRecoveryPointTime' => [
                                'type' => 'string',
                            ],
                            'TapeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'TapeStatus' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeTapesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Tapes' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'Tape',
                        'type' => 'object',
                        'properties' => [
                            'TapeARN' => [
                                'type' => 'string',
                            ],
                            'TapeBarcode' => [
                                'type' => 'string',
                            ],
                            'TapeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'TapeStatus' => [
                                'type' => 'string',
                            ],
                            'VTLDevice' => [
                                'type' => 'string',
                            ],
                            'Progress' => [
                                'type' => 'numeric',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeUploadBufferOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'DiskIds' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                    ],
                ],
                'UploadBufferUsedInBytes' => [
                    'type' => 'numeric',
                ],
                'UploadBufferAllocatedInBytes' => [
                    'type' => 'numeric',
                ],
            ],
        ],
        'DescribeVTLDevicesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'VTLDevices' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'VTLDevice',
                        'type' => 'object',
                        'properties' => [
                            'VTLDeviceARN' => [
                                'type' => 'string',
                            ],
                            'VTLDeviceType' => [
                                'type' => 'string',
                            ],
                            'VTLDeviceVendor' => [
                                'type' => 'string',
                            ],
                            'VTLDeviceProductIdentifier' => [
                                'type' => 'string',
                            ],
                            'DeviceiSCSIAttributes' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetARN' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfaceId' => [
                                        'type' => 'string',
                                    ],
                                    'NetworkInterfacePort' => [
                                        'type' => 'numeric',
                                    ],
                                    'ChapEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                ],
            ],
        ],
        'DescribeWorkingStorageOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'DiskIds' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'DiskId',
                        'type' => 'string',
                    ],
                ],
                'WorkingStorageUsedInBytes' => [
                    'type' => 'numeric',
                ],
                'WorkingStorageAllocatedInBytes' => [
                    'type' => 'numeric',
                ],
            ],
        ],
        'DisableGatewayOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'ListGatewaysOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Gateways' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'GatewayInfo',
                        'type' => 'object',
                        'properties' => [
                            'GatewayARN' => [
                                'type' => 'string',
                            ],
                            'GatewayType' => [
                                'type' => 'string',
                            ],
                            'GatewayOperationalState' => [
                                'type' => 'string',
                            ],
                            'GatewayName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'Marker' => [
                    'type' => 'string',
                ],
            ],
        ],
        'ListLocalDisksOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'Disks' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'Disk',
                        'type' => 'object',
                        'properties' => [
                            'DiskId' => [
                                'type' => 'string',
                            ],
                            'DiskPath' => [
                                'type' => 'string',
                            ],
                            'DiskNode' => [
                                'type' => 'string',
                            ],
                            'DiskStatus' => [
                                'type' => 'string',
                            ],
                            'DiskSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'DiskAllocationType' => [
                                'type' => 'string',
                            ],
                            'DiskAllocationResource' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTagsForResourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceARN' => [
                    'type' => 'string',
                ],
                'Marker' => [
                    'type' => 'string',
                ],
                'Tags' => [
                    'type' => 'array',
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
        ],
        'ListVolumeInitiatorsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Initiators' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'Initiator',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'ListVolumeRecoveryPointsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'VolumeRecoveryPointInfos' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'VolumeRecoveryPointInfo',
                        'type' => 'object',
                        'properties' => [
                            'VolumeARN' => [
                                'type' => 'string',
                            ],
                            'VolumeSizeInBytes' => [
                                'type' => 'numeric',
                            ],
                            'VolumeUsageInBytes' => [
                                'type' => 'numeric',
                            ],
                            'VolumeRecoveryPointTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListVolumesOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'Marker' => [
                    'type' => 'string',
                ],
                'VolumeInfos' => [
                    'type' => 'array',
                    'items' => [
                        'name' => 'VolumeInfo',
                        'type' => 'object',
                        'properties' => [
                            'VolumeARN' => [
                                'type' => 'string',
                            ],
                            'VolumeType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveTagsFromResourceOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ResourceARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'ResetCacheOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'RetrieveTapeArchiveOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'RetrieveTapeRecoveryPointOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TapeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'ShutdownGatewayOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'StartGatewayOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateBandwidthRateLimitOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateChapCredentialsOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'TargetARN' => [
                    'type' => 'string',
                ],
                'InitiatorName' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateGatewayInformationOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
                'GatewayName' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateGatewaySoftwareNowOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateMaintenanceStartTimeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'GatewayARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateSnapshotScheduleOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VolumeARN' => [
                    'type' => 'string',
                ],
            ],
        ],
        'UpdateVTLDeviceTypeOutput' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'VTLDeviceARN' => [
                    'type' => 'string',
                ],
            ],
        ],
    ],
    'iterators' => [
        'DescribeCachediSCSIVolumes' => [
            'result_key' => 'CachediSCSIVolumes',
        ],
        'DescribeStorediSCSIVolumes' => [
            'result_key' => 'StorediSCSIVolumes',
        ],
        'DescribeTapeArchives' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'TapeArchives',
        ],
        'DescribeTapeRecoveryPoints' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'TapeRecoveryPointInfos',
        ],
        'DescribeTapes' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'Tapes',
        ],
        'DescribeVTLDevices' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'VTLDevices',
        ],
        'ListGateways' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'Gateways',
        ],
        'ListLocalDisks' => [
            'result_key' => 'Disks',
        ],
        'ListVolumeRecoveryPoints' => [
            'result_key' => 'VolumeRecoveryPointInfos',
        ],
        'ListVolumes' => [
            'input_token' => 'Marker',
            'limit_key' => 'Limit',
            'output_token' => 'Marker',
            'result_key' => 'VolumeInfos',
        ],
    ],
];
