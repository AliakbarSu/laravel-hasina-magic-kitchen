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
    'apiVersion' => '2012-10-25',
    'endpointPrefix' => 'directconnect',
    'serviceFullName' => 'AWS Direct Connect',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'OvertureService.',
    'signatureVersion' => 'v4',
    'namespace' => 'DirectConnect',
    'regions' => [
        'us-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.us-east-1.amazonaws.com',
        ],
        'us-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.us-west-1.amazonaws.com',
        ],
        'us-west-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.us-west-2.amazonaws.com',
        ],
        'eu-west-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.eu-west-1.amazonaws.com',
        ],
        'ap-northeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.ap-northeast-1.amazonaws.com',
        ],
        'ap-southeast-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.ap-southeast-1.amazonaws.com',
        ],
        'ap-southeast-2' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.ap-southeast-2.amazonaws.com',
        ],
        'sa-east-1' => [
            'http' => false,
            'https' => true,
            'hostname' => 'directconnect.sa-east-1.amazonaws.com',
        ],
    ],
    'operations' => [
        'AllocateConnectionOnInterconnect' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Connection',
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
                        'OvertureService.AllocateConnectionOnInterconnect',
                ],
                'bandwidth' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ownerAccount' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'interconnectId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'vlan' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'AllocatePrivateVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualInterface',
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
                        'OvertureService.AllocatePrivateVirtualInterface',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ownerAccount' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'newPrivateVirtualInterfaceAllocation' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'virtualInterfaceName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'vlan' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'asn' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'authKey' => [
                            'type' => 'string',
                        ],
                        'amazonAddress' => [
                            'type' => 'string',
                        ],
                        'customerAddress' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'AllocatePublicVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualInterface',
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
                        'OvertureService.AllocatePublicVirtualInterface',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'ownerAccount' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'newPublicVirtualInterfaceAllocation' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'virtualInterfaceName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'vlan' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'asn' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'authKey' => [
                            'type' => 'string',
                        ],
                        'amazonAddress' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'customerAddress' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'routeFilterPrefixes' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'RouteFilterPrefix',
                                'type' => 'object',
                                'properties' => [
                                    'cidr' => [
                                        'type' => 'string',
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
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'ConfirmConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ConfirmConnectionResponse',
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
                    'default' => 'OvertureService.ConfirmConnection',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'ConfirmPrivateVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ConfirmPrivateVirtualInterfaceResponse',
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
                        'OvertureService.ConfirmPrivateVirtualInterface',
                ],
                'virtualInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualGatewayId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'ConfirmPublicVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ConfirmPublicVirtualInterfaceResponse',
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
                        'OvertureService.ConfirmPublicVirtualInterface',
                ],
                'virtualInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'CreateConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Connection',
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
                    'default' => 'OvertureService.CreateConnection',
                ],
                'location' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'bandwidth' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'CreateInterconnect' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Interconnect',
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
                    'default' => 'OvertureService.CreateInterconnect',
                ],
                'interconnectName' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'bandwidth' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'location' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'CreatePrivateVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualInterface',
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
                        'OvertureService.CreatePrivateVirtualInterface',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'newPrivateVirtualInterface' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'virtualInterfaceName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'vlan' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'asn' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'authKey' => [
                            'type' => 'string',
                        ],
                        'amazonAddress' => [
                            'type' => 'string',
                        ],
                        'customerAddress' => [
                            'type' => 'string',
                        ],
                        'virtualGatewayId' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'CreatePublicVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualInterface',
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
                    'default' => 'OvertureService.CreatePublicVirtualInterface',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
                'newPublicVirtualInterface' => [
                    'required' => true,
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => [
                        'virtualInterfaceName' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'vlan' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'asn' => [
                            'required' => true,
                            'type' => 'numeric',
                        ],
                        'authKey' => [
                            'type' => 'string',
                        ],
                        'amazonAddress' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'customerAddress' => [
                            'required' => true,
                            'type' => 'string',
                        ],
                        'routeFilterPrefixes' => [
                            'required' => true,
                            'type' => 'array',
                            'items' => [
                                'name' => 'RouteFilterPrefix',
                                'type' => 'object',
                                'properties' => [
                                    'cidr' => [
                                        'type' => 'string',
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
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DeleteConnection' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Connection',
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
                    'default' => 'OvertureService.DeleteConnection',
                ],
                'connectionId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DeleteInterconnect' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteInterconnectResponse',
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
                    'default' => 'OvertureService.DeleteInterconnect',
                ],
                'interconnectId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DeleteVirtualInterface' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteVirtualInterfaceResponse',
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
                    'default' => 'OvertureService.DeleteVirtualInterface',
                ],
                'virtualInterfaceId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeConnections' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Connections',
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
                    'default' => 'OvertureService.DescribeConnections',
                ],
                'connectionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeConnectionsOnInterconnect' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Connections',
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
                        'OvertureService.DescribeConnectionsOnInterconnect',
                ],
                'interconnectId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeInterconnects' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Interconnects',
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
                    'default' => 'OvertureService.DescribeInterconnects',
                ],
                'interconnectId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeLocations' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'Locations',
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
                    'default' => 'OvertureService.DescribeLocations',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeVirtualGateways' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualGateways',
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
                    'default' => 'OvertureService.DescribeVirtualGateways',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
        'DescribeVirtualInterfaces' => [
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'VirtualInterfaces',
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
                    'default' => 'OvertureService.DescribeVirtualInterfaces',
                ],
                'connectionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualInterfaceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
            'errorResponses' => [
                [
                    'reason' =>
                        'A server-side error occurred during the API call. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectServerException',
                ],
                [
                    'reason' =>
                        'The API was called with invalid parameters. The error message will contain additional details about the cause.',
                    'class' => 'DirectConnectClientException',
                ],
            ],
        ],
    ],
    'models' => [
        'Connection' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ownerAccount' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'region' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'location' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'bandwidth' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'vlan' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'partnerName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'VirtualInterface' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'ownerAccount' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualInterfaceId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'location' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'connectionId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualInterfaceType' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualInterfaceName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'vlan' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'asn' => [
                    'type' => 'numeric',
                    'location' => 'json',
                ],
                'authKey' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'amazonAddress' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'customerAddress' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualInterfaceState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'customerRouterConfig' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'virtualGatewayId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'routeFilterPrefixes' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'RouteFilterPrefix',
                        'type' => 'object',
                        'properties' => [
                            'cidr' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfirmConnectionResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'connectionState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ConfirmPrivateVirtualInterfaceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'virtualInterfaceState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'ConfirmPublicVirtualInterfaceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'virtualInterfaceState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'Interconnect' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'interconnectId' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'interconnectName' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'interconnectState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'region' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'location' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
                'bandwidth' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteInterconnectResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'interconnectState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'DeleteVirtualInterfaceResponse' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'virtualInterfaceState' => [
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'Connections' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'connections' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Connection',
                        'type' => 'object',
                        'properties' => [
                            'ownerAccount' => [
                                'type' => 'string',
                            ],
                            'connectionId' => [
                                'type' => 'string',
                            ],
                            'connectionName' => [
                                'type' => 'string',
                            ],
                            'connectionState' => [
                                'type' => 'string',
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'location' => [
                                'type' => 'string',
                            ],
                            'bandwidth' => [
                                'type' => 'string',
                            ],
                            'vlan' => [
                                'type' => 'numeric',
                            ],
                            'partnerName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Interconnects' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'interconnects' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Interconnect',
                        'type' => 'object',
                        'properties' => [
                            'interconnectId' => [
                                'type' => 'string',
                            ],
                            'interconnectName' => [
                                'type' => 'string',
                            ],
                            'interconnectState' => [
                                'type' => 'string',
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'location' => [
                                'type' => 'string',
                            ],
                            'bandwidth' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Locations' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'locations' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'Location',
                        'type' => 'object',
                        'properties' => [
                            'locationCode' => [
                                'type' => 'string',
                            ],
                            'locationName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VirtualGateways' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'virtualGateways' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VirtualGateway',
                        'type' => 'object',
                        'properties' => [
                            'virtualGatewayId' => [
                                'type' => 'string',
                            ],
                            'virtualGatewayState' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VirtualInterfaces' => [
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => [
                'virtualInterfaces' => [
                    'type' => 'array',
                    'location' => 'json',
                    'items' => [
                        'name' => 'VirtualInterface',
                        'type' => 'object',
                        'properties' => [
                            'ownerAccount' => [
                                'type' => 'string',
                            ],
                            'virtualInterfaceId' => [
                                'type' => 'string',
                            ],
                            'location' => [
                                'type' => 'string',
                            ],
                            'connectionId' => [
                                'type' => 'string',
                            ],
                            'virtualInterfaceType' => [
                                'type' => 'string',
                            ],
                            'virtualInterfaceName' => [
                                'type' => 'string',
                            ],
                            'vlan' => [
                                'type' => 'numeric',
                            ],
                            'asn' => [
                                'type' => 'numeric',
                            ],
                            'authKey' => [
                                'type' => 'string',
                            ],
                            'amazonAddress' => [
                                'type' => 'string',
                            ],
                            'customerAddress' => [
                                'type' => 'string',
                            ],
                            'virtualInterfaceState' => [
                                'type' => 'string',
                            ],
                            'customerRouterConfig' => [
                                'type' => 'string',
                            ],
                            'virtualGatewayId' => [
                                'type' => 'string',
                            ],
                            'routeFilterPrefixes' => [
                                'type' => 'array',
                                'items' => [
                                    'name' => 'RouteFilterPrefix',
                                    'type' => 'object',
                                    'properties' => [
                                        'cidr' => [
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
    'iterators' => [
        'DescribeConnections' => [
            'result_key' => 'connections',
        ],
        'DescribeConnectionsOnInterconnect' => [
            'result_key' => 'connections',
        ],
        'DescribeInterconnects' => [
            'result_key' => 'interconnects',
        ],
        'DescribeLocations' => [
            'result_key' => 'locations',
        ],
        'DescribeVirtualGateways' => [
            'result_key' => 'virtualGateways',
        ],
        'DescribeVirtualInterfaces' => [
            'result_key' => 'virtualInterfaces',
        ],
    ],
];
