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
    'apiVersion' => '2014-05-30',
    'endpointPrefix' => 'cloudhsm',
    'serviceFullName' => 'Amazon CloudHSM',
    'serviceAbbreviation' => 'CloudHSM',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'CloudHsmFrontendService.',
    'signatureVersion' => 'v4',
    'namespace' => 'CloudHsm',
    'operations' => [
        'CreateHapg' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateHapgResponse',
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
                    'default' => 'CloudHsmFrontendService.CreateHapg',
                ],
                'Label' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'CreateHsm' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateHsmResponse',
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
                    'default' => 'CloudHsmFrontendService.CreateHsm',
                ],
                'SubnetId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EniIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IamRoleArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ExternalId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubscriptionType' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ClientToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SyslogIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'CreateLunaClient' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateLunaClientResponse',
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
                    'default' => 'CloudHsmFrontendService.CreateLunaClient',
                ],
                'Label' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Certificate' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 600,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DeleteHapg' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteHapgResponse',
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
                    'default' => 'CloudHsmFrontendService.DeleteHapg',
                ],
                'HapgArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DeleteHsm' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteHsmResponse',
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
                    'default' => 'CloudHsmFrontendService.DeleteHsm',
                ],
                'HsmArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DeleteLunaClient' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteLunaClientResponse',
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
                    'default' => 'CloudHsmFrontendService.DeleteLunaClient',
                ],
                'ClientArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeHapg' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeHapgResponse',
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
                    'default' => 'CloudHsmFrontendService.DescribeHapg',
                ],
                'HapgArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeHsm' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeHsmResponse',
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
                    'default' => 'CloudHsmFrontendService.DescribeHsm',
                ],
                'HsmArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HsmSerialNumber' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'DescribeLunaClient' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeLunaClientResponse',
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
                    'default' => 'CloudHsmFrontendService.DescribeLunaClient',
                ],
                'ClientArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CertificateFingerprint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'GetConfig' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'GetConfigResponse',
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
                    'default' => 'CloudHsmFrontendService.GetConfig',
                ],
                'ClientArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ClientVersion' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HapgList' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HapgArn',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListAvailableZones' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListAvailableZonesResponse',
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
                    'default' => 'CloudHsmFrontendService.ListAvailableZones',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListHapgs' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListHapgsResponse',
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
                    'default' => 'CloudHsmFrontendService.ListHapgs',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListHsms' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListHsmsResponse',
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
                    'default' => 'CloudHsmFrontendService.ListHsms',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ListLunaClients' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListLunaClientsResponse',
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
                    'default' => 'CloudHsmFrontendService.ListLunaClients',
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ModifyHapg' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ModifyHapgResponse',
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
                    'default' => 'CloudHsmFrontendService.ModifyHapg',
                ],
                'HapgArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Label' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PartitionSerialList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PartitionSerial',
                        'type' => 'string',
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ModifyHsm' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ModifyHsmResponse',
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
                    'default' => 'CloudHsmFrontendService.ModifyHsm',
                ],
                'HsmArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EniIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IamRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ExternalId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SyslogIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
                [
                    'reason' => 'Indicates that an internal error occurred.',
                    'class' => 'CloudHsmInternalException',
                ],
                [
                    'reason' =>
                        'Indicates that one or more of the request parameters are not valid.',
                    'class' => 'InvalidRequestException',
                ],
            ],
        ],
        'ModifyLunaClient' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ModifyLunaClientResponse',
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
                    'default' => 'CloudHsmFrontendService.ModifyLunaClient',
                ],
                'ClientArn' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Certificate' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                    'minLength' => 600,
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'Indicates that an exception occurred in the AWS CloudHSM service.',
                    'class' => 'CloudHsmServiceException',
                ],
            ],
        ],
    ],
    'models' => [
        'CreateHapgResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HapgArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateHsmResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'CreateLunaClientResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClientArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteHapgResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteHsmResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteLunaClientResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeHapgResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HapgArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HapgSerial' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HsmsLastActionFailed' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HsmArn',
                        'type' => 'string',
                    ],
                ],
                'HsmsPendingDeletion' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HsmArn',
                        'type' => 'string',
                    ],
                ],
                'HsmsPendingRegistration' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HsmArn',
                        'type' => 'string',
                    ],
                ],
                'Label' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastModifiedTimestamp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'PartitionSerialList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PartitionSerial',
                        'type' => 'string',
                    ],
                ],
                'State' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DescribeHsmResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Status' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'StatusDetails' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'AvailabilityZone' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EniId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'EniIp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubscriptionType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubscriptionStartDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubscriptionEndDate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VpcId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SubnetId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'IamRoleArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SerialNumber' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'VendorName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'HsmType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SoftwareVersion' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshPublicKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'SshKeyLastUpdated' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ServerCertUri' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ServerCertLastUpdated' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Partitions' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'PartitionArn',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeLunaClientResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClientArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Certificate' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'CertificateFingerprint' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'LastModifiedTimestamp' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'Label' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetConfigResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ConfigType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigFile' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ConfigCred' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListAvailableZonesResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'AZList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'AZ',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'ListHapgsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HapgList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HapgArn',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListHsmsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'HsmArn',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ListLunaClientsResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClientList' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'ClientArn',
                        'type' => 'string',
                    ],
                ],
                'NextToken' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ModifyHapgResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HapgArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ModifyHsmResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'HsmArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ModifyLunaClientResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ClientArn' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
];
